@extends('layouts.app')

@section('content')
    <h1>Orders</h1>
    @if(count($orders) > 0)
        @foreach($orders as $order)
            <div class="well">
            <h3><a href="/pizza/public/orders/{{$order->id}}">{{$order->title}}</a></h3>
                <small>Written on {{$order->created_at}} </small>
            </div>
        @endforeach
        {{$orders->links()}}
    @else
        <p>No orders found</p>
    @endif    
@endsection