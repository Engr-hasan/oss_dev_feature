@extends('layout.master')
@section('contents')
    <div class="container">
       <div class="card">
          <div class="card-header bg-primary text-light" style="padding: 2px 5px;">Excel Import Data</div>
            <div class="card-body">
              <form action="/import" method="post" enctype="multipart/form-data">
                 {{ csrf_field() }}
                 <div class="row">
                    <div class="col-md-12">
                      <div class="form-group row">
                          <div class="col-md-8">
                             <input type="file" name="cus_data" class="form-control input-md" required>
                          </div>
                          <div class="col-md-4">
                              <button type="submit" class="btn btn-info">Import</button>
                              <a href="{{url('excel-data-list')}}" class="btn btn-primary btn-sm">Back-List</a>
                          </div>
                      </div>
                    </div>
                 </div>
              </form>
            </div>
        </div>
    </div>
@endsection
@section('footer-script')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection