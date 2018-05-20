@extends('layout.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="salogan">
        <h2>Products</h2>
        <div class="divider3 col-lg-offset-5 col-md-offset-5"></div>
      </div>
    </div>
    <div class="col-lg-12">
    <form method="post" action="{{URL('/')}}/order/process/step/2" enctype="multipart/form-data">
      {{csrf_field()}}
        <div class="row col-lg-offset-2 col-md-offset-2 ">
          <div class="form-group col-lg-3 col-sm-12 col-md-3">
            <label>Product Name</label>
          </div>
          <div class="form-group col-lg-8 col-sm-12 col-md-8">
            <input type="text" class="form-control" name="pname" value="" placeholder="Product Name" pattern="[a-zA-Z0-9\s]+" maxlength="20" required>
          </div>
        </div>
        <br>
        <div class="row col-lg-offset-2 col-md-offset-2 ">
          <div class="form-group col-lg-3 col-sm-12 col-md-3">
            <label>Industry</label>
          </div>
          <div class="form-group col-lg-8 col-sm-12 col-md-8">
            <input type="text" class="form-control" name="industry" value="" placeholder="Industry" pattern="[a-zA-Z0-9\s]+" maxlength="20" required>
          </div>
        </div>
        <br>
        <div class="row col-lg-offset-2 col-md-offset-2 ">
          <div class="form-group col-lg-3 col-sm-12 col-md-3">
            <label>Color Combination</label>
          </div>
          <div class="form-group col-lg-4 col-sm-12 col-md-4">
            <div class="input-group my-colorpicker2 colorpicker-element">
              <input name="c1" type="text" class="form-control">
              <div class="input-group-addon"> <i style="background-color: rgb(0, 0, 0);"></i> </div>
            </div>
            <!-- /.input group --> 
          </div>
          <div class="form-group col-lg-4 col-sm-12 col-md-4">
            <div class="input-group my-colorpicker2 colorpicker-element">
              <input name="c2" type="text" class="form-control">
              <div class="input-group-addon"> <i style="background-color: rgb(0, 0, 0);"></i> </div>
            </div>
            <!-- /.input group --> 
          </div>
        </div>
        <br>
        <div class="row col-lg-offset-2 col-md-offset-2 ">
          <div class="form-group col-lg-3 col-sm-12 col-md-3">
            <label>Product Logo</label>
          </div>
          <div class="form-group col-lg-8 col-sm-12 col-md-8">
            <input type="file" class="form-control" id="images" name="image" onchange="preview_images();" required>
            <br>
            <div class="row" id="image_preview"></div>
            <br>
          </div>
        </div>
        <br>
        <div class="row col-lg-offset-2 col-md-offset-2 ">
          <div class="form-group col-lg-2 col-sm-12 col-md-2">
            <button type="submit" class="btn submitbtn">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection