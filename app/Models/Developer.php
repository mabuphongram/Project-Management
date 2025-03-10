<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Developer extends Model
{
    protected $fillable = ['name'];

    public function issueDetails(): HasMany
    {
        return $this->hasMany(IssueDetail::class, 'developer_id');
    }
}
