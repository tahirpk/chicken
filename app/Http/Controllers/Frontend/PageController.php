<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Page;
use Config;
use Input;
use Mail;
use Session;
use Redirect;
class PageController extends Controller
{
    //
    public function pages($slug){
        $page=Page::where('slug',$slug)->first();
        return view(Config::get('config.front_template') . '.pages.frontend.home.page')->withPage($page);
    }
    public function contact(){
        $page=Page::where('slug','contact-us')->first();
        return view(Config::get('config.front_template') . '.pages.frontend.home.contact')->withPage($page);
    }
    public function store(){
        $all=Input::all();
        $to      = 'tayyab@netsol-intl.com';
        $subject = $all['subject'];
        $message = $all['message'];
        $headers = 'From: '.$all['email'].' . "\r\n" .Reply-To: webmaster@example.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
Session::flash('message', 'Email sent to administrator, our team will contact you very soon regarding your email');
       return Redirect::to('contact-us');
       if(mail($to, $subject, $message, $headers)){
           Session::flash('message', 'Email sent to administrator, our team will contact you very soon regarding your email');
       return Redirect::to('contact-us');
       }else{
           Session::flash('message', 'Sorry email sending fail!');
       return Redirect::to('contact-us');
       }
       
        
    }
}
