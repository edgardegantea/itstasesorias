<?php

namespace App\Controllers\Estudiante;

use App\Controllers\BaseController;

class EstudianteController extends BaseController
{
    public function __construct()
    {
        if (session()->get('rol') != 'estudiante') {


            echo '<div><h1 style="text-align: center; padding-top: 100px;">Sistema en costrucción</h1></div>';

            
            print '<div style="text-align: center"><a href="' . base_url() . 'estudianteLogout';
            echo '" style="background-color: #0476D9; /* Green */
  border: none;
  border-radius: 10px;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;">Cerrar sesión</a><div>';

            exit;
        }
    }

    public function index()
    {
        return view('estudiante/dashboard');
    }
}
