<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use CodeIgniter\RESTful\ResourcePresenter;

class BaseResourcePresenterController extends ResourcePresenter
{
    /**
     * @var string|null The model that holding this resource's data
     */
    protected $modelName;

    /**
     * @var \App\Models\BaseModel|object|null The model that holding this resource's data
     */
    protected $model;

    /**
     * @var string|null The route name
     */
    protected $routeName;

    /**
     * @var string|null The view folder
     */
    protected $viewFolder;

    /**
     * @var string|null The view title
     */
    protected $viewTitle;

    /**
     * @var string|null The singular data name
     */
    protected $dataName = 'data';

    /**
     * @var list<string,object|list> The others data
     */
    protected $others = [];

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
    }

    /**
     * Present a view of resource objects.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        //
    }

    /**
     * Present a view of deleted resource objects.
     *
     * @return ResponseInterface
     */
    public function trash()
    {
        //
    }

    /**
     * Present a view to present a specific resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Present a view to present a new single resource object.
     *
     * @return ResponseInterface
     */
    public function new()
    {
        //
    }

    /**
     * Process the creation/insertion of a new resource object.
     * This should be a POST.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        //
    }

    /**
     * Present a view to edit the properties of a specific resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Process the updating, full or partial, of a specific resource object.
     * This should be a POST.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Process the deletion of a specific resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($id = null)
    {
        //
    }

    /**
     * Processes the permanent deletion of a specific resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function purgeDelete($id = null)
    {
        //
    }

    /**
     * Process to restore data that has been soft deleted.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function restore($id = null)
    {
        //
    }
}
