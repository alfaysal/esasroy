@extends('front-end.master')


@section('content')
                        <section>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            
                                        </div>
                                        <div class="col-md-4">
                                            <h2 style="color: white;background: #A60505;padding: 10px;border-radius: 5px;">Set Your Password </h2>
                                               <form >

                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <input type="email" name="email" class="form-control" id="inputPhone" placeholder="Email">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <input type="password" name="password" class="form-control" id="inputPhone" placeholder="Enter Your Password">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <input type="password" class="form-control" id="inputPassword" placeholder=" Re-enter Password">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <input type="submit" class="btn btn-danger">
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                         <div class="col-md-4">
                                            
                                        </div>
                                    </div>
                                </div>
                        </section>  
                       

                              


@endsection