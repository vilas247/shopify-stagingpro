@extends('layouts.admin')
@section('content')
<div class="container" id="shopifyIntegration">
    @include('admin.shopify.menu')
    <main>
        <div class="card">
            <div class="card-header no-bg p-tb-2">
                <span class="card-title mb-0">Selective Migration</span>
            </div>
            <div class="card-body px-4 py-4">
                <ul class="nav nav-tabs mb-3" id="ctab1" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="ctab1-tab-1" data-bs-toggle="tab" href="#ctab1-tabs-1" role="tab" aria-controls="ctab1-tabs-1" aria-selected="true">Products</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="ctab1-tab-2" data-bs-toggle="tab" href="#ctab1-tabs-2" role="tab" aria-controls="ctab1-tabs-2" aria-selected="false">Images</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="ctab1-tab-3" data-bs-toggle="tab" href="#ctab1-tabs-3" role="tab" aria-controls="ctab1-tabs-3" aria-selected="false">Promotions</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="ctab1-tab-3" data-bs-toggle="tab" href="#ctab1-tabs-4" role="tab" aria-controls="ctab1-tabs-4" aria-selected="false">Pages</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="ctab1-tab-5" data-bs-toggle="tab" href="#ctab1-tabs-5" role="tab" aria-controls="ctab1-tabs-5" aria-selected="false">Themes</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="ctab1-tab-6" data-bs-toggle="tab" href="#ctab1-tabs-6" role="tab" aria-controls="ctab1-tabs-6" aria-selected="false">Others</a>
                    </li>
                </ul>
                <div class="tab-content" id="ctab1-content">
                    <div class="tab-pane fade show active" id="ctab1-tabs-1" role="tabpanel" aria-labelledby="ctab1-tab-1">
                        <div class="card">
                            <div class="card-body px-0 pb-0">
                                <div class="bulk-migration-top">
                                    <div class="row px-4">
                                        <div class="col-12 col-md-3">
                                            <label>Select Source Enviornment</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option>Select</option>
                                                <option>Production</option>
                                                <option>Stating</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <label>Select Destination Enviornment</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option>Select</option>
                                                <option>Production</option>
                                                <option>Stating</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-6 d-flex align-items-center justify-content-end">
                                            <a href="#" class="px-3"><img src="images/icon-filter.png" /></a>
                                            <a href="#"><img src="images/icon-sort.png" /></a>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-12">
                                            <div class="table-responsive">
                                                <table class="table table-migration custom-th custom-checkbox">
                                                    <tr>
                                                        <th>
                                                            <label>
                                                                <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                                            </label>
                                                        </th>
                                                        <th>Product</th>
                                                        <th>SKU</th>
                                                        <th>Qty</th>
                                                        <th>Price</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>
                                                                <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <img src="images/thumbnail1.png" class="br-10 brd" />
                                                            Benjamin Bookcase
                                                        </td>
                                                        <td>26308461</td>
                                                        <td>100</td>
                                                        <td>&pound;66.66</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>
                                                                <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <img src="images/thumbnail3.png" class="br-10 brd" />
                                                            Maaven Lounge Chair
                                                        </td>
                                                        <td>26308461</td>
                                                        <td>100</td>
                                                        <td>&pound;66.66</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>
                                                                <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <img src="images/thumbnail4.png" class="br-10 brd" />
                                                            Essence Uphotstered Bed
                                                        </td>
                                                        <td>26308461</td>
                                                        <td>100</td>
                                                        <td>&pound;66.66</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>
                                                                <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <img src="images/thumbnail5.png" class="br-10 brd" />
                                                            Zest Uphotstered Bed
                                                        </td>
                                                        <td>26308461</td>
                                                        <td>100</td>
                                                        <td>&pound;66.66</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>
                                                                <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <img src="images/thumbnail7.png" class="br-10 brd" />
                                                            Tulipan Amchair
                                                        </td>
                                                        <td>26308461</td>
                                                        <td>100</td>
                                                        <td>&pound;66.66</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>
                                                                <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <img src="images/thumbnail7.png" class="br-10 brd" />
                                                            State Amchair
                                                        </td>
                                                        <td>26308461</td>
                                                        <td>100</td>
                                                        <td>&pound;66.66</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>
                                                                <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <img src="images/thumbnail8.png" class="br-10 brd" />
                                                            Gingham Armchair
                                                        </td>
                                                        <td>26308461</td>
                                                        <td>100</td>
                                                        <td>&pound;66.66</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="5" class="product-selected">3 Products Selected</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="ctab1-tabs-2" role="tabpanel" aria-labelledby="ctab1-tab-2">
                        Tab 2 content
                    </div>
                    <div class="tab-pane fade" id="ctab1-tabs-3" role="tabpanel" aria-labelledby="ctab1-tab-3">
                        Tab 3 content
                    </div>
                    <div class="tab-pane fade" id="ctab1-tabs-4" role="tabpanel" aria-labelledby="ctab1-tab-4">
                        Tab 4 content
                    </div>
                    <div class="tab-pane fade" id="ctab1-tabs-5" role="tabpanel" aria-labelledby="ctab1-tab-5">
                        Tab 5 content
                    </div>
                    <div class="tab-pane fade" id="ctab1-tabs-6" role="tabpanel" aria-labelledby="ctab1-tab-6">
                        Tab 6 content
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
