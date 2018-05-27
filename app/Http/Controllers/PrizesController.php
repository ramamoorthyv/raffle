<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prize;


class PrizesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prizes = Prize::all();
        return view('prizes.index')->withPrizes($prizes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prizes.create');

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

        Prize::forceCreate($input); // skip token for now
        //return redirect()->back();
        return redirect()->route('prizes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $raffle = Prize::findOrFail($id);
        return view('prizes.show')->withPrize($raffle);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $raffle = Prize::findOrFail($id);
        return view('prizes.edit')->withPrize($raffle);
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
        $raffle = Prize::findOrFail($id);
        $input = $request->all();
        $raffle->fill($input)->save();
        return redirect()->route('prizes.view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    $raffle = Prize::findOrFail($id);
    $raffle->delete();
    return redirect()->route('prizes.index');

    }
}
