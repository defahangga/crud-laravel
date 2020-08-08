@extends('layouts.master')

@section('content')
    <div class="mt-20">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ubah Pertanyaan {{$post->id}}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/pertanyaan/{{$post->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" name="judul" id="judul" value="{{old('judul', $post->judul)}}">
                    <!-- @error('judul')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror -->
                  </div>
                  <div class="form-group">
                    <label for="isi">Pertanyaan anda</label>
                    <input type="text" class="form-control" name="isi" id="isi" value="{{old('isi', $post->isi)}}">
                    <!-- @error('isi')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror -->
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            </div>
    </div>

    
@endsection