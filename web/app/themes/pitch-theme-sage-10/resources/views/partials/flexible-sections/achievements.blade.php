<div id="section-{{ $row }}"
     class="section-achievements {!! $section['padding_top'] !!} {!! $section['padding_bottom'] !!} {!! $section['margin_top'] !!} {!! $section['margin_bottom'] !!}">
    <div class="container">
        @if ( $section['section_title'])
            @include('partials.flexible-sections.section_title')
        @endif
        @if ($section['text'])
            <div class="row justify-content-center">
                <div class="col-12 col-sm-11 col-md-10">
                    {!! $section['text'] !!}
                </div>
            </div>
        @endif
    </div>
    @if($section['blocks'])
        <div class="slideshow-achievements mt-5">
            @foreach($section['blocks'] as $block)
                <div class="slide h-100">
                    <div class="row no-gutters">
                        @if($block['image'])
                            <div class="middle col-12 col-lg-6">
                                @php $image = $block['image']['sizes'][ 'medium' ] @endphp
                                <a href="{{ $block['url'] }}" target="_blank" aria-label="Site vitrine Wordpress">
                                    <img src="{{ $image }}" class="img-fluid" alt="Projet Wordpress">
                                </a>
                            </div>
                        @endif
                        <div class="right col-12 col-lg-6">
                            <div class="description">
                                @if($block['title'])
                                    <strong>{!! $block['title'] !!}</strong>
                                @endif
                                @if($block['projet_type'])
                                    <h4>{!! $block['projet_type'] !!}</h4>
                                @endif
                                @if($block['text'])
                                    <div class="row no-gutters justify-content-center">
                                        <div class="col-8">
                                            <div class="description-text">
                                                {!! $block['text'] !!}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>

