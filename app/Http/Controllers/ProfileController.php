<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ProfileSetting;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile')->with('setting', ProfileSetting::first());
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
        //
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
    public function settingBack()
    {

        $profile = ProfileSetting::first();



        return $profile;
    }
    public function storeContent(Request $request)
    {   
        $profile = ProfileSetting::first();
        $profile->address =  $request->address; 
        $profile->city =  $request->city; 
        $profile->country =  $request->country; 
        $profile->email =  $request->email; 
        $profile->phonenumber =  $request->phonenumber; 
        $profile->whatsapp =  $request->whatsapp; 
        $profile->facebook =  $request->facebook; 
        $profile->instagram =  $request->instagram; 
        $profile->twitter =  $request->twitter; 
        $profile->save();
        return redirect()->back();
    }
    public function storeUserSetting(Request $request , $id)
    {


        $user = User::find($id);
        $user->name =  $request->name; 
        $user->email =  $request->email; 
        $user->save();
        return redirect()->back();
    }
    
}
