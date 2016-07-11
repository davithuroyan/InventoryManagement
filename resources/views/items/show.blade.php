@extends('main',["lastItems"=>$lastItems])

@section('title', '| View Item')

@section('content')

<h1>{{ $item->title }}</h1>

<p class='lead'> Serial Number {{$item->serial_number}}</p>
<p class='lead'> Release Date {{$item->release_date}}</p>
<p class='lead'> Price {{$item->price}}</p>

@endsection