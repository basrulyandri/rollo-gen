<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApotekerRequest;
use App\Apoteker;

class ApotekerController extends Controller
{
    public function index()
    {        
        $apotekers = Apoteker::paginate(20);
        return view('apotekers.index',compact(['apotekers']));
    }

    public function create(){
        return view('apotekers.create');
    }

    public function store(ApotekerRequest $request)
    {
        $apoteker = Apoteker::create($request->all());

        return redirect()->back();
    }

    public function show($id)
    {
        $apoteker = Apoteker::findOrFail($id);

        return response()->json($apoteker);
    }

    public function update(ApotekerRequest $request, $id)
    {
        $apoteker = Apoteker::findOrFail($id);
        $apoteker->update($request->all());

        return response()->json($apoteker, 200);
    }

    public function destroy($id)
    {
        Apoteker::destroy($id);

        return response()->json(null, 204);
    }
}