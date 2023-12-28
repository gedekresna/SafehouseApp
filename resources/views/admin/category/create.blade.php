@extends('home')

<style>
    .card.category {
        padding: 20px;
        margin-right: 20px;
    }

    .brdcrmbBefore {
        text-decoration: none;
    }
</style>

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 p-md-4">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li aria-current="page" class="breadcrumb-item"><a class="brdcrmbBefore"
                        href="{{ route('category.index') }}">Menu
                        Category</a>
                </li>
                <li aria-current="page" class="breadcrumb-item active">Create</li>
            </ol>
        </nav>

        <div class="card category">

            <h4>Create Category</h4>
            <hr>

            <form action="{{ route('category.store') }}" method="POST">
                <div class="mb-3">
                    <label class="form-label" for="categoryName">Category Name</label>
                    <input class="form-control" id="categoryName" type="text">
                </div>

                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </main>
@endsection
