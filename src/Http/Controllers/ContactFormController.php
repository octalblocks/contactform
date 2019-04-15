<?php

namespace Octalblocks\ContactForm\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Octalblocks\ContactForm\Models\ContactForm;

/**
 * summary
 */
class ContactFormController extends Controller
{
    public function index(){
    	return view('contactform::contact');
    }

    public function sendMail(Request $request){
    	ContactForm::create($request->all());

    	return redirect(route('show-contact'));
    }
}