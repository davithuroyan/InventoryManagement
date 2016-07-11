<!DOCTYPE html>
<html>
    <head>
        @include("partials._head")
    </head>
    <body>

        @include("partials._nav")
        <div class='container'>

            @section('sidebar')
            
            @show


            <div class="col-xs-8 col-xs-offset-2">
                @include('partials._messages')
                @yield("content")
                @include("partials._footer")
            </div>
        </div>

        @include("partials._javascript")
        @yield("scripts")
    </body>
</html>
