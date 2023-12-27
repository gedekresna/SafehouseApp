@extends('home')

@section('content')
    <div class="container-fluid">
        <div class="row">

            <main class="col-md-9 ms-sm-auto col-lg-10 p-md-4">
                <div
                    class="d-flex justify-content-between flex-md-nowrap align-items-center border-bottom mb-3 flex-wrap pb-2 pt-3">
                    <h1 class="h2">Category</h1>
                    <div class="btn-toolbar mb-md-0 mb-2">

                        <button class="btn btn-primary">
                            <span data-feather="plus"></span>
                            Add Category
                        </button>
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
