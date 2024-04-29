@extends('layouts.app')
@section('content')
<div class="container" id="shopifyIntegration">
    @include('shopify.menu')
    <main>
        <div class="card">
            <div class="card-header no-bg p-tb-2">
                <span class="card-title mb-0">Settings</span>
            </div>
            <div class="card-body px-4 py-4">
                <ul class="nav nav-tabs mb-3" id="ctab1" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="ctab1-tab-1" data-bs-toggle="tab" href="#ctab1-tabs-1" role="tab" aria-controls="ctab1-tabs-1" aria-selected="true">Products</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="ctab1-tab-2" data-bs-toggle="tab" href="#ctab1-tabs-2" role="tab" aria-controls="ctab1-tabs-2" aria-selected="false">Status Notifications</a>
                    </li>
                </ul>
                <div class="tab-content" id="ctab1-content">
                    <div class="tab-pane fade show active" id="ctab1-tabs-1" role="tabpanel" aria-labelledby="ctab1-tab-1">
                        <div class="card border-0">
                            <div class="card-body px-0 border-0">
                                <form action="#" method="post" class="form-products">
                                    <div class="mb-4">
                                        <label for="developerDesign" class="form-label d-block">Developer/Designer 1</label>
                                        <span class="md-block mb-1"><input type="text" class="form-control d-inline-block maxw-450 brd-dark br-10" id="developerDesign" placeholder="sam"></span>
                                        <button class="mx-2 btn btn-success">Verified</button>
                                        <button class="btn btn-dark">Set Permission</button>
                                    </div>
                                    <div class="mb-4">
                                        <label for="developerDesign2" class="form-label d-block">Developer/Designer 2</label>
                                        <span class="md-block mb-1"><input type="text" class="form-control d-inline-block maxw-450 brd-dark br-10" id="developerDesign2" placeholder="kevin"></span>
                                        <button class="mx-2 btn btn-success">Verified</button>
                                        <button class="btn btn-dark">Change Permission</button>
                                    </div>
                                    <div class="mb-4">
                                        <label for="developerDesign2" class="form-label d-block">Developer/Designer 3</label>
                                        <span class="md-block mb-1"><input type="text" class="form-control d-inline-block maxw-450 brd-dark br-10" id="developerDesign3" placeholder="Enter Github user ID"></span>
                                        <button class="mx-2 btn btn-dark">Verify</button>
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-dark">Add Team Member</button>
                                    </div>
                                </form>
                                <div class="col-12 d-flex justify-content-end">
                                    <p><button class="btn btn-white mx-3">Reset</button><button class="btn btn-dark">Save</button></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ctab1-tabs-2" role="tabpanel" aria-labelledby="ctab1-tab-2">
                        <div class="card border-0">
                            <div class="card-body px-0 border-0">
                                <div class="custom-checkbox mb-4 mt-2">
                                    <p>
                                        <label class="mb-1 m-d-block">
                                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                            Deployment Notification
                                        </label>
                                        <label class="mx-sm-0 mx-md-4 mb-1 m-d-block">
                                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                            App Changes
                                        </label>
                                        <label class="mb-1 m-d-block">
                                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                            Data Migration Notification
                                        </label>
                                    </p>
                                </div>
                                <form action="#" method="post" class="form-products">
                                    <div class="mb-4">
                                        <label for="developerDesign" class="form-label d-block">Email Notification</label>
                                        <span class="md-block mb-1"><input type="email" class="form-control d-inline-block maxw-450 brd-dark br-10" id="developerDesign" placeholder="Enter email id"></span>
                                        <button class="mx-2 btn btn-success">Verified</button>
                                        <button class="btn btn-dark">Set Permission</button>
                                    </div>
                                    <div class="mb-4">
                                        <label for="developerDesign2" class="form-label d-block">SMS Notification</label>
                                        <span class="md-block mb-1"><input type="text" class="form-control d-inline-block maxw-450 brd-dark br-10" id="developerDesign2" placeholder="Enter Phone number"></span>
                                        <button class="mx-2 btn btn-success">Add Channel</button>
                                        <button class="btn btn-dark">Change Permission</button>
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-dark">Add Channel</button>
                                    </div>
                                    <div class="mb-3">
                                        <ul class="list-group list-group-horizontal-sm flex-direction-row">
                                            <li class="list-group-item border-0 px-1"><a href="#"><img src="images/icon-channel.png" /></a></li>
                                            <li class="list-group-item border-0 px-1"><a href="#"><img src="images/icon-teams.png" /></a></li>
                                            <li class="list-group-item border-0 px-1"><a href="#"><img src="images/icon-chat.png" /></a></li>
                                        </ul>
                                    </div>
                                </form>
                                <div class="col-12 d-flex justify-content-end">
                                    <p><button class="btn btn-white mx-3">Reset</button><button class="btn btn-dark">Save</button></p>
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
