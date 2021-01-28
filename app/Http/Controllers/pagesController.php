<?php

namespace App\Http\Controllers;
use App\Models;
use Illuminate\Http\Request;

class pagesController extends Controller {

    function __construct() {
        session_start();
    }

    public function configPage() {
        return view('config');
    }

    public function notifnotread() {
        echo Models\Notifications::countNotificationsNotRead();
    }

}
