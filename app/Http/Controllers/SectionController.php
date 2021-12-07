<?php

namespace App\Http\Controllers;

use App\Models\PermissionComponent;
use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Gate;
use App\Models\Permission;
use App\Models\UserPart;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Gate::allows('permission-view')) {
            return abort(401);
        }
        return view('admin.Section.index')->with('sections', Section::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Gate::allows('permission-add')) {
            return abort(401);
        }
        return view('admin.Section.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Gate::allows('permission-add')) {
            return abort(401);
        }
        $this->validate($request, [
            'section' => 'required'
        ]);
        Section::create($request->all());

        return redirect()->route('section.index');
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
        if (!Gate::allows('permission-edit')) {
            return abort(401);
        }
        return view('admin.sections.edit')->with('sections', Section::find($id));
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
        if (!Gate::allows('permission-edit')) {
            return abort(401);
        }
        Section::find($id)->update($request->all());

        return redirect()->route('sections.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Gate::allows('permission-delete')) {
            return abort(401);
        }
        Section::find($id)->delete();

        return redirect()->back();
    }
}
