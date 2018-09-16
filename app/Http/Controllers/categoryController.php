<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\categories;

class categoryController extends Controller
{
    public function addcategory(){
    	return view('admin.category.addCategory');
    }

    public function savecategory(Request $request){
    	// dd($request->all());

    	$cat = new categories();

    	$cat->categoriesName = $request->categoriesName;
    	$cat->categoryDescription = $request->categoryDescription;
    	$cat->publicationStatus = $request->publicationStatus;
    	$cat->save();
    	return redirect('/add-category')->with('msg', 'Category Save Successfully');

    }
}
