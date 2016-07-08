@extends("main")

@section("title",'| Edit Item')

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>Create New Item</h1>
        <hr>

        {!! Form::model($item,['route'=>['items.update',$item->id],'method'=>'PUT']) !!}
        {{Form::label('item_name','Item Name')}}
        {{Form::text('item_name',null,array('class'=>'form-control'))}}

        {{Form::label('vendor_id','Vendor')}}
        {{Form::text('vendor_id',null,array('class'=>'form-control'))}}

        {{Form::label('type_id','Type')}}
        {{Form::text('type_id',null,array('class'=>'form-control'))}}

        {{Form::label('serial_number','Serial Number')}}
        {{Form::text('serial_number',null,array('class'=>'form-control'))}}

        {{Form::label('price','Price')}}
        {{Form::text('price',null,array('class'=>'form-control'))}}

        {{Form::label('weight','Weight')}}
        {{Form::text('weight',null,array('class'=>'form-control'))}}

        {{Form::label('color','Color')}}
        {{Form::text('color',null,array('class'=>'form-control'))}}

        {{Form::label('release_date','Release Date')}}
        {{Form::text('release_date',null,array('class'=>'form-control'))}}

        {{Form::label('photo','Photo')}}
        {{Form::text('photo',null,array('class'=>'form-control'))}}

        {{Form::label('tags','Tags')}}
        {{Form::text('tags',null,array('class'=>'form-control'))}}

        {{Form::submit('Update Item',array('class'=>'btn btn-success btn-lg btn-block'))}}
        {!! Form::close() !!}
    </div>    
</div>

@endsection