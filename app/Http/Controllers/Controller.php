<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function sumarDosNumeros($numero1, $numero2)
    {
        $suma = $numero1 + $numero2;
        return $suma;
    }

    public function concatenarTexto($cadenas)
    {
        if (empty($cadenas)) {
            return '';
        }
        $resultado = implode(' ', $cadenas);
        return $resultado;
    }

    function calcularPromedio($numeros)
    {
        if (empty($numeros)) {
            return 0;
        }
        $suma = array_sum($numeros);
        $promedio = (float) ($suma / count($numeros));
        return $promedio;
    }

    function obtenerValoresPorPalabra($cadena)
    {
        $palabras = explode(' ', $cadena);
        $valoresPorPalabra = [];
        foreach ($palabras as $palabra) {
            $valor = strlen($palabra);
            $valoresPorPalabra[$palabra] = $valor;
        }
        return $valoresPorPalabra;
    }

    function resolverEcuacionCuadratica($a, $b, $c)
    {
        $discriminante = $b ** 2 - (4 * $a * $c);
        if ($discriminante > 0) {
            $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
            $x2 = (-$b - sqrt($discriminante)) / (2 * $a);
            return [$x1, $x2];
        } elseif ($discriminante == 0) {
            $x = -$b / (2 * $a);
            return [$x];
        } else {
            return ["No es posible"];
        }
    }



}
