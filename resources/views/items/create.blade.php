@extends("main",["lastItems"=>$lastItems])

@section("title",'| Create New Item')

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>Create New Item</h1>
        <hr>

        {!! Form::open(array('route' => 'items.store', 'files'=>true)) !!}
        {{Form::label('item_name','Item Name')}}
        {{Form::text('item_name',null,array('class'=>'form-control'))}}

        {{Form::label('vendor_id','Vendor')}}
        {{ Form::select('vendor_id', $vendors, null, ['class' => 'form-control']) }}

        {{Form::label('type_id','Type')}}
        {{ Form::select('type_id', $types, null, ['class' => 'form-control']) }}

        {{Form::label('serial_number','Serial Number')}}
        {{Form::text('serial_number',null,array('class'=>'form-control'))}}

        {{Form::label('price','Price')}}
        {{Form::text('price',null,array('class'=>'form-control'))}}

        {{Form::label('weight','Weight')}}
        {{Form::text('weight',null,array('class'=>'form-control'))}}

        {{Form::label('color','Color')}}
        {{Form::text('color',null,array('class'=>'form-control'))}}

        {{Form::label('release_date','Release Date')}}
        {{Form::text('release_date',null,array('class'=>'form-control datepicker'))}}

        {{Form::label('photo','Photo')}}
        {{ Form::file('photo',null,array('class'=>'form-control')) }}

        {{Form::label('tags','Tags')}}
        {{Form::text('tags',null,array('class'=>'form-control ',"data-role"=>"tagsinput"))}}

        {{Form::submit('Create Item',array('class'=>'btn btn-success btn-lg btn-block'))}}
        {!! Form::close() !!}
    </div>    
</div>

@endsection