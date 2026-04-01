<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomePageTest extends TestCase
{
    public function test_home_page_loads_with_key_sections(): void
    {
        $response = $this->get('/');

        $response
            ->assertOk()
            ->assertSee('Pereyra Construcciones')
            ->assertSee('Servicios')
            ->assertSee('Como trabajamos')
            ->assertSee('Solicitar presupuesto');
    }
}
