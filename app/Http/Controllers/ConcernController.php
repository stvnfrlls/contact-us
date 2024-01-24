<?php

namespace App\Http\Controllers;

use App\Models\Concern;
use App\Http\Requests\StoreConcernRequest;

class ConcernController extends Controller
{
    public function index()
    {
        $concerns = Concern::all();

        return view('concerns.index', ['concerns' => $concerns]);
    }
    public function store(StoreConcernRequest $request)
    {
        $validatedData = $request->validated();
        Concern::create($validatedData);

        return redirect()->route('form');
    }
    public function show(Concern $concern)
    {
        return view('concerns.show', ['concern' => $concern]);
    }
    public function destroy(Concern $concern)
    {
        $concern->delete();

        return redirect()->route('concerns.index');
    }
}
