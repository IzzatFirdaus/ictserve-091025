<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Session;
use Tests\TestCase;

class LanguageSwitcherTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_switches_to_bahasa_melayu_and_persists_locale()
    {
        $response = $this->get(route('locale.switch', 'ms'));
        $response->assertSessionHas('locale', 'ms');
        $response = $this->get('/');
        $response->assertSee('Bahasa Melayu'); // Or a translated string from lang/ms/messages.php
    }

    /** @test */
    public function it_switches_to_english_and_persists_locale()
    {
        $response = $this->get(route('locale.switch', 'en'));
        $response->assertSessionHas('locale', 'en');
        $response = $this->get('/');
        $response->assertSee('English'); // Or a translated string from lang/en/messages.php
    }

    /** @test */
    public function it_rejects_invalid_locale()
    {
        $response = $this->get(route('locale.switch', 'fr'));
        $response->assertStatus(400);
    }
}
