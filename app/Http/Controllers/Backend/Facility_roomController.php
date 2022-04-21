<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\facility_room;

class Facility_roomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = facility_room::all();
        return view('backend.fasilitas-kamar.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.fasilitas-kamar.create');
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
            'facility_name' => ['required', 'string', 'max:255']
        ]);

        $create = facility_room::create($request->all());
        if($create)
        {
            return redirect()->route('facility-room.index');
        }
        return redirect()->route('facility-room.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = facility_room::find($id);
        return view('backend.fasilitas-kamar.edit', compact('data'));
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

        $request->validate([
            'facility_name' => ['required', 'string', 'max:255']
        ]);

        $update = facility_room::where('id', $id)->update([
            'facility_name' => $request->facility_name
        ]);

        if($update)
        {
            return redirect()->route('facility-room.index');
        }
        return redirect()->route('facility-room.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = facility_room::destroy($id);
        return redirect()->route('facility-room.index');
    }
}
