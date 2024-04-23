@extends('layouts.admin')
@section('content')
<div class="container" id="shopifyIntegration">
    @include('admin.shopify.menu')
    <main>
        <div class="card">
            <div class="card-header no-bg p-tb-2">
                <span class="card-title mb-0">Theme Deployments</span>
            </div>
            <div class="card-body">
                <div class="theme-deployment-wrap">
                    <div class="bulk-migration-top mb-4 px-2">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label>Select Source</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option>Stating</option>
                                    <option>Production</option>
                                    <option>Stating</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-3">
                                <label>Select Destination</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option>Production</option>
                                    <option>Production</option>
                                    <option>Stating</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-2"></div>
                            <div class="col-12 col-md-4">
                                <div class="small fw-light">Search</div>
                                <div class="input-group">
                                    <input class="form-control border" type="search" value="search" id="example-search-input">
                                    <span class="input-group-append">
                                        <button class="btn btn-search" type="button">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <p>8 themes found!</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <div class="theme-dev">
                                    <a href="#">
                                        <figure>
                                            <img src="images/theme1.png" alt="" />
                                            <figcaption class="d-flex justify-content-between">
                                                <span class="theme-title">SURFup PetCity</span>
                                                <span class="theme-by">By Halothemes</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="theme-dev">
                                    <a href="#">
                                        <figure>
                                            <img src="images/theme2.png" alt="" />
                                            <figcaption class="d-flex justify-content-between">
                                                <span class="theme-title">SURFup PetCity</span>
                                                <span class="theme-by">By Halothemes</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="theme-dev">
                                    <a href="#">
                                        <figure>
                                            <img src="images/theme3.png" alt="" />
                                            <figcaption class="d-flex justify-content-between">
                                                <span class="theme-title">SURFup PetCity</span>
                                                <span class="theme-by">By Halothemes</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="theme-dev">
                                    <a href="#">
                                        <figure>
                                            <img src="images/theme4.png" alt="" />
                                            <figcaption class="d-flex justify-content-between">
                                                <span class="theme-title">SURFup PetCity</span>
                                                <span class="theme-by">By Halothemes</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12 col-md-3">
                                <div class="theme-dev">
                                    <a href="#">
                                        <figure>
                                            <img src="images/theme5.png" alt="" />
                                            <figcaption class="d-flex justify-content-between">
                                                <span class="theme-title">SURFup PetCity</span>
                                                <span class="theme-by">By Halothemes</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="theme-dev">
                                    <a href="#">
                                        <figure>
                                            <img src="images/theme6.png" alt="" />
                                            <figcaption class="d-flex justify-content-between">
                                                <span class="theme-title">SURFup PetCity</span>
                                                <span class="theme-by">By Halothemes</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="theme-dev">
                                    <a href="#">
                                        <figure>
                                            <img src="images/theme7.png" alt="" />
                                            <figcaption class="d-flex justify-content-between">
                                                <span class="theme-title">SURFup PetCity</span>
                                                <span class="theme-by">By Halothemes</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="theme-dev">
                                    <a href="#">
                                        <figure>
                                            <img src="images/theme8.png" alt="" />
                                            <figcaption class="d-flex justify-content-between">
                                                <span class="theme-title">SURFup PetCity</span>
                                                <span class="theme-by">By Halothemes</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
