<?php

namespace App\Http\Controllers;

use App\Repositories\Magazine\MagazineRepositoryInterface;
use Illuminate\Http\Request;

class MagazineController extends Controller
{
    protected $magazine;

    public function __construct(MagazineRepositoryInterface $magazine)
    {
        $this->magazine = $magazine;
    }

    public function getById($id)
    {
        return $this->magazine->getById($id);
    }

    public function search(Request $request)
    {
        return $this->magazine->search($request);
    }

    public function resolveUri()
    {
        return response()->json("test", 200);
    }
}
