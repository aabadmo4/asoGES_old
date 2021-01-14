<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class miController extends Controller
{
    public function index()
    {
        return view("welcome");
    }
    public function socios()
    {
        return view("socios");
    }
    public function create_socio()
    {
        return view("crear_socio");
    }
    public function borrar_socio($id)
    {
        //return view("borrar_socio",compact("id"));
        return "borra user #".$id;
    }
    public function actas()
    {
        return view("actas");
    }
    public function info_socio($id)
    {
        return view("info_socio");
    }
    public function buscar($termino)
    {
        return view("buscar",compact("termino"));
    }
    
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
    public function contactar()
    {
        return view("contacta");
    }
    public function logout()
    {
        session_start();
        session_destroy();
        return view("welcome");
    }
}
