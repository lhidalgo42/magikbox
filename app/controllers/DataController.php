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
        $mac = Mac::where('value','=',$MAC)->get()->first();
        if(count($mac)>0){
            $product = Product::where('macs_id','=',$mac->id)->get()->first();
            $sensor = Sensor::where('products_id','=',$product->id)->get()->first();
            $VAL = hexdec($VAL);
            $temp = new Data();
            $temp->sensors_id = $sensor->id;
            $temp->value = ((($VAL/1023)*1200)-500)/10;
            $temp->save();
            $datos = Data::where('sensors_id','=',$sensor->id)->take(10)->orderBy('created_at', 'desc')->get();
            $max = 0;
            foreach($datos as $data){
                $max = $data['value']+$max;
            }
            $data = $max/count($datos);
            $optimized = new DataOptimized();
            $optimized->sensors_id = $sensor->id;
            $optimized->value = $data;
            $optimized->save();
            echo ((($VAL/1023)*1200)-500)/10;
            $queries = DB::getQueryLog();
            echo print_r($queries);
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