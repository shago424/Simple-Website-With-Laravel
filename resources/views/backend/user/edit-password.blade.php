 @extends('backend.layouts.master')
@section('content')


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Password</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Change Password</li>
            </ol>
          </div> 
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
      
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
       <section class="col-md-6 offset-md-3">
           
           <div class="card">
              <div class="card-header">
                <h5>Change Password
                  <a  href="{{route('profiles.view')}}" class="btn btn-success btn-sm float-right"><i class="fa fa-users"> Your Profile</i></a>
                </h5>
              </div> 
            <div class="card-body">
                
              <form method="post" action="{{route('profiles.password.update')}}" id="myform">
                @csrf
                
                  <div class="form-group col-md-8">
                    <label for="curpassword"> Cureent Password</label>
                    <input type="password" name="curpassword" id="password" class="form-control" placeholder="Enter Current Password">
                  </div>

                 <div class="form-group col-md-8">
                    <label for="password">New Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
                  </div>

                   <div class="form-group col-md-8">
                    <label for="cpassword">New confirm Password</label>
                    <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Enter Confirm Password">
                  </div>

                
                <div class="form-group col-md-12">
                    
                <input type="submit" value=" Change Password" name="submit" class="btn btn-danger" >
                
                  </div>
                </div> 
              </form>

                </div>
              </div>
            <!-- /.card -->

            <!-- DIRECT CHAT -->
            
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
<script>
$(function () {
  
  $('#myform').validate({
    rules: {

      


      curpassword: {
        required: true,
        match: true
       
      },
      password: {
        required: true, 
        minlength: 6
      },
      cpassword: {
      required: true,
      equalTo:'#password'
        
      }
    },
    messages: {
      curpassword: {
        required: "Please enter  Current Password",
        match: "Invalid Current Password "
        
      },

     
      password: {
        required: "Please enter password",
        minlength: "Your password must be at least 6 characters long"
      },

      cpassword: {
        required: "Please enter Confirm password",
        equalTo:"Confirm password Does Not Match"
        }
   
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
  @endsection