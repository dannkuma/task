<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\support\Facades\DB;

class TestController extends Controller
{
    public function index()
     {
        //Eloquent(エロクアント)
        $values = Test::all();

        //件数をカウントする
        $count = Test::count();

        //指定したIDのインスタンスを返す
        $first = Test::findOrFail(1);

        $whereBBB = Test::where('text', '=', 'bbb')->get();

        //Facades
        $queryBuilder = DB::table('tests')->where('text', '=', 'bbb')
        ->select('id', 'text')
        ->get();

        dd($values, $count, $first, $whereBBB, $queryBuilder);
        
        return view('tests.test', compact('values'));
     }
}
