<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link  rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <title>add row</title>
</head>
<body>
<div class="container">
    <table  class="table table-bordered table-hover small-text" id="tb">
        <tr class="tr-header">
            <th>Full Name</th>
            <th>Designation</th>
            <th>Mobile No.</th>
            <th>Email Id</th>
            <th><a href="javascript:void(0);" class="btn btn-primary btn-sm" id="addMore" title="Add More Person"><span class="glyphicon glyphicon-plus"></span></a></th>
        </tr>
        <tr>
            <td><input type="text" name="fullname[]" class="form-control"></td>
            <td><select name="designation[]" class="form-control">
                    <option value="" selected>Select Designation</option>
                    <option value="Engineer">Engineer</option>
                    <option value="Accountant">Accountant</option>
                </select></td>
            <td><input type="text" name="mobileno[]" class="form-control"></td>
            <td><input type="text" name="emailid[]" class="form-control"></td>
            <td><a href='javascript:void(0);'  class='btn btn-danger btn-sm remove'><span class='glyphicon glyphicon-remove'></span></a></td>
        </tr>
    </table>

    <br>

    <table id="test-table" class="table table-bordered">
        <thead>
        <tr>
            <th>Mobile</th>
            <th>Image</th>
            <th>Country</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody id="test-body">
        <tr id="row0">
            <td>
                <input type='text' name="mobile[]" class='form-control required' />
            </td>
            <td>
                <input type="file" name="image[]" class="form-control" id="image" placeholder="Image" required>
            </td>
            <td>
                <select class="form-control select2" name="dept[]" required>
                    <option>Select One</option>
                    <option>DNT</option>
                    <option>CST</option>
                </select>
            </td>
            <td>
                <span id="add-row" class="btn btn-primary btn-sm glyphicon glyphicon-plus"></span>
            </td>
        </tr>
        </tbody>
    </table>

    <br>

    <table  class="table table-hover table-bordered small-text" id="tbtr" width="100%">
        <tr class="tr-header">
            <th width="15%" class="text-center">Employee Name</th>
            <th width="10%" class="text-center">Emp.-No</th>
            <th width="15%" class="text-center">Employee Address</th>
            <th width="15%" class="text-center">Employee Image</th>
            <th width="15%" class="text-center">Employee Gender</th>
            <th width="10%" class="text-center">Status</th>
            <th width="15%" class="text-center">Emp. Department</th>
            <th width="5%" class="text-center"><a href="javascript:void(0);" class="btn btn-primary btn-sm" id="addMoretr" title="Add More Person"><span class="glyphicon glyphicon-plus"></span></a></th>
        </tr>
        <tr>
            <td>
                <input type="text" name="employee_name[]" class="form-control input-sm employee_name1 required" placeholder="Name" id="employee_name">
            </td>
            <td>
                <input type="number" name="employee_no[]"  class="form-control input-sm employee_no1 required" placeholder="roll" id="employee_no">
            </td>
            <td>
                <textarea name="employee_address[]" cols="1"  class="form-control input-sm employee_address1 required" rows="1" placeholder="Address" id="employee_address"></textarea>
            </td>
            <td>
                <input type="file" name="employee_img[]" class="form-control input-sm employee_img1 required" id="employee_img">
            </td>
            <td>
                <label>
                    <input type="radio" name="employee_gender[]" class="employee_gender1 required" value="male" id="employee_gender"> Male&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="employee_gender[]" class="employee_gender1 required" value="female" id="employee_gender2"> Female
                </label>
            </td>
            <td>
                <label>
                    <input type="checkbox" name="employee_marital_status[]" class="employee_marital_status1 required" value="yes" id="employee_marital_status"> Yes
                    <input type="checkbox" name="employee_marital_status[]" class="employee_marital_status1 required" value="no" id="employee_marital_status2"> No
                </label>
            </td>
            <td>
                <select class="form-control input-sm employee_department1 required" name="employee_department[]" id="employee_department">
                    <option>Select One</option>
                    <option>Computer Section</option>
                    <option>Network Section</option>
                    <option>Management Section</option>
                </select>
            </td>
            <td align="center">
                <a href='javascript:void(0);'  class='btn btn-danger btn-sm removetr'><span class='glyphicon glyphicon-remove'></span></a>
            </td>
        </tr>
    </table>

    <br>

    <form>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th width="3%">Select</th>
                <th width="45%">Name</th>
                <th width="45%">Email</th>
                <th width="7%"><input type="button" class="rowAdd" value="Add Row"></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><input type="checkbox" name="record"></td>
                <td><input type="text" name="name" class="form-control"></td>
                <td><input type="email" name="email" class="form-control"></td>
                <td></td>
            </tr>
            <tfoot>
            <td colspan="4"><button type="button" class="rowDelete">Delete Row</button></td>
            </tfoot>
            </tbody>
        </table>
    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script>
    /*-----------------Add row---------------------?*/
    $(function(){
        $('#addMore').on('click', function() {
            var data = $("#tb tr:eq(1)").clone(true).appendTo("#tb");
            data.find("input").val('');
        });
        $(document).on('click', '.remove', function() {
            var trIndex = $(this).closest("tr").index();
            if(trIndex>1) {
                $(this).closest("tr").remove();
            } else {
                alert("Sorry!! Can't remove first row!");
            }
        });
    });
    /*-----------------End Add row---------------------?*/

    /*-----------------Add row---------------------?*/
    var row=1;
    $(document).on("click", "#add-row", function () {
        var new_row = '<tr id="row' + row + '">' +
            '<td><input name="mobile[]' + row + '" type="text" class="form-control required" /></td>' +
            '<td><input name="image[]' + row + '" type="file" class="form-control required" /></td>' +
            '<td><select  name="dept[]" class="form-control select2">' +
            '<option>Select Department</option>' +
            '<option>DNT</option>' +
            '<option>CST</option>' +
            '</select>' +
            '</td>' +
            '<td><span class="btn btn-danger btn-sm glyphicon glyphicon-remove delete-row"></span></td>' +
            '</tr>';
        // alert(new_row);
        $('#test-body').append(new_row);
        row++;
        return false;
    });

    // Remove criterion
    $(document).on("click", ".delete-row", function () {
        //  alert("deleting row#"+row);
        if(row>1) {
            $(this).closest('tr').remove();
            row--;
        }
        return false;
    });
    /*-----------------End Add row---------------------?*/

    /*-----------------Add row---------------------?*/
    $(function(){
        var row = 2;
        $('#addMoretr').on('click', function() {
            var data = $("#tbtr tr:eq(1)").clone(true);
            data.find('input#employee_name').addClass('employee_name'+row);
            data.find("#employee_name").removeClass('employee_name1');
            data.find('input#employee_no').addClass('employee_no'+row);
            data.find("#employee_no").removeClass('employee_no1');
            data.find('textarea#employee_address').addClass('employee_address'+row);
            data.find("#employee_address").removeClass('employee_address1');
            data.find('input#employee_img').addClass('employee_img'+row);
            data.find("#employee_img").removeClass('employee_img1');
            data.find('input#employee_gender').addClass('employee_gender'+row);
            data.find("#employee_gender").removeClass('employee_gender1');
            data.find('input#employee_marital_status').addClass('employee_marital_status'+row);
            data.find("#employee_marital_status").removeClass('employee_marital_status1');
            data.find('input#employee_department').addClass('employee_department'+row);
            data.find("#employee_department").removeClass('employee_department1');
            data.appendTo("#tbtr");
            data.find("input").val('');
            row++;
        });
        $(document).on('click', '.removetr', function() {
            var trIndex = $(this).closest("tr").index();
            if(trIndex>1) {
                $(this).closest("tr").remove();
            } else {
                alert("Sorry!! Can't remove first row!");
            }
        });
    });
    /*-----------------End Add row---------------------?*/

    /*-----------------Add row---------------------?*/
    $(document).ready(function(){
        $(".rowAdd").click(function(){
            var markup = "<tr>" +
                "<td><input type='checkbox' name='record'></td>" +
                "<td><input type='text' name='name' class='form-control'></td>" +
                "<td><input type='email' name='email' class='form-control'></td>" +
                "<td></td>" +
                "</tr>";
            $("table tbody").append(markup);
        });

        // Find and remove selected table rows
        $(".rowDelete").click(function(){
            $("table tbody").find('input[name="record"]').each(function(){
                if($(this).is(":checked")){
                    $(this).parents("tr").remove();
                }
            });
        });
    });
    /*-----------------End Add row---------------------?*/
</script>
</body>
</html>