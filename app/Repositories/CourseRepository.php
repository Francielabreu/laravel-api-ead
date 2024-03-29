<?php

namespace App\Repositories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;

class CourseRepository
{
    protected $entity;

    public function __construct(Course $course)
    {
        $this->entity = $course;
    }

    public function getAllCourses()
    {
       return $this->entity->get();
    }

    public function getCourse($id)
    {
        return $this->entity->findOrFail($id);
    }
}