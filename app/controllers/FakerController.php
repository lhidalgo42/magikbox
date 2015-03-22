<?php

use Faker\Factory as Faker;

class FakerController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $faker = Faker::create('en_EN');
        $catch = $faker->streetName;
        $mac = $faker->ipv4;
        $MAC = new Mac();
        $control = new Control();
        $MAC->name =$catch;
        $control->name = $catch;
        $MAC->value = $mac;
        $MAC->mac_types_id = 1;
        $MAC->save();
        $control->macs_id = $MAC->id;
        $control->users_id = 1;
        $control->save();
        foreach(range(1, 10) as $index)
        {
            $catch = $faker->streetName;
            $mac = $faker->ipv4;
            $MAC = new Mac();
            $product = new Product();
            $MAC->name =$catch;
            $product->name = $catch;
            $MAC->value = $mac;
            $MAC->mac_types_id = 2;
            $MAC->save();
            $product->controls_id = $control->id;
            $product->macs_id = $MAC->id;
            $product->tag = '<i class="ion-thermometer"></i>';
            $product->save();
            $sensor = new Sensor();
            $sensor->name = $faker->streetName;
            $sensor->products_id = $product->id;
            $sensor->sensor_types_id = 1;
            $sensor->highlight = 1;
            $sensor->tag = '<i class="ion-thermometer"></i>';
            $sensor->save();
        }

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
