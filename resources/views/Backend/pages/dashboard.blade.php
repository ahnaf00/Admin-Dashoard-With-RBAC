@extends('backend.layouts.master')

@section('content')
    <!-- Statistics Cards -->
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card bg-gradient-primary">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers text-white">
                                <p class="text-white text-sm mb-0 text-uppercase font-weight-bold opacity-7">Total Revenue
                                </p>
                                <h5 class="text-white font-weight-bolder mb-0">
                                    $53,000
                                </h5>
                                <p class="mt-2 mb-0">
                                    <span class="text-white text-sm font-weight-bolder">+55%</span>
                                    <span class="text-white text-xs opacity-7">since yesterday</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-white shadow text-center border-radius-md">
                                <i class="ni ni-money-coins text-dark text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Active Users</p>
                                <h5 class="font-weight-bolder mb-0">
                                    2,300
                                </h5>
                                <p class="mt-2 mb-0">
                                    <span class="text-success text-sm font-weight-bolder">+3%</span>
                                    <span class="text-secondary text-xs">since last week</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-danger shadow-danger text-center border-radius-md">
                                <i class="ni ni-single-02 text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Performance</p>
                                <h5 class="font-weight-bolder mb-0">
                                    98.5%
                                </h5>
                                <p class="mt-2 mb-0">
                                    <span class="text-success text-sm font-weight-bolder">+1.2%</span>
                                    <span class="text-secondary text-xs">system uptime</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-success shadow-success text-center border-radius-md">
                                <i class="ni ni-settings-gear-65 text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Requests</p>
                                <h5 class="font-weight-bolder mb-0">
                                    103,430
                                </h5>
                                <p class="mt-2 mb-0">
                                    <span class="text-success text-sm font-weight-bolder">+5%</span>
                                    <span class="text-secondary text-xs">than last month</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-warning shadow-warning text-center border-radius-md">
                                <i class="ni ni-active-40 text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Row -->
    <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <h6 class="text-capitalize">System Performance</h6>
                    <p class="text-sm mb-0">
                        <i class="fa fa-arrow-up text-success"></i>
                        <span class="font-weight-bold">4% more</span> in current month
                    </p>
                </div>
                <div class="card-body p-3">
                    <div class="chart">
                        <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card card-carousel overflow-hidden h-100 p-0">
                <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
                    <div class="carousel-inner border-radius-lg h-100">
                        <div class="carousel-item h-100 active"
                            style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/carousel-1.jpg'); background-size: cover;">
                            <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                <div class="icon icon-shape icon-sm bg-white text-center mb-3 border-radius-md">
                                    <i class="ni ni-camera-compact text-dark opacity-10"></i>
                                </div>
                                <h5 class="text-white mb-1">Get started with Argon</h5>
                                <p>There’s nothing I really wanted to do in life that I wasn’t able to get good at.</p>
                            </div>
                        </div>
                        <div class="carousel-item h-100"
                            style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/carousel-2.jpg'); background-size: cover;">
                            <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                <div class="icon icon-shape icon-sm bg-white text-center mb-3 border-radius-md">
                                    <i class="ni ni-bulb-61 text-dark opacity-10"></i>
                                </div>
                                <h5 class="text-white mb-1">Faster way to create web pages</h5>
                                <p>That’s my skill. I’m not really specifically talented at anything except for the ability
                                    to learn.</p>
                            </div>
                        </div>
                        <div class="carousel-item h-100"
                            style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/carousel-3.jpg'); background-size: cover;">
                            <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                <div class="icon icon-shape icon-sm bg-white text-center mb-3 border-radius-md">
                                    <i class="ni ni-trophy text-dark opacity-10"></i>
                                </div>
                                <h5 class="text-white mb-1">Share with us your design tips!</h5>
                                <p>Don’t be afraid to be wrong because you can’t learn anything from a compliment.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activities & Table -->
    <div class="row mt-4">
        <div class="col-lg-8 mb-lg-0 mb-4">
            <div class="card">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex justify-content-between">
                        <h6 class="mb-2">Recent Activities</h6>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center ">
                        <tbody>
                            <tr>
                                <td class="w-30">
                                    <div class="d-flex px-2 py-1 align-items-center">
                                        <div class="icon icon-shape icon-sm me-3 bg-gradient-info shadow text-center">
                                            <i class="ni ni-bell-55 text-white opacity-10"></i>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">System Update</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Status:</p>
                                        <h6 class="text-sm mb-0">Completed</h6>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">User:</p>
                                        <h6 class="text-sm mb-0">Admin</h6>
                                    </div>
                                </td>
                                <td class="align-middle text-sm">
                                    <div class="col text-center">
                                        <p class="text-xs font-weight-bold mb-0">Time:</p>
                                        <h6 class="text-sm mb-0">2 mins ago</h6>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-30">
                                    <div class="d-flex px-2 py-1 align-items-center">
                                        <div class="icon icon-shape icon-sm me-3 bg-gradient-success shadow text-center">
                                            <i class="ni ni-check-bold text-white opacity-10"></i>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">New User Registered</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Status:</p>
                                        <h6 class="text-sm mb-0">Success</h6>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">User:</p>
                                        <h6 class="text-sm mb-0">System</h6>
                                    </div>
                                </td>
                                <td class="align-middle text-sm">
                                    <div class="col text-center">
                                        <p class="text-xs font-weight-bold mb-0">Time:</p>
                                        <h6 class="text-sm mb-0">15 mins ago</h6>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-30">
                                    <div class="d-flex px-2 py-1 align-items-center">
                                        <div>
                                            <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/chair-steel.jpg"
                                                class="avatar avatar-sm me-3" alt="item">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">Steel Chair</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                        <h6 class="text-sm mb-0">1.400</h6>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Value:</p>
                                        <h6 class="text-sm mb-0">$190,700</h6>
                                    </div>
                                </td>
                                <td class="align-middle text-sm">
                                    <div class="col text-center">
                                        <p class="text-xs font-weight-bold mb-0">Growth:</p>
                                        <h6 class="text-sm mb-0">23.44%</h6>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-0">System Quick Actions</h6>
                </div>
                <div class="card-body p-3">
                    <ul class="list-group">
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex align-items-center">
                                <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                    <i class="ni ni-single-02 text-white opacity-10"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark text-sm">User Management</h6>
                                    <span class="text-xs">Manage roles and permissions</span>
                                </div>
                            </div>
                            <div class="d-flex">
                                <a href="{{ route('users.index') }}"
                                    class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                        class="ni ni-bold-right" aria-hidden="true"></i></a>
                            </div>
                        </li>
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex align-items-center">
                                <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                    <i class="ni ni-settings text-white opacity-10"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark text-sm">System Settings</h6>
                                    <span class="text-xs">Configure application defaults</span>
                                </div>
                            </div>
                            <div class="d-flex">
                                <button
                                    class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                        class="ni ni-bold-right" aria-hidden="true"></i></button>
                            </div>
                        </li>
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex align-items-center">
                                <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                    <i class="ni ni-folder-17 text-white opacity-10"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark text-sm">Security Logs</h6>
                                    <span class="text-xs">View recent system access</span>
                                </div>
                            </div>
                            <div class="d-flex">
                                <button
                                    class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                        class="ni ni-bold-right" aria-hidden="true"></i></button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection