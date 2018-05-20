@extends('admin.layout.app')
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          <div class="title_left">
            <h3>Create Product</h3>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_content">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <form type="submit" action="{{URL('/')}}/admin/create/product"  method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row">
                      
                      <div class="form-group col-lg-12 col-sm-12 col-md-12">
                        <label>Product Name</label>
                        <input type="text" class="form-control" name="product_name" placeholder="Enter Product Name" pattern="[a-zA-Z0-9\s]+" maxlength="20" required>
                      </div>
                      <div class="form-group col-lg-12 col-sm-12 col-md-12">
                        <label>Product Type</label>
                        <input type="text" class="form-control" name="product_type" placeholder="Enter Product Type" pattern="[a-zA-Z0-9\s]+" maxlength="20" required>
                      </div>
                      <div class="form-group col-lg-12 col-sm-12 col-md-12">
                        <label>Price</label>
                        <input type="number" class="form-control" name="product_price" placeholder="Enter Price" min="1" max="2000" >
                      </div>
                      <div class="form-group col-lg-12 col-sm-12 col-md-12">
                        <label>LADB PROCESS</label>
                        <div class="radio">
                          <label>
                            <input name="ladb" type="radio"  value="LADB MOBILE">
                            LADB Mobile</label>
                        </div>
                        <div class="radio">
                          <label>
                            <input name="ladb" type="radio" value="LADB WEB">
                            LADB WEB</label>
                        </div>
                        <div class="radio">
                          <label>
                            <input name="ladb" type="radio" value="LADB BOTH">
                            Both</label>
                        </div>
                      </div>
                      <div class="form-group col-lg-12 col-sm-12 col-md-12">
                        <label>Logo</label>
                        <input type="file" class="form-control" id="images" name="image" onchange="preview_images();" required>
            <br>
            <div class="row" id="image_preview"></div>
            <br>
                      </div>
                      <div class="form-group col-lg-12 col-sm-12 col-md-12">
                        <label>Price with Mobile App</label>
                        <input type="number" class="form-control" name="product_price_wm" placeholder="Enter Price" min="1" max="2000" >
                      </div>
                      <div class="form-group col-lg-12 col-sm-12 col-md-12">
                        <label>Description</label>
                        <textarea  class="form-control" name="product_description" rows="9" id="description" placeholder="Enter Your Description. (Each description must be on new line)" pattern="[a-zA-Z0-9\s]+" maxlength="500"></textarea>
                      </div>
                      <div class="form-group col-lg-12 col-sm-12 col-md-12">
                        <label>Requirments</label>
                        <textarea  class="form-control" name="product_requirement" rows="9" id="description" placeholder="Enter Your Requirement. (Each requirement must be on new line)" pattern="[a-zA-Z0-9\s]+" maxlength="500"></textarea>
                      </div>
                      <div class="col-md-6">
                        <button id="send" type="submit" class="btn btn-success">Submit</button>
                      </div>
                      <div class="col-md-6"> <a href="#" class="btn btn-default pull-right">Cancel</a> </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /page content --> 
    <script>function preview_images() 
      {
       var total_file=document.getElementById("images").files.length;
       for(var i=0;i<total_file;i++)
       {
        $('#image_preview').append("<div class='col-md-3'><img class='img-responsive' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
       }
      }</script>
    <!-- footer content -->
    @endsection