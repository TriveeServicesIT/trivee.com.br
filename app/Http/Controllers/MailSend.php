<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use \App\Mail\SendMail;
use App\Models\SiteContact;

class MailSend extends Controller
{
    public function storeSiteContact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required'
        ]);

        SiteContact::create($request->all());

        $details = [
            'name'    => $request->get('name'),
            'phone'   => $request->get('phone'),
            'email'   => $request->get('email'),
            'message' => $request->get('message')
        ];

        \Mail::to('info@trivee.com.br')->send(new SendMail($details));

        Alert::success('Sua mensagem foi registrada!', 'Em breve entraremos em contato.');

        return redirect()->back();
    }

}
