<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;


class mycontroller extends Controller
{
    function insert(Request $req){
       $name= $req->get('sname'); 
       $rollno = $req->get('srollno');
       $simage = $req->file('image')->GetClientOriginalName();
       //move uploafe file
       $req->image->move(public_path('image'),$simage);
     
       $prod = new product();
       $prod-> SName = $name;
       $prod-> SRollno = $rollno;
       $prod -> SImage = $simage;
       $prod-> save();
       return redirect('index');

    }
}
