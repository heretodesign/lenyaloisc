<?php

namespace App\Http\Controllers;

use App\Rsvp;
use Illuminate\Http\Request;

class RsvpController extends Controller
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

        return view('pages.rsvp');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
          'firstname' => 'required',
          // 'lastname' =>'required',
          // 'guestno' => 'required',
          // 'origin' => 'required',
          // 'email' =>'required',
          // 'note' => 'required',
        ]);


        $rsvps = Rsvp::persist();

        return redirect('/')->with('success','your RSVP has been sent to Us.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rsvp  $rsvp
     * @return \Illuminate\Http\Response
     */
    public function show(Rsvp $rsvp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rsvp  $rsvp
     * @return \Illuminate\Http\Response
     */
    public function edit(Rsvp $rsvp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rsvp  $rsvp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rsvp $rsvp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rsvp  $rsvp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rsvp $rsvp)
    {
        //
    }
}
