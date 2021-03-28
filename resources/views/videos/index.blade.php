@extends('layouts.video')

@section('content')
    @foreach($videos as $video)
        <p>{{$video->url}}</p>
    @endforeach
@endsection

<a href="/videos/create">New</a>
