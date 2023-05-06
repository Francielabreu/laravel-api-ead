<?php

namespace App\Repositories;

use App\Models\ReplySupport;
use App\Models\User;
use App\Repositories\Traits\RepositoryTrait;
use Illuminate\Database\Eloquent\Model;

class ReplySupportRepository
{
    use RepositoryTrait;
    
    protected $entity;

    public function __construct(ReplySupport $support)
    {
        $this->entity = $support;
    }

    public function createReplyToSupport(array $data)
    {
        $user = $this->getUserAuth();

        

        return $this->entity
                    ->create([
                        'support_id' => $data['support'],
                        'description' => $data['description'],
                        'user_id' => $user->id,
                    ]);
    }

    

   

    


}