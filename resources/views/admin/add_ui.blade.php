@extends('admin.layout.app')
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          <div class="title_left">
            <h3>Add UI</h3>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_content">
                <div class="col-lg-6">
                 <form action="{{URL('/')}}/admin/view/order/active/reporting/add/ui/{{$id}}" method="post" enctype="multipart/form-data">
                  {{csrf_field()}}  
                  <div class="row">
                    
                      <div class="form-group col-lg-12 col-sm-12 col-md-12">
                          <input type="file" class="form-control" id="images" name="images[]" onchange="preview_images();" multiple/>
                      </div>
                      <div class="row" id="image_preview"></div><br>
                      <div class="col-md-6">
                        <button id="send" type="submit" class="btn btn-success">Done</button>
                      </div>
                      <div class="col-md-6"> <a href="reporting.html" type="submit" class="btn btn-success pull-right">Cancel</a> </div>
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
   @endsection