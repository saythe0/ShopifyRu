<?php

namespace App\Http\Controllers;

use App\Http\Requests\Shop\StoreRequest;
use App\Models\Shop;
use App\Models\Template;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ShopController extends Controller
{
    public function index(): View
    {
        $shops = request()->user()->shops;
        Template::create([
            'name' => 'Default template',
            'description' => 'default template description',
        ]);

        return view('shop.index', compact('shops'));
    }

    public function create(): View
    {
        return view('shop.create');
    }

    public function store(StoreRequest $request): RedirectResponse
    {
        $template = Template::first();
        $shop = Shop::create([
            'name' => $request->name,
            'subdomain' => $request->subdomain,
            'owner_id' => request()->user()->id,
            'template_id' => $template->id,
        ]);

        return redirect(route('shop.index'));
    }

    public function show(Shop $shop): View
    {
        return view('shop.show', compact('shop'));
    }
}
