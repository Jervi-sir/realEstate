<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Wilaya;
use App\Models\Announce;
use App\Models\Announcetype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnounceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Announcetype::all();
        $tags = Tag::all();
        $wilayas = Wilaya::all();
        return view('announce.create',[
            'types'     => $types,
            'tags'      => $tags,
            'wilayas'    => $wilayas,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $annnce = new Announce();
       $annnce->announcetype_id  = Announcetype::where('id', $request->type)->first()->id;
       $annnce->user_id = Auth()->user()->id;
       $annnce->wilaya_id  = Wilaya::where('number', $request->wailaya)->first()->id;
       $annnce->name  = $request->name;
       $annnce->price  = $request->price;
       $annnce->location  = $request->location;
       $annnce->images  = ' ';
       $annnce->description  = $request->description;
       $annnce->save();

       return back();
       //next is to save in tag database
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
