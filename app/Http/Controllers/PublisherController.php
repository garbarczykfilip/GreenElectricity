<?php

namespace App\Http\Controllers;

use App\Repositories\Publisher\PublisherRepositoryInterface;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    protected $publisher;

    public function __construct(PublisherRepositoryInterface $publisher)
    {
        $this->publisher = $publisher;
    }

    public function getAll()
    {
        return $this->publisher->getAll();
    }
}
