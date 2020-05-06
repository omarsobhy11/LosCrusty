<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use DB;

class OrderController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$orders = Order::all();
        //$order = Order::where('title', 'Order Two')->get();
        //$orders = DB::select('SELECT * FROM orders');
        //$orders = Order::orderBy('created_at', 'desc')->take(2)->get();
        //$orders = Order::orderBy('created_at', 'desc')->get();
        
        $orders = Order::orderBy('created_at', 'desc')->paginate(10);
        return view('orders.index')->with('orders', $orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create');
    } 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request, [
           'title' => 'required', 
           'body' => 'required'
       ]);
       //Create Order
       $order = new Order;
       $order->title = $request->input('title');
       $order->body = $request->input('body');
       $order->user_id = auth()->user()->id; 
       $order->save();

       return redirect('/orders')->with('success', 'Order Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);
        return view('orders.show')->with('order', $order);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id);

        if(auth()->user()->id !== $order->user_id){
            return redirect("/pizza/public/orders")->with('error', 'Unauthorized Access');
        }
        return view('orders.edit')->with('order', $order);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required', 
            'body' => 'required'
        ]);
        //Create Order
        $order = Order::find($id);
        $order->title = $request->input('title');
        $order->body = $request->input('body');
        $order->save();
 
        return redirect('/orders')->with('success', 'Order Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id);

        //Check for correct user
        if(auth()->user()->id !== $order->user_id){
            return redirect("/orders")->with('error', 'Unauthorized Access');
        }

        $order->delete();
        return redirect("/orders")->with('success', 'Order Removed');
    }
}
