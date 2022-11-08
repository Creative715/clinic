<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PageResource;
use App\Models\Page;
use App\Services\PageService;
use Illuminate\Http\Request;

class PageController extends Controller
{
    protected PageService $service;

    public function __construct(PageService $service) {
        $this->service = $service;
    }

    public function page(Request $request)
    {
        $pages = $this->service->getPageBySlug($request);
        return new PageService($pages);
    }

    public function viewsIncrement(Request $request): PageResource
    {
        $slug = $request->get('slug');
        $page = Page::findBySlug($slug);

        $page->state->increment('views');
        return new PageResource($page);
    }
    public function likesIncrement(Request $request) {
        $slug = $request->get('slug');
        $page = Page::findBySlug($slug);

        $inc = $request->get('increment');
        $inc ? $page->state->increment('likes') : $page->state->decrement('likes');
        return new PageResource($page);
    }
}
