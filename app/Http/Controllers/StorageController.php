<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StorageController extends Controller {

    public function index() {
        return \View::make('new');
    }

    public function save(Request $request) {

        //obtenemos el campo file definido en el formulario
        $file = $request->file('file');

        //obtenemos el nombre del archivo
        $nombre = $file->getClientOriginalName();

        $url = 'http://nubezar.corp/APIRest/?opcion=newDocument&name=ej&namedocu='.$nombre.'?'.$user_id=1;
        //file_get_contents($url);
        
        //indicamos que queremos guardar un nuevo archivo en el disco local
        \Storage::disk('local')->put($nombre, \File::get($file));

        return "archivo guardado";
    }

}
