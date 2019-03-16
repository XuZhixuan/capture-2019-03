<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class PeopleController extends Controller
{
    public function show(Request $request)
    {
        $column = $request->method == '0' ? 'user_id' : 'name';
        $people = Person::where($column, 'like', $request->value)->get();

        return view('people.show', compact('people'));
    }
}
