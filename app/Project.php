<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Issue;
use App\Status;

class Project extends Model
{
    protected $guarded = [];
    protected $fillable = ['name', 'description','status'];

    public function issue() {
        return $this->hasMany(Issue::class);
    }
    public function user() {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
    public function status() {
        return $this->belongsTo(Status::class, 'status');
    }
}
