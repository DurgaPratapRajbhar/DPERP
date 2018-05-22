<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Response;
use Validator;
use Redirect;
use Session;
use URL;
use Mail;
class ActivityController extends Controller
{

	public function dailyplanning()
	{
		return view('daily-planning');
	}

	public function leadcapture()
	{
		$users=DB::select("call usp_get_professionmaster()");
		$selects=DB::select("call usp_vertical_master()");
		$lead=DB::select("call usp_get_leadcity_master()");
		return view('lead-capture',['users'=>$users,'selects'=>$selects,'lead'=>$lead]);
	}

	public function registrationreport()
	{
		$users=DB::select("call usp_get_company_master()");
		return view('registration-report',['users'=>$users]);
	}


}
