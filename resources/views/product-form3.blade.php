@extends('layout.app')
@section('content')
<div class="bg">
<div class="container">
<div class="bg-white">
  <div class="row">
    <div class="col-lg-12">
      <div class="step-bar">
        <div class="step-bar-fill" style="width:30%;"></div>
        <div class="num-box active ac-info">1</div>
        <div class="num-box active pr-info">2</div>
        <div class="num-box  bus-info">3</div>
        <div class="num-box  tc-info">4</div>
      </div>
    </div>
    <div class="col-lg-12">
    	<div class="content">
          <h3 style="margin-bottom:0px;">Product Requirment</h3>
          <span>Recomended By system</span>
          <br>
          <br>
          <ul>
              @php
              if(!empty($product))
             { $str = $product;
$tok = strtok($str, "\n");
$url = URL("/");
$skillset ="<li><img src='".$url."/images/li-img.jpg' alt='img'>".$tok."</li>";
while ($tok !== false) {

$tok = strtok("\n");

if(is_string($tok))
$skillset= $skillset."<li><img src='".$url."/images/li-img.jpg' alt='img'>".$tok."</li>";
}
echo $skillset;}

              @endphp

            </ul>
        </div>
    </div>
    @if(session('additional')=="true")
    <div class="col-lg-12">
        <div class="content">
            <h3 style="margin-bottom:0px;">Product Requirment</h3>
            <span>Recomended By system</span>
            <br>
            <br>
            <ul>
                @php
                 $str = session()->get('order.additional_requirements');
  $tok = strtok($str, "\n");
  $url = URL("/");
  $skillset ="<li><img src='".$url."/images/li-img.jpg' alt='img'>".$tok."</li>";
  while ($tok !== false) {
  
  $tok = strtok("\n");
  
  if(is_string($tok))
  $skillset= $skillset."<li><img src='".$url."/images/li-img.jpg' alt='img'>".$tok."</li>";
  }
  echo $skillset;
  
                @endphp
                
              </ul>
          </div>
      </div>
@endif
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="product-form">
      <a href="{{URL('/')}}/order/process/step/3/edit/base/requirement" type="submit" class="btn btn-lg submitbtn">Edit Base Requirment</a>
      <a href="{{URL('/')}}/order/process/step/3/add/additional/requirement" type="submit" class="btn btn-lg submitbtn">Add Aditional Requirment</a>
      <a href="{{URL('/')}}/order/process/confirm" type="submit" class="btn btn-lg submitbtn">Confirm</a>
            <a href="" type="submit" class="btn btn-lg submitbtn">Cancel</a>
      </div>
    </div>
  </div>
 </div>
</div>
</div>
@endsection