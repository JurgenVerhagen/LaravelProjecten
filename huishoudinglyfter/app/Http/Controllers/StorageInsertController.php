<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\StorageInsert;

class StorageInsertController extends Controller
{
    //
    function save(Request $req)
    {
        $storage = new StorageInsert;
        $storage->product = $req->product;
        $storage->amount = $req->amount;
        $storage->save();
        return back();
    }
}
