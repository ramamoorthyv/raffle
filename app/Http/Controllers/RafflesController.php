<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Raffle;


class RafflesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $raffles = Raffle::all();
        return view('raffles.index')->withRaffles($raffles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('raffles.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $input =  request()->except(['_token']);

        Raffle::forceCreate($input); // skip token for now
        //return redirect()->back();
        return redirect()->route('raffles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $raffle = Raffle::findOrFail($id);
        return view('raffles.show')->withRaffle($raffle);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $raffle = Raffle::findOrFail($id);
        return view('raffles.edit')->withRaffle($raffle);
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
        $raffle = Raffle::findOrFail($id);
        $input = $request->all();
        $raffle->fill($input)->save();
        return view('raffles.show')->withRaffle($raffle);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    $raffle = Raffle::findOrFail($id);
    $raffle->delete();
    return redirect()->route('raffles.index');

    }
}
