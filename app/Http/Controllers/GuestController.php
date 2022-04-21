<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\type_room;
use App\Models\fasility;
use App\Models\room;
use Auth;

class GuestController extends Controller
{
    public function landingPage()
    {
        $type_kamar = type_room::all();
        $facility = fasility::all();
        if(!Auth::check()){
            return view('layouts.landing-page.main', compact('type_kamar', 'facility'));
        }else{
            if(Auth::user()->role == 'admin'){
                return redirect()->route('room.index');
            }elseif (Auth::user()->role == 'resepsionis') {
                return redirect()->route('panel.resepsionis');
            }else{
                return view('layouts.landing-page.main', compact('type_kamar', 'facility'));
            }
        }
    }

    public function type_room($id)
    {
        $room = room::where('type_id', $id)->first();
        $jumlah_kamar = room::where('type_id', $id)->where('status', '=', 'v')->get()->count();
        return view('guest.detail_room', compact('room', 'jumlah_kamar', 'id'));
    }

}
