<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\StorageUpdate;

class StorageUpdateController extends Controller
{
    //
    public function edit(Request $request)
    {
        $id = $request->input('id');
        $storage = StorageUpdate::find($id);
        return view('storageedit', ['data' => $storage]);
    }

    public function update(Request $request)
    {
        //
        $this->validate($request, [
            'product' => 'required',
            'amount' => 'required',
        ]);

        $id = $request->input('id');
        $update = StorageUpdate::find($id);

        $update->product = $request->input('product');
        $update->amount = $request->input('amount');
        $update->save();
        return redirect('storage')->with('success', 'Data Updated');
    }

    public function delete(Request $request)
    {
        $id = $request->input('id');
        $remove = StorageUpdate::find($id);
        $remove->delete();
        return redirect("storage");
    }

}
