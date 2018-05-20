@extends('layout.app')
@section('content')
<div class="bg" style="padding:2%;">
  <div class="banner6">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="salogan">
            <h2>LADB</h2>
            <div class="divider3 col-lg-offset-5 col-md-offset-5"></div>
          </div>
        </div>
        
      </div>
        <div class="row row col-lg-offset-2">
        <div class="col-lg-3 col-md-3 col-sm-12"> <a href="{{URL('/')}}/order/process/LADB WEB/step/1">
          <div class="ladb">
            <div class="ladbhead">
              <h4>LADB Web</h4>
            </div>
            <div class="ladbbody">
              <p><i class="fas fa-archive"></i><span>OMS</span></p>
              <p> <i class="fas fa-cart-arrow-down"></i><span>Ecommerce</span></p>
              <p><i class="fas fa-cogs"></i><span>Custom</span></p>
            </div>
          </div>
          </a> </div>
        <div class="col-lg-3 col-md-3 col-sm-12"> <a href="{{URL('/')}}/order/process/LADB MOBILE/step/1">
          <div class="ladb">
            <div class="ladbhead">
              <h4>LADB App</h4>
            </div>
            <div class="ladbbody">
              <p><i class="fas fa-archive"></i><span>OMS</span></p>
              <p> <i class="fas fa-cart-arrow-down"></i><span>Ecommerce</span></p>
              <p><i class="fas fa-cogs"></i><span>Custom</span></p>
            </div>
          </div>
          </a> </div>
        <div class="col-lg-3 col-md-3 col-sm-12"> <a href="{{URL('/')}}/order/process/LADB BOTH/step/1">
          <div class="ladb">
            <div class="ladbhead">
              <h4>Full Product</h4>
            </div>
            <div class="ladbbody">
              <p><i class="fas fa-archive"></i><span>OMS</span></p>
              <p> <i class="fas fa-cart-arrow-down"></i><span>Ecommerce</span></p>
              <p><i class="fas fa-cogs"></i><span>Custom</span></p>
            </div>
          </div>
          </a> </div>
          </div>
    </div>
  </div>
</div>
@endsection