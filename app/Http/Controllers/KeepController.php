<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keep;
use App\Models\User;
Use Alert;


class KeepController extends Controller
{
    public function NewID(Request $request)
    {
        $userIDCheck=User::where('username', $request->username)->first();
        if (!$userIDCheck) {
            $user = new User;
            $user->username=$request->username;
            $user->save();
            Alert::success('Username Berhasil Dibuat', 'Silahkan Masuk');
        }else{
            Alert::error('Username Sudah Ada', 'Silahkan buat username yang belum ada');
        }
        return redirect('/');
        
    }
    public function login(Request $request)
    {
        $Users=User::where('username', $request->username)->first();

        if ($Users) {
            session()->put('dataLoginUsers', $Users);
            return redirect('/keeps');
        }else{
         Alert::error('username tidak ada');
         return redirect('/');
     }
 }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id=session()->get('dataLoginUsers')['id'];
        $keep = Keep::where('user_id', $user_id)->get();
        return view('pages.index', compact('keep'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id=session()->get('dataLoginUsers')['id'];
        $keep = new Keep;
        $a=array("primary","secondary","success","danger","warning","info","light", "dark");
        $random_keys=array_rand($a,2);
        $Cardcolor = $a[$random_keys[0]];
        $keep->user_id = $user_id;
        $keep->title = $request->title;
        $keep->description = $request->description;
        $keep->card_color = $Cardcolor;
        $keep->save();
        return redirect('/keeps');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $keep = Keep::where('id', $id)->first();
        $keep->title = $request->title;
        $keep->description = $request->description;
        $keep->save();
        return redirect('/keeps');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $keep = Keep::where('id', $id)->first();
        $keep->delete();
        return redirect('/keeps');
    }

    public function logout()
    {
      session()->forget('dataLoginUsers');
      return redirect('/');
  }
}
