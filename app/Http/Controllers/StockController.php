<?php

namespace App\Http\Controllers;

use App\Stock;
use Illuminate\Http\Request;

use App\Http\Requests;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listing(Request $request)
    {
        $filter=$request->input('filter');
        if($filter != "") {
            $stocks=Stock::where('name','like',"%".$filter."%")->paginate(8);
            return response()->json(view('stocks/item', compact('stocks'))->render());
        }
        $stocks=Stock::paginate(8);
        return response()->json(view('stocks/item', compact('stocks'))->render());
    }
    public function index()
    {
        return view('stocks/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('stocks/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Stock::create($request->all());
        $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $stocks=Stock::find($id);
        return view('stocks/edit', compact('stocks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
        $stocks=Stock::find($id);
        $stocks->fill($request->all());
        $stocks->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Stock::destroy($id);
    }
}
