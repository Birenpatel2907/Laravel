@extends('backend.layout.main')

@section('main_container') 
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     
                     <div class="row column_title">
                           <div class="col-md-12">
                              <div class="page_title">
                                 <h2>Add Brands</h2>
                              </div>
                           </div>
                     </div>
                     <form  action="" method="post" enctype="multipart/form-data">
                        <div class="col-md-4">
                           <label for="" class="form-label">First name</label>
                           <input type="text" class="form-control" id="" required>
                        </div>
                        <div class="col-md-4">
                           <label for="" class="form-label">Last name</label>
                           <input type="text" class="form-control" id="" required>
                        </div>
                        <div class="col-md-4">
                           <label for="" class="form-label">Username</label>
                           <div class="input-group">
                              <span class="input-group-text" id="">@</span>
                              <input type="text" class="form-control" id="" aria-describedby="inputGroupPrepend2" required>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <label for="" class="form-label">City</label>
                           <input type="text" class="form-control" id="" required>
                        </div>
                        <div class="col-md-3">
                           <label for="" class="form-label">State</label>
                           <select class="form-control" id="" required>
                              <option selected disabled value="">Choose...</option>
                              <option>...</option>
                           </select>
                        </div>
                        <div class="col-md-3">
                           <label for="validationDefault05" class="form-label">Zip</label>
                           <input type="text" class="form-control" id="validationDefault05" required>
                        </div>
                        <div class="col-12">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                              <label class="form-check-label" for="invalidCheck2">
                              Agree to terms and conditions
                              </label>
                           </div>
                        </div>
                        <div class="col-12">
                           <input type="submit" class="btn btn-primary" name="submit" value="Add">
                        </div>
                     </form>
                  </div>
               <!-- footer Layout Here-->
               </div>
               <!-- end dashboard inner -->
               </div>
         </div>
      </div>	   
    @endsection