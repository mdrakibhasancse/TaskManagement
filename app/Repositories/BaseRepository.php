<?php

namespace App\Repositories;

use App\Interfaces\IBaseRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class BaseRepository implements IBaseRepository
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }


     public function myGet()
     {
          return $this->model->get();
     }

     public function myDelete($id){
         $data=$this->model->where('created_by',Auth::id())->find($id);
         if($data){
            $data->delete();
         }

     }
}
