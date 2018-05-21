@extends('admin.layout.app')
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          <div class="title_left">
            <h3>View Reporting</h3>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_content">
                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                  <ul id="myTab" class="nav nav-pills nav-wizard col-lg-offset-4 col-md-offset-4" role="tablist">
                    <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">UI</a> </li>
                    <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Web</a> </li>
                    <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab4" data-toggle="tab" aria-expanded="false">Android</a> </li>
                    <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">IOS</a> </li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                      <div class="row">
                        @if(count($ui)>0)
                        @foreach($ui as $uir)
                        <div class="col-lg-4">
                        <div class="product"> <img src="{{URL('/')}}/storage/images/{{$uir->file}}" alt="product">
                            <h1> test </h1>
                          </div>
                        </div>
                        @endforeach
                       @endif
                      </div>
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="x_content"> <a href="{{URL('/')}}/admin/view/order/active/reporting/add/ui/{{$id}}" class="btn btn-round btn-success">Add UI</a> </div>
                        </div>
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                      @if(count($web)>0)
                      @foreach($web as $webs)
                      <div class="col-lg-6">
                        <div class="page-title">
                          <div class="title_left">
                            <h3>{{$webs->week_name}}</h3>
                          </div>
                        </div>
                        <div class="member-left-side">
                          {{$webs->requirements}}
                         </div>
                      </div>
                      @endforeach
                      @endif
                      <div class="row">
                        <div class="col-lg-12">
                        <div class="x_content"> <a href="{{URL('/')}}/admin/view/order/active/reporting/add/web/{{$id}}" class="btn btn-round btn-success">Add Web</a> </div>
                        </div>
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
                      <div class="col-lg-6">
                        <div class="page-title">
                          <div class="title_left">
                            <h3>Week One</h3>
                          </div>
                        </div>
                        <div class="member-left-side">
                          <div class="member-email clearfix"> <b>Order ID</b> <span>1</span> </div>
                          <div class="member-email clearfix"> <b>Product Name</b> <span>Green Grapez</span> </div>
                          <div class="member-email clearfix"> <b>Price</b> <span>500$</span> </div>
                          <div class="member-email clearfix"> <b>First Installement</b> <span></span> </div>
                          <div class="member-email clearfix"> <b>Due Date </b> <span>22/03/2018</span> </div>
                          <div class="member-email clearfix"> <b>Second Installement</b> <span></span> </div>
                          <div class="member-email clearfix"> <b>Due Date </b> <span>22/04/2018</span> </div>
                          <div class="member-email clearfix"> <b>Status</b> <span>
                            <label class="label label-info">New</label>
                            </span> </div>
                          <div class="member-email clearfix"> <b>Requirments</b> <span>Nae Pta</span> </div>
                          <div class="member-email clearfix"> <b>Additional Requirments</b> <span>Phali Pta nae dsra kha sy pta hn ge</span> </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="page-title">
                          <div class="title_left">
                            <h3>Week Two</h3>
                          </div>
                        </div>
                        <div class="member-left-side">
                          <div class="member-email clearfix"> <b>Order ID</b> <span>1</span> </div>
                          <div class="member-email clearfix"> <b>Product Name</b> <span>Green Grapez</span> </div>
                          <div class="member-email clearfix"> <b>Price</b> <span>500$</span> </div>
                          <div class="member-email clearfix"> <b>First Installement</b> <span></span> </div>
                          <div class="member-email clearfix"> <b>Due Date </b> <span>22/03/2018</span> </div>
                          <div class="member-email clearfix"> <b>Second Installement</b> <span></span> </div>
                          <div class="member-email clearfix"> <b>Due Date </b> <span>22/04/2018</span> </div>
                          <div class="member-email clearfix"> <b>Status</b> <span>
                            <label class="label label-info">New</label>
                            </span> </div>
                          <div class="member-email clearfix"> <b>Requirments</b> <span>Nae Pta</span> </div>
                          <div class="member-email clearfix"> <b>Additional Requirments</b> <span>Phali Pta nae dsra kha sy pta hn ge</span> </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="x_content"> <a href="{{URL('/')}}/admin/view/order/active/reporting/add/android/{{$id}}" class="btn btn-round btn-success">Add Android</a> </div>
                        </div>
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                      <div class="col-lg-6">
                        <div class="page-title">
                          <div class="title_left">
                            <h3>Week One</h3>
                          </div>
                        </div>
                        <div class="member-left-side">
                          <div class="member-email clearfix"> <b>Order ID</b> <span>1</span> </div>
                          <div class="member-email clearfix"> <b>Product Name</b> <span>Green Grapez</span> </div>
                          <div class="member-email clearfix"> <b>Price</b> <span>500$</span> </div>
                          <div class="member-email clearfix"> <b>First Installement</b> <span></span> </div>
                          <div class="member-email clearfix"> <b>Due Date </b> <span>22/03/2018</span> </div>
                          <div class="member-email clearfix"> <b>Second Installement</b> <span></span> </div>
                          <div class="member-email clearfix"> <b>Due Date </b> <span>22/04/2018</span> </div>
                          <div class="member-email clearfix"> <b>Status</b> <span>
                            <label class="label label-info">New</label>
                            </span> </div>
                          <div class="member-email clearfix"> <b>Requirments</b> <span>Nae Pta</span> </div>
                          <div class="member-email clearfix"> <b>Additional Requirments</b> <span>Phali Pta nae dsra kha sy pta hn ge</span> </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="page-title">
                          <div class="title_left">
                            <h3>Week Two</h3>
                          </div>
                        </div>
                        <div class="member-left-side">
                          <div class="member-email clearfix"> <b>Order ID</b> <span>1</span> </div>
                          <div class="member-email clearfix"> <b>Product Name</b> <span>Green Grapez</span> </div>
                          <div class="member-email clearfix"> <b>Price</b> <span>500$</span> </div>
                          <div class="member-email clearfix"> <b>First Installement</b> <span></span> </div>
                          <div class="member-email clearfix"> <b>Due Date </b> <span>22/03/2018</span> </div>
                          <div class="member-email clearfix"> <b>Second Installement</b> <span></span> </div>
                          <div class="member-email clearfix"> <b>Due Date </b> <span>22/04/2018</span> </div>
                          <div class="member-email clearfix"> <b>Status</b> <span>
                            <label class="label label-info">New</label>
                            </span> </div>
                          <div class="member-email clearfix"> <b>Requirments</b> <span>Nae Pta</span> </div>
                          <div class="member-email clearfix"> <b>Additional Requirments</b> <span>Phali Pta nae dsra kha sy pta hn ge</span> </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="x_content"> <a href="{{URL('/')}}/admin/view/order/active/reporting/add/ios/{{$id}}" class="btn btn-round btn-success">Add IOS</a> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /page content --> 
    @endsection