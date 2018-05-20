@extends('admin.layout.app')
@section('content')

    
    
    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          <div class="title_left">
            <h3>View Product</h3>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_content">
                <div class="member-left-side">
                  <div class="member-email clearfix"> <b>Product Name</b> <span>{{$product->product_name}}</span> </div>
                  <div class="member-email clearfix"> <b>Product Type</b> <span>{{$product->product_type}}</span> </div>
                  <div class="member-email clearfix"> <b>Total Price</b> <span>{{$product->product_price}}</span> </div>
                  
                  <div class="member-email clearfix"> <b>Requirments</b> <span>{{$product->product_requirements}}</span> </div>
                </div>
                <div class="col-md-6">
                  <button id="btn-confirm" type="submit" class="btn btn-success">Delete</button>
                </div>
                <div class="col-md-6"> <a href="view.html" class="btn btn-default pull-right">Cancel</a> </div>
              </div>
            </div>
            <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="mi-modal">
              <div class="modal-dialog modal-sm">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
                  </div>
                  <div class="modal-footer">
                  <a href="{{URL('/')}}/admin/delete/product/{{$product->pk_id}}" class="btn btn-success" id="modal-btn-si">Yes</a>
                    <button type="button" class="btn btn-default" id="modal-btn-no">No</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="alert" role="alert" id="result"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- /page content --> 
    
  @endsection