<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Http\Requests\CarsRequest;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::get();
        return view('pages.cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarsRequest $request)
    {   
        $car = new Car();
        $car->name = $request->name;
        $car->model = $request->model;
        $car->power = $request->power;
        $car->km = $request->km;
        $car->price = $request->price;
        $car->year = $request->year;

        $car->save();

        return redirect('/cars');
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
        $car = Car::find($id);


        return view('pages.cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CarsRequest $request, $id)
    {
        $car = Car::find($id);

        $car->name = $request->name;
        $car->model = $request->model;
        $car->power = $request->power;
        $car->km = $request->km;
        $car->price = $request->price;
        $car->year = $request->year;

        $car->save();
        return redirect('/cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Car::destroy($id);

        return redirect('/cars');
    }
}
