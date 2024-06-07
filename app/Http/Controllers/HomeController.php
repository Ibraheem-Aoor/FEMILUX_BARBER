<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Barber;
use App\Models\Page;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Webshop;
use App\Models\WorkHours;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends BaseSiteContoller
{

    public $services, $barbers, $about_page;
    public function __construct()
    {
        $this->page_title = __('site.home');
        $this->base_view_path = "site.";
        $this->services = Service::query()->status(1)->latest()->get(['id', 'image', 'title', 'price', 'description']);
        $this->barbers = Barber::query()->status(1)->latest()->get(['id', 'name', 'image',]);
        $this->about_page = Page::query()->whereSlug('about')->first();
        view()->share([
            'settings' => cacheAndGet(
                'settings',
                now()->addWeek(),
                Setting::query()->select(['id', 'key', 'value'])->pluck('value', 'key')->toArray()
            ),
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(): View
    {
        $data['page_title'] = $this->page_title;
        $data['services'] = $this->services;
        $data['barbers'] = $this->barbers;
        $data['about_page'] = $this->about_page;
        $data['work_hours'] = cacheAndGet('work_hours', now()->addWeek(), WorkHours::first());
        $data['week_days'] = getEuWeekDays();
        $data['sliders'] = cacheAndGet('home_page_sliders', now()->addWeek(), json_decode(Page::query()->whereSlug('home')->first()?->content, true)['sliders']);
        return view($this->base_view_path . 'home', $data);
    }



    public function about(): View
    {
        $data['page'] = $this->about_page;
        $data['services'] = $this->services;
        $data['barbers'] = $this->barbers;
        return view($this->base_view_path . 'page', $data);
    }
    public function services(): View
    {
        $data['page_title'] = __('site.services');
        $data['services'] = cacheAndGet('services', now()->addWeek(), $this->services);
        $data['barbers'] = $this->barbers;

        return view($this->base_view_path . 'services', $data);
    }

    public function contact(): View
    {
        $data['page_title'] = __('site.contact');
        $data['services'] = cacheAndGet('services', now()->addWeek(), $this->services);
        $data['barbers'] = $this->barbers;
        return view($this->base_view_path . 'contact', $data);
    }

}
