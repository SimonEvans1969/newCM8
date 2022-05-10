<?php

namespace App\Http\Controllers\SelfBooking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClubClass;
use
class ClubClasses extends Controller
{
    public function showClubClasses(){
        $clubclasses =
            ClubClass::where('status','LIVE')
            ->whereIn('id',function($query){
                $query->select('clubclass_id')->from('classattributes');
            })
            ->join('classattributes', 'clubclasses.id', '=', 'classattributes.class_id')
            ->get();

        return view('SelfBooking.index', [
            'clubclasses' => $clubclasses,
        ]);
    }
}
