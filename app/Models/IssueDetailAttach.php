<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class IssueDetailAttach extends Model
{
    protected $table = 'issue_detail_attachments';
    
    protected $fillable = ['issue_detail_id', 'file_name', 'file_type', 'file_size'];

    public function issueDetail(): BelongsTo
    {
        return $this->belongsTo(IssueDetail::class, 'issue_detail_id');
    }
}
