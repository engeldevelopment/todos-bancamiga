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
        Livewire::test(SumaForm::class)
            ->set("numberA", "23")
            ->set("numberA", "23")
            ->call("sum")
            ->assertSee("46");
    }
}
