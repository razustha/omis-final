<?php

namespace App\Service;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;
use Exception;

class CommonModelService
{
    protected $model;

    public function __construct($model)
    {
        $this->model = $model;

    }


    /*For create*/
    public function create($operationStartNumber, $operationEndNumber, $oldValues, $newValues)
    {
        $baseClass = get_class($this->model);
        $modelData = $this->model->create($newValues);
        $prmimayKeyFieldName = $modelData->getKeyName();
        $ModelID = $modelData->$prmimayKeyFieldName;
        createOperationLog($operationStartNumber, $operationEndNumber, $baseClass, $ModelID, 'create', $oldValues, $modelData);
        return $modelData;
    }

    public function update($operationStartNumber, $operationEndNumber, $oldValues, $newValues, $ModelID)
    {
        $baseClass = get_class($this->model);
        $this->model = $this->model->find($ModelID);
        $oldValues = !empty($oldValues) ? $oldValues : $this->model->toArray();
        $this->model->update($newValues);
        createOperationLog($operationStartNumber, $operationEndNumber, $baseClass, $ModelID, 'update', $oldValues, $this->model->getChanges());
        return $this->model;
    }


    /**
     * Paginate all User
     *
     * @param array $filter
     * @return Collection
     */
    public function paginate(array $filter = [])
    {
        $filter['limit'] = 25;

        return $this->model->orderBy('id', 'DESC')->whereIsDeleted('no')->paginate($filter['limit']);
    }

    /**
     * Get all User
     *
     * @return Collection
     */
    public function all()
    {
        return $this->model->whereIsDeleted('no')->all();
    }

    /**
     * Get all users with supervisor type
     *
     * @return Collection
     */


    public function find($userId)
    {
        try {
            return $this->model->whereIsDeleted('no')->find($userId);
        } catch (Exception $e) {
            return null;
        }
    }


    // public function update($userId, array $data)
    // {
    //     try {

    //         $data['visibility'] = (isset($data['visibility']) ? $data['visibility'] : '') == 'on' ? 'visible' : 'invisible';
    //         $data['status'] = (isset($data['status']) ? $data['status'] : '') == 'on' ? 'active' : 'in_active';
    //         $data['availability'] = (isset($data['availability']) ? $data['availability'] : '') == 'on' ? 'available' : 'not_available';
    //         $data['has_subuser'] = (isset($data['has_subuser']) ? $data['has_subuser'] : '') == 'on' ? 'yes' : 'no';
    //         $data['last_updated_by'] = Auth::user()->id;
    //         $user = $this->model->find($userId);

    //         $user = $user->update($data);
    //         $this->logger->info(' created successfully', $data);

    //         return $user;
    //     } catch (Exception $e) {
    //         $this->logger->error($e->getMessage());
    //         return false;
    //     }
    // }

    /**
     * Delete a User
     *
     * @param Id
     * @return bool
     */
    public function delete($userId)
    {
        try {
            $data['last_deleted_by'] = Auth::user()->id;
            $data['deleted_at'] = Carbon::now();
            $user = $this->model->find($userId);
            $data['is_deleted'] = 'yes';
            return $user = $user->update($data);
            dd($user);

        } catch (Exception $e) {
            return false;
        }
    }

    public function getUserRoles($id)
    {
        try {
            $user = User::with('roles')->find($id);
            $roles = $user->roles;
            return $roles;
        } catch (Exception $e) {
            return false;
        }
    }


    /**
     * write brief description
     * @param $name
     * @return mixed
     */
    public function getByName($name)
    {
        return $this->model->whereIsDeleted('no')->whereName($name);
    }

    public function getBySlug($id)
    {
        return $this->model->whereIsDeleted('no')->whereId($id)->first();
    }


    function uploadFile($file)
    {
        if (!empty($file)) {
            $this->uploadPath = 'uploads/user';
            return $fileName = $this->uploadFromAjax($file);
        }
    }

    public function __deleteImages($subCat)
    {
        try {
            if (is_file($subCat->image_path))
                unlink($subCat->image_path);

            if (is_file($subCat->thumbnail_path))
                unlink($subCat->thumbnail_path);
        } catch (\Exception $e) {

        }
    }

    public function updateImage($userId, array $data)
    {
        try {
            $user = $this->model->find($userId);
            $user = $user->update($data);

            return $user;
        } catch (Exception $e) {
            //$this->logger->error($e->getMessage());
            return false;
        }
    }
}