@extends('layouts.app')

@section('content')
    <a href="/pizza/public/orders" class="btn btn-defaults">Go Back</a>
    <h1>{{$order->title}}</h1>
    <div>
        {!! $order->body !!}
    </div>
    <hr>
    <small>Written on{{$order->created_at}}</small> 
    <hr>
    <a href="/pizza/public/orders/{{$order->id}}/edit" class="btn btn-default">Edit</a>
    @if(!Auth::guest())
        {!! Form::open(['action' => ['OrderController@destroy', $order->id], 'method' => 'ORDER', 'class' => 'float-right']) !!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!! Form::close() !!}
    @endif
    @endsection