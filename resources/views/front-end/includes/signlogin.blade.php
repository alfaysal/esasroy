	<div class="modal fade" id="loginModalForm" tabindex="-1" role="dialog">
					  	<div class="modal-dialog modal-dialog-centered" role="document">
					    	<div class="modal-content">
					      		<div class="modal-header">
					        		<h5 class="modal-title">Login&nbsp;Form</h5>
					        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          			<span aria-hidden="true">&times;</span>
					        		</button>
					      		</div>
						      	<div class="modal-body">
							     	<form>

										<div class="form-group">
										    <div class="col-sm-12">
										      	<input type="text" class="form-control" id="inputPhone" placeholder="Phone Number">
										    </div>
										</div>

										<div class="form-group">
											<div class="col-sm-12">
										    	<input type="password" class="form-control" id="inputPassword" placeholder="Password">
										    </div>
										</div>

									</form>

									<div class="API-BOX text-center mt-5 mb-3">
										<p>Or Login With</p>
										<a href="" class="fb-icon-color mr-2"><i class="fab fa-2x fa-facebook-square"></i></a>
										<a href="" class="google-icon-color ml-2"><i class="fab fa-2x fa-google-plus-square"></i></a>
									</div>
									<div class="link">
										<a href="" class="text-white small">Forgot Password?</a><br>
										<p class="text-danger small">New Member? <a class="loginFormSignupLink" data-toggle="modal" data-target="#signupModalForm">Sign Up</a> here</p>
									</div>
							    </div>
							    <div class="modal-footer">

							        <button type="submit" class="btn btn-outline-light text-danger">Log&nbsp;In</button>
							    </div>
							</div>
						</div>
					</div>

<!------------------------------------------------------login modal segment ends-->
					</div>
					<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 mob-hide">
						<a href="#!" class="nav-link  mob-hide" data-toggle="modal" data-target="#signupModalForm">Get Account</a>

<!------------------------------------------------------Sign Up modal segment starts-->
					<div class="modal fade" id="signupModalForm" tabindex="-1" role="dialog">
					  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
					    	<div class="modal-content">
					      		<div class="modal-header">
					        		<h5 class="modal-title">SignUp&nbsp;Form</h5>
					        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          			<span aria-hidden="true">&times;</span>
					        		</button>
					      		</div>
						      	<div class="modal-body">
							     	<form action="{{ route('business_admin_ac_request') }}" method="POST">

							     		@csrf

										<div class="row">
		<!-- --------------------------left side---------------------------------->
											<div class="col-sm-6">

												<div class="form-group">
												    <div class="col-sm-12">
												      	<input type="text" name="name" class="form-control" id="inputPhone" placeholder="Enter Your Name">
												    </div>
												</div>

												<div class="form-group">
													<div class="col-sm-12">
												    	<input type="email" name="email" class="form-control" id="inputPassword" placeholder="Enter Your Email">
												    </div>
												</div>

												<div class="form-group">
													<div class="col-sm-12">
												    	<input type="text" name="home" class="form-control" id="inputConfirmPassword" placeholder="Home Address">
												    </div>
												</div>

												<div class="form-group">
													<div class="col-sm-12">
												    	<input type="text" name="phone" class="form-control" id="inputConfirmPassword" placeholder="Phone Number">
												    </div>
												</div>

												<div class="form-group">
													<div class="col-sm-12">
												    	<input type="text" name="licence" class="form-control" id="inputConfirmPassword" placeholder="Enter Business Licence">
												    </div>
												</div>



												<div class="form-group">
												    <div class="col-sm-12">
												      	<input type="text" name="shope_name" class="form-control" id="inputFullName" placeholder="Enter Shop Name">
												    </div>
												</div>

											</div>	
<!-- --------------------------left side end---------------------------------->


<!-- --------------------------Right side---------------------------------->											
											<div class="col-sm-6">


												<div class="form-group">
												    <div class="col-sm-12">
												    	<select name="number_of_shop" class="form-control" id="inputGender">
													      <option class="text-light bg-dark">Number Of Shop</option>
													      <option value="0" class="text-light bg-dark">single</option>
													      <option value="1" class="text-light bg-dark">multiple</option>
													    </select>
												    </div>
												</div>

												<div class="form-group">
												    <div class="col-sm-12">
												    	<select name="business_type" class="form-control" id="inputGender">
													      <option class="text-light bg-dark">Business Type</option>
													      <option value="0" class="text-light bg-dark">WholeSale</option>
													      <option value="1" class="text-light bg-dark">Retail</option>
													    </select>
												    </div>
												</div>

												<div class="form-group">
												    <div class="col-sm-12">
												      	<input type="text" name="national_id" class="form-control" id="inputFullName" placeholder="Enter National ID">
												    </div>
												</div>

												<div class="form-group">
												    <div class="col-sm-12">
												      	<input type="text" name="business_address" class="form-control" id="inputFullName" placeholder="Enter Business Address">
												    </div>
												</div>


												<div class="form-group">
													<div class="col-sm-12">
													    <input type="date" name="d_o_b" class="form-control" id="inputDate" placeholder="Enter Your Birthday">
													</div>
												</div>

											</div>

		<!-- -----------------------right side end ---------------------->
										</div>
										<div class="col-sm-12">
											<div class="form-check text-center">
													<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
													<label class="form-check-label small checkbox-1-color" for="defaultCheck1">
													    I agree to the terms and conditions
													</label>
												</div>

												
												<div class="form-group">
													<div class="col-sm-12">
														<input type="submit" class="btn btn-outline-light text-danger" value="SignUp">
													</div>
												</div>

												<div class="API-BOX text-center mt-3 mb-3">
													<p>Or Sign Up With</p>
													<a href="" class="fb-icon-color mr-2"><i class="fab fa-2x fa-facebook-square"></i></a>
													<a href="" class="google-icon-color ml-2"><i class="fab fa-2x fa-google-plus-square"></i></a>
												</div>
										</div>
									</form>
							    </div>
							</div>
						</div>
					</div>

<!------------------------------------------------------Sign Up modal segment ends-->	
					</div>
				</div>
			</div>
		</div>