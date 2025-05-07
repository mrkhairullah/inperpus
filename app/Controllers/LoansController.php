<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use App\Controllers\BaseController;

class LoansController extends BaseController
{
    /**
     * @var string|null The model that holding this resource's data
     */
    protected $modelName = 'App\Models\LoanModel';

    /**
     * @var \App\Models\BaseModel|object|null The model that holding this resource's data
     */
    protected $model;

    /**
     * @var string|null The route name
     */
    protected $routeName = 'loans';

    /**
     * @var string|null The view folder
     */
    protected $viewFolder = 'pages/admin/loans';

    /**
     * @var string|null The view title
     */
    protected $viewTitle = 'Peminjaman';

    /**
     * @var string|null The singular data name
     */
    protected $dataName = 'loan';

    /**
     * @var list<string,object|list> The others data
     */
    protected $others = [];

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
    }
}
