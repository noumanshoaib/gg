@extends('layout.app')
@section('content')
<div class="bg">
  <div class="container">
    <div class="bg-white">
      <div class="row">
        <div class="col-lg-12">
          <div class="step-bar">
            <div class="step-bar-fill" style="width:65%;"></div>
            <div class="num-box active ac-info">1</div>
            <div class="num-box active pr-info">2</div>
            <div class="num-box active bus-info">3</div>
            <div class="num-box  tc-info">4</div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="content">
            <h3>Edit Base Requirment</h3>
          <form method="post" action="{{URL('/')}}/order/process/step/3/edit/base/requirement">
            {{csrf_field()}}
          <textarea  id="article-ckeditor" class="form-control" rows="5" name="br" >{{session('order.base_requirements')}}</textarea>
              <br>
              <button type="submit" class="btn btn-lg submitbtn">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="{{URL('/')}}/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>
@endsection