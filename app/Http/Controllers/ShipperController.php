<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Shipper;

class ShipperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Shipper $shipperModel)
    {
		//$shippers = Shipper::all();
		//$shippers = Shipper::latest('id')->get();
		//$shippers = Shipper::latest('id')
		//	->where('created_at','<=',Carbon::now())
		//	->get();
		$shippers = $shipperModel->getOldShippers();
		//$newshippers = $shipperModel->getNewShippers();
		//dd($shippers);
		return view('shipper.index',[
			'shippers'=>$shippers,
		]);
    }
	public function newshipper(Shipper $shipperModel)
    {
		//$shippers = Shipper::all();
		//$shippers = Shipper::latest('id')->get();
		//$shippers = Shipper::latest('id')
		//	->where('created_at','<=',Carbon::now())
		//	->get();
		//$shippers = $shipperModel->getOldShippers();
		$shippers = $shipperModel->getNewShippers();
		//dd($shippers);
		return view('shipper.index',[
			'shippers'=>$shippers,
		]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shipper.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Shipper $postModel, Request $request)
    {
        //dd($request->all());
		$postModel->create($request->all());
		return redirect()->route('shipper.index');
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
    }
}
