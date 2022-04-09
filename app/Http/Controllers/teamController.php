<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class teamController extends Controller
{
    public function team()
    {
        return view('web/team');
    }

public function addCustomer(){
    $newCat=new Customers();
    $newCat->name="customer1";
    $newCat->image="customer1";
    $newCat->description="customer1";
    $newCat->save();

}

public function selectCustomer($id){
    $selectcat=Customers::find($id);
    return response($selectcat);
    // print_r($selectcat);
}

public function listAll(){
    
    $selectall=Customers::get();
    return response($selectall);

}

}
