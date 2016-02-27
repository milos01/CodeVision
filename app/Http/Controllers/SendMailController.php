<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendMeEmailJob;
use App\Http\Controllers\Controller;

class SendMailController extends Controller
{
    public function SendMail(Request $request){
    	$data = $this->dispatch(new SendMeEmailJob($request));
    }
}
