<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class bookInsert extends Controller
{

    public function insert(Request  $request){
        DB::insert('insert into books ( name, publisher, pages, price) values (?, ?, ?, ?)',
            [$request->input('name'), $request->input('p_name'), $request->input('pages'), $request->input('price'),]);
    }
}
