<?php

namespace App\Http\Controllers\Admin;

use App\Train;
use App\TrainTicket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mockery\Exception;

class TrainTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets =TrainTicket::all();
        $trains = Train::all();
        return view('admin.ticket.index', compact('tickets', 'trains'));
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
            'train_id' => 'required|integer',
            'ticket_name' => 'required|max:190',
            'description' => 'sometimes',
            'price' => 'required|numeric',
            'seat_no' => 'required|numeric',
            'ticket_available' => 'required|numeric'
        ]);

        //dd($request->all());
        $trainTickets = TrainTicket::create([
            'train_id' => $request->train_id,
            'ticket_class' => $request->ticket_name,
            'ticket_description' => $request->description,
            'price' => $request->price,
            'seat_numbers' => $request->seat_no,
            'is_active' => $request->ticket_available
        ]);

        return redirect()->back()->with('success_message', 'You have successfully added a Train Ticket');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TrainTicket  $trainTicket
     * @return \Illuminate\Http\Response
     */
    public function show(TrainTicket $trainTicket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TrainTicket  $trainTicket
     * @return \Illuminate\Http\Response
     */
    public function edit(TrainTicket $trainTicket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TrainTicket  $trainTicket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TrainTicket $trainTicket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TrainTicket  $trainTicket
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrainTicket $trainTicket)
    {
        //
    }
}
