<div id="section-{{ $row }}"
     class="section-image-text-2col {!! $section['padding_top'] !!} {!! $section['padding_bottom'] !!} {!! $section['margin_top'] !!} {!! $section['margin_bottom'] !!}">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="d-none d-lg-block col-lg-4">
                @php $image = $section['image']['sizes'][ 'medium' ] @endphp
                <img src="{{ $image }}" class="img-fluid" alt="Le Pitch Web">
            </div>
            <div class="col-11 col-lg-8">
                @if ( $section['section_title'])
                    @include('partials.flexible-sections.section_title')
                @endif
                @if ( $section['text'])
                    {!! $section['text'] !!}
                @endif
            </div>
        </div>
    </div>
</div>

