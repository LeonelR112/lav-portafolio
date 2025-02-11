<?php

namespace App\Http\Controllers;

use App\Models\CertificadosModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $certificados = CertificadosModel::orderBy('orden', "ASC")->get();
        return view("home", compact("certificados"));
    }
}
