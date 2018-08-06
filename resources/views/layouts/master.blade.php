
 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  
  <meta name="_token" content="ihxnr0qfxkKuafcqpf3osuHIvio17qfokFQnXrgo" />

  <title>Project Title</title>

  <link rel="icon" href="http://ebook.test/uploads/book-icon.png">

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="http://ebook.test/adminlte/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->

  
  <link rel="stylesheet" href="http://ebook.test/datatables/css/datatables.bootstrap.css">

  <link rel="stylesheet" href="http://ebook.test/adminlte/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="http://ebook.test/adminlte/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://ebook.test/adminlte/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="http://ebook.test/adminlte/dist/css/skins/_all-skins.min.css">

  
  <link rel="stylesheet" href="http://ebook.test/css/searchbar.css">

</head>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="http://ebook.test" class="navbar-brand"><b>E</b>-Book Archives</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active ">
              <a href="http://ebook.test">
                <i class="fa fa-home"></i>
                Home
              </a>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->

        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
                   <li>
                      <a href="http://ebook.test/home">
                        <i class="fa fa-user"></i>
                          Test
                      </a>
                   </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>


  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-lg-9 col-md-9">
                  @yield('content')     
                </div>
                @include('layouts.right_content');
            </div>
        </section>
        <!-- /.content -->

    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  
  @include('layouts.footer')

</div>
<!-- ./wrapper -->


<!-- jQuery 2.2.3 -->
<script src="http://ebook.test/adminlte/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="http://ebook.test/adminlte/bootstrap/js/bootstrap.min.js"></script>

<script src="http://ebook.test/js/custom.js"></script>



<script src="http://ebook.test/datatables/js/jquery.dataTables.min.js"></script>


<script src="http://ebook.test/datatables/js/datatables.bootstrap.js"></script>


<!-- SlimScroll -->
<script src="http://ebook.test/adminlte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="http://ebook.test/adminlte/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="http://ebook.test/adminlte/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->



<script src="http://ebook.test/js/jquery-ui.js"></script>

<script type="text/javascript">
    $(function() {
      $("#search-bar").autocomplete({
        source: 'http://ebook.test/search/autocomplete',
      });
    });
</script>
  <script>
      $('#flash-overlay-modal').modal();
  </script>

</body>
</html>
