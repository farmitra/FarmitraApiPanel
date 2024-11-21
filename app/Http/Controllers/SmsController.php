<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SmsController extends Controller
{
    function sendSMS($mobile_number, $message_content,$template_id)
    {
        
        try {
            $response = Http::withHeaders([ 
                'Accept'=> '*/*', 
                'User-Agent'=> 'Thunder Client (https://www.thunderclient.com)', 
            ]) 
            ->get('http://control.yourbulksms.net/api/sendhttp.php?authkey=34356e6c65747336353303&mobiles=91'.$mobile_number.'&message='.urlencode($message_content).'&sender=FRMTRA&route=2&country=0&DLT_TE_ID='.$template_id); 
        
        return $response->body();
        } catch (\Throwable $th) {
           
            
        }
       
    }
}
