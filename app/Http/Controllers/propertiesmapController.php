<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use View;
use DB;
use App\propertiesmapModel;

class propertiesmapController extends Controller
{
    // method to return links to view

    public function showLinks(){
    	$list = propertiesmapModel::select(['house_id','user_id','street','city','state','zip','latitude','longitude'])->get();
    	
    	return view::make('properties',compact('list'));
    }
}
