<?php

namespace App\Http\Controllers\web;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $Validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string  '
        ]);
        if ($Validator->fails()) {
            $errors = $Validator->errors();
            return redirect(url('/#three'))->withErrors($errors);
        }
        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);
        session()->flash('success', 'your message sent successfully');
        return redirect(url('/#three'));
    }
}
