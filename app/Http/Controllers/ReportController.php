<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorCount;

class ReportController extends Controller
{
    public function view()
    {
       $view= VisitorCount::all();
        return view('backend.admin.report.visitor-view',compact('view'));
    }
}
