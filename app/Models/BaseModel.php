<?php

namespace App\Models;

use CodeIgniter\Model;

class BaseModel extends Model
{
    public function restore($id = null)
    {
        if (!$id) {
            return false;
        }

        return $this->builder()
            ->where('id', $id)
            ->where('deleted_at IS NOT NULL')
            ->set('deleted_at', null)
            ->update();
    }

    protected function convertEmptyValueToNull(array $data)
    {
        if (isset($data['data'])) {
            foreach ($data['data'] as $key => $value) {
                if ($value === '') {
                    $data['data'][$key] = null;
                }
            }
        }

        return $data;
    }
}
