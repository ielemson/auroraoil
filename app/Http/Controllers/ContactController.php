<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessageMail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{

    public function submit(Request $request)
    {
          $validator = Validator::make($request->all(), [
        'name'         => 'required|string|max:120',
        'email'        => 'required|email|max:150',
        'phone'        => 'required|string|max:30',
        'company'      => 'nullable|string|max:120',
        'subject'      => 'required|string|max:150',
        'location'     => 'required|string|max:150',
        'message_body' => 'required|string|max:5000',
        'consent'      => 'required|accepted',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status'  => false,
            'message' => $validator->errors()->first(),
            'errors'  => $validator->errors(),
        ], 422);
    }

    $validated = $validator->validated();

    Mail::to('info@auroraoil.co.uk')
        ->send(new ContactMessageMail($validated));

    return response()->json([
        'status'  => true,
        'message' => 'Your enquiry has been submitted successfully. Our team will respond shortly.',
    ]);
}
}