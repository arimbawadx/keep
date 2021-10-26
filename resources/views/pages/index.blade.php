@extends('layouts/main')

@section('title','Keep')

@section('content')
<main>
  <div class="container pt-3 pb-3">
    <div class="row mt-5 mb-5">
      <div class="col-md-12 col-12">
        <div class="card-columns">
          <div class="card text-white bg-dark mb-3">
            <div class="card-header">Catatan Baru</div>
            <div class="card-body">
              <form action="/keep/store" method="post">
                @csrf
                <div class="form-group">
                  <input type="text" name="title" class="form-control" placeholder="Judul">
                </div>
                <div class="form-group">
                  <textarea rows="10" style="height:100%;" required name="description" class="form-control" placeholder="Catatan"></textarea>
                </div>
                <div>
                  <button type="submit" class="btn btn-warning btn-block">Tambah</button>
                </div>
              </form>
            </div>
          </div>
          @foreach($keep as $k)
          <div class="card text-white cursor-pointer bg-{{$k->card_color}} mb-3 h-50" data-toggle="modal" data-target="#showDetailModal{{$k->id}}">
            <div class="card-body">
              <h5 class="card-title text-truncate">{{$k->title}}</h5>
              <p class="card-text text-truncate">{{$k->description}}</p>
              <p class="card-text"><small>Ditambahkan {{date_format($k->created_at,"d/M/Y H:i:s")}} @if($k->created_at!=$k->updated_at)<br> Diedit {{date_format($k->updated_at,"d/M/Y H:i:s")}}@endif</small></p>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="showDetailModal{{$k->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Detail Catatan <br> <small>Ditambahkan {{date_format($k->created_at,"d/M/Y H:i:s")}} @if($k->created_at!=$k->updated_at) <br> Diedit {{date_format($k->updated_at,"d/M/Y H:i:s")}}@endif</small></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="/keep/{{$k->id}}" method="post">
                    @csrf
                    <div class="form-group">
                      <input type="text" name="title" class="form-control" value="{{$k->title}}">
                    </div>
                    <div class="form-group">
                      <textarea rows="10" style="height:100%;" required name="description" class="form-control">{{$k->description}}</textarea>
                    </div>
                    <div class="row justify-content-center">
                      <div class="col-2">
                        <a href="/keep/del/{{$k->id}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                      </div>
                      <div class="col-10">
                        <button type="submit" class="btn btn-{{$k->card_color}} btn-block">Perbaharui</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div> 
</main>
@endsection

