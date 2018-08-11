
 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  
  <meta name="_token" content="ihxnr0qfxkKuafcqpf3osuHIvio17qfokFQnXrgo" />

  <title>Project Title</title>

  <link rel="icon" href="http://ebook.test/uploads/book-icon.png">

  @include('layouts.header_scripts')

</head>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-stati-ctop">
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
                  <center>
                    <ul class="pagination pagination-lg">
                      <li><a href="#">&laquo;</a></li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#">&raquo;</a></li>
                    </ul>
                  </center>


                  <center>
                      <img src="{{ url('images/ad/336x280.jpg') }}">
                      <img src="{{ url('images/ad/336x280.jpg') }}">
                  </center>

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

@include('layouts.footer_scripts')

</body>
</html>
