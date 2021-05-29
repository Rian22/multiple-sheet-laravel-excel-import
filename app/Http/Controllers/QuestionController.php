<?php

namespace App\Http\Controllers;

use App\Imports\ExampleImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * IMPORT
     * 
     */
    public function import(Request $request){
        $data = Excel::toCollection(new ExampleImport, request()->file('file'));

        // Filter data by sheet
        $firstSheet     = $data[0];
        $secondSheet    = $data[1];

        // How to get question data
        $questions = [];
        foreach($secondSheet as $key => $row){
            if($key > 0){
                array_push($questions, $row);
            }
        }
        // return $questions;

        return $data;
    }
}
