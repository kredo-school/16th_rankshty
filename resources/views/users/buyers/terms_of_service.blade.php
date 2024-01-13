@extends('layouts.app')
@section('title','Terms of Service')
@section('content')
<form action="#" method="post">
  @csrf

  <div class="container">
    <div class="row">
        <div class="col-6 mt-3">
                <h2>100% Trusted <br> Organic Food Store</h2>
                <p class="text-muted">
                    Morbi porttitor ligula in nunc varius sagittis. Proin dui nisi, laoreet ut tempor ac, cursus vitae eros. Cras quis ultricies elit. Proin ac lectus arcu. Maecenas aliquet vel tellus at accumsan. Donec a eros non massa vulputate ornare. Vivamus ornare commodo ante, at commodo felis congue vitae.Morbi porttitor ligula in nunc varius sagittis. Proin dui nisi, laoreet ut tempor ac, cursus vitae eros. Cras quis ultricies elit. Proin ac lectus arcu. Maecenas aliquet vel tellus at accumsan. Donec a eros non massa vulputate ornare. Vivamus ornare commodo ante, at commodo felis congue vitae.Morbi porttitor ligula in nunc varius sagittis. Proin dui nisi, laoreet ut tempor ac, cursus vitae eros. 
                </p>
                <div class="text-center">
                    <img src="{{ asset('assets/pexels-pixabay-264771.jpg') }}" style="width: 90%; height: 400px;  margin-top: 90px;" alt="picture box">
                </div>
        </div>
    
        <div class="col-6 mt-3">
            <div class="text-center">
                <img src="{{ asset('assets/pexels-photomix-company-230544.jpg') }}"  style="width: 90%; height: 300px: " alt="picture phone">
            </div>
            <h2 style="margin-top: 30px">100% Trusted <br> Organic Food Store</h2>
            <p class="text-muted">Pellentesque a ante vulputate leo porttitor luctus sed eget eros. Nulla et rhoncus     neque. Duis non diam eget est luctus tincidunt a a mi. Nulla eu eros consequat tortor tincidunt feugiat. 
            </p>
            <div class="row">
                <div class="col-6 mt-2">
                    <div style="display: flex; align-items: center;">
                        <i class="fa-solid fa-leaf" style="font-size: 25px; background-color: rgba(76, 160, 212, 0.10); padding: 15px; color: #0C66A6;  border-radius: 40%;"></i>
                        <div style="margin-left: 10px; line-height: 1;">
                            <h5 style="margin-bottom: 0;">100% Organic food</h5>
                            <span class="text-muted">100% healthy & Fresh food.</span>
                        </div>                        
                    </div>
                    <div style="display: flex; align-items: center;  margin-top: 10px;">
                        <i class="fa-brands fa-shopify" style="font-size: 30px; background-color: rgba(76, 160, 212, 0.10); padding: 15px; color: #0C66A6;  border-radius: 40%;"></i>
                        <div style="margin-left: 10px; line-height: 1;">
                            <h5 style="margin-bottom: 0;">Customer Feedback</h5>
                            <span class="text-muted">Our happy customers.</span>
                        </div>                          
                    </div>
                    <div style="display: flex; align-items: center;">
                        <i class="fa-solid fa-headphones" style="font-size: 30px; margin-top: 10px;  background-color: rgba(76, 160, 212, 0.10); padding: 15px; color: #0C66A6;  border-radius: 40%;"></i>
                        <div style="margin-left: 10px; line-height: 1;">
                            <h5 style="margin-bottom: 0;">Free Shipping</h5>
                            <span class="text-muted">Free shipping with discount.</span>
                        </div>                          
                    </div>
                </div>
                <div class="col-6 mt-2">
                    <div style="display: flex; align-items: center;">
                        <i class="fa-solid fa-box" style="font-size: 30px; background-color: rgba(76, 160, 212, 0.10); padding: 15px; color: #0C66A6;  border-radius: 40%;"></i>
                        <div style="margin-left: 10px; line-height: 1;">
                            <h5 style="margin-bottom: 0;">Great Support 24/7</h5>
                            <span class="text-muted">Instant access to Contact.</span>
                        </div>                          
                    </div>
                    <div style="display: flex; align-items: center;  margin-top: 10px;">
                        <i class="fa-regular fa-star" style="font-size: 30px; background-color: rgba(76, 160, 212, 0.10); padding: 13px; color: #0C66A6; border-radius: 40%;"></i>
                        <div style="margin-left: 10px; line-height: 1;">
                            <h5 style="margin-bottom: 0;">100% Sucure Payment</h5>
                            <span class="text-muted">We ensure your money is save.</span>
                        </div>                          
                    </div>
                    <div style="display: flex; align-items: center;">
                        <i class="fa-solid fa-truck" style="font-size: 30px;  margin-top: 10px;  background-color: rgba(76, 160, 212, 0.10); padding: 13px; color: #0C66A6;  border-radius: 40%;"></i>
                        <div style="margin-left: 10px; line-height: 1;">
                            <h5 style="margin-bottom: 0;">100% Organic food</h5>
                            <span class="text-muted">100% healthy & Fresh food.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection


