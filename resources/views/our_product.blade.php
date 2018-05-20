@extends('layout.app')
@section('content')
  <div class="banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 ">
          <div class="banner-content wow slideInLeft" data-wow-duration="2s" data-wow-delay="2s"> <span>IMPOSIBLE IS NOTHING <br>
            MAKING NOTHING </span><br>
            <div class="divider col-lg-offset-5 col-md-offset-5 col-sm-offset-5 col-xs-offset-5"></div>
            <h3>SINCE</h3>
            <h1>2006</h1>
            <div class="divider col-lg-offset-5 col-md-offset-5 col-sm-offset-5 col-xs-offset-5"></div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="banner-img wow slideInRight" data-wow-duration="2s" data-wow-delay="2s"> <img src="images/bannerpic.png" alt="img"> </div>
        </div>
        <div class="col-lg-12">
          <div class="play-btn">
            <button type="button" class="btn btn-play">Play</button>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="container">
<div class="row">
	<div class="col-lg-12">
    	<div class="salogan">
        	<h2>Our Products</h2>
            <div class="divider3 col-lg-offset-5"></div>
        </div>
    </div>
</div>
  <div class="row">
    <div class="col-lg-6">
      <div class="product_content">
      <img src="images/swift-pay.jpg" alt="img"> 
        <h3>Swiftpay</h3>
        <p>Swiftpay is a P2P (Peer to Peer) money sharing app. You can send money to your friends & family through email or mobile number. Also you can upgrade to Business account to pay your company salaries through Swiftpay also.</p>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="product_content">
      <img src="images/bespokapp.jpg" alt="img"> 
        <h3>The Bespokeapp</h3>
        <p>The app is for male clients to design and tailor their own clothes. The customer can select from an array of options from designing suites, shirts, blazers, pants, waistcoats, polo shirts, trench coats and outer wear. While designing the customer can see how the end product will look in real-time. The easy step by step guide enables the user to select style, fabric options and lastly fill in customer information details and measurements.</p>
      </div>
    </div>
  </div>
  
</div>
@endsection