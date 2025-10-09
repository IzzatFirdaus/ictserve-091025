<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomepageTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that the home page loads successfully.
     */
    public function test_the_home_page_loads_successfully(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('ICTServe', false); // Case insensitive search
    }

    /**
     * Test that the services page loads successfully.
     */
    public function test_the_services_page_loads_successfully(): void
    {
        $response = $this->get('/services');
        $response->assertStatus(200);
        $response->assertSee('ICT Services');
    }

    /**
     * Test that the contact page loads successfully.
     */
    public function test_the_contact_page_loads_successfully(): void
    {
        $response = $this->get('/contact');
        $response->assertStatus(200);
        $response->assertSee('Contact ICT Support');
    }

    /**
     * Test that the Filament admin login page loads successfully.
     */
    public function test_the_admin_login_page_loads_successfully(): void
    {
        $response = $this->get('/admin/login');
        $response->assertStatus(200);
    }

    /**
     * Test that the Filament admin panel requires authentication.
     */
    public function test_the_admin_panel_requires_authentication(): void
    {
        $response = $this->get('/admin');
        $response->assertRedirect('/admin/login');
    }

    /**
     * Test that public pages use the public layout.
     */
    public function test_public_pages_use_public_layout(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('ICTServe');
        $response->assertSee('Staff Login');
        $response->assertSee('Kementerian Pelancongan, Seni dan Budaya Malaysia');
    }

    /**
     * Test that deprecated auth routes return 404.
     */
    public function test_deprecated_auth_routes_return_404(): void
    {
        // These routes should no longer exist
        $this->get('/login')->assertStatus(404);
        $this->get('/register')->assertStatus(404);
        $this->get('/dashboard')->assertStatus(404);
        $this->get('/profile')->assertStatus(404);
    }
}
