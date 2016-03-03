<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendMeEmailJob;
use App\Http\Controllers\Controller;
use Redis;

class SendMailController extends Controller
{
    public function SendMail(Request $request){
    	if (!Redis::get($request->input('email'))) {
           	Redis::set($request->input('email'), $request->input('name'));
           	$data = $this->dispatch(new SendMeEmailJob($request));
	    }else{
	        return "exists";
	    }
    }
}
