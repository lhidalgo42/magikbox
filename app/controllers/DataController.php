<?php

class DataController extends \BaseController
{

    /**
     * Display a listing of the resource.
     * GET /data
     *
     * @return Response
     */
    public function index()
    {
        $values = null;
        $datos = Control::join('products', 'products.controls_id', '=', 'controls.id')->join('sensors', 'sensors.products_id', '=', 'products.id')->where('controls.users_id', '=', Auth::user()->id)->select('sensors.id as id', 'sensors.name as name')->get();
        foreach ($datos as $data) {
            $val = DataOptimized::where('sensors_id', '=', $data->id)->orderBy('created_at', 'desc')->get()->first();
            if (count($val) > 0)
                $data['value'] = round($val->value,1);
            else
                $data['value'] = 0;
            $values[] = $data;
        }
        return $values;
    }

    /**
     * Show the form for creating a new resource.
     * GET /data/create
     *
     * @return Response
     */
    public function create($data)
    {
        $MAC = "0" . substr($data, 7, 6) . "0" . substr($data, 13, 8);
        $VAL = substr($data, -5, 3);
        $mac = Mac::where('value', '=', $MAC)->get()->first();
        if (count($mac) > 0) {
            $product = Product::where('macs_id', '=', $mac->id)->get()->first();
            $sensor = Sensor::where('products_id', '=', $product->id)->get()->first();
            $VAL = hexdec($VAL);
            $temp = new Data();
            $temp->sensors_id = $sensor->id;
            $temp->value = ((($VAL / 1023) * 1200) - 500) / 10;
            $temp->save();
            $datos = Data::where('sensors_id', '=', $sensor->id)->take(10)->orderBy('created_at', 'desc')->get();
            $max = 0;
            foreach ($datos as $data) {
                $max = $data['value'] + $max;
            }
            $data = $max / count($datos);
            $optimized = new DataOptimized();
            $optimized->sensors_id = $sensor->id;
            $optimized->value = $data;
            $optimized->save();
            echo ((($VAL / 1023) * 1200) - 500) / 10;
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
     * @param  int $id
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
     * @param  int $id
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
     * @param  int $id
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
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}