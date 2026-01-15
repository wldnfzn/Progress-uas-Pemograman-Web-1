<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;

    protected $table = 'response';

    protected $fillable = [
        'complaint_id',
        'response',
        'response_date'
    ];

    public function complaint()
    {
        return $this->belongsTo(Complaint::class, 'complaint_id');
    }
}
