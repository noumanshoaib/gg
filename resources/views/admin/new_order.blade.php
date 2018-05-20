@extends('admin.layout.app')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          <div class="title_left">
            <h3>New Order</h3>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_content">
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Order ID</th>
                      <th>Product Name</th>
                      <th>Product Type</th>
                     
                      <th>Status</th>
                      
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(count($order)>0)
                    @foreach($order as $orders)
                    <tr>
                    <td>{{$orders->id}}</td>
                      <td>{{$orders->his_product_name}}</td>
                      <td>{{$orders->our_product_name}}</td>
                      
                      @if($orders->status==2)
                      <td><label class="label label-info">New</label></td>
                      @endif
                     
                    <td><a href="{{URL('/')}}/admin/view/order/new/{{$orders->id}}">view</a></td>
                    </tr>
                    @endforeach
                    @endif
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /page content --> 
   @endsection