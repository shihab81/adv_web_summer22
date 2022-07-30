<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function contact(){
        return view('contact');
    }
    public function myprofile(){
        $name = "<span style='color:red'>Tanvir Ahmed</span>";
        $id = "<span style='color:red'>18-38131-2</span>";
        $dob = "12333455";
        $names = array("Tanvir","Sabbir","karim","Rahim");

        return view('myprofile')
        ->with('name',$name)
        ->with('id',$id)
        ->with('names',$names);
        ;
    }
    public function home(){
        return view('home');
    }
    
    public function ourTeams(){
        return view('ourTeams');
    }
    public function aboutUs(){
        return view('aboutUs');
    }
    public function contactUs(){
        return view('contactUs');
    }
    public function product(){
        return view('product');
    }
    
    
    
}