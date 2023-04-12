<div class="main-slideshow">
    @foreach($section['slideshow_repeater'] as $block)
        <div class="slide"
             style="background-image: url({{$block['slide_style'][0]['bg_image']['sizes'][ 'large' ]}})">
            @foreach($block['slide_style'] as $slide)
                @if ($slide['acf_fc_layout'] == 'reference_type')
                    <div class="wrapper-text fadeInLeft">
                        @if ($slide['title'])
                            <h2>
                                {!! $slide['title'] !!}
                            </h2>
                        @endif
                        @if ($slide['text'])
                            <p class="d-none d-sm-block text-center introduction">
                                {!! $slide['text'] !!}
                            </p>
                        @endif
                    </div>
                    <div class="fadeIn">
                        @if ($slide['image_right_one'])
                            <img src="{{$slide['image_right_one']['sizes'][ 'large' ]}}" data-skip-lazy="" alt="Site vitrine Wordpress"
                                 class="d-none d-lg-block first"
                                 data-parallax='{"y": -30, "smoothness": 40}'>
                        @endif
                        @if ($slide['image_right_two'])
                            <img src="{{$slide['image_right_two']['sizes'][ 'large' ]}}" data-skip-lazy="" alt="Site vitrine Wordpress"
                                 class="d-none d-md-block second"
                                 data-parallax='{"y": -30, "smoothness": 40}'>
                        @endif
                    </div>
                @endif
                <div class="d-none d-lg-block scroll-btn">
                    <a href="#section-1" aria-label="Scroll" rel='m_PageScroll2id' class="page-scroll">
                        <div class="mouse">
                            <div class="weel">
                                <span></span>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    @endforeach
</div>
