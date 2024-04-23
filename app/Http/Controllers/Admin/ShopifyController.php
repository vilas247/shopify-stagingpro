<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ShopifyController extends Controller
{
    public function index()
    {
        //abort_if(Gate::denies('shopify_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.shopify.index');
    }

    public function bulkMigration()
    {

        return view('admin.shopify.bulk-migration');
    }

    public function selectiveMigration()
    {

        return view('admin.shopify.selective-migration');
    }

    public function themeDeployments()
    {

        return view('admin.shopify.theme-deployments');
    }

    public function history()
    {

        return view('admin.shopify.history');
    }

    public function settings()
    {

        return view('admin.shopify.settings');
    }

}
