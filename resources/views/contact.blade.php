@extends('layout.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="salogan">
        <h2>Get In Touch</h2>
        <div class="divider3 col-lg-offset-5 col-md-offset-5"></div>
      </div>
    </div>
    <div class="col-lg-8">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3402.8825684076273!2d74.37441981475843!3d31.472416381385464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190673fff2ede3%3A0x3778ecce289400a0!2s92+Commercial+Area%2C+Lahore%2C+Pakistan!5e0!3m2!1sen!2s!4v1519647501467" width="100%" height="430" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="col-lg-4">
    	<div class="get-touch">
    	<form>
        	<div class="footer-img">
            <img src="images/logo2.png" alt="logo" style="width:35%;">
            </div><br>
          <div class="form-group">
            <input type="text" class="form-control" name="" value="" placeholder="Name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="" value="" placeholder="E-mail">
          </div>
          <div class="form-group">
            <input type="tel" class="form-control" name="" value="" placeholder="Phone">
          </div>
          <div class="form-group">
            <textarea class="form-control" name="" rows="3" placeholder="Message"></textarea>
          </div>
          <button class="btn btn-succ" type="submit" name="button">Submit
          </button>
        </form>
        </div>
    </div>
  </div>
</div>
@endsection