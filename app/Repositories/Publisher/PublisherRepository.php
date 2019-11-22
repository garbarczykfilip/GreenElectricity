<?php

namespace App\Repositories\Publisher;

use App\Entities\Publisher;

class PublisherRepository implements PublisherRepositoryInterface
{
    public function getAll()
    {
        $publishers = Publisher::all();

        return $publishers->count() > 0 ?
        response()->json($publishers, 200) :
        response()->json(['status' => 'Not Found'], 404);
    }
}