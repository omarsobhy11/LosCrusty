
    @extends('layout.app')
     @section('content')
     <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>the cheesiest pizza you will ever tast</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">login</a><a class="btn btn-success btn-lg" href="/register" role="button">register</a>
     </div>
     @endsection