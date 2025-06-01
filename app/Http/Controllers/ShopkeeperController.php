<?php

namespace App\Http\Controllers;

use App\Models\Shopkeeper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ShopkeeperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('register_shopkeeper');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new Shopkeeper();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->password = Hash::make($request->password); 
        $data->save();
        return redirect()->back()->with('message', 'Shopkeeper added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Shopkeeper $shopkeeper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shopkeeper $shopkeeper)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Shopkeeper $shopkeeper)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shopkeeper $shopkeeper)
    {
        //
    }
}
