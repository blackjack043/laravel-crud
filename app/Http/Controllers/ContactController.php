<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact12;
use App\Shop;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoEmail;



class ContactController extends Controller
{
    public function submit(Request $r)
    {
        $Contact = new Contact12();
        $Contact->name = $r->input('label');
        $Contact->ispolnitel = $r->input('ispolnitel');
        $Contact->text = $r->input('text');

        $Contact->save();

        $validation = $this->validate($r, [
            'text' => 'required|min:5|max:10',
            'ispolnitel' => 'required|min:5|max:10',
            'label' => 'required|min:5|max:10',
        ]);
        dd($validation);

    }

    public function update(Request $r)
    {
        if(Auth::user()) {
            DB::table('shops')
                ->where('id', '=', $r->input('id'))
                ->update(['articul' => $r->input('articul'), 'label' => $r->input('label'), 'status' => $r->input('status')]);
        }

        return view('page2', ['data' => Shop::all()]);
    }

    public function delete(Request $r)
    {
        if(Auth::user() && Auth::user()->admin == 1) {
            DB::table('shops')->where('id', $r->input('id'))->delete();
        }


        return view('page2', ['data' => Shop::all()]);
    }

    public function submit2(Request $r)
    {
       // if (Gate::allows('proverka')) {
       //     return response(400);
       // };
        $Contact = "";
        $Contact = new Shop();
        $Contact->articul = $r->input('articul');
        $Contact->label = $r->input('label');
        $Contact->status = $r->input('status');
        $json = '{"table_id":2,"food_id":4,"time":"333","status":1}';
        $Contact->meta = $json;
        $alert = "Авторизуйтесь для добавления";
        if (Auth::check()) {
            $Contact->save();
            $alert = "";
        }
        return redirect()->route('page2',  ['data' => Shop::all(), 'data2' => $alert]);;
        //return view('page2', ['data' => Shop::all(), 'data2' => $alert]);
    }

    public function myData()
    {
        // $contact = new Contact12();
        return view('page2', ['data' => Shop::all()]);
    }

}
