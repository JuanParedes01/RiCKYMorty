<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function inicio()
    {
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'https://rickandmortyapi.com/api/character/?page=1');
        $resultado = json_decode($response->getBody()->getContents(), true);
        $personajes = [];
        foreach ($resultado['results'] as $personaje) {
            $personajes[] = [
                'id' => $personaje['id'],
                'nombre' => $personaje['name'],
                'imagen' => $personaje['image'],
                'especie' => $personaje['species'],
                'genero' => $personaje['gender'],
                'origen' => $personaje['origin']['name'],
                'estado' => $personaje['status'],
                'episodios' => $personaje['episode'],
                'created' => $personaje['created'],
            ];
        }
        return view('index', ['personajes' => $personajes]);
    }

    // -- consultar api get a Rick y Morty
    public function Personaje($id)
    {
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'https://rickandmortyapi.com/api/character/'.$id);
        $resultado = json_decode($response->getBody()->getContents(), true);
        $aleatorio = rand(0, 42);
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'https://rickandmortyapi.com/api/character/?page='.$aleatorio);
        $persona = json_decode($response->getBody()->getContents(), true);
        $personajes = [];
        foreach ($persona['results'] as $personaje) {
            $personajes[] = [
                'id' => $personaje['id'],
                'nombre' => $personaje['name'],
                'imagen' => $personaje['image'],
                'especie' => $personaje['species'],
                'genero' => $personaje['gender'],
                'origen' => $personaje['origin']['name'],
                'estado' => $personaje['status'],
                'episodios' => $personaje['episode'],
                'created' => $personaje['created'],
            ];
        }
        return view('Personaje',['resultado' => $resultado,'personajes' => $personajes]);
    }
}
