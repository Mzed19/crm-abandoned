<?php

namespace App\Http\Controllers;

use App\Entities\MaterialEntity;
use App\Http\Requests\MaterialCreateRequest;
use App\Http\Resources\MaterialResource;
use App\Response\JsonResponse as ResponseJsonResponse;
use App\Services\Material\MaterialService;
use Exception;
use Illuminate\Http\JsonResponse;

class MaterialController extends Controller
{
    public function create(MaterialCreateRequest $request): JsonResponse
    {
        try{
            $materialService = new MaterialService();

            $material = new MaterialEntity(
                name: $request->get('name'),
                description: $request->get('description'),
                value: $request->get('value'),
                amount: $request->get('amount'),
            );

            $materialCreated = $materialService->create(material: $material);
           
            return ResponseJsonResponse::success(
                message: "Item adicionado com sucesso.",
                data: MaterialResource::make($materialCreated) 
            );
        }catch(Exception $e){
            return ResponseJsonResponse::error(
                message: $e->getMessage()
            );
        }
    }

    public function index(): JsonResponse
    {
        try{
            $materialService = new MaterialService();

            $materials = $materialService->index();

            return ResponseJsonResponse::success(
                message: "Itens encontrados.",
                data: MaterialResource::collection($materials)
            );
        }catch(Exception $e){
            return ResponseJsonResponse::error(
                message: $e->getMessage()
            );
        }
    }
}
