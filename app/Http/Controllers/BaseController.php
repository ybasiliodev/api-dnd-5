<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController
{
    protected $target;

    public function index(Request $request)
    {
        return $this->target::all();
    }

    public function show(int $id)
    {
        $item = $this->target::find($id);
        if(is_null($item)) {
            return response()->json($item, 204);
        }
        return response()->json($item);
    }

    public function update(int $id, Request $request)
    {
        $item = $this->target::find($id);
        if(is_null($item)) {
            return response()->json(['error' => 'Resource not found'], 404);
        }
        $item->fill($request->all());
        $item->save();

        return $item;
    }

    public function destroy(int $id)
    {
        $count = $this->target::destroy($id);
        if ($count === 0) {
            return response()->json(['error' => 'Not Found'], 404);
        }
        return response()->json('', 204);
    }

}
