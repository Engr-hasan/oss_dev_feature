<!DOCTYPE>
<html>
    <head>
        <title>insert</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    </head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="{{url('addrow_store')}}" method="post" enctype="multipart/form-data">
					{{csrf_field() }}
					<table id="test-table" class="table table-bordered table-striped table-hover">
		              <thead>
		                <tr>
		                  <th width="48%" class="text-center">Form Name</th>
		                  <th width="48%" class="text-center">Individual File</th>
		                  <th width="4%" class="text-center">Action</th>
		                </tr>
		              </thead>
		              <tbody id="test-body">
		                <tr id="row0">
		                  <td>
		                    <input type='text' name="form_name[]" class='form-control input-md required' id="form_name" />
		                  </td>
		                  <td>
		                     <input type="file" name="individual_file[]" class="form-control input-md required" id="individual_file" placeholder="Image"/>
		                  </td>
		                  <td>
		                    <span id='add-row'><button class="btn btn-primary btn-sm" style="width:30px;height:30px;">+</button></span>
		                  </td>
		                </tr>
		                <tfoot>
		                	<td colspan="3">
		                		<button type="submit" class="btn btn-info btn-sm float-right">Submit</button>
		                	</td>
		                </tfoot>
		              </tbody>
		            </table>
				</form>
			</div>
		</div>
	</div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
          var row=1;
          $(document).on("click", "#add-row", function () {
          var new_row = '<tr id="row' + row + '"><td><input name="form_name[]' + row + '" type="text" class="form-control input-md required"/></td><td><input name="individual_file[]' + row + '" type="file" class="form-control input-md required"/></td><td><span class="delete-row"><button class="btn btn-danger btn-sm" style="width:30px;height:30px;">x</button></span></td></tr>';
          $('#test-body').append(new_row);
          row++;
          return false;
          });
          
          $(document).on("click", ".delete-row", function () {
            if(row>1) {
              $(this).closest('tr').remove();
              row--;
            }
          return false;
          });
    </script>
  </body>
</html>