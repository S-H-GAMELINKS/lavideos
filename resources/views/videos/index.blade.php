@extends('layouts.video')

@section('content')
    @foreach($videos as $video)
        <a href="/videos/{{$video->id}}">{{$video->id}}</a>
    @endforeach
@endsection

<a href="/videos/create">New</a>
