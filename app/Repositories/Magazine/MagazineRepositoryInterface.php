<?php

namespace App\Repositories\Magazine;

use Illuminate\Http\Request;

interface MagazineRepositoryInterface
{
    public function getById($id);

    public function search(Request $request);
}