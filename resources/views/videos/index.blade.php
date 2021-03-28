@extends('layouts.video')

@section('content')
    @foreach($videos as $video)
        <p>{{$video->url}}</p>
    @endforeach
@endsection