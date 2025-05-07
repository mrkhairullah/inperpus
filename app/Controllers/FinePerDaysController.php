<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use App\Controllers\BaseController;

class FinePerDaysController extends BaseController
{
    /**
     * @var string|null The model that holding this resource's data
     */
    protected $modelName = 'App\Models\FinePerDayModel';

    /**
     * @var \App\Models\BaseModel|object|null The model that holding this resource's data
     */
    protected $model;

    /**
     * @var string|null The route name
     */
    protected $routeName = 'fine-per-days';

    /**
     * @var string|null The view folder
     */
    protected $viewFolder = 'pages/admin/fine-per-days';

    /**
     * @var string|null The view title
     */
    protected $viewTitle = 'Harga Denda';

    /**
     * @var string|null The singular data name
     */
    protected $dataName = 'finePerDay';

    /**
     * @var list<string,object|list> The others data
     */
    protected $others = [];

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
    }
}
