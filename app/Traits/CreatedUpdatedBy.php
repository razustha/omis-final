<?php

namespace App\Traits;

trait CreatedUpdatedBy
{
    public static function bootCreatedUpdatedBy()
    {
        // updating created_by and updated_by when model is created
        static::creating(function ($model) {
            if (!$model->isDirty('createdBy')) {
                $model->createdBy = auth()->user()->id;
            }
            if (!$model->isDirty('updatedBy')) {
                $model->updatedBy = null;
            }
            if (!$model->isDirty('createdOn')) {
                $model->createdOn = now();
            }
            if (!$model->isDirty('status')) {
                $model->status = 1;
            }
        });

        // updating updated_by when model is updated
        static::updating(function ($model) {
            if (!$model->isDirty('updatedBy')) {
                $model->updatedBy = auth()->user()->id;
            }
        });
    }
}