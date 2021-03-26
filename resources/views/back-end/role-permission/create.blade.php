@extends('back-end.backendmaster')

@section('title')

    <title>Role Page</title>

@endsection

@section('breadcram')
    
          <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><span>Dashboard/</span></li>
                                <li><span><a href="{{ route('create_role_page') }}">Role</a></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Kumkum Rai <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Message</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <a class="dropdown-item" href="#">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection

@section('content')

<div class="main-content-inner">
               <div class="row">
                    <div class="col-lg-6 col-ml-4">
                        <div class="row">
                            <!-- Textual inputs start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                   @include('back-end.includes.message')
                                   <form action=" {{ route('role-save') }}" method="post">
                                       @csrf
                                        <div class="card-body">
                                        <h4 class="header-title">Create Role Permission</h4>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Text</label>
                                            <input class="form-control" type="text" name="name">
                                        </div>

                                        @foreach($permissions as $permission)
                                         <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="permission[]"  class="custom-control-input" id="customCheck{{ $permission->id }}" value="{{ $permission->name }}">
                                                <label class="custom-control-label" for="customCheck{{ $permission->id }}">{{ $permission->name }}</label>
                                        </div>
                                        @endforeach
                                       
                                      <!--  <div class="form-group">
                                            <label class="col-form-label">Select</label>
                                            <select class="form-control">
                                                <option>Select</option>
                                                <option>Large select</option>
                                                <option>Small select</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Custom Select</label>
                                            <select class="custom-select">
                                                <option selected="selected">Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div> -->
                                       
                                       <div class="form-group">
                                           <label class="col-form-lable">Submit</label>
                                           <button class="btn btn-primary">Create Role</button>
                                       </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-ml-4">
                        <div class="row">
                            <!-- Textual inputs start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                   
                                   <form action=" {{ route('permission-save') }}" method="post">
                                       @csrf
                                        <div class="card-body">
                                        <h4 class="header-title">Create Permission</h4>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Text</label>
                                            <input class="form-control" type="text" name="name">
                                        </div>
                                       
                                      <!--  <div class="form-group">
                                            <label class="col-form-label">Select</label>
                                            <select class="form-control">
                                                <option>Select</option>
                                                <option>Large select</option>
                                                <option>Small select</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Custom Select</label>
                                            <select class="custom-select">
                                                <option selected="selected">Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div> -->
                                       
                                       <div class="form-group">
                                           <label class="col-form-lable">Submit</label>
                                           <button class="btn btn-primary">Create Permission</button>
                                       </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


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
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                            <tr>
                                                <td>Bruno Nash</td>
                                                <td>Software Engineer</td>
                                                <td>Edinburgh</td>
                                                <td>21</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
</div>


@endsection