@extends('home')

@section('content')
    <div class="container-fluid">
        <div class="row">

            <main class="col-md-9 ms-sm-auto col-lg-10 p-md-4">
                <div class="d-flex justify-content-between flex-md-nowrap border-bottom mb-3 flex-wrap pb-2">
                    {{-- <h1 class="h2">Category</h1> --}}
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li aria-current="page" class="breadcrumb-item active">Menu Category</li>
                        </ol>
                    </nav>
                    <div class="btn-toolbar mb-md-0 mb-2">

                        {{-- <button class="btn btn-primary">
                            <span data-feather="plus"></span>
                            Add Category
                        </button> --}}

                        <a class="btn btn-primary" href="{{ route('category.create') }}">
                            <span data-feather="plus"></span>
                            Add Category</a>
                    </div>
                </div>

                <table class="display" id="table-category" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </main>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/category.js') }}"></script>
@endsection
