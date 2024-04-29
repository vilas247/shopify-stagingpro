@extends('layouts.app')
@section('content')
<div class="container" id="shopifyIntegration">
    @include('shopify.menu')
    <main>
        <div class="card">
            <div class="card-header d-flex justify-content-between no-bg p-tb-2 align-items-center">
                <span class="card-title mb-0">Production, Staging and Integration Environments</span>
                <button class="btn btn-success btn-sm">Add Environments</button>
            </div>
            <div class="card-body px-0 p-0">
                <div class="table-responsive">
                    <table class="table custom-th">
                        <tr>
                            <th class="pl-3">Type</th>
                            <th>Front-end</th>
                            <th>Control-Panel</th>
                            <th>Git Branch</th>
                            <th>Data Created</th>
                            <th>Data Migration & Theme Status</th>
                            <th>Actions</th>
                        </tr>
                        <tr>
                            <td class="pl-3">Production</td>
                            <td><span class="td-bg bg-lime">View</span></td>
                            <td><span class="td-bg bg-yellow">In Progress</span></td>
                            <td><span class="td-bg bg-yellow">In Progress</span></td>
                            <td>14 September 2023</td>
                            <td>
                                <div class="progress bar-success c-bar">
                                    <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"><span>60%</span></div>
                                </div>
                            </td>
                            <td class="cus-btn1"><button class="btn btn-dark btn-sm mx-2">Reset</button><button class="btn btn-danger btn-sm">Delete</button></td>
                        </tr>
                        <tr>
                            <td class="pl-3">Production</td>
                            <td><span class="td-bg bg-lime">View</span></td>
                            <td><span class="td-bg bg-lime">View</span></td>
                            <td><span class="td-bg bg-yellow">In Progress</span></td>
                            <td>14 September 2023</td>
                            <td>
                                <div class="progress bar-success c-bar">
                                    <div class="progress-bar" role="progressbar" style="width: 76%;" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100"><span>76%</span></div>
                                </div>
                            </td>
                            <td class="cus-btn1"><button class="btn btn-dark btn-sm mx-2">Reset</button><button class="btn btn-danger btn-sm">Delete</button></td>
                        </tr>
                        <tr>
                            <td class="pl-3">Production</td>
                            <td><span class="td-bg bg-lime">View</span></td>
                            <td><span class="td-bg bg-lime">View</span></td>
                            <td><span class="td-bg bg-yellow">In Progress</span></td>
                            <td>14 September 2023</td>
                            <td>
                                <div class="progress bar-success c-bar">
                                    <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><span>20%</span></div>
                                </div>
                            </td>
                            <td class="cus-btn1"><button class="btn btn-dark btn-sm mx-2">Reset</button><button class="btn btn-danger btn-sm">Delete</button></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <br />
        <div class="card">
            <div class="card-header d-flex justify-content-between no-bg p-tb-2 align-items-center">
                <span class="card-title mb-0">Cloud and Docker Environments</span>
                <button class="btn btn-success btn-sm">Add User</button>
            </div>
            <div class="card-body px-0 p-0">
                <div class="table-responsive">
                    <table class="table custom-th">
                        <th class="pl-3">Type</th>
                        <th>Env URL</th>
                        <th>Git Repo URL</th>
                        <th>Data Created</th>
                        <th>Login Email ID</th>
                        <th>Data Migration & Theme Status</th>
                        <th>Version</th>
                        </tr>
                        <tr>
                            <td class="pl-3">Production on Cloud</td>
                            <td>store1.dryrunpro.com</td>
                            <td>https://github.com/sam</td>
                            <td>14 November 2023</td>
                            <td>hello@example.com</td>
                            <td>
                                <div class="progress bar-success c-bar">
                                    <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"><span>40%</span></div>
                                </div>
                            </td>
                            <td class="pr-3">1,034</td>
                        </tr>
                        <tr>
                            <td class="pl-3">Staging Docker</td>
                            <td>store1.dryrunpro.com</td>
                            <td>https://github.com/vinod</td>
                            <td>14 November 2023</td>
                            <td>hello@example.com</td>
                            <td>
                                <div class="progress bar-success c-bar">
                                    <div class="progress-bar" role="progressbar" style="width: 66%;" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"><span>66%</span></div>
                                </div>
                            </td>
                            <td class="pr-3">1,034</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>

@endsection
