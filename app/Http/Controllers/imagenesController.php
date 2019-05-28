<?php

namespace imagenes\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;
use imagenes\Imagenes;
use Illuminate\Support\Facades\DB;

class imagenesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imagen = DB::SELECT("SELECT * FROM img");
        return view ('index',compact('imagen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('imagenes');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $name = time().$file->getClientOriginalName();
            $path = public_path('/uploadimages');
            $file->move($path, $name);
        }

        $imagen = New Imagenes();
        $imagen->nombre = $request->nombre;
        $imagen->image = $name;
        $imagen->save();
        return redirect('/imagenes')->with('status','Imagen agregada');
        
    }


   /*  if ($request->hasFile('avatar')) {
        $file = $request->file('avatar');
        $name = time().$file->getClientOriginalName();
        $destinationPath = public_path('/images');
        $file->move($destinationPath, $name);
    } */

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
