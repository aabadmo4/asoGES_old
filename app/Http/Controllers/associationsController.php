<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models;

class associationsController extends Controller
{
    public function getById($id) {
        $_associations=new Models\Associations();
        return $_associations->getById($id);
    }
}
