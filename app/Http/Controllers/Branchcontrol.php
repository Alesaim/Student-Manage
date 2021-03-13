<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch;

class Branchcontrol extends Controller
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
        return view('addbranch');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $branch = new Branch;
        $branch->bshort = $request->bshort;
        $branch->bfull = $request->bfull;
        $branch->save();
        return redirect('branchshow');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $branches = Branch::paginate(3);
        return view('branchdetails', compact('branches'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $branches = Branch::find($id);
        return view('branchedit', compact('branches'));
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
        $branch = Branch::find($id);
        $branch->bshort = $request->bshort;
        $branch->bfull = $request->bfull;
        $branch->save();
        return redirect('branchshow');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $branch = Branch::find($id);
        $branch->delete();
        return redirect('branchshow');
    }
}
