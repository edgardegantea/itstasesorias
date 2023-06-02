<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EstudianteModel;

class EstudianteController extends BaseController
{
    public function login()
    {
        $data = [];

        if ($this->request->getMethod() == 'post') {

            $rules = [
                'numControl' => 'required|min_length[3]|max_length[50]',
                'password' => 'required|min_length[8]|max_length[255]|validateEstudiante[numControl,password]',
            ];

            $errors = [
                'password' => [
                    'validateEstudiante' => "Número de control o contraseña incorrectos",
                ],
            ];

            if (!$this->validate($rules, $errors)) {

                return view('estudiante/auth/login', [
                    "validation" => $this->validator,
                ]);

            } else {
                $model = new EstudianteModel();

                $estudiante = $model->where('numControl', $this->request->getVar('numControl'))->first();

                $this->setUserSession($estudiante);

                if($estudiante['rol'] == 'estudiante') {
                    return redirect()->to(base_url('estudiante'));
                }
            }
        }
        return view('estuidianteLogin');
    }


    private function setUserSession($estudiante)
    {
        // 'carrera', 'numControl', 'rol', 'nombre', 'apaterno', 'amaterno', 'curp', 'email', 'password', 'foto', 'sexo', 'bio', 'status'
        $data = [
            'id'            => $estudiante['id'],
            'carrera'       => $estudiante['carrera'],
            'numControl'    => $estudiante['numControl'],
            'nombre'        => $estudiante['nombre'],
            'apaterno'      => $estudiante['apaterno'],
            'amaterno'      => $estudiante['amaterno'],
            'curp'          => $estudiante['curp'],
            'email'         => $estudiante['email'],
            'isLoggedIn'    => true,
            // 'rol'           => $user['rol'],
            'foto'          => $estudiante['foto'],
            'sexo'          => $estudiante['sexo'],
            'bio'           => $estudiante['bio']
        ];

        session()->set($data);
        return true;
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }

}
