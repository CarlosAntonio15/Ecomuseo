<?php

namespace App\Http\Controllers;

use App\Donation;
use Illuminate\Http\Request;
use App\Http\Requests\DonationRequest;
use Exception;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donationC = Donation::all();
        //dd($voluntaryC);
        return view('donation')->with('donationN', $donationC);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //$voluntary= Voluntary
        //nombre de la vista
        return view('Donations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DonationRequest $request)
    {

        $messages =[
            'required' => 'El campo :attribute es obligatorio ',
            'alpha' => 'El campo :attribute sólo puede contener letras',
            'max:100' => 'El campo :attribute tiene un máximo de 100 letras',
            'email' => 'El campo :attribute debe ser tipo email',
            'unique:donation' => 'El campo :attribute debe ser único',
            'max:50' => 'El campo :attribute debe contener máximo 50 caracteres'
        ];

        $request->validate([
            "name" => 'required|max:50|regex:/^[\pL\s\-]+$/u|min:3',
            "lastName" => 'required|max:100|min:4|regex:/^[\pL\s\-]+$/u',
            "donationType" =>'required|max:9|min:8',
            "quantity" =>'required|min:4',
            "description" =>'required|max:300|min:30',
            "currentDate" =>'required',
            "phone" =>'required|unique:donation|integer',
            "mail" =>'required|email|unique:donation'
        ],  $messages);

        $DonationN= new donation;
        //$VoluntaryN->Id= $request->id;
        $DonationN->name= $request->name;
        $DonationN->lastName= $request->lastName;
        $DonationN->donationType= $request->donationType;
        $DonationN->quantity= $request->quantity;
        $DonationN->description= $request->description;
        $DonationN->currentDate= $request->currentDate;
        $DonationN->phone= $request->phone;
        $DonationN->mail= $request->mail;

        $DonationN->save();
        $request->session()->flash('message', 'Donación creada correctamente.');
        return redirect()->route('realizarDonaciones');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Voluntary  $voluntary
     * @return \Illuminate\Http\Response
     */
    public function show(Donation $id)
    {
        $donation = Donation::find($id); 
        dd($donation);
        $donation = $donation[0];
        return view('Donations.show')->with('Donation', $donation);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Voluntary  $voluntary
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $donation = Donation::find($id);

        //dd($donation);

        if (is_null($donation)) {
            return redirect()->route('donation'); 
        }
        return view('Donations.create')->with('donation', $donation);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Voluntary  $voluntary
     * @return \Illuminate\Http\Response
     */
    public function update(DonationRequest $request,$id)
    {
        $Donation = Donation::find($id);
        $Donation->name= $request->name;
        $Donation->lastName= $request->lastName;
        $Donation->donationType= $request->donationType;
        $Donation->quantity= $request->quantity;
        $Donation->description= $request->description;
        $Donation->currentDate= $request->currentDate;
        $Donation->phone= $request->phone;
        $Donation->mail= $request->mail;
        $Donation->save();
        $request->session()->flash('message', 'Donación actualizada correctamente.');
        return redirect()->route('donation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Voluntary  $voluntary
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Donation::find($id)->delete();
        Session()->flash('message', 'Donación eliminada correctamente');
        return redirect()->route('donation');
    }
}