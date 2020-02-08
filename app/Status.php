<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Project;
use App\Issue;

class Status extends Model
{
    protected $fillable = ['status_id', 'name'];
    public function project() {
        return $this->hasMany(Project::class);
    }
    public function issue() {
        return $this->hasMany(Issue::class);
    }
}
