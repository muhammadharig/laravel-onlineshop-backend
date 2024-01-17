<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // index
    public function index()
    {
        return view('pages.user.index');
    }

    // create
    public function create()
    {
        return view('pages.dashboard');
    }

    // store
    public function store(Request $request)
    {
        return view('pages.dashboard');
    }

    // show
    public function show($id)
    {
        return view('pages.dashboard');
    }

    // edit
    public function edit($id)
    {
        return view('pages.dashboard');
    }

    // update
    public function update(Request $request, $id)
    {
        return view('pages.dashboard');
    }

    // destroy
    public function destroy($id)
    {
        return view('pages.dashboard');
    }
}
