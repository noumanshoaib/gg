@extends('admin.layout.app')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          <div class="title_left">
            <h3>Customer Detail</h3>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_content">
                <div class="member-left-side">
                  <div class="member-email clearfix"> <b>Customer Name</b> <span>Green Grapez</span> </div>
                  <div class="member-email clearfix"> <b>Customer Email</b> <span>fahad@gmail.com</span> </div>
                  <div class="member-email clearfix"> <b>Phone No</b> <span>03464420073</span> </div>
                  <div class="member-email clearfix"> <b>City</b> <span>Lahore</span> </div>
                  <div class="member-email clearfix"> <b>Country </b> <span>Pakistan</span> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="page-title">
          <div class="title_left">
            <h3>Order Detail</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_content">
                <div class="member-left-side">
                  <div class="member-email clearfix"> <b>Order ID</b> <span>{{$order->id}}</span> </div>
                  <div class="member-email clearfix"> <b>Product Name</b> <span>{{$order->his_product_name}}</span> </div>
                  <div class="member-email clearfix"> <b>LADB Product Name</b> <span>{{$order->our_product_name}}</span> </div>
                  <div class="member-email clearfix"> <b>Price</b> <span>${{$order->total}}</span> </div>
                  <div class="member-email clearfix"> <b>First Installement</b> <span>Not Defined</span> </div>
                  <div class="member-email clearfix"> <b>Due Date </b> <span>Not Defined</span> </div>
                  <div class="member-email clearfix"> <b>Second Installement</b> <span>Not Defined</span> </div>
                  <div class="member-email clearfix"> <b>Due Date </b> <span>Not Defined</span> </div>
                  <div class="member-email clearfix"> <b>Status</b> <span>
                    <label class="label label-info">New</label>
                    </span> </div>
                  <div class="member-email clearfix"> <b>Requirments</b> <span>{{$order->base_requirements}}</span> </div>
                  <div class="member-email clearfix"> <b>Additional Requirments</b> <span>{{$order->additional_requirements}}</span> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
          <div class="x_content"> <a href="new_order.html" class="btn btn-round btn-success">Back</a> <a href="edit_requirment.html" class="btn btn-round btn-success">Edit Requirment</a> <a href="{{URL('/')}}/admin/view/order/confirm/new/{{$order->id}}" class="btn btn-round btn-success">Done</a> </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /page content --> 
  @endsection