<?php

namespace App\Http\Controllers;

use App\Models\Citizen;
use App\Models\Country;
use App\Models\Lga;
use App\Models\State;
use App\Models\Ward;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $states = State::all();
        $wards = Ward::all();
        $lgas = Lga::all();
        $countries = Country::all();
        return view('home', ['states'=>$states, 'countries'=>$countries, 'lgas'=>$lgas, 'wards'=>$wards]);
    }

    public function registerCitizen(Request $request){

        try {
            $citizen = Citizen::create([
                'name'=> $request->name,

                'gender'=> $request->gender,
                'address'=>$request->address,
                'phone'=>$request->phone,
                'ward_id'=>$request->ward_id,
                'lga_id'=>$request->lga_id,
                'state_id'=>$request->state_id,
                'country_id'=>$request->country_id,
            ]);
            // noty('Customer updated', 'success', ['timeout' => 1000]);
            return back()->withSuccess('Created successfully');
        } catch (\Throwable $th) {
            return back()->withFail('Error while creating citizen');
        }

    }

    public function generateReport(){

        $countries = Country::with('states.lgas.wards')->get();
        return view('report', ['countries'=> $countries]);
    }
}
