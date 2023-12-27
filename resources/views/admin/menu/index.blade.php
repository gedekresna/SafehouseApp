@extends('home')

<style>
    .menuCardTitle {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-size: 18px;
    }
</style>
@section('content')
    <div class="container-fluid">
        <div class="row">

            <main class="col-md-9 ms-sm-auto col-lg-10 p-md-4">
                <div
                    class="d-flex justify-content-between flex-md-nowrap align-items-center border-bottom mb-3 flex-wrap pb-2 pt-3">
                    <h1 class="h2">Menu</h1>
                    <div class="btn-toolbar mb-md-0 mb-2">

                        <button class="btn btn-primary">
                            <span data-feather="plus"></span>
                            Add Menu
                        </button>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img alt="..." class="card-img-top" src="{{ asset('uploads/images/coffee.jpg') }}">
                    <p class="menuCardTitle">Coffee</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Americano
                            @include('layouts.element.counter_btn')
                        </li>
                        <li class="list-group-item">Coffee Latte @include('layouts.element.counter_btn')</li>
                        <li class="list-group-item">Coffee Baileys @include('layouts.element.counter_btn')</li>
                    </ul>
                </div>
            </main>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/category.js') }}"></script>
@endsection
