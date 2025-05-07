<?php

namespace App\Models;

use App\Models\BaseModel as Model;

class BookModel extends Model
{
    protected $table            = 'books';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'title',
        'isbn',
        'publisher',
        'authors',
        'categories',
        'year',
        'stock',
        'book_cover',
        'rack_id',
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks    = true;
    protected $beforeInsert      = ['generateSlug'];
    protected $afterInsert       = [];
    protected $beforeUpdate      = ['generateSlug'];
    protected $afterUpdate       = [];
    protected $beforeFind        = [];
    protected $afterFind         = [];
    protected $beforeDelete      = [];
    protected $afterDelete       = [];
    protected $beforeInsertBatch = ['generateSlugBatch'];
    protected $afterInsertBatch  = [];
    protected $beforeUpdateBatch = ['generateSlugBatch'];
    protected $afterUpdateBatch  = [];

    protected function generateSlug(array $data)
    {
        if (isset($data['data']['title'])) {
            $data['data']['slug'] = url_title($data['data']['title'], '-', true);
        }

        return $data;
    }

    protected function generateSlugBatch(array $data)
    {
        if (isset($data['data']) && is_array($data['data'])) {
            foreach ($data['data'] as &$row) {
                if (isset($row['title'])) {
                    $row['slug'] = url_title($row['title'], '-', true);
                }
            }
        }

        return $data;
    }
}
