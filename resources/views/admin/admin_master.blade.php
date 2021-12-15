<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('backend/images/favicon.ico')}}">

    <title>School Management System - Dashboard</title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{ asset('backend/css/vendors_css.css') }}">

	<!-- Style-->
	<link rel="stylesheet" type="text/css" href="{{ asset('backend/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('backend/css/skin_color.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
  </head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

<div class="wrapper">

 @include('admin.body.header')

  <!-- Left side column. contains the logo and sidebar -->
  @include('admin.body.sidebar')
  @yield('admin')
  <!-- /.content-wrapper -->
  @include('admin.body.footer')


<!-- ./wrapper -->


	<!-- Vendor JS -->

	<script type="text/javascript" src="{{ asset('backend/js/vendors.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('backend/icons/feather-icons/feather.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('backend/vendor_components/easypiechart/dist/jquery.easypiechart.js')}}"></script>
	<script type="text/javascript" src="{{ asset('backend/vendor_components/apexcharts-bundle/irregular-data-series.js')}}"></script>
	<script type="text/javascript" src="{{ asset('backendvendor_components/apexcharts-bundle/dist/apexcharts.js')}}"></script>

    <script type="text/javascript" src="{{ asset('../assets/vendor_components/datatable/datatables.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('backend/js/pages/data-table.js')}}"></script>

	<!-- Sunny Admin App -->
	<script type="text/javascript" src="{{ asset('backend/js/template.js')}}"></script>
	<script type="text/javascript" src="{{ asset('backend/js/pages/dashboard.js')}}"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(function(){
            $(document).on('click','#delete',function(e){
                e.preventDefault();
                var link = $(this).attr("href");
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "Delete This Data!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                        }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = link
                            Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                            )
                        }
                        });

            });
        });
    </script>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch(type){
            case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

            case 'success':
            toastr.success("{{ Session::get('success') }}");
            break;

            case 'warning':
            toastr.warning("{{ Session::get('warning') }}");
            break;

            case 'error':
            toastr.error("{{ Session::get('error') }}");
            break;
        }
        @endif
    </script>

</body>
</html>
