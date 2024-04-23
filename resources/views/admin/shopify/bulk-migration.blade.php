@extends('layouts.admin')
@section('content')
<div class="container" id="shopifyIntegration">
    @include('admin.shopify.menu')
    <main>
        <div class="card">
            <div class="card-header no-bg p-tb-2">
                <span class="card-title mb-0">Bulk Migration</span>
            </div>
            <div class="card-body px-4 py-4">
                <div class="bulk-migration-top mb-4">
                    <div class="row">
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
                        <div class="col-12 col-md-3">
                            <label>Production Website URL:</label>
                            <p><strong>https://example.com/</strong></p>
                        </div>
                    </div>
                </div>
                <div class="bulk-migration-content">
                    <div class="accordion product-accordion" id="accordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordionProductInventory" aria-expanded="true" aria-controls="accordionProductInventory">
                                    Product & Inventory Management
                                </button>
                            </h2>
                            <div id="accordionProductInventory" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionProduct">
                                <div class="accordion-body">
                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                            <div class="products-selection">
                                                <p><strong>Products (128)</strong></p>
                                                <ul class="list-group custom-checkbox">
                                                    <li class="list-group-item">
                                                        <label>
                                                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                                            Collect
                                                        </label>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <label>
                                                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                                            Collection
                                                        </label>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <label>
                                                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                                            Custom Collection
                                                        </label>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <label>
                                                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                                            Product
                                                        </label>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <label>
                                                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                                            Product Images
                                                        </label>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <label>
                                                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                                            Product Variants
                                                        </label>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <label>
                                                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                                            Smart Selections
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="products-selection">
                                                <p><strong>Invetory (57)</strong></p>
                                                <ul class="list-group custom-checkbox">
                                                    <li class="list-group-item">
                                                        <label>
                                                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                                            Inventory Item
                                                        </label>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <label>
                                                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                                            Inventory level
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            &nbsp;
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionOnlineStore" aria-expanded="false" aria-controls="accordionOnlineStore">
                                    Online Store & Content
                                </button>
                            </h2>
                            <div id="accordionOnlineStore" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionOnline">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionOrderTransition" aria-expanded="false" aria-controls="accordionOrderTransition">
                                    Order & Transition Management
                                </button>
                            </h2>
                            <div id="accordionOrderTransition" class="accordion-collapse collapse" data-bs-parent="#accordionOrder">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionSalesChannels" aria-expanded="false" aria-controls="accordionSalesChannels">
                                    Sales Channels & Marketing
                                </button>
                            </h2>
                            <div id="accordionSalesChannels" class="accordion-collapse collapse" data-bs-parent="#accordionSales">
                                <div class="accordion-body">
                                    <strong>This is the fourth item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Starts -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionCustomerManagement" aria-expanded="false" aria-controls="accordionCustomerManagement">
                                    Customer Management
                                </button>
                            </h2>
                            <div id="accordionCustomerManagement" class="accordion-collapse collapse" data-bs-parent="#accordionSales">
                                <div class="accordion-body">
                                    <strong>This is the Fifth item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <!-- Accordion Ends -->

                        <!-- Accordion Starts -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionAnalytics" aria-expanded="false" aria-controls="accordionAnalytics">
                                    Analytics & Metafields
                                </button>
                            </h2>
                            <div id="accordionAnalytics" class="accordion-collapse collapse" data-bs-parent="#accordionSales">
                                <div class="accordion-body">
                                    <strong>This is the Sixth item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <!-- Accordion Ends -->

                        <!-- Accordion Starts -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionAdvanced" aria-expanded="false" aria-controls="accordionAdvanced">
                                    Advanced Features (Plus)
                                </button>
                            </h2>
                            <div id="accordionAdvanced" class="accordion-collapse collapse" data-bs-parent="#accordionSales">
                                <div class="accordion-body">
                                    <strong>This is the Sixth item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <!-- Accordion Ends -->

                        <!-- Accordion Starts -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionAdvanced" aria-expanded="false" aria-controls="accordionAdvanced">
                                    Advanced Features (Plus)
                                </button>
                            </h2>
                            <div id="accordionAdvanced" class="accordion-collapse collapse" data-bs-parent="#accordionSales">
                                <div class="accordion-body">
                                    <strong>This is the Sixth item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <!-- Accordion Ends -->

                        <!-- Accordion Starts -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionStoreProperties" aria-expanded="false" aria-controls="accordionStoreProperties">
                                    Store Properties
                                </button>
                            </h2>
                            <div id="accordionStoreProperties" class="accordion-collapse collapse" data-bs-parent="#accordionSales">
                                <div class="accordion-body">
                                    <strong>This is the Sixth item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <!-- Accordion Ends -->

                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
