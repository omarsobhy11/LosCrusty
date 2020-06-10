@extends('layouts.app')
@section('content')
    <style>
        div {
            border-color: yellow; 
            float: left;
            margin-right: 15%;
            
        }
        button {
            background-color: darkgreen;
            color: aliceblue;
            margin-bottom: 20%;
        }

    </style>
    <div class="container pt-5">
        <div>
            <h1 style="color: salmon; margin-bottom: 4%;">OUR MENU</h1>
            <div>
                <h2>BURGER</h2>
                <p>Lorem ipsum : 9$</p>
                <a href="/create"><button>order NOW</button></a>
            </div>

            <div>
                <h2>PIZZA</h2>
                <p>loren ipsem : 12$</p>
                <p>loren ipsem : 14$</p>
                <p>loren ipsem : 20$</p>
                <a href="/create"><button>order NOW</button></a>            </div>

            <div>
                <h2>FRIES</h2>
                <p>loren ipsem : 5$</p>
                <p>loren ipsem : 7$</p>
                <a href="/create"><button>order NOW</button></a>
            </div>

            <div>
                <h2>BEST ORDER</h2>
                <p>PIZZA  , 2 BURGER , 3 FRIES : 120$ </p>
                <a href="/create"><button>order NOW</button></a>
            </div>
        </div>
    </div>
@endsection
