<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactLead extends Model
{
    /**
     * @var list<string>
     */
    protected $fillable = [
        'full_name',
        'phone',
        'email',
        'service',
        'budget_scope',
        'project_location',
        'preferred_contact',
        'message',
        'ip_address',
        'user_agent',
        'status',
    ];
}
