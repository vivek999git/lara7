<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contract;
use App\Jobs\SendWelcomeEmailJob;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendWelcomeMail;

class ContactController extends Controller
{
    public function list(Request $request)
    {
        $users = Contract::all(); // Or paginate(), etc.
        //print_r($request->all());
        if ($request->expectsJson()) {
            return response()->json([
                'status' => true,
                'data' => $users
            ]);
        }
       
        return view('list', compact('users'));
    }

    public function add()
    {
        $data2 = (object) collect([
            //'title'=>'Customer  Add',
            'url'=>url('api/save'),
        ])->all();     

        return view('add',compact('data2'));
    }

    public function save(Request $request)
    {
         //print_r($request->all());

        $validated = $request->validate([
            'name' => 'required',
            'company'=> 'required',
            'phone' => 'required|numeric|digits:10',
            'email' => 'required|email|unique:contracts',
         ],[
            'phone.required'=>"Pri. Phone can't be empty",
            'phone.unique'=>"Pri. Phone must be unique",
         ]
        );

        $contact = Contract::create($validated);
        $this->sendMail($request->email);
        if ($request->expectsJson()) 
        {
            return response()->json([
                'message' => 'Contact saved successfully.',
                'data' => $contact
            ], 201);
        }
         
         return redirect()->route('form.list')->with('success', 'Contact saved successfully!');
    }


    public function sendMail($to)
    {
       // $to='hello.vivek.91199@gmail.com';
        $msg='Testing Mail By Vivek';
        $sub='Test Laravel Mail';
        $details = [
            'name' => 'John Doe'
        ];

       // SendWelcomeEmailJob::dispatch($email, $details);
        Mail::to($to)->send(new SendWelcomeMail($msg,$sub));

        return 'Mail will be sent in the background!';
    }
}
