<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\EstudianteModel;

class RegistroController extends ResourceController
{
    
    private $estudiante;
    private $db;

    public function __construct()
    {
        helper(['form', 'url', 'session']);
        $this->db = db_connect();
        $this->session = \Config\Services::session();
        $this->estudiante = new EstudianteModel();
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
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        //
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
        return view('usuario/registro/create');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        //
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
