<?php

namespace App\Actions;

use App\Models\ContactLead;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class StoreContactLeadAction
{
    /**
     * @param array<string, mixed> $validated
     */
    public function execute(array $validated, Request $request): ContactLead
    {
        return ContactLead::create([
            ...Arr::only($validated, [
                'full_name',
                'phone',
                'email',
                'service',
                'budget_scope',
                'project_location',
                'preferred_contact',
                'message',
            ]),
            'ip_address' => $request->ip(),
            'user_agent' => Str::limit((string) $request->userAgent(), 255, ''),
            'status' => 'nuevo',
        ]);
    }
}
