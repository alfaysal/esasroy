@extends('back-end.backendmaster')

@section('title')

    <title>Account Activated</title>

@endsection

@section('content')

<div class="main-content-inner">
               <div class="row">
                     <div class="col-12 mt-5">
                                <div class="card">
                                   
                                   <form action=" {{ route('business_request_accept_save') }}" method="post">
                                       @csrf
                                        <div class="card-body">
                                        <h4 class="header-title">Account Activate</h4>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Name</label>
                                            <input disabled class="form-control" type="text" name="name" value="{{ $b_s_a_req_details->name }}">
                                            <input hidden class="form-control" type="text" name="id" value="{{ $b_s_a_req_details->id }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Email</label>
                                            <input disabled class="form-control" type="email" name="email" value="{{ $b_s_a_req_details->email }}">
                                        </div>

                                       
                                      <div class="form-group">
                                            <label class="col-form-label">Activation Status</label>
                                            <select name="activation_status" required class="form-control">
                                                <option>Select</option>
                                                <option value="0">Deactivate</option>
                                                <option value="1">Activate</option>
                                            </select>
                                        </div>
                                       
                                       <div class="form-group">
                                           <button class="btn btn-primary">Activate</button>
                                       </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                </div>
</div>


@endsection