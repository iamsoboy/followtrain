<?php

namespace App\Http\Controllers\Admin;

use App\Location;
use App\Trips;
use App\Train;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class TripsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trains = Train::all();

        $locations = Location::all();

        return view('admin.trips.index', compact('trains', 'locations'));
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


        $request->validate([
            'train_id' => 'required',
            'location' => 'required',
            'destination' => 'required',
            'week_days' => 'required',
            'departure_time' => 'required|string',
            'trip_active' => 'required'

        ]);

        if ($request->location == $request->destination)
        {
            return Redirect::back()->with('error_message','Location and Destination cannot be the same');
        }
        //dd($request->all());
        $trips = new Trips;
        $trips->train_id = $request->train_id;
        $trips->location = $request->location;
        $trips->destination = $request->destination;
        $trips->departure_time = $request->departure_time;
        $trips->week_days = json_encode($request->week_days);
        $trips->is_active = $request->trip_active;
        $trips->save();

        return redirect()->back()->with('success_message', 'You have successfully added a New Train Schedule');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trips  $trips
     * @return \Illuminate\Http\Response
     */
    public function show(Trips $trips)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trips  $trips
     * @return \Illuminate\Http\Response
     */
    public function edit(Trips $trips)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trips  $trips
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trips $trips)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trips  $trips
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trips $trips)
    {
        //
    }
}
