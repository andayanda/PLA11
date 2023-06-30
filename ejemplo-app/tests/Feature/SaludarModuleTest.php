<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SaludarModuleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_return_holamundo(){
        $response = $this->get('/holamundo');

        $response->assertStatus(200);
        $response->assertSee('Listado de usuarios')
        ->assertSee('Yo misma');
    }
    public function test_return_saludar_un_param(){
        $response =$this->get('/saludar/david');
        $response->assertStatus(200);
        $response->assertSee('Hola david sin alias');

    }
    public function test_return_saludar_dos_param(){
        $response =$this->get('/saludar/david/alco');
        $response->assertStatus(200);
        $response->assertSee('Hola david también llamada alco');

    }
    public function test_return_holamundo_lista_vacia(){
        $response = $this->get('/holamundo?vacio');

        $response->assertStatus(200)
       
        ->assertSee('No hay usuarios');
    }
}
