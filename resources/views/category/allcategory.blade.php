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
 <style>
      a{
        float:right;
      }
 </style>

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
  <a href="#modalCenter" role="button" class="btn btn-primary btn-circle" data-toggle="modal"><i class="fas fa-plus"></i></a>
    <div class="col-12" style="padding-top:10px">
    <table id="dtBasicExample" class="table table-striped table-bordered table-responsive-sm" style="color: black">
      <thead>
        <tr class="bg-primary">
          <th scope="col">Sr.no</th>
          <th scope="col">Image</th>
          <th scope="col">Category_id</th>
          <th scope="col">Action</th>

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
          <th>
          <form action="{{ URL::route('allcategory.destroy', $allcategory->id) }}" method="POST">
								    <input type="hidden" name="_method" value="DELETE">
								    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                    <button id="remove" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></button>
          </th>
          </form>
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
      <form action="/admin/allcategory" method="POST" enctype="multipart/form-data">
      @csrf
      <div id="modalCenter" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Insert Iamge</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <label>Category Name:</label>
                    <select class="form-control" name="category_id">
                    @foreach($categorys as $category)
                    <option value="{{$category->category_id}}">
                      {{$category->category_name}}
                    </option>
                    @endforeach
                    </select>
           
                    <br>
                    <label>Select Image:</label><br>
                    <input type="file" name="image" />  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" name="swal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Insert</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


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
