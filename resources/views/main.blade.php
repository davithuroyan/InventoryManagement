<!DOCTYPE html>
<html>
    <head>
        @include("partials._head")
    </head>
    <body>

        @include("partials._nav")
        <div class='container'>

            @section('sidebar')
            <div class="col-xs-3">
                <h1>Last Items</h1>
                <hr>
                @foreach ($lastItems as $item)
                <p> <a href="/items/{{$item->id}}">{{ $item->item_name }}</a></p>
                @endforeach
            </div>
            @show


            <div class="col-xs-9">
                @include('partials._messages')
                @yield("content")
                @include("partials._footer")
            </div>
        </div>

        @include("partials._javascript")
        @yield("scripts")
    </body>
</html>
