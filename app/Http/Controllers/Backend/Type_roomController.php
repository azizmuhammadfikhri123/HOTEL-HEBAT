<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\type_room;
use App\Models\facility_room;

class Type_roomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = type_room::all();
        return view('backend.type-kamar.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = type_room::all();
        $fasilitas_kamar = facility_room::all();
        // $explode = explode(', ', $data->facilities);
        return view('backend.type-kamar.create', compact('fasilitas_kamar', 'data'));
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
            'name' => 'required',
            'price' => 'required',
            'facilities' => 'required',
            'information' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $image = $request->image->getClientOriginalName();
        $request->image->move(public_path('image'), $image);

        $implode = implode(', ' , $request->facilities);

        $create = type_room::create([
            'name' => $request->name,
            'price' => $request->price,
            'facilities' => $implode,
            'information' => $request->information,
            'image' => $image,
        ]);

        if ($create) {
             return redirect()->route('type-room.index');
        }
        return redirect()->route('type-room.create');

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
        $data = type_room::find($id);
        $fasilitas_kamar = facility_room::all();
        $explode = explode(', ', $data->facilities);
        // dd($explode);
        return view('backend.type-kamar.edit', compact('data', 'fasilitas_kamar', 'explode'));
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
            'name' => 'required|string',
            'price' => 'required',
            'facilities' => 'required',
            'information' => 'required',
        ]);

        $cek = type_room::find($id);

        if($cek->image == NULL)
        {
            $image = $request->image->getClientOriginalName();
            $request->image->move(public_path('image'), $image);
        }else{
            $image = $cek->image;
        }

        $implode = implode(', ' , $request->facilities);

        $create = type_room::where('id', $id)->update([
            'name' => $request->name,
            'price' => $request->price,
            'facilities' => $implode,
            'information' => $request->information,
            'image' => $image,
        ]);

        if ($create) {
             return redirect()->route('type-room.index');
        }
        return redirect()->route('type-room.edit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = type_room::destroy($id);
        return redirect()->route('type-room.index');
    }
}
