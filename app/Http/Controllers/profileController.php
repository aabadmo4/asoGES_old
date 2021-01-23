<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class profileController extends Controller {

    public function profile() {
        session_start();
        if (isset($_SESSION["logged_user"])) {
            echo '<script>alert("No tiene permisos asignados para !");</script>';
            $url = 'http://nubezar.corp/APIRest/_Partners/?opcion=getPartner&id=' . $_SESSION["logged_user_id"];
            $data = json_decode(file_get_contents($url), true);
            if (empty($data['id'])) {
                echo "El id solicitado no corresponde a ningun socio: error consume webservice json";
                exit();
            }
            return view('miperfil')->with('data', $data);
        } else {
            $err = "error002";
            return view("welcome", compact("err"));
        }
    }

    public function miperfil_config() {
        return view("welcome");
    }

    public function resetPasssword() {
        return view("welcome");
    }

    public function subirArchivo(Request $request) {
        //Recibimos el archivo y lo guardamos en la carpeta storage/app/public
        $nombre = $request->file('archivo')->getClientOriginalName();
        $request->file('archivo')->storeAs('public', $nombre);
        $oldname = $request->file('archivo')->getFilename();
        $url = 'http://nubezar.corp/APIRest/?opcion=newDocument&name=' . $oldname . '&docname=' . $nombre . '&user_id=1';
        $data = json_decode(file_get_contents($url), true);
        if (empty($data['id'])) {
            echo "El id solicitado no corresponde a ningun socio";
            exit();
        }
        dd("El documento se ha subido correctamente. Documento:" . $nombre);
        return view("miperfil");
    }

}
