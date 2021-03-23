<?php

namespace App\Models\Taks;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusTaskModel extends Model
{
    use HasFactory;

    protected $table = 'status_task';
    protected $primaryKey = 'id';
    protected $fillable = ['id','name', 'created_by'];
}
