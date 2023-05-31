<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\EstudianteModel;
use App\Models\CarreraModel;

class RegistroController extends ResourceController
{
    
    private $estudiante;
    private $db;
    private $carrera;

    public function __construct()
    {
        helper(['form', 'url', 'session']);
        $this->db = db_connect();
        $this->session = \Config\Services::session();
        $this->estudiante = new EstudianteModel();
        $this->carrera = new CarreraModel();
    }

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        // return view('admin/profesores/index', $data);
        return view('registro/index');
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        $carreras = $this->carrera->findAll();

        $data = ['carreras' => $carreras];

        return view('usuario/registro/create', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $inputs = $this->validate([
            'carrera'       => 'required',
            'numControl'    => 'required',
            'nombre'        => 'required|min_length[3]|max_length[80]',
            'apaterno'      => 'required|min_length[3]|max_length[80]',
            'amaterno'      => 'required|min_length[3]|max_length[80]',
            'email'         => 'required|min_length[6]|max_length[80]|valid_email|is_unique[users.email]',
            'phone_no'      => 'required|min_length[6]|max_length[20]',
            'password'      => 'required|min_length[6]|max_length[200]',
            'sexo'          => 'required'
        ]);

        if (!$inputs) {
            return view('usuario/registro/create', [
                'validation' => $this->validator
            ]);
        }

        $estudiante = new EstudianteModel();
        $carerras = model(CarreraModel::class);

        $this->usuario->save([
            'carrera'       => $this->request->getPost('carrera'),
            'numControl'    => $this->request->getPost('numControl'),
            'nombre'        => $this->request->getPost('nombre'),
            'apaterno'      => $this->request->getPost('apaterno'),
            'amaterno'      => $this->request->getPost('amaterno'),
            'curp'          => $this->request->getPost('curp'),
            'email'         => $this->request->getPost('email'),
            'password'      => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'sexo'          => $this->request->getPost('sexo'),
            'bio'           => $this->request->getPost('bio')
        ]);
        session()->setFlashdata('success', 'registro completado con éxito');
        return redirect()->to(site_url('/usuario/registro/'));
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
