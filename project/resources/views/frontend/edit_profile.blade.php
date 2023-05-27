@extends('frontend.layout.main')
@section('main_container')
		</nav>

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="{{url('index')}}">Home</a></span> / <span>Edit Profile</span></p>
					</div>
				</div>
			</div>
		</div>


		<div id="colorlib-contact">
			<div class="container">
			<center><h1><label style="font-weight:bold;">Edit Profile</label></h1></center>
				<div class="row">
					<div class="col-md-12">
						<div class="contact-wrap">
							@if($edit_user)
							<form action="{{url('/update_userprofile/'.$edit_user->id)}}" class="contact-form" method="post" enctype="multipart/form-data">
								@csrf
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="name" style="font-weight:bold;">Name:</label>
											<input type="text" id="name" name="name" class="form-control" value="{{$edit_user->name}}">
										</div>
									</div>
								
									<div class="col-md-6">
										<div class="form-group">
											<label for="unm" style="font-weight:bold;">User Name:</label>
											<input type="email" id="unm" name="unm" class="form-control" value="{{$edit_user->unm}}">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="gen" style="font-weight:bold;">Gender: </label>
												<label class="radio-inline">
														<input type="radio" name="gen" id="gen" value="Male"
                                                        <?php
                                                        $gen=$edit_user->gen;
                                                        if($gen=="Male")
                                                        {
                                                            echo "checked";
                                                        }
                                                        ?> >Male
												</label>
												<label class="radio-inline">
      												<input type="radio" name="gen" id="gen" value="Female"
                                                    <?php
                                                        $gen=$edit_user->gen;
                                                        if($gen=="Female")
                                                        {
                                                            echo "checked";
                                                        }
                                                        ?> >Female
    											</label>
										</div>
									</div>
							
									<div class="col-md-6">
										<div class="form-group">
											<label for="gen" style="font-weight:bold;">Languages: </label>
												<label class="checkbox-inline">
													<input type="checkbox" name="lang[]" id="lang" value="Gujarati"
                                                    <?php 
                                                    $lang=$edit_user->lang;
                                                    $lang_arr=explode(',',$lang);
                                                    if(in_array('Gujarati',$lang_arr)){
                                                        echo "checked";
                                                    }
                                                    ?> >Gujarati
												</label>
												<label class="checkbox-inline">
													<input type="checkbox" name="lang[]" id="lang" value="Hindi"<?php 
                                                    $lang=$edit_user->lang;
                                                    $lang_arr=explode(',',$lang);
                                                    if(in_array('Hindi',$lang_arr)){
                                                        echo "checked";
                                                    }
                                                    ?> >Hindi
												</label>
												<label class="checkbox-inline">
													<input type="checkbox" name="lang[]" id="lang" value="English"<?php 
                                                    $lang=$edit_user->lang;
                                                    $lang_arr=explode(',',$lang);
                                                    if(in_array('English',$lang_arr)){
                                                        echo "checked";
                                                    }
                                                    ?> >English
												</label>
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group">
											<label for="mob" style="font-weight:bold;">Mobile No.:</label>
											<input type="number" id="mob" name="mob" class="form-control" value="{{$edit_user->mob}}">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="cid" style="font-weight:bold;">Country:</label>
										<select id="cid" name="cid" class="form-control">
											<option value="">----------Select----------</option>
											@foreach($country as $c)
                                            @if($c->id==$edit_user->cid)
                                                <option value="{{$c->id}}" selected> {{$c->country}} </option>
                                           @else
												<option value="{{$c->id}}"> {{$c->country}} </option>
                                            @endif
											@endforeach
										</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="add" style="font-weight:bold;">Address:</label>
										<textarea id="add" name="add" class="form-control" rows="5">{{$edit_user->add}}
										</textarea>
										</div>
									</div>	
									<div class="col-md-6">
										<div class="form-group">
											<label for="file" style="font-weight:bold;">Profile Image:</label>
											<input type="file" name="file" id="file" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group p-4">
                                        <label for="file" style="font-weight:bold;"></label>
                                        <img class="" src="{{url('frontend/assets/upload/user/'.$edit_user->file)}}" width="100px">
										</div>
									</div>
						
									
									
								</div>
								<center>
									<div class="col-md-12">
										<div class="form-group">
											<input type="submit" name="submit" value="Edit" class="btn btn-primary">
										</div>
									</div>
								</center>
							</form>	
                            @endif	
						</div>
					</div>
                    
					
				</div>
			</div>
		</div>
@endsection