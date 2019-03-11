<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            @php
                $sliders = \App\Slider::where('status',1)->get();
            @endphp
            <div class="col-md-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach( $sliders as $slider )
                            <li data-target="#slider-carousel" data-slide-to="{{ $loop->index }}"  class="{{ $loop->first ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>

                    <div class="carousel-inner">
                        @foreach( $sliders as $slider )
                        <div class="item {{ $loop->first ? ' active' : '' }}">

                            <div class="col-sm-12">
                                <img src="{{url('')}}/images/{{$slider->image}}" class="img-responsive" style="width: 100%; height: 350px;" alt="">
                                <div class="carousel-caption">
                                    <h3 class="text-white">Los Angeles</h3>
                                    <p class="text-secondary">We had such a great time in LA!</p>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
