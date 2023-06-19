<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Api;
use GuzzleHttp\Client;
use Parsedown;

class ApiController extends Controller
{
    public function index()
    {
        $apis = Api::all();
        return response()->json(['message' => 'APIs retrieved successfully', 'data' => $apis], 200);
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'base_url' => 'required|url',
            'doc_url' => 'required',
        ]);

        $api = Api::create($validatedData);
        return response()->json(['message' => 'API created successfully', 'data' => $api], 201);
    }

    public function show(Request $request, $id)
    {        
        $api = Api::findOrFail($id);
        if($request->wantsJson()){
            return response()->json(['message' => 'API retrieved successfully', 'data' => $api], 200);
        }
        $markdown = $this->getDocumentations($api);
        $markdown = Parsedown::instance()->text($markdown);
        return view('apis.show', compact('api','markdown'));
    }

    public function update(Request $request, $id)
    {
        $api = Api::findOrFail($id);
        $validatedData = $request->validate([
            'name' => 'required',
            'base_url' => 'required|url',
        ]);

        $api->update($validatedData);
        return response()->json(['message' => 'API updated successfully', 'data' => $api], 200);
    }

    public function destroy($id)
    {
        $api = Api::findOrFail($id);
        $api->delete();
        return response()->json(['message' => 'API deleted successfully'], 200);
    }

    public function search(Request $request)
    {
        $name = $request->get('sel_api');
        $apis = Api::where('name', 'LIKE', '%' .$name . '%')->paginate(10)->appends(['sel_api' => $name]);

        return view('apis.welcome', compact('apis', 'name'));
    }

    public function getDocumentations($api)
    {
        $client = new Client(['base_uri' => $api->base_url]);
        $response = $client->request('GET', $api->base_url.$api->doc_url);
        $json = $response->getBody()->getContents();
        $data = json_decode($json);
        return $this->generateMarkdownFromApiData($data);
    }

    public function getApiData(){
        $apiData = json_decode('{
            "api": {
                "name": "API de ejemplo",
                "base_url": "https://api.example.com",
                "methods": [
                    {
                        "name": "Obtener todas las APIs",
                        "url": "/apis",
                        "documentation": "Documentación de obtener todas las APIs",
                        "method": "GET",
                        "headers": {
                            "Accept": "application/json",
                            "authorization": "Bearer {access_token}"
                        },
                        "request_body": "Ninguno",
                        "response": "200 OK, JSON"
                    },
                    {
                        "name": "Crear una nueva API",
                        "url": "/apis",
                        "documentation": "Documentación de crear una nueva API",
                        "method": "POST",
                        "headers": {
                            "Accept": "application/json",
                            "Content-Type": "application/json",
                            "authorization": "Bearer {access_token}"
                        },
                        "request_body": "JSON con los detalles de la nueva API",
                        "response": "201 Created, JSON"
                    },
                    {
                        "name": "Obtener información de una API específica",
                        "url": "/apis/{id}",
                        "documentation": "Documentación de obtener información de una API específica",
                        "method": "GET",
                        "headers": {
                            "Accept": "application/json",
                            "authorization": "Bearer {access_token}"
                        },
                        "request_body": "Ninguno",
                        "response": "200 OK, JSON"
                    },
                    {
                        "name": "Actualizar información de una API específica",
                        "url": "/apis/{id}",
                        "documentation": "Documentación de actualizar información de una API específica",
                        "method": "PUT",
                        "headers": {
                            "Accept": "application/json",
                            "Content-Type": "application/json",
                            "authorization": "Bearer {access_token}"
                        },
                        "request_body": "JSON con los nuevos detalles de la API",
                        "response": "200 OK, JSON"
                    },
                    {
                        "name": "Eliminar una API específica",
                        "url": "/apis/{id}",
                        "documentation": "Documentación de eliminar una API específica",
                        "method": "DELETE",
                        "headers": {
                            "Accept": "application/json",
                            "authorization": "Bearer {access_token}"
                        },
                        "request_body": "Ninguno",
                        "response": "200 OK, JSON"
                    },
                    {
                        "name": "Iniciar sesión",
                        "url": "/login",
                        "documentation": "Documentación de iniciar sesión",
                        "method": "POST",
                        "headers": {
                            "Accept": "application/json"
                        },
                        "request_body": "JSON con las credenciales de inicio de sesión",
                        "response": "200 OK, JSON"
                    }
                ]
            }
        }');
    
        return response()->json($apiData, 200);
    }  

    public function generateMarkdownFromApiData($apiData) {
        $markdown = '';
    
        // Título y base URL
        $markdown .= "# " . $apiData->api->name . "\n\n";
        $markdown .= "Se verifican los métodos de la API\n\n";
        $markdown .= "## Base URL\n\n";
        $markdown .= "- Base URL: " . $apiData->api->base_url . "\n\n";
    
        // Métodos
        $markdown .= "## Métodos\n\n";
        foreach ($apiData->api->methods as $method) {
            $markdown .= "### " . $method->name . "\n\n";
            $markdown .= "- URL: `" . $method->url . "`\n";
            $markdown .= "- Descripción: " . $method->documentation . "\n";
            $markdown .= "- Método: " . $method->method . "\n";
            $markdown .= "- Headers:\n";
            foreach ($method->headers as $header => $value) {
                $markdown .= "  - " . $header . ": " . $value . "\n";
            }
            $markdown .= "- Cuerpo de la solicitud: " . $method->request_body . "\n";
            $markdown .= "- Respuesta: " . $method->response . "\n\n";
        }
    
        return $markdown;
    }
}