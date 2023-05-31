<?php

namespace App\Controllers\Admin;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ProfesorModel;

class ProfesorController extends ResourceController
{
    private $profesor;
    private $db;

    public function __construct()
    {
        helper(['form', 'url', 'session']);
        $this->db = db_connect();
        $this->session = \Config\Services::session();
        $this->profesor = new ProfesorModel();
    }

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $db = \Config\Database::connect();

        $builder = $this->db->table('profesores as p');
        $builder->select('p.*, a.nombre as nombreArea');
        $builder->join('areas as a', 'p.area = a.id');
        $profesores = $builder->get()->getResult();

        $data = [
            'profesores'   => $profesores
        ];

        return view('admin/profesores/index', $data);
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
        //
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
