<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLinkRequest;
use App\Http\Resources\LinkResource;
use App\Models\Link;

class LinkController extends Controller
{
    /**
     * Создание короткой ссылки
     */
    public function store(StoreLinkRequest $request)
    {
        return new LinkResource(Link::firstOrCreate(['url' => $request->url]));
    }

    /**
     * Перенаправление по короткой ссылке
     * @urlParam code string required Example: 4nnajb
     */
    public function redirectShortLink(string $code)
    {
        $link = Link::where('code', $code)->firstOrFail();
        $link->increment('clicks');

        return redirect()->away($link->url);
    }

    /**
     * Получение статистики по короткой ссылке
     * @urlParam code string required Example: 4nnajb
     */
    public function stats(string $code)
    {
        return new LinkResource(Link::where('code', $code)->firstOrFail());
    }
}
