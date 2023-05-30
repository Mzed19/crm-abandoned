<?php

namespace App\Http\Controllers;

use App\Entities\MaterialEntity;
use App\Http\Requests\MaterialCreateRequest;
use App\Http\Requests\MaterialDeleteRequest;
use App\Http\Requests\MaterialUpdateRequest;
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
            $material = new MaterialEntity(
                name: $request->get('name'),
                description: $request->get('description'),
                value: $request->get('value'),
                amount: $request->get('amount'),
            );
          
            $materialService = new MaterialService();

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

    public function delete(MaterialDeleteRequest $request): JsonResponse
    {
        try{
            $materialService = new MaterialService();

            $material = $materialService->delete(id: $request->get("id"));

            return ResponseJsonResponse::success(
                message: "Item removido.",
                data: [$material]
            );
        }catch(Exception $e){
            return ResponseJsonResponse::error(
                message: $e->getMessage()
            );
        }
    }

    public function update(MaterialUpdateRequest $request): JsonResponse
    {
        try{
            $material = new MaterialEntity(
                name: $request->get('name'),
                description: $request->get('description'),
                value: $request->get('value'),
                amount: $request->get('amount')
            );

            $material->setId(id: $request->get('id'));

            $materialService = new MaterialService();

            $material = $materialService->update(material: $material);

            return ResponseJsonResponse::success(
                message: "Item atualizado.",
                data: [$material]
            );
        }catch(Exception $e){
            return ResponseJsonResponse::error(
                message: $e->getMessage()
            );
        }
    }
}
