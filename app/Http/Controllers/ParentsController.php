<?php

namespace App\Http\Controllers;

use App\Models\Parents;
use Illuminate\Http\Request;

class ParentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['parents']=Parents::paginate(5);

        return view('parents.index',$datos );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('parents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //$datosParents = request()->all();
        $datosParents = request()->except('_token');
        
        Parents::insert($datosParents);
        return response()->json($datosParents);
    }

    /**
     * Display the specified resource.
     */
    public function show(Parents $parents)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $parents=Parents::findOrFail($id);

        return view('parents.edit', compact('parents') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosParents = request()->except('_token','_method');
        Parents::where('id','=',$id)->update($datosParents);
        
        $parents=Parents::findOrFail($id);
        return view('parents.edit', compact('parents') );

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Parents::destroy($id);
        return redirect('parents');
    }
}
