<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLinkRequest;
use App\Http\Resources\LinkResource;
use App\Models\Link;

class LinkController extends Controller
{
    public function store(StoreLinkRequest $request)
    {
        return new LinkResource(Link::firstOrCreate(['url' => $request->url]));
    }
}
