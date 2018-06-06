@extends('master')
@section('content')
<section class="home-slider inner-page owl-carousel">
      <div class="slider-item" style="background-image: url('source/assets/dest/images/slider-2.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 element-animate">
              <h1>Liên Hệ Chúng Tôi</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
            </div>
          </div>
        </div>

      </div>

    </section>

    <!-- END slider -->

 <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5 element-animate">
          		<iframe src="@foreach($phongkham as $pk) {{$pk->DuongDan}} @endforeach" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-5 element-animate">
            
            <h5 class="text-uppercase mb-3">Địa chỉ</h5>
            <p class="mb-5">@foreach($phongkham as $pk) {{$pk->DiaChi}} @endforeach </p>
            
            <h5 class="text-uppercase mb-3">Liên hệ Email </h5>
            <p class="mb-5"><a href="mailto:info@yourdomain.com">@foreach($phongkham as $pk) {{$pk->Email}} @endforeach</a> 
            <h5 class="text-uppercase mb-3">Gọi chúng tôi</h5>
            <p class="mb-5">@foreach($phongkham as $pk) {{$pk->SDT}} @endforeach</p>
            

          </div>
        </div>
      </div>
    </section>

@endsection