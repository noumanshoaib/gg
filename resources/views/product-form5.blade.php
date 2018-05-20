@extends('layout.app')
@section('content')
<div class="bg">
  <div class="container">
    <div class="bg-white">
      <div class="row">
        <div class="col-lg-12">
          <div class="step-bar">
            <div class="step-bar-fill" style="width:100%;"></div>
            <div class="num-box active ac-info">1</div>
            <div class="num-box active pr-info">2</div>
            <div class="num-box active bus-info">3</div>
            <div class="num-box active  tc-info">4</div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="content">
            <h3>Add Aditional Requirment</h3>
          <form action="{{URL('/')}}/order/process/step/3/add/additional/requirement" method="post">
              {{csrf_field()}}
              <textarea id="article-ckeditor" class="form-control" name="br" rows="5" ></textarea>
              <br>
              <button type="submit" class="btn btn-lg submitbtn">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
    CKEDITOR.replace( 'br' );
  </script>
@endsection
