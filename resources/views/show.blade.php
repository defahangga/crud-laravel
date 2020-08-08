@extends('layouts.master')

@section('content')
    <div class="ml-3 mt-3">
        <h4>{{$post->judul}}</h4>
        <p>{{$post->isi}}</p>
    </div>
@endsection