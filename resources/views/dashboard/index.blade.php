@extends('home')

<style>
    .card-horizontal {
        display: flex;
        flex: 1 1 auto;
    }

    .card {
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }

    .card-icon i {
        font-size: 50px;
        margin-right: 30px;
    }

    .card-content h4 {
        margin-bottom: 8px;
        font-size: 18px;
    }

    .card-content h5 {
        font-size: 16px;
        color: #333;
    }
</style>

@section('content')
    <div class="container-fluid">
        <div class="row">

            <main class="col-md-9 ms-sm-auto col-lg-10 p-md-4">
                <div class="d-flex justify-content-between flex-md-nowrap border-bottom mb-3 flex-wrap">
                    {{-- <h1 class="h2">Dashboard</h1> --}}
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li aria-current="page" class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </nav>

                </div>

                <div class="row">

                    <div class="col">
                        <div class="card">
                            <div class="card-horizontal">
                                <div class="card-icon">
                                    <i class="fa-solid fa-wallet"></i>
                                </div>
                                <div class="card-content">

                                    <h4>Saldo </h4>
                                    <h5>Rp 5.000.000</h5>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="card-horizontal">
                                <div class="card-icon">
                                    <i class="fa-solid fa-comments-dollar"></i>
                                </div>
                                <div class="card-content">
                                    <h4>Penjualan Hari Ini</h4>
                                    <h5>Rp 5.000.000</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="card-horizontal">
                                <div class="card-icon">
                                    <i class="fa-solid fa-sack-dollar"></i>
                                </div>
                                <div class="card-content">
                                    <h4>Profit</h4>
                                    <h5>Rp 5.000.000</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <canvas class="w-100 my-4" height="380" id="myChart" width="900"></canvas>

            </main>
        </div>
    </div>
@endsection
