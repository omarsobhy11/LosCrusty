@extends('layouts.app')

@section('content')
    <h3>Create Order</h3>
    {!! Form::open(['action' => 'OrderController@store', 'method' => 'ORDER']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

    {!! Form::close() !!}

@endsection