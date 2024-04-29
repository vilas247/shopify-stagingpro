@extends('layouts.app')
@section('content')
<div class="container" id="shopifyIntegration">
    @include('shopify.menu')
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
                                            <a href="#" class="px-3"><img src="{{ asset('images/icon-filter.png') }}" /></a>
                                            <a href="#"><img src="{{ asset('images/icon-sort.png') }}" /></a>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-12">
                                            <div class="table-responsive">
                                                <table class="table table-migration custom-th custom-checkbox">
                                                    <tr>
                                                        <th>
                                                            <label>
                                                                <input class="form-check-input me-1" id="selectAll" type="checkbox" value="" aria-label="...">
                                                            </label>
                                                        </th>
                                                        <th>Product</th>
                                                        <th>SKU</th>
                                                        <th>Qty</th>
                                                        <th>Price</th>
                                                    </tr>
                                                    <tbody id="productsTable">
                                                    </tbody>
                                                    <tr>
                                                        <td colspan="5" class="product-selected">0 Products Selected</td>
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
@section('scripts')
<script>
jQuery(document).ready(function($){
    $.get('/admin/shopify-api/get-products', function (data) {
        var data = $.parseJSON(data);;
        if(data.status == true){
            $("body #productsTable").html(data.html);
        }
    });

    $('body').on('change', '#selectAll', function () {
        console.log("inside");
        if($(this).is(':checked')) $('.selectOne').attr('checked','checked');
        else $('.selectOne').removeAttr('checked');
        $('.product-selected').html($('body .selectOne:checked').length + "Products Selected");
    });
    $('body').on('change', '.selectOne', function () {
        $('.product-selected').html($('body .selectOne:checked').length + " Products Selected");
        console.log(($('body .selectOne:checked').length == $('body .selectOne').length));
        if($('body .selectOne:checked').length == $('body .selectOne').length){
            $('body #selectAll').attr('checked','checked');
        } else {
           $('body #selectAll').removeAttr('checked');
        }
    });
});
</script>
@endsection
