@extends('home')

@section('css')
    <link href="https://cdn.datatables.net/datetime/1.5.1/css/dataTables.dateTime.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">

            <main class="col-md-9 ms-sm-auto col-lg-10 p-md-4">
                <div
                    class="d-flex justify-content-between flex-md-nowrap align-items-center border-bottom mb-3 flex-wrap pb-2 pt-3">
                    <h1 class="h2">Reports</h1>
                    <div class="btn-toolbar mb-md-0 mb-2">

                        <button class="btn btn-primary">
                            <span data-feather="plus"></span>
                            Add Report
                        </button>
                    </div>
                </div>

                <table cellpadding="5" cellspacing="5">
                    <tbody>
                        <tr>
                            <td>Minimum date:</td>
                            <td><input id="min" name="min" type="text"></td>
                        </tr>
                        <tr>
                            <td>Maximum date:</td>
                            <td><input id="max" name="max" type="text"></td>
                        </tr>
                    </tbody>
                </table>
                <table class="display" id="table-report" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Transaction ID</th>
                            <th>Order</th>
                            <th>Transaction Date</th>
                            <th>Amount</th>
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
    <script src="https://cdn.datatables.net/datetime/1.5.1/js/dataTables.dateTime.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
    <script src="{{ asset('js/report.js') }}"></script>
@endsection
