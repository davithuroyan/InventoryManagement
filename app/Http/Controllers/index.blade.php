@extends("main")

@section("title",'| All Items')

@section('content')


<div class='row'>
    <dif class='col-md-8'>
        <h1>All Items</h1>
    </dif>
    <div class='col-md-2'>
        <a href='{{route('items.create')}}' class='btn btn-lg btn-primaty'>Create Item</a>
    </div>
    <div class='col-md-12'>
        <hr>
    </div>
</div>

<div class='row'>

    <div class='col-md-12'>
        <form action="/search" method="GET">
            <table class='table'>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Vendor</th>
                        <th>Type</th>
                        <th>Serial Number</th>
                        <th>Price</th>
                        <th>Weight</th>
                        <th>Color</th>
                        <th>Release Date</th>
                        <th>Photo</th>
                        <th>Tags</th>
                        <th>Created Date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td><input type="text" name="name" value=""/></td>
                        <td></td>
                        <td></td>
                        <td><input type="text" name="price" value=""/></td>
                        <td></td>
                        <td></td>
                        <td><input type="text" name="color" value=""/></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button type="submit">Search</button></td>
                    </tr>
                    @foreach( $items as $item )
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->item_name}}</td>
                        <td>{{$item->vendor_id}}</td>
                        <td>{{$item->type_id}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->serial_number}}</td>
                        <td>{{$item->weigth}}</td>
                        <td>{{$item->color}}</td>
                        <td>{{$item->release_date}}</td>
                        <td>{{$item->photo}}</td>
                        <td>{{$item->tags}}</td>
                        <td>{{$item->id}}</td>
                        <td><a href='{{ route('items.show',$item->id) }}' class='btn btn-default'>View</a>
                            <a href='{{ route('items.edit',$item->id) }}' class='btn btn-default'>Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $items->links() }}
        </form>
    </div>

</div>
















