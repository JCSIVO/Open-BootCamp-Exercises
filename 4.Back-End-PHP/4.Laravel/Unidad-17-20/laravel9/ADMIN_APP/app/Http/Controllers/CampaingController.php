<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaing;
use App\Models\CampaingReceptor;

class CampaingController extends Controller
{
    public function index(){
        $campaings = Campaing::withCount('receptors')->paginate(10);

        return view('panel.campaing.index',[
                'campaings' => $campaings
            ]
        );

    }
}
