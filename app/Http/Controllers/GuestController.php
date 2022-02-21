<?php

namespace App\Http\Controllers;

use App\Location;
use App\TrainTicket;
use App\Trips;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{
    /**
     * Show the application admin.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$locations = Location::all();

        //$tickets = TrainTicket::all();

        return view('home.index');
    }

    public function carbooking()
    {
        return view('home.carbooking');
    }

    public function about()
    {
        return view('home.about');
    }

    public function services()
    {
        return view('home.services');
    }

    public function offers()
    {
        return view('home.offers');
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function blog()
    {
        return view('home.blog');
    }

    public function blogInfo()
    {
        return view('home.bloginfo');
    }

    public function finish()
    {
        return view('home.finish');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function booking(Request $request)
    {
        $request->validate([
            'from' => 'required|string',
            'to' => 'required|string',
            'departure_date' => 'required|after:' . date('m-d-Y'),
            'passenger' => 'required|numeric',
            'ticket_class' => 'required|string',
        ]);

        $userdate = Carbon::parse($request->departure_date);
        $todaydate = Carbon::today();
        $maindate = ($userdate >= $todaydate);

        if($maindate == 'true')
        {
            dd('Future Date');
        }


        dd($maindate, $todaydate, $userdate, $request->all());

        $travel = (object)array
        (
            'from' => $request->from,
            'to' => $request->to,
            'departure_date' => $request->departure_date,
            'passenger' => $request->passenger,
            'ticket_class' => $request->ticket_class,
        );

        $daysOfTheWeek = Carbon::parse($request->departure_date)->format('l');

        $fullDate = Carbon::parse($request->departure_date)->toFormattedDateString();

        $price = TrainTicket::where('ticket_class', $request->ticket_class)->first();

        //dd($price);
        $bookingTrips = Trips::where('location', $request->from)
                                ->where('destination', $request->to)
                                ->with('train')
                                ->get();
        //dd($bookingTrips);
        $locationDetails = Location::where('name', $request->from)->first();

        $destinationDetails = Location::where('name', $request->to)->first();

        //dd($bookingTrips, $locationDetails, $destinationDetails);

        return view('home.booking_list', compact('travel', 'price', 'bookingTrips', 'locationDetails', 'destinationDetails', 'daysOfTheWeek', 'fullDate'));
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'from.required' => 'Your Location is \"EMPTY\"',
            'to.required' => 'Your Destination is \"EMPTY\"',
        ];
    }

}
