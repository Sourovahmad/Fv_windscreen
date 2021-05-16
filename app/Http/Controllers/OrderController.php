<?php

namespace App\Http\Controllers;

use App\Http\Requests\orderStoreRequest;
use App\Models\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = order::all();
        // return $orders;
        return view('admin.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request;
        // $order = new order;

        // $file = $request->file('image');
        // $fileName = time() . '.full.' . $file->getClientOriginalName();
        // $file->move('images/', $fileName);
        // $name = 'images/'.$fileName;

        // $order->image = 'images/'.$fileName;
        // $order->save();
        // return redirect()->back()->withSuccess('Order Creted successfully');



        // $width= 6;
        // $height = 3;
        // return $order->CalculateTotalPrice($width,$height);

        //   order::create($request->validated() + [

        //     'image' => $fileName,

        //   ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(order $order)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $order)
    {
        $order->delete();
        return redirect()->back()->withErrors('Order Deleted');
    }

    public function download($id)
    {
        $orderImg = order::where('id', $id)->firstOrFail();
        $path = public_path() . '/' . $orderImg->image;
        return response()->download($path, $orderImg
            ->original_filename, ['Content-Type' => $orderImg->mime]);
    }


    public function orderStore(Request $request){
        $order = new order;
        $order->name = $request->segment_name;
        $order->email = $request->email;
        $order->size_height = $request->height_feet."' ". $request->height_inch . '"' ;
        $order->size_width = $request->width_feet."' ". $request->width_inch . '"' ;
        $order->size = $request->size;
        $order->color = $request->color;
        $order->material = $request->material;
        $order->price = $request->total_price;
        $order->enhancement = $request->enhancement;
        $order->position = $request->position;
        $order->notes = $request->segment_note;

        if(!is_null($request->image)){

            $file = $request->image;
            $fileName = time() . '.full.' . $file->getClientOriginalName();
            $file->move('images/', $fileName);
            $image_name = 'images/'.$fileName;
            $order->image = $image_name;
        }
        $order->save();
        return back()->withSuccess('Order Created');

    }
}
