<?php

class DataController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /data
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /data/create
	 *
	 * @return Response
	 */
	public function create($data)
	{
        $MAC = "0".substr($data,7,6)."0".substr($data,13,8);
        $VAL = substr($data,32,3);
        $mac = Mac::where('value','=',$MAC)->get();
        if(count($mac)>0){
            $product = Product::where('macs_id','=',$mac[0]->id)->get();
            $sensor = Sensor::where('products_id','=',$product[0]->id)->get();
            $VAL = hexdec($VAL);
            $temp = new Data();
            $temp->sensors_id = $sensor[0]->id;
            $temp->value = ((((1200*$VAL)+512)/1024)-500)/10;
            $temp->save();
        }
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /data
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /data/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /data/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /data/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /data/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}