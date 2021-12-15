@extends('admin.admin_master')
@section('admin')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
        <section class="content">

<!-- Basic Forms -->
 <div class="box">
   <div class="box-header with-border">
     <h4 class="box-title">Update User</h4>

   </div>
   <!-- /.box-header -->
   <div class="box-body">
     <div class="row">
       <div class="col">
           <form method="POST" action="{{ route('user.update',$editData->id) }}">
               @csrf
               <div  class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <h5>User Role <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <select name="usertype" id="usertype" required=""  class="form-control">
                                    <option value="" selected="" disabled="">Select Role</option>
                                    <option value="User" {{ ($editData->usertype == "User" ? "selected": "") }}>User</option>
                                    <option value="Admin" {{ ($editData->usertype == "Admin" ? "selected": "") }}>Admin</option>


                                </select>

                            </div>
                        </div>
                    </div>
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
                                <input type="email" name="email" value="{{ $editData->email }}" class="form-control" required="" data-validation-required-message="This field is required">
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="text-xs-right">
                   <input type="submit" class="btn btn-rounded btn-info mb-5" value="Update"/>
                </div>

               </div>
             <div class="row">

           </form>
       </div>
       <!-- /.col -->
     </div>
     <!-- /.row -->
   </div>
   <!-- /.box-body -->
 </div>
 <!-- /.box -->

</section>
</div>
  </div>
  <!-- /.content-wrapper -->
@endsection
