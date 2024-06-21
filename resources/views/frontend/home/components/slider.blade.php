<section class="fp__banner" style="background: url({{ asset('frontend/images/banner_bg.png') }});">
    <div class="fp__banner_overlay">
        <div class="row banner_slider">
            @foreach ($sliders as $slider)
                <div class="col-10">
                    <div class=" container">
                        <div class="row">
                            <div class="col-1"></div>

                            
                            <div class="col-xl-5 col-md-7 col-lg-6">
                                <div class="fp__banner_text wow fadeInleft" data-wow-duration="1.2s">
                                    <h1 style="color: white">{!! $slider->title !!}</h1>
                                    <h3>{!! $slider->sub_title !!}</h3>
                                    <h4 style="color: rgb(193, 193, 193)">{!! $slider->sub_title !!}</h4><br>
                                    <ul class="d-flex flex-wrap">
                                        @if ($slider->button_link)
                                            <li><a class="common_btn " style="align-items: flex-end" href="{{ $slider->button_link }}">shop now</a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-5 col-lg-5">
                                <div class="fp__banner_img wow fadeInright" data-wow-duration="1.2s">
                                    <div class="img">
                                        <img src="{{ asset($slider->image) }}" alt="food item" class="img-fluid w-100">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
