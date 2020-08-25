<?php

namespace App\Http\Controllers;

use App\Item;
use App\User;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $this->validate($request, [
            'title' => 'required|min:10|max:255|string',
            'body' => 'required|min:15|max:1000|string',
            'image' => 'image|mimes:jpeg,jpg,png,gif|required|max:10000',
            'location' => 'required|min:10|max:255|string',
            'recompense' =>'min:100|max:5000|numeric',
            'is_found' => 'required|bool',
            'is_published' => 'required|bool',
            'category_id' => 'required|exists:category,id',
            'region_id' => 'required|exists:region,id',
            'user_id' => 'required|exists:users,id',
            'listing_type' => 'required|in:lost,found'
        ]);

        $item = Item::created($validatedData);

        return response()->json($item, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
