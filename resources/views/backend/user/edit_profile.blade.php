@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
        <section class="content">

<!-- Basic Forms -->
 <div class="box">
   <div class="box-header with-border">
     <h4 class="box-title">Update User Profile</h4>

   </div>
   <!-- /.box-header -->
   <div class="box-body">
     <div class="row">
       <div class="col">
           <form method="post" action="{{ route('profile.store') }}" enctype="multipart/form-data">
               @csrf
               <div  class="row">

                    <div class="col-md-6">
                    <div class="form-group">
                            <h5>User Name <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="name" class="form-control" value="{{ $editData->name }}">
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                            <h5>Email <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="email" name="email" class="form-control" value="{{ $editData->email }}">
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                            <h5>Mobile <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="mobile" class="form-control" value="{{ $editData->mobile }}">
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <h5>Address <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="address" class="form-control" value="{{ $editData->address }}">
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <h5>Gender <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <select name="gender" id="gender" required=""  class="form-control">
                                    <option value="" selected="" disabled="">Select Gender</option>
                                    <option value="Male" {{ ($editData->gender == "Male" ? "selected": "") }}>Male</option>
                                    <option value="Female" {{ ($editData->gender == "Female" ? "selected": "") }}>Female</option>


                                </select>

                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <h5>Image <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="file" name="image" value="{{ $editData->image }}" id="image" class="form-control" data-validation-required-message="This field is required">
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="controls">
                                <img id="showImage" src="{{ (!empty($user->image))? url('uploads/user_images/'.$user->image):url('uploads/no_image.jpg') }}"
                                style="width:100px; width:100px; border:1px solid #00000;">
                            </div>
                        </div>

                    <div>



                </div>

               </div>
               <div class="text-xs-right">
                            <input type="submit" class="btn btn-rounded btn-info mb-5" value="Update"/>
                </div>

           </form>
       </div>
       <!-- /.col -->
     </div>
     <!-- /.row -->
   </div>
   <!-- /.box-body -->
 </div>
 <!-- /.box -->
</div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection
