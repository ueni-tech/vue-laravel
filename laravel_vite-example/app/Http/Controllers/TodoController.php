<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TodoController extends Controller
{
    public function getTodoList()
    {
      $sql = "SELECT * FROM todos";
      $items = DB::select($sql);
      Log::info($items);
      return $items;
    }
}
