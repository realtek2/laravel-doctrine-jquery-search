<?php

namespace App\Http\Controllers;

use App\Domain\Entities\Vacancy;
use App\Traits\ProcessFields;
use LaravelDoctrine\ORM\Facades\EntityManager;

class SearchController extends Controller
{
    use ProcessFields;

    public function search()
    {
        $collectionOfElements = EntityManager::getRepository(Vacancy::class)->collectionOfElements();
        $items = $this->getAllItems($collectionOfElements, Vacancy::$fields);

        $data = [
            'data' => $items,
            'draw' => 1,
            'recordsFiltered' => count($items),
            'recordsTotal' => count($items),
        ];
        
        return response()->json($data);
    }
}
