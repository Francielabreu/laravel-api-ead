<?php

namespace App\Repositories;

use App\Models\Module;
use Illuminate\Database\Eloquent\Model;

class ModuleRepository
{

    protected $entity;

    public function __construct(Module $module)
    {
        $this->entity = $module;
    }

    public function getModulesByCourseId($courseId)
    {
       return $this->entity->where('course_id', $courseId)->get();
    }

    
}