@extends('admin.layout.app')
@section('content')

    
    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          <div class="title_left">
            <h3>Product List</h3>
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
                      <th>Product ID</th>
                      <th>Product Name</th>
                      <th>Product Type</th>
                      <th>LADB Process</th>
                      <th>Price</th>
                      <th>Price with mobile App</th>
                      
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(count($products)>0)
                    @foreach($products as $product)
                    <tr>
                    <td>{{$product->id}}</td>
                      <td>{{$product->product_name}}</td>
                      <td>{{$product->product_type}}</td>
                      <td>{{$product->ladb_process}}</td>
                      <td>{{$product->product_price}}</td>
                      <td>{{$product->product_price_wm}}</td>
                      <td><a href="{{URL('/')}}/admin/view/product/{{$product->id}}">view</a></td>
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