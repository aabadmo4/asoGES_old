<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\Events\ResetPwdNewToken;

class resetPasswordController extends Controller {

    public function newToken($user_id) {
        if ($pwdtoken = Models\ResetPwdToken::newToken($user_id)) {
            echo "Configurar nueva contraseña en este enlace <br>";
            echo "<a href='http://nubezar.corp:8000/resetpassword/setNewPassword/$user_id/$pwdtoken'>aquí</a>";
        } else {
            $data = array("error" => "error obtener token de reseteo password.");
            return view("error.err_page")->with('data', $data);
        }
    }

    public function updatePassword($user_id, $newpass, $pwd_token) {
        if ($pwd = Models\ResetPwdToken::updatePassword($user_id, $newpass, $pwd_token)) {
            $result = "Contraseña actualizada";
            $data = array("user_id" => $user_id,
                "pwd_token" => $pwd_token,
                "result" => $result);
            //return view("users.resetpassword")->with('data', $result);
            return view("users.resetpasswordok");
        } else {
            $data = array("error" => "Error, no se ha actualizado la contraseña.");
            return view("error.err_page")->with('data', $data);
        }
    }

    public function resetPasswordForm($user_id, $pwd_token) {
        $data = array("user_id" => $user_id,
            "pwd_token" => $pwd_token);
        return view("users.resetpassword")->with('data', $data);
    }

    public function conf(Request $request) {
        if ($request->txtnewpassword1 == $request->txtnewpassword2) {
            return redirect('/resetpassword/token/' . $request->user_id . '/' . $request->txtnewpassword1 . '/' . $request->pwd_token);
            //header("location:http://nubezar.corp:8000/resetpassword/token/$request->user_id/$request->txtnewpassword1/$request->tpwd_token");
        } else {
            $data = array("error" => "Las contraseñas no coinciden.");
            return view("error.err_page")->with('data', $data);
        }
    }

    private function generateToken($user_id) {
        if ($pwdtoken = Models\ResetPwdToken::newToken($user_id)) {
            //echo "Configurar nueva contraseña en este enlace <br>";
            //echo "<a href='http://nubezar.corp:8000/resetpassword/setNewPassword/$user_id/$pwdtoken'>aquí</a>";
            return $pwdtoken;
        } else if ($pwdtoken == false) {
            $data = array("error" => "Error al generar el token.");
            return view("error.err_page")->with('data', $data);
        }
    }

    public function resetPassword(Request $request) {
        if ($request->input("txtusername") != NULL) {
            event(new ResetPwdNewToken($request->input("txtusername"), $this->generateToken("21")));
            return view("users.mailresetok")->with('data', "sds");
            
        }
    }

}
