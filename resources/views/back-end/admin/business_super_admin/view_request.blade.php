@extends('back-end.backendmaster')

@section('title')

    <title>srtdash - Ecommerce Dashboard</title>

@endsection

@section('content')

<div class="main-content-inner">
               <div class="row">
                    <!-- data table start -->
                  
                    <!-- Primary table end -->
                    <!-- Dark table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Data Table Dark</h4>
                                <div class="data-tables datatable-dark">
                                    <table id="dataTable3" class="text-center">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start Date</th>
                                                <th>salary</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($b_s_a_requests as $b_s_a_request)

                                            <tr>
                                                <td>{{ $b_s_a_request->name }}</td>
                                                <td>{{ $b_s_a_request->email }}</td>
                                                <td>{{ $b_s_a_request->phone }}</td>
                                                <td>{{ $b_s_a_request->d_o_b }}</td>
                                                <td>{{ $b_s_a_request->licence }}</td>
                                                <td>{{ $b_s_a_request->business_address }}</td>
                                                <td><a class="btn btn-danger btn-sm" href="{{ route('business_request_accepted',['id'=>$b_s_a_request->id]) }}"> Permission</a></td>
                                            </tr>

                                        @endforeach
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dark table end -->
                </div>
</div>


@endsection