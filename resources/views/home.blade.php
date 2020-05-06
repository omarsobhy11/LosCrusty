@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/pizza/public/orders/create" class="btn btn-primary">Create Order</a>    
                    <h3>Your Orders, dude</h3>
                    @if(count($orders) > 0 )
                        <table class="table table-striped">
                            <tr>
                                <td>Title</td>
                                <td></td>
                                <td></td>
                            </tr>

                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{$order->title}}</td>
                                    <td><a href="/pizza/public/orders/{{$order->id}}/edit" class="btn btn-default">Edit</a></td>
                                    <td>
                                        {!! Form::open(['action' => ['OrderController@destroy', $order->id], 'method' => 'ORDER', 'class' => 'float-right']) !!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no orders, dude, make an order now</p>
                        
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
