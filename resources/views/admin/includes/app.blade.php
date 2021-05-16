<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />





    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/admin/sb-admin-2.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/datatables.min.css')}}">
    <link rel="stylesheet" src="{{asset('bootstrap-select/css/bootstrap-select.min.css')}}">

    <link rel="stylesheet" href={{ asset('css/style.css') }}>





    <title>WindScreen</title>

    <style>
        .bg-techbot-dark {

            background-color: #041836;
            color: #fff;

        }

    </style>


<script src="{{ mix('js/app.js') }}" defer></script>

<script src="{{asset('js/admin/jquery.min.js')}}"></script>
<script src="{{asset('js/admin/bootstrapbundle.js')}}"></script>
<script src="{{asset('js/admin/easing.min.js')}}"></script>
<script src="{{asset('js/admin/sb-admin-2.min.js')}}"></script>
<script src="{{asset('js/admin/Chart.min.js')}}"></script>
<script src="{{asset('js/admin/datatables.min.js')}}"></script>
<script src="{{asset('bootstrap-select/js/bootstrap-select.min.js')}}"></script>


</head>

<body id="page-top">




  <!-- Page Wrapper -->
  <div id="wrapper">


      <x-sidebar />




      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

          <!-- Main Content -->
          <div id="content">


               <x-navbar/> 

              <!-- Begin Page Content -->
              <div class="container-fluid pl-1 pl-md-2 ">

                  @yield('content')

          </div>
          <!-- End of Main Content -->

          <!-- Footer -->
          {{-- <x-footer>

          </x-footer> --}}
          <!-- End of Footer -->

      </div>
      <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
  </div>
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
  </a>

</body>

</html>
