<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\fasility;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = fasility::all();
        return view('backend.fasilitas-umum.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.fasilitas-umum.create');
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
            'facility_name' => 'required|string',
            'detail' => 'required|string',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $image = $request->image->getClientOriginalName();
        $request->image->move(public_path('image'), $image);

        $create = fasility::create([
            'facility_name' => $request->facility_name,
            'detail' => $request->detail,
            'image' => $image,
        ]);

        if ($create) {
            return redirect()->route('facility.index');
        }else{
            return redirect()->route('facility.create');
        }

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
        $data = fasility::find($id);
        return view('backend.fasilitas-umum.edit', compact('data'));
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
            'facility_name' => 'required|string',
            'detail' => 'required|string',
        ]);

        $cek = fasility::find($id);

        if($cek->image == NULL)
        {
            $image = $request->image->getClientOriginalName();
            $request->image->move(public_path('image'), $image);
        }else{
            $image = $cek->image;
        }

        $update = fasility::where('id', $id)->update([
            'facility_name' => $request->facility_name,
            'detail' => $request->detail,
            'image' => $image,
        ]);

        if ($update) {
            return redirect()->route('facility.index');
        }else{
            return redirect()->route('facility.edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        fasility::destroy($id);
        return redirect()->route('facility.index');
    }
}
