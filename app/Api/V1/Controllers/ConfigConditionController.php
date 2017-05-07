<?php

namespace App\Api\V1\Controllers;
use App\Api\V1\Models\Config;
use Laravel\Lumen\Routing\Controller as BaseController;
class ConfigConditionController extends BaseController
{
    /**
     * @path: /config
     * @method: GET
     */
    public function index()
    {
        return Config::all();
    }

    /**
     * @path: /config/create
     * @method: GET
     */
    public function create()
    {

    }

    /**
     * @path: /config
     * @method: POST
     */
    public function store()
    {

    }
    /**
     * @path: /config/{id}
     * @method: GET
     */
    public function show($id)
    {
        return Config::find($id);
    }

    /**
     * @path: /config/{id}/edit
     * @method: GET
     */
    public function edit()
    {

    }

    /**
     * @path: /config/{id}
     * @method: PUT/PATCH
     */
    public function update()
    {

    }


    /**
     * @path: /config/{id}
     * @method: DELETE
     */
    public function destroy()
    {

    }
}
