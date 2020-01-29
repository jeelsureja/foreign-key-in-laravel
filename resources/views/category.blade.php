<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>
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
  <a href="#modalCenter"  class="btn btn-primary btn-circle" data-toggle="modal">
  <i class="fas fa-plus"></i>
  </a>
    <div class="col-12" style="padding-top:10px">
    <table  id="dtBasicExample" class="table table-striped table-bordered table-responsive-sm" style="color: black" >
      <thead>
        <tr class="bg-primary">
          <th>Sr.no</th>
          <th scope="col">Category</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
      <?php $i = 1; ?>
      
      @foreach($categorys as $category)
      
        <tr>
          <th scope="row">{{$i++}}</th>
          <td>{{$category->category_name}}</td>
          <!-- <th><a href="admin/category/{{$category->category_id}}" class="btn btn-info btn-circle" data-toggle="modal" data-target="#edit-model"> -->
          <th><a href="{{ URL::route('category.edit',$category->category_id) }}" class="btn btn-info btn-circle edit_model" data-toggle="modal" data-target="#edit-model">
							<i class="fas fa-edit"></i>
							</a>
						</th>
          <th>
          <form action="{{ URL::route('category.destroy', $category->category_id) }}" method="POST">
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

      <!-- popup -->
      <form action="/admin/category" method="post">
      @csrf
      <div id="modalCenter" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Category</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="hidden">
                    <input type="hidden" class="form-control" name="category_id"><br>
                </div>
                <div class="modal-body">
                    <label>Category Name:</label>
                    <input type="text" class="form-control" name="category_name" placeholder="Enter category"><br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="insert">Insert</button>
                </div>
            </div>
        </div>
    </div>

    </div>
    </form>

    <form action="/admin/category/{{$category->category_id}}" method="post">
    <input type="hidden" name="_method" value="PUT">
      @csrf
      <div id="edit-model" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update Category</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <label>Category Name:</label>
                    <input type="text" class="form-control" id="category_name" name="category_name" value="{{$category->category_name}}"><br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="insert">Update</button>
                </div>
            </div>
        </div>
    </div>
    </form>
    <!-- end of popup -->
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  @include('include.script')
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <script>
    $(document).on('click','#insert',function(){
      swal({
         title: 'Confirm',
         text: 'Image Upload Successful',
         type: 'warning',
         showCancelButton: false,
         confirmButtonColor: '#987463',
      });
    });
    
  </script> -->

<script>
 document.getElementById('remove').onclick = function(){
	swal({
		title: "Are you sure?",
		text: "You will not be able to recover this imaginary file!",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'Yes, delete it!',
		cancelButtonText: "No, cancel plx!",
		closeOnConfirm: false,
		closeOnCancel: false
	},
	function(isConfirm){
    if (isConfirm){
      swal("Deleted!", "Your imaginary file has been deleted!", "success");
    } else {
      swal("Cancelled", "Your imaginary file is safe :)", "error");
    }
	});
};

</script>
 
 

</body>

</html>