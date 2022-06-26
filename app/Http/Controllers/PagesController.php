<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Mail\Details;
use App\Mail\ContactMail;
use App\Mail\clientInfo;

class PagesController extends Controller
{
    public function sendMail(Request $request)
    {
        $data = $request->except('_token');



        \Mail::to($request->email)

                ->bcc([  
                    // 'info@boatsbaja.com',
                    // 'edgardodominguez.h@hotmail.com',
                    // 'mail@arespinto.com',
                    'polarisdorantes@live.com.mx',
                    'mauri.bmxxx@gmail.com',
                    'code.bit.mau@gmail.com',
                ])

            ->send(new ContactMail($data));



            die(json_encode(['response'=>'success', 'voucher'=> $request['voucher']]));
    }
}
