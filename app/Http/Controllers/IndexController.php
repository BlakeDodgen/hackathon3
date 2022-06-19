<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Animal;
use App\Models\Owner;

class IndexController extends Controller
{
    public function index()
    {

        $animals = Animal::orderBy('name')                     
                  ->limit(15)      
                  ->get();
                
        return view('index.index', compact('animals'));

    }

    public function search()
    {    
        if (isset($_GET['search'])) {

            $page = 1;
            $name = $_GET['search'];
            $result = Animal::where('name', 'like', '%'.$name.'%')
                        ->orWhere('species', 'like', '%'.$name.'%')
                        ->orWhere('breed', 'like', '%'.$name.'%')
                        ->orderBy('name')
                          
                        ->take(20) 
                        ->get();

            $ressult_next = Animal::where('name', 'like', '%'.$name.'%')
                        ->orWhere('species', 'like', '%'.$name.'%')
                        ->orWhere('breed', 'like', '%'.$name.'%')
                        ->orderBy('name')
                        ->skip(20)  
                        ->take(20) 
                        ->get();
            
             } else {
               
            $name = "";
            $result = []; //change to empty Collection 
             };

            if (count($result)===0) {
                $name = " No records finded";
            } 
            $number_of_records = count($result);
            //  dd($result);    
        return view('animals.search', [
            'name' => $name,
            'result' => $result,
            'number_of_records'=> $number_of_records,
            'page' => $page   
        ]);
    }

    public function search_next($search)
    {
            $page = 1;
            $next_page = $page * 2;
            $name = $search;
            $result_next = Animal::where('name', 'like', '%'.$name.'%')
                        ->orWhere('species', 'like', '%'.$name.'%')
                        ->orWhere('breed', 'like', '%'.$name.'%')
                        ->orderBy('name')
                        ->skip($next_page)  
                        ->take(20) 
                        ->get();
            
             
               
            $name = "";
            $result = []; //change to empty Collection 

            

            return view('animals.search_next', [
                'name' => $name,
                'result' => $result,
                 'result_next' => $result_next,
                 'next_page' => $next_page    
            ]);
    }
}
