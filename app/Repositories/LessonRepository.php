<?php

namespace App\Repositories;

use App\Models\Lesson;
use Illuminate\Database\Eloquent\Model;

class LessonRepository
{

    protected $entity;

    public function __construct(Lesson $Lesson)
    {
        $this->entity = $Lesson;
    }

    public function getLessonsBbyModuleId($moduleId)
    {
       return $this->entity->where('module_id', $moduleId)->get();
    }

    public function getLesson($id)
    {
        return $this->entity->findOrFail($id);
    }

    
}