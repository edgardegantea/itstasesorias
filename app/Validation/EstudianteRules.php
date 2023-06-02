<?php

namespace App\Validation;
use App\Models\EstudianteModel;

class EstudianteRules
{
    public function validateEstudiante(string $str, string $fields, array $data) {
        $model = new EstudianteModel();
        $user = $model->where('numControl', $data['numControl'])->first();

        if (!$user) {
            return false;
        }

        return password_verify($data['password'], $user['password']);
    }
}
