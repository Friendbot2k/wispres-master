<?php

namespace App\Http\Controllers;


use App\Http\Controllers\User\UserBaseController;
use App\Http\Controllers\Marketer\MarketerBaseController;
use App\Http\Requests;
use App\Models\Answer;
use App\Models\Home;
use App\User;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class TermsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('terms',compact('header','content','search','register','marketer1','about'));
    }

}
