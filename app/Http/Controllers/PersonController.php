<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Person;

class PersonController extends Controller
{
	// select all
    public function all()
    {
    	return Person::all();
    }

    // select by id
    public function show($id)
    {
    	return Person::find($id);
    }

    // insert data
    public function store(Request $request)
    {
    	return Person::create($request->all());
    }

    // update data
    public function update($id, Request $request)
    {
    	$person = Person::find($id);
    	$person->update($request->all());
    	return $person;
    }

    // delete data
    public function delete($id)
    {
    	$person = Person::find($id);
    	$person->delete();
    	return 204;
    }


}
