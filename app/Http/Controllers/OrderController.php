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
        return view('admin.index');
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
    public function store(orderStoreRequest $request)
    {
        $order = new order;

        // $file = $request->file('image');
        // $fileName = time() . '.full.' . $file->getClientOriginalName();
        // $file->move('images/', $fileName);
        // $name = 'images/'.$fileName;

        // $order->image = 'images/'.$fileName;
        // $order->save();
        // return redirect()->back()->withSuccess('Order Creted successfully');



        $width= 6;
        $height = 3;
        return $order->CalculateTotalPrice($width,$height);

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
}
