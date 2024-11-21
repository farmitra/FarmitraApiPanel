<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class UserController extends Controller
{
    public function userLoginWithMobile(){


 
$response = Http::withHeaders([ 
        'Accept'=> '*/*', 
        'User-Agent'=> 'Thunder Client (https://www.thunderclient.com)', 
    ]) 
    ->get('http://control.yourbulksms.net/api/sendhttp.php?authkey=34356e6c65747336353303&mobiles=917906605262&message=Dear%20Farmitra%20Friend%2C%20Your%20Login%20OTP%20is%20123456%20and%20is%20valid%20for%2010%20min.&sender=FRMTRA&route=2&country=0&DLT_TE_ID=1007719249134497727'); 

echo $response->body();
    }
}
