<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Issue extends Model
{
    protected $fillable = ['name', 'issue_date', 'issue_code', 'project_id'];

    protected $casts = [
        'issue_date' => 'date'
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class, 'project_id');
    }

    public function issueDetails(): HasMany
    {
        return $this->hasMany(IssueDetail::class);
    }
}
