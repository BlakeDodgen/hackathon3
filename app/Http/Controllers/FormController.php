<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateFormRequest;
use App\Models\Animal;
use App\Models\Owner;
use App\Models\Image;

class FormController extends Controller
{
    public function create()
      
  {      

   
    $record = new Animal;
    
   
    return view('index.create', compact('record'));
}

public function store(CreateFormRequest $request)
    {
        // prepare empty object
        $record = new Animal;
        
        $record->name = $request->input('name');
        $record->species = $request->input('species');
        $record->breed = $request->input('breed');
        $record->age = $request->input('age');
        $record->weight = $request->input('weight');



        // save the record into DB
        $record->save();
        session()->flash("success_message", "Animal has been saved succesfully");

        return redirect( url('/home') );
    }

    // public function edit($id)
    // {
    //     $animal = Animal::findOrFail($id);

    //     return view('/create', compact('movie'));
    // }


}
