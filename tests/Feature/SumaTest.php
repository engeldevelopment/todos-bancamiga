<?php

namespace Tests\Feature;

use App\Http\Livewire\SumaForm;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class SumaTest extends TestCase
{   /** @test */
    public function sumarDosNumeros()
    {
        $response = $this->post(route("sumar"), [
            "a" => "12",
            "b" => "12",
        ]);

        $response->assertSee("24")
            ->assertSee("Regresar");
            
    }
}
