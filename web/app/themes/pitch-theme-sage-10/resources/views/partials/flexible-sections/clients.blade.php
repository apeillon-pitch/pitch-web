<div id="section-{{ $row }}"
     class="section-clients section-bg-color {!! $section['padding_top'] !!} {!! $section['padding_bottom'] !!} {!! $section['margin_top'] !!} {!! $section['margin_bottom'] !!}">
    <div class="container">
        @if ( $section['section_title'])
            @include('partials.flexible-sections.section_title')
        @endif
        @if($section['logos_repeater'])
            <div class="row">
                @foreach($section['logos_repeater'] as $logo)
                    <div class="col-6 col-md-4 col-lg-3 mb-4">
                        <div class="logo-container">
                            <img src="{{ $logo['logo']['url'] }}" alt="Client Le Pitch - Site Wordpress"
                                 class="img-fluid"/>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>

