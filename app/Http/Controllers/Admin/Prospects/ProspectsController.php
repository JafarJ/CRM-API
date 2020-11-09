<?php

namespace App\Http\Controllers\Admin\Prospects;

use App\Models\Prospect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Prospects\StoreProspectRequest;

class ProspectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Show all prospects and manage
        return view('admin.prospects.index', ['prospects' => Prospect::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Go to prospects creation form
        return view('admin.prospects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProspectRequest $request)
    {
        // store prospects
        $prospect = Prospect::create($request->only('name', 'surname', 'email', 'created_by', 'modified_by'));

        if($request->hasFile('profile_image')){
            $path = $request->profile_image->store('public/prospects/profiles/images');
            $prospect->update(['profile_image' => basename($path)]);
        }

        $UserID = Auth::user()->id;
        $prospect->update(['created_by' => $UserID]);
        $prospect->update(['modified_by' => $UserID]);

        return redirect()->route('admin.prospects.dashboard')->with('success', 'Succesfully created a new Prospect');

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
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'nullable|email|unique:prospects,email,'.$request->id,
            'profile_image' => 'nullable|mimes:png,jpg,jpeg|max:2000',
            'modified_by' => 'nullable'
        ]);

        $prospect = Prospect::find($request->id);
        $UserID = Auth::user()->id;

        if($request->hasFile('profile_image')){
            $path = $request->profile_image->store('public/prospects/profiles/images');
            $prospect->update(['profile_image' => basename($path)]);
        }

        $prospect->name = $request->name;
        $prospect->surname = $request->surname;
        $prospect->email = $request->email;
        $prospect->modified_by = $UserID;

        $prospect->save();

        return redirect()->route('admin.prospects.dashboard')->with('success', 'Succesfully updated Prospect with ID: '.$request->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $prospect = Prospect::find($request->id);
        $prospect->delete();
        return redirect()->route('admin.prospects.dashboard')->with('success', 'Succesfully deleted Prospect with ID: '.$request->id);
    }
}
