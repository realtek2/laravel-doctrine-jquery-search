<?php

namespace App\Http\Controllers;

use App\Domain\Entities\Vacancy;
use LaravelDoctrine\ORM\Facades\EntityManager;

class ApiController extends Controller
{
    use \App\Traits\ProcessFields;

    public function index()
    {
        $fields = Vacancy::$fields;
        
        $items = EntityManager::getRepository(Vacancy::class)->findAll();
        $items = $this->getAllItems($items, $fields);

        return response()->json($items);
    }
    
    public function show($id)
    {
        $item = EntityManager::find(Vacancy::class, $id);
        $item = $this->getItem($item, Vacancy::$fields);
        return response()->json($item);
    }
}
