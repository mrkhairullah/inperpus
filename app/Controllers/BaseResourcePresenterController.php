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

        $this->viewFolder  = rtrim($this->viewFolder, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;
    }

    /**
     * Present a view of resource objects.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        try {
            return view($this->viewFolder . 'index', [
                'viewTitle'             => $this->viewTitle,
                'routeName'             => $this->routeName,
                ($this->dataName . 's') => $this->model->where('deleted_at', NULL)->paginate(25),
                'pager'                 => $this->model->pager,
            ]);
        } catch (\Throwable $th) {
            return $th->getMessage();
            // return redirect($this->routeName . '.index')
            //     ->with('message', [
            //         'failed' => 'Terjadi kesalahan pada sistem',
            //     ]);
        }
    }

    /**
     * Present a view of deleted resource objects.
     *
     * @return ResponseInterface
     */
    public function trash()
    {
        try {
            return view($this->viewFolder . 'trash', [
                'viewTitle'             => $this->viewTitle,
                'routeName'             => $this->routeName,
                ($this->dataName . 's') => $this->model->where('deleted_at !=', NULL)->paginate(25),
                'pager'                 => $this->model->pager,
            ]);
        } catch (\Throwable $th) {
            return redirect($this->routeName . '.index')
                ->with('message', [
                    'failed' => 'Terjadi kesalahan pada sistem',
                ]);
        }
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
        try {
            $data = $this->model->find($id);

            if (!$data) {
                return redirect($this->routeName . '.index')
                    ->with('message', [
                        'failed' => 'Gagal menemukan data untuk ditampilkan dengan id: ' . $id,
                    ]);
            }

            return view($this->viewFolder . 'show', [
                'viewTitle'     => $this->viewTitle,
                'routeName'     => $this->routeName,
                $this->dataName => $data,
            ]);
        } catch (\Throwable $th) {
            return redirect($this->routeName . '.index')
                ->with('message', [
                    'failed' => 'Terjadi kesalahan pada sistem',
                ]);
        }
    }

    /**
     * Present a view to present a new single resource object.
     *
     * @return ResponseInterface
     */
    public function new()
    {
        return view($this->viewFolder . 'new', [
            'viewTitle' => $this->viewTitle,
            'routeName' => $this->routeName,
            ...($this->others['new'] ?? []),
        ]);
    }

    /**
     * Process the creation/insertion of a new resource object.
     * This should be a POST.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        try {
            $isSuccess = $this->model->insert($this->request->getPost());

            if (!$isSuccess) {
                return redirect($this->routeName . '.index')
                    ->with('message', [
                        'failed' => 'Gagal membuat data',
                    ]);
            }

            return redirect($this->routeName . '.index')
                ->with('message', [
                    'success' => 'Berhasil membuat data dengan id: ' . $isSuccess,
                ]);
        } catch (\Throwable $th) {
            return redirect($this->routeName . '.index')
                ->with('message', [
                    'failed' => 'Terjadi kesalahan pada sistem',
                ]);
        }
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
        try {
            $data = $this->model->find($id);

            if (!$data) {
                return redirect($this->routeName . '.index')
                    ->with('message', [
                        'failed' => 'Gagal menemukan data untuk diubah dengan id: ' . $id,
                    ]);
            }

            return view($this->viewFolder . 'edit', [
                'viewTitle'     => $this->viewTitle,
                'routeName'     => $this->routeName,
                $this->dataName => $data,
                ...($this->others['edit'] ?? []),
            ]);
        } catch (\Throwable $th) {
            return redirect($this->routeName . '.index')
                ->with('message', [
                    'failed' => 'Terjadi kesalahan pada sistem',
                ]);
        }
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
        try {
            $isSuccess = $this->model->update($id, $this->request->getPost());

            if (!$isSuccess) {
                return redirect($this->routeName . '.index')
                    ->with('message', [
                        'failed' => 'Gagal mengubah data dengan id: ' . $id,
                    ]);
            }

            return redirect($this->routeName . '.index')
                ->with('message', [
                    'success' => 'Berhasil mengubah data dengan id: ' . $isSuccess,
                ]);
        } catch (\Throwable $th) {
            return redirect($this->routeName . '.index')
                ->with('message', [
                    'failed' => 'Terjadi kesalahan pada sistem',
                ]);
        }
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
        try {
            $isSuccess = $this->model->delete($id);

            if (!$isSuccess) {
                return redirect($this->routeName . '.index')
                    ->with('message', [
                        'failed' => 'Gagal menghapus data dengan id: ' . $id,
                    ]);
            }

            return redirect($this->routeName . '.index')
                ->with('message', [
                    'success' => 'Berhasil menghapus data dengan id: ' . $id,
                ]);
        } catch (\Throwable $th) {
            return redirect($this->routeName . '.index')
                ->with('message', [
                    'failed' => 'Terjadi kesalahan pada sistem',
                ]);
        }
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
        try {
            $isSuccess = $this->model->delete($id, true);

            if (!$isSuccess) {
                return redirect($this->routeName . '.trash')
                    ->with('message', [
                        'failed' => 'Gagal menghapus data permanen dengan id: ' . $id,
                    ]);
            }

            return redirect($this->routeName . '.trash')
                ->with('message', [
                    'success' => 'Berhasil menghapus data permanen dengan id: ' . $id,
                ]);
        } catch (\Throwable $th) {
            return redirect($this->routeName . '.trash')
                ->with('message', [
                    'failed' => 'Terjadi kesalahan pada sistem',
                ]);
        }
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
        try {
            $isSuccess = $this->model->restore($id);

            if (!$isSuccess) {
                return redirect($this->routeName . '.trash')
                    ->with('message', [
                        'failed' => 'Gagal memulihkan data dengan id: ' . $id,
                    ]);
            }

            return redirect($this->routeName . '.trash')
                ->with('message', [
                    'success' => 'Berhasil memulihkan data dengan id: ' . $id,
                ]);
        } catch (\Throwable $th) {
            return redirect($this->routeName . '.trash')
                ->with('message', [
                    'failed' => 'Terjadi kesalahan pada sistem',
                ]);
        }
    }
}
