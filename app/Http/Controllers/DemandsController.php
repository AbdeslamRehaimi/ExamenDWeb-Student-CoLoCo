<?php

namespace App\Http\Controllers;

use App\Demand;
use Illuminate\Http\Request;
use App\Offer;

class DemandsController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
     * @param  \App\Demand  $demand
     * @return \Illuminate\Http\Response
     */
    public function show(Demand $demand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Demand  $demand
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //

        Demand::create([
            'budget' => $request->budget,
            'commentaire' => $request->commentaire,
            'offers_id' => $request->offers_id,
            'users_id' => auth()->id(),
        ]);

        return redirect(route('offers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Demand  $demand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Demand $demand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Demand  $demand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Demand $demand)
    {
        //
    }

    public function reqadd($titre)
    {
        //
        //return view('offers.addOffer');
        $offer = Offer::where('titre', $titre)->firstOrFail();
        return view('demands.addDemand')->with('offer', $offer);
    }

    public function userDemands(){

        /*$offers = Offer::with('users')->WhereHas('users', function($query){
            $query->where('name', request()->user);
        })->paginate(6);*/

        $offers = User::where('id', auth()->id())->firstOrFail();


        return view('demands.demands')->with(
            'offer', $offers);
        //return view('profile.userOffers');
    }
}
