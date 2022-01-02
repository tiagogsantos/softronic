<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use App\Models\Banner;
use App\Services\BannerService;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::get();
        return view('admin.pages.banner.index')
            ->with('banners', $banners);
    }

    public function create()
    {
        return view('admin.pages.banner.create');
    }

    public function store(BannerRequest $request)
    {

        BannerService::create($request->all());
        return redirect()->route('admin.banner.index')
            ->with('success', 'Banner adicionado com sucesso');
    }

    public function edit(Banner $banner)
    {
        return view('admin.pages.banner.edit')
        ->with('banner', $banner);
    }

    public function update(Banner $banner, BannerRequest $request)
    {
        BannerService::update($request->all(), $banner);
        return redirect()->back()
            ->with('success', 'Banner atualizado com sucesso');
    }

    public function delete(Banner $banner)
    {
        $banner->delete();
        return redirect()->route('admin.banner.index')
            ->with('success', 'Banner removido com sucesso');

    }
}
