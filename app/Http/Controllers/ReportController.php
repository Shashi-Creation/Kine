<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorCount;

class ReportController extends Controller
{
    public function view()
    {
       //$view= VisitorCount::find(20);
     //   $countryfag =country($view->country_code);
    	// return $countryfag->getFlag();

       $view = VisitorCount::orderBy('created_at', 'DESC')->paginate(10);
        return view('backend.admin.report.visitor-view',compact('view'));

        //$countryfag = country('us');
//return $countryfag->getFlag();
       // $r->iso_code

         //$countryfag =  country($r->iso_code);
 //return $countryfag->getFlag();
    }
}
