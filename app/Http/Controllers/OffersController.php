<?php

namespace App\Http\Controllers;

use App\Offer;
use Illuminate\Http\Request;
use Auth;

class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return view('offers.offers');



        if(request()->usuer){
            $offers = Offer::with('users')->WhereHas('users', function($query){
                $query->where('titre', request()->user);
            })->paginate(6);
        }else{
            $offers = Offer::with('users')->paginate(6);
        }

        //dd($offers);

        return view('offers.offers')->with('offers', $offers);

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
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show($titre)
    {
        //
        //return view('offers.showOffer');
        $offer = Offer::where('titre', $titre)->firstOrFail();
        return view('offers.showOffer')->with('offer', $offer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request){

        $duplicata = Offer::where('titre', $request->titre)->firstOrFail();
        dd("dz d "+$duplicata);
        dd(Auth::user()->id);

        /*if ($duplicata -> isNotEmpty() ){
            //return redirect()->route('offers')->with('danger', 'Cette offre est deja ajouter!');
            //session()->flash('danger', 'Cette offre est deja ajouter!');
            //return redirect()->back();
            //return redirect()->route('offers');
        }
        $offer->users_id = Auth::user()->id;
        $offer->save();

        session()->flash('success', 'Saved');
        //return redirect()->route('offers');
        */
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offer $offer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function reqadd(Offer $offer)
    {
        //
        //return view('offers.addOffer');
        return view('offers.addOffer')->with('offer', $offer);
    }



    public function userSettings(){
        $offer = Offer::where('users_id', Auth::user()->id)->firstOrFail();
        return view('profile.userOffers')->with('offer', $offer);
        //return view('profile.userOffers');
    }



}
