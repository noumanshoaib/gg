@extends('layout.app')
@section('content')
<div class="bg">
<div class="container">
<div class="bg-white">
  <div class="row">
    <div class="col-lg-12">
      <div class="step-bar">
        <div class="step-bar-fill" style="width:1%;"></div>
        <div class="num-box active ac-info">1</div>
        <div class="num-box pr-info">2</div>
        <div class="num-box  bus-info">3</div>
        <div class="num-box  tc-info">4</div>
      </div>
    </div>
    @if(count($product)>0)
          @foreach($product as $products)
    <div class="col-lg-3">
      <div class="text">
        <h3>{{$products->product_name}}</h3>
      </div>
    <div class="product-tbl"> <img src="{{URL('/')}}/storage/images/{{$products->product_logo}}" alt="img"> <br>
        <br>
        <ul>
          @php
                 $str = $products->product_description;
  $tok = strtok($str, "\n");
  
  $skillset ="<li>".$tok."</li>";
  while ($tok !== false) {
  
  $tok = strtok("\n");
  
  if(is_string($tok))
  $skillset= $skillset."<li>".$tok."</li>";
  }
  echo $skillset;
  
                @endphp
        </ul>
        <strong class="pull-right">{{$products->product_price}}$</strong> </div>
    </div>
    @endforeach
    @endif
    
   
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="product-form">
      <form method="post" action="{{URL('/')}}/order/process/step/3">
          {{csrf_field()}}
          @if(count($product)>0)
          @foreach($product as $products)
          <div class="checkbox">
            <label>
              <input name="c" type="checkbox" value="{{$products->id}}">
            {{$products->product_name}}</label>
          </div>
          @endforeach
          @endif
          
          <div class="form-group col-lg-2 col-sm-12 col-md-2 pull-right">
            <button type="submit" class="btn btn-lg submitbtn pull-right">Next</button>
          </div>
        </form>
      </div>
    </div>
  </div>
 </div>
</div>
</div>
@endsection