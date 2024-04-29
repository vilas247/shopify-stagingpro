@extends('layouts.app')
@section('content')
<div class="container" id="shopifyIntegration">
    <main>
        <div class="card">
            <div class="card-header d-flex justify-content-between no-bg p-tb-2 align-items-center">
                <span class="card-title mb-0">247Commerce</span>
            </div>
            <div class="card-body px-0 p-0">
                <p class="subtitle">
                    <label for="shop">Enter your shop domain to log in or install this app.</label>
                </p>
                <div class="tab-content" id="ctab1-content">
                    <form method="GET" action="{{ route("app-shopify.install") }}">
                        <input id="shop" name="shop" type="text" autofocus="autofocus" placeholder="example.myshopify.com" class="form-control d-inline-block maxw-450 brd-dark br-10">
                        <button type="submit" class="btn btn-success btn-sm" >Install</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
