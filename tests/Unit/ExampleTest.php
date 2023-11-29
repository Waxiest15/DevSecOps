<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\Controller;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    public function test_equals(): void
    {
        $this->assertEquals(1, 1);
    }

    public function test_sum(): void
    {
        $a = 10;
        $b = 10;
        $controlador = new Controller();
        $suma = $controlador->sumarDosNumeros($a, $b);
        $this->assertEquals(11, $suma);
    }

    public function test_concatenar_texto(): void
    {
        $textos = ["Esto", "es", "una", 1];
        $controlador = new Controller();
        $cadena = $controlador->concatenarTexto($textos);
        $this->assertIsString($cadena);
    }

    public function test_promedio(): void
    {
        $numeros = [1, 2, 3, 4, 5, 6, 7];
        $controlador = new Controller();
        $promedio = $controlador->calcularPromedio($numeros);
        $this->assertIsInt($promedio);
        $this->assertGreaterThanOrEqual(0, $promedio);
    }

    public function test_separar_palabras(): void
    {
        $texto="Hola esto es una prueba :D";
        $controlador = new Controller();
        $cadenas= $controlador->obtenerValoresPorPalabra($texto);
        $this->assertIsArray($cadenas);
        $this->assertCount(6, $cadenas);
    }

    public function test_formula_general(): void
    {
        $a=1;
        $b=-5;
        $c=6;
        $controlador = new Controller();
        $formual= $controlador->resolverEcuacionCuadratica($a, $b, $c);
        $this->assertIsArray($formual);
    }



}
