<?php

namespace App\Http\Controllers\Api\V1;

use App\Knowledge;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KnowledgesController extends Controller
{
    public function index()
    {
        return Knowledge::all();
    }

    public function show($id)
    {
        return Knowledge::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $knowledge = Knowledge::findOrFail($id);
        $knowledge->update($request->all());

        return $knowledge;
    }

    public function store(Request $request)
    {
        $knowledge = Knowledge::create($request->all());
        return $knowledge;
    }

    public function destroy($id)
    {
        $knowledge = Knowledge::findOrFail($id);
        $knowledge->delete();
        return '';
    }
}
