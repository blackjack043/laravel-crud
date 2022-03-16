<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact12;
class ContactController extends Controller
{
    public function submit(Request $r) {
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
    
    };


}
