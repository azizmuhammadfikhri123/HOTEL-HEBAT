<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\room;
use App\models\type_room;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = room::all();
        return view('backend.kamar.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type_kamar = type_room::all();
        return view('backend.kamar.create', compact('type_kamar'));
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
            'number' => 'required|numeric'
        ]);

        $create = room::create($request->all());

        if ($create) {
            return redirect()->route('room.index');
        }
        return redirect()->route('room.create');

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
        $data = room::find($id);
        $type_kamar = type_room::all();
        return view('backend.kamar.edit', compact('data', 'type_kamar'));
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
            'number' => 'required|numeric'
        ]);

        $create = room::where('id',$id)->update([
            'type_id' => $request->type_id,
            'number' => $request->number
        ]);

        if ($create) {
            return redirect()->route('room.index');
        }
        return redirect()->route('room.create');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = room::destroy($id);
        return redirect()->route('room.index');
    }
}
