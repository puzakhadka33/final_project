<?php

namespace App\Http\Controllers;

use App\Models\UserPart;
use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Gate;
use App\Models\Permission;
use App\Models\Section;

class UserPartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd('hello');
        return view('admin.user_parts.index')->with('user_parts', UserPart::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user_parts.create')->with('permissions', Permission::all())
                                            ->with('sections', Section::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_part = UserPart::create($request->all());
        $user_part->permissions()->sync($request->permission);

        return redirect()->route('user_part.index');
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
        return view('admin.user_parts.edit')->with('user_parts', UserPart::findOrFail($id))
        ->with('permissions', Permission::all())
        ->with('sections', Section::all());
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
        $User_Part = UserPart::findOrFail($id);
        $User_Part->update($request->all());
        $User_Part->permissions()->sync(array_filter((array) $request->permission));

        return redirect()->route('userpart.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        UserPartphp::find($id)->delete();
        return view('admin.user_parts.index');
    }
}
