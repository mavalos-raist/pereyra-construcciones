<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactLeadTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_contact_request_is_stored(): void
    {
        $response = $this->post('/contacto', [
            'full_name' => 'Juan Perez',
            'phone' => '099 000 111',
            'email' => 'juan@example.com',
            'service' => 'Plateas de hormigon',
            'budget_scope' => 'con-materiales',
            'project_location' => 'Ciudad de la Costa',
            'preferred_contact' => 'whatsapp',
            'message' => 'Necesito presupuesto para una platea y evaluar una ampliacion.',
        ]);

        $response
            ->assertRedirect(route('home').'#contacto')
            ->assertSessionHas('status');

        $this->assertDatabaseHas('contact_leads', [
            'full_name' => 'Juan Perez',
            'service' => 'Plateas de hormigon',
            'budget_scope' => 'con-materiales',
            'preferred_contact' => 'whatsapp',
        ]);
    }

    public function test_invalid_contact_request_returns_validation_errors(): void
    {
        $response = $this->from('/#contacto')->post('/contacto', [
            'full_name' => '',
            'phone' => '',
            'service' => '',
            'budget_scope' => 'no-valido',
            'preferred_contact' => '',
            'message' => 'corto',
        ]);

        $response
            ->assertRedirect('/#contacto')
            ->assertSessionHasErrors([
                'full_name',
                'phone',
                'service',
                'budget_scope',
                'preferred_contact',
                'message',
            ]);
    }
}
