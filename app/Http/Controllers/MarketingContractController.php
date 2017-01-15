<?php

namespace App\Http\Controllers;

use App\Http\Controllers\User\UserBaseController;
use App\Http\Requests;
use App\Models\Contact;
use App\User;
use App\Models\About;
use Illuminate\Http\Request;

class MarketingContractController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        if(auth('user')->check())
            new UserBaseController();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $record = MarketingContract::first();

        return view('marketerContract',compact('record'));
    }


}

