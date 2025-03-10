<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class IssueDetail extends Model
{
    protected $fillable = ['issue_id', 'developer_id', 'comment_date', 'comment'];

    protected $casts = [
        'comment_date' => 'date'
    ];

    public function issue(): BelongsTo
    {
        return $this->belongsTo(Issue::class);
    }

    public function developer(): BelongsTo
    {
        return $this->belongsTo(Developer::class);
    }

    public function attachments(): HasMany
    {
        return $this->hasMany(IssueDetailAttach::class, 'issue_detail_id');
    }
}
