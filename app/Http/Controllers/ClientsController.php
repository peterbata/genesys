<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$clients = Client::orderBy('lname', 'asc')->paginate(3);
		return view('clients.index')->with('clients', $clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'fname' => 'required',
			'lname' => 'required',
			'dob' => 'required'
		]);

		// Create Post
		$client = new Client;
		$client->fname = $request->input('fname');
		$client->lname = $request->input('lname');
		$client->dob = $request->input('dob');
		$client->notes = $request->input('notes');
		$client->user_id = auth()->user()->id;
		$client->save();

		return redirect('/clients')->with('success', 'Client Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$client =  Client::find($id);
		return view('clients.show')->with('client', $client);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$client =  Client::find($id);
		return view('clients.edit')->with('client', $client);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'fname' => 'required',
			'lname' => 'required',
			'dob' => 'required'
		]);

		// Edit Post
		$client = Client::find($id);
		$client->fname = $request->input('fname');
		$client->lname = $request->input('lname');
		$client->dob = $request->input('dob');
		$client->notes = $request->input('notes');
		$client->save();

		return redirect('/clients')->with('success', 'Client Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$client = Client::find($id);
		$client->delete();

		return redirect('/clients')->with('success', 'Client Deleted');
    }
}
