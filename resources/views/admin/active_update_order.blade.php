@extends('admin.layout.app')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          <div class="title_left">
            <h3>Update Order</h3>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_content">
                <div class="col-lg-6">
                <form action="{{URL('/')}}/admin/view/order/active/update/{{$id}}" class="form-horizontal form-label-left" novalidate method="post">
                  {{csrf_field()}}  
                  <div class="row">
                      <div class="form-group col-lg-12 col-sm-12 col-md-12">
                        <label>Expected Delivery Date</label>
                        <input type="date" class="form-control" name="ed" placeholder="Enter Date" required>
                      </div>
                      <div class="form-group col-lg-12 col-sm-12 col-md-12">
                        <label>Second Installement</label>
                        <input type="number" class="form-control" name="si" min="1" max="2000" placeholder="Enter Second Installement price" required>
                      </div>
                      <div class="form-group col-lg-12 col-sm-12 col-md-12">
                        <label>Due Date</label>
                        <input type="date" class="form-control" name="d1" placeholder="Enter Date" required>
                      </div>
                      <div class="form-group col-lg-12 col-sm-12 col-md-12">
                        <label>Additional Requirment</label>
                        <textarea class="form-control" name="requirements" rows="9" id="description" placeholder="Enter Your Message" pattern="[a-zA-Z0-9\s]+" maxlength="500"></textarea>
                      </div>
                      <div class="col-md-6">
                        <button id="send" type="submit" class="btn btn-success">Update</button>
                      </div>
                      <div class="col-md-6"> <a href="active_order.html" type="submit" class="btn btn-success pull-right">Cancel</a> </div>
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