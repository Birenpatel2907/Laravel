@extends('frontend.layout.main')
@section('main_container')

			
		</nav>
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="{{url('index')}}">Home</a></span> / <span>Profile</span></p>
					</div>
				</div>
			</div>
		</div>


	        @if($user_info)		
            @foreach($user_info as $user)
                    <div class="container p-3" style="border-radius:5px; background-color: white; height: auto ;">
                    <center><h1 style="font-weight:bold;">Profile</h1></center>
                    <div class="row">   
                        <div class="col-md-5">
                            <div class="p-3 py-5 align-items-center text-center">
                                <img class="rounded-circle mt-5" width="200px" height="200px" src="{{url('frontend/assets/upload/user/'.$user->file)}}">
                                <div class="font-weight-bold">Priyanka Solanki</div><div class="text-black-50">{{$user->unm}}</div>
                            </div>
                        </div>
                        <div class="col">
                         
                                <div class="row">
                                    <div class="col-md-6"></div>
                                    <div class="col-md-3 p-3"><a href="{{url('edit_profile/'.session('uid'))}}" style="color:#88c8bc;font-weight:bold; text-decoration:underline;">Edit Profile</a></div>
                                </div>
                            <div class="row">
                                <div class="col-md-4"><label class="lable">Name:</label></div>
                                <div class="col-md-4">{{$user->name}}</div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-4"><label class="lable">Gender:</label></div>
                                <div class="col-md-4">{{$user->gen}}</div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-4"><label class="lable">Languages Known:</label></div>
                                <div class="col-md-4">{{$user->lang}}</div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-4"><label class="lable">Mobile No.:</label></div>
                                <div class="col-md-4">{{$user->mob}}</div>
                            </div>
                           
                            <div class="row mt-2">
                                <div class="col-md-4"><label class="lable">Email Id:</label></div>
                                <div class="col-md-4">{{$user->unm}}</div>
                            </div>
                                                      
                            <div class="row mt-2">
                            <div class="col-md-4"><label class="lable">Country:</label></div>
                                <div class="col-md-4">{{$user->country}}</div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-4"><label class="lable">Address:</label></div>
                                <div class="col-md-4">{{$user->add}}</div>
                            </div>
                            <br><br>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
             
            </div>
		
@endsection