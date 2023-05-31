<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class EvaluacionController extends BaseController
{
    public function index()
    {

        // Consulta
        /*
         * select docentes.*, asignaturas.*, estudiantes.* from docentes
         * join asignaturas on docentes.asignatura = asignatura.id
         */

        return view('evaluacion/index');
    }
}
