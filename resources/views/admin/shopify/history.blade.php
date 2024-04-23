@extends('layouts.admin')
@section('content')
<div class="container"> id="shopifyIntegration"
    @include('admin.shopify.menu')
    <main>
        <div class="card">
            <div class="card-header no-bg p-tb-2">
                <span class="card-title mb-0">Code Merge History</span>
            </div>
            <div class="table-responsive">
                <table class="table custom-th">
                    <tbody>
                        <tr>
                            <th class="pl-3">Git ID</th>
                            <th>Commit date time</th>
                            <th>Branch Name | Enviornment URL</th>
                            <th>Approved by</th>
                            <th>Status</th>
                            <th>Release<br />Version</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td class="pl-3">jai 247</td>
                            <td>14 Feb 2022 | 12AM</td>
                            <td>development | https://github.com/dev</td>
                            <td>Jai</td>
                            <td class="d-flex status-td"><span>Merge Successful | Code are changed on the site</span><button class="btn btn-success">Review</button></td>
                            <td>1,034</td>
                            <td><button class="btn btn-dark">Rollback</button></td>
                        </tr>
                        <!-- <tr>
                            <td colspan="7" class="pl-3">
                                Jai Pushed to Staging<br/>14754f54 <a href="#">Enable Two Factor</a>
                            </td>
                        </tr> -->
                        <tr>
                            <td class="pl-3">jai 247</td>
                            <td>14 Feb 2022 | 12AM</td>
                            <td>development | https://github.com/dev</td>
                            <td>Jai</td>
                            <td class="d-flex status-td"><span>Merge Successful | Code are changed on the site</span><button class="btn btn-success">Review</button></td>
                            <td>1,034</td>
                            <td><button class="btn btn-dark">Rollback</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>
@endsection
