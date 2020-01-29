<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
 
 @include('include.head')

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    @include('include.navbar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        @include('include.topbar')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-2">
            
            
          </div>


          <div class="row" style="color:black">
  <h2 style="padding-right:1000px">All Category</h2>            
    <div class="col-12" style="padding-top:10px">
    <table id="dtBasicExample" class="table table-striped table-bordered table-responsive-sm" style="color: black">
      <thead>
        <tr class="bg-primary">
          <th scope="col">Sr.no</th>
          <th scope="col">Image</th>
          <th scope="col">Category_id</th>
        </tr>
      </thead>
      <tbody>
      <?php $i = 1; ?>
      @foreach($allcategorys as $allcategory)
        <tr>
          <th scope="row">{{$i++}}</th>
          <td class="w-25">
            <img src="{{URL::asset('uploads/image/'.$allcategory->image)}}" class="img-fluid img-thumbnail"  height="150px " width="150px"></td>
          <td>{{$allcategory->category_id}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>   
    </div>

</div>

          <!-- Content Row -->
          <div class="row">
            
          </div>

          <!-- Content Row -->

          <div class="row">

          </div>

          <!-- Content Row -->
          <div class="row">

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
          
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <!-- Bootstrap core JavaScript-->
  @include('include.script')

</body>

</html>
