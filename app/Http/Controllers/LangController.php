<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangController extends Controller
{
    

    protected function getMessages()
        {
            return $messages = [

                "Home"=> __('msg.Home'),
                "About"=> __('msg.About'),
                "Catagories"=> __('msg.Catagories'),
                "Contactus"=> __('msg.Contactus'),
             
                ];
        }
}
