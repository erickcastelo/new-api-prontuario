<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ReflectionClass;

class DefaultController extends Controller
{
    protected $service;
    protected $modelRequest;

    public function __construct($service, $modelRequest)
    {
        $this->service = $service;
        $this->modelRequest = $modelRequest;
    }

    public function index(Request $request)
    {
        $this->validate($request, []);

        $query = $this->service->all();

        return response()->json($query);
    }

    public function create(Request $requestParams)
    {
        $reflection = new ReflectionClass($this->modelRequest);
        $request = $reflection->newInstance();

        $this->validate($requestParams, $request->rules());

        $this->service->create($requestParams);

        return response()->json([
            'message' => 'Successfully created user!'
        ], 201);
    }

    public function update(Request $requestParams, $id)
    {
        $reflection = new ReflectionClass($this->modelRequest);
        $request = $reflection->newInstance();

        $this->validate($requestParams, $request->rules());

        $this->service()->update($requestParams, $id);

        return response()->json([
            'message' => 'Successfully update user!'
        ], 200);
    }

    public function getById($id)
    {
        return $this->service->getById($id);
    }

    public function delete($id)
    {
        $this->service->delete($id);

        return response()->json([
            'message' => 'Successfully deleted user!'
        ], 200);
    }
}