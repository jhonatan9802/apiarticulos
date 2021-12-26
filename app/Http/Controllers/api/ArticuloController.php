<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $data = [
                array('id' => '1', 'nombre' => 'Sheltie Snacks Carne Asada', 'precio' => '5.500', 'precio_antes' => '5.000', 'precio_member' => '4.675', 'gramos' => '160', 'url_img' => './../src/assets/img/productos/10ea470d75cbb51a8bb86b925b53d885.jpg'),
                array('id' => '2', 'nombre' => 'Aikos Gomitas Con Sabor A Carne', 'precio' => '5.800', 'precio_antes' => '5.200', 'precio_member' => '4.930', 'gramos' => '150'),
                array('id' => '1', 'nombre' => 'Bocaditos Can Amor', 'precio' => '3.311', 'precio_antes' => '3.679', 'precio_member' => '3.127', 'gramos' => '18'),
                array('id' => '1', 'nombre' => 'Sheltie Sticks Barras De Zanahoria', 'precio' => '2.500', 'precio_antes' => '2.163', 'precio_member' => '2.125', 'gramos' => '38')
        ];
        $jsondata = json_encode($data);

        //$coleccion = collect($data);
        return $jsondata;
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
