<?php

namespace App\Repositories;

use App\Models\Support;
use Illuminate\Database\Eloquent\Model;

class SupportRepository
{

    protected $entity;

    public function __construct(Support $support)
    {
        $this->entity = $support;
    }

    public function getSupports()
    {
        
    }
}