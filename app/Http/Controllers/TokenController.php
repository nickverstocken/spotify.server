<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TokenController extends Controller
{
    public function index(){
        $url = 'https://accounts.spotify.com/api/token?grant_type=client_credentials';

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization:Basic OGEyZmNhMjU5ZGFjNDZhNDljYmEwY2U0OGI1MjAwMTc6OTQzYzgxZmM4ZmU3NDhiOGFhMjIxMjFlMjgzNjEyZmQ='));
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec ($ch);
        //$info = curl_getinfo($ch);
        //$http_result = $info ['http_code'];
        curl_close ($ch);
        return json_decode($output, true);
    }
}
