<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use App\Controllers\BaseController;

class RacksController extends BaseController
{
    /**
     * @var string|null The model that holding this resource's data
     */
    protected $modelName = 'App\Models\RackModel';

    /**
     * @var \App\Models\BaseModel|object|null The model that holding this resource's data
     */
    protected $model;

    /**
     * @var string|null The route name
     */
    protected $routeName = 'racks';

    /**
     * @var string|null The view folder
     */
    protected $viewFolder = 'pages/admin/racks';

    /**
     * @var string|null The view title
     */
    protected $viewTitle = 'Rak';

    /**
     * @var string|null The singular data name
     */
    protected $dataName = 'rack';

    /**
     * @var list<string,object|list> The others data
     */
    protected $others = [];

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
    }
}
