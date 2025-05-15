<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use App\Controllers\BaseResourcePresenterController as BaseController;

class MembersController extends BaseController
{
    /**
     * @var string|null The model that holding this resource's data
     */
    protected $modelName = 'App\Models\MemberModel';

    /**
     * @var \App\Models\BaseModel|object|null The model that holding this resource's data
     */
    protected $model;

    /**
     * @var string|null The route name
     */
    protected $routeName = 'members';

    /**
     * @var string|null The view folder
     */
    protected $viewFolder = 'pages/admin/members';

    /**
     * @var string|null The view title
     */
    protected $viewTitle = 'Anggota';

    /**
     * @var string|null The singular data name
     */
    protected $dataName = 'member';

    /**
     * @var list<string,object|list> The others data
     */
    protected $others = [];

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
    }
}
