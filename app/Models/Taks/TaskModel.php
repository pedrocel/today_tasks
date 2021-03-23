<?php

namespace App\Models\Taks;

use App\Models\BairroModel;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskModel extends Model
{
    use HasFactory;
    protected $table = 'task';
    protected $primaryKey = 'id';
    protected $fillable = ['id','title','description','id_status','assigned_to', 'created_by', 'expected_date'];

    public function status()
    {

        return $this->hasOne(StatusTaskModel::class, 'id', 'id_status');
    }

    public function assigned(){

        return $this->hasOne(User::class,'id','assigned_to');
    }

    public function createdBy(){

        return $this->hasOne(User::class,'id','created_by');
    }




}
