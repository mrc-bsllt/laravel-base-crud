<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beer;

class BeerController extends Controller
{
    private $validationParams = [
      "brand" => "required|max:50",
      "type" => "required|max:30",
      "alcohol_content" => "required|numeric",
      "price" => "required|numeric",
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $beers = Beer::all();

      return view("beers.index", compact("beers"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("beers.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate($this->validationParams);
      $data = $request->all();

      $newBeer = new Beer();
      // $newBeer->brand = $data["brand"];
      // $newBeer->type = $data["type"];
      // $newBeer->description = $data["description"];
      // $newBeer->alcohol_content = $data["alcohol_content"];
      // $newBeer->price = $data["price"];
      $newBeer->fill($data)->save();
      //$newBeer->save();

      return redirect()->route("beers.index", $newBeer);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Beer $beer)
    {
      return view("beers.show", compact("beer"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Beer $beer)
    {


      return view("beers.edit", compact("beer"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beer $beer)
    {
      $request->validate($this->validationParams);
      $data = $request->all();

      $beer->update($data);
      //dd($beer);


      return redirect()->route("beers.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beer $beer)
    {
        $beer->delete();

        return redirect()->route("beers.index");
    }
}
