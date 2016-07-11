@extends('dashboard')
@section('content')
<div class="row">

    <h1>Dashboard</h1>
    <div class="dashboard clearfix">
        <div class="col-xs-4">
            <p>Total Number</p>
            <p>{{ $count }}</p>
        </div>
        <div class="col-xs-4">
            <p>Items Count Per Type</p>
            @foreach($countByType as $type)
            <p>{{$type->name}} : {{ number_format(($type->count/$count)*100,2,'.','') }}%</p>
            @endforeach
        </div>
        <div class="col-xs-4">
            <p>Average Items Price</p>
            <p>{{ number_format($priceSum/$count,2,'.','') }}</p>
        </div>
    </div>
    <div class="row clearfix">
        <h1>Items</h1>
        <a href="/items">view all</a>
        @foreach($items as $item)
        <div class="col-xs-12 bordered mbot20">
            <div class="item">
                <a href="/items/{{$item->id}}">{{$item->item_name}}</a><br>
                <img src="/uploads/{{$item->photo}}" height="100px"><br>
                Tags: {{$item->tags}}
            </div>
            <div class="item">
                {{$item->vendor_name}}<br>
                <img src="/uploads/{{$item->vendor_logo}}"  height="50px">
            </div>
        </div>
        @endforeach
    </div>

</div>

@endsection
