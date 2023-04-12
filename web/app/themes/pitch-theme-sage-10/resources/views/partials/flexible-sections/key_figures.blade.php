<div id="section-{{ $row }}"
     class="section-key-figures section-bg-color {!! $section['padding_top'] !!} {!! $section['padding_bottom'] !!} {!! $section['margin_top'] !!} {!! $section['margin_bottom'] !!}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-11 text-center">
                @if ( $section['section_title'])
                    @include('partials.flexible-sections.section_title')
                @endif
                <div class="row align-items-center">
                    @if ($section['image'])
                        @php
                            $image = $section['image']['sizes'][ 'medium' ];
                            $class = "col-lg-8";
                        @endphp
                        <div class="col-6 col-sm-3 mb-3 mb-lg-0">
                            <img src="{{ $image }}" class="img-fluid d-block mx-auto" alt="Logo partenaire">
                        </div>
                    @endif
                    @foreach($section['key_figures_repeater'] as $block)
                        <div class="col-6 col-sm-3 mb-3 mb-lg-0 text-center">
                            <span class="d-block number text-center font-weight-bold">{{ $block['data'] }}</span>
                            {!! $block['title'] !!}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

