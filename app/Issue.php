<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Project;
use App\User;
use App\Status;
use App\Type;
use App\Priority;

class Issue extends Model
{
    protected $fillable = ['name', 'description', 'project', 'status', 'priority', 'type', 'user'];
    public function project() {
        return $this->belongsTo(Project::class, 'project_id');
    }
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function status() {
        return $this->belongsTo(Status::class, 'status_id');
    }
    public function type() {
       return  $this->belongsTo(Type::class, 'type_id');
    }
    public function priority() {
        return $this->belongsTo(Priority::class, 'priority_id');
    }
}
