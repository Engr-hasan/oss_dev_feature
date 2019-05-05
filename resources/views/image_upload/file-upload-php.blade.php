@extends('layout.master')
@section('contents')
    <div class="container">
     <div class="card">
      <!-- <img src="data:image/jpg;base64,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" style="width: 100px;height: 120px;"> -->
        <div class="card-header bg-primary text-light" style="padding: 2px 5px;">File upload using PHP</div>
          <div class="card-body">
              <form action="/file_store_php" method="post" enctype="multipart/form-data" id="validate">
              {{ csrf_field() }}
                 <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                          <div class="col-sm-5">
                             <label for="">Title</label>
                          </div>
                          <div class="col-sm-7">
                              <input type="text" name="title" placeholder="Type Title">
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-8">
                               <input type="file" name="profile_img" class="form-control input-md">
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-info">submit</button>
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