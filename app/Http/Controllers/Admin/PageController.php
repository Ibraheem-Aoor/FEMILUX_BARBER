<?php

namespace App\Http\Controllers\Admin;


use App\Enums\WebshopEnum;
use App\Http\Controllers\Admin\BaseAdminController;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Page;
use App\Models\Webshop;
use App\Services\Api\BolService;
use App\Services\ContactService;
use Illuminate\Http\Request;
use Throwable;

class PageController extends BaseAdminController
{

    public function __construct(protected ContactService $service)
    {
        $this->page_title = "Pages";
        $this->base_view_path = "admin.pages";
    }
    public function edit($slug , Request $request)
    {
        $page = Page::query()->whereSlug($slug)->first();
        $data['page'] = $page;
        return view("{$this->base_view_path}.edit", $data);
    }

    public function update(Request $request, $slug)
    {
        $page = Page::query()->whereSlug($slug)->first();
        $page->update($request->all());
        return generateApiResoponse(true, 200, message: __('response.success_updated'), data: $page);
    }
}
