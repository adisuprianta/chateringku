<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Cateringku</title>

    
  <!-- Font Awesome JS -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->




    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style_pengadaan.css')}}" type="text/css">




    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}" type="text/css">
    @stack('style')

    <style>

.dropdown {
   position: relative;
   width: 100%;
  height: 30px;
}
.selected {
  width: 100%;
  border: 1px solid #eee;
  padding: 6px 10px;
  cursor: pointer;
}
.options {
  position: absolute;
  width: 100%;
  bottom: -50px;
  left: 0;
  display: none;
  border: 1px solid #eee;
  border-top: none;
  list-style: none;
  margin: 0;
  padding:0;
}
.options.show {
  display: block;
}

.options li {
  background: #eee;
  cursor: pointer;
  padding: 3px;
}
.options li:hover {
  background: #ccc;
}
.result { margin-top: 20px; }

    </style>

</head>

<body>
<div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- End Topbar header -->
       


        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            
            @yield('content')
          
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->
    <!-- include('templates.partials._customizer') -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->

    @stack('scripts')

    <script>
        $('.options li').on('click', function() {
  $('.selected').html( $(this).text() );
  $('.selected-inp').val( $(this).data('value') ).trigger('change');
  $('.options').removeClass('show');
});

$('.selected').on('click', function() {
  $('.options').toggleClass('show');
});

$('.selected-inp').on('change', function(ev) {
  $('.result').html('The new value is: ' + ev.target.value);
});
    </script>
</body>

</html>
</html>