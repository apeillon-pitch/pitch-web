<div id="section-{{ $row }}"
     class="section-news section-bg-color {!! $section['padding_top'] !!} {!! $section['padding_bottom'] !!} {!! $section['margin_top'] !!} {!! $section['margin_bottom'] !!}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                @if ( $section['section_title'])
                    @include('partials.flexible-sections.section_title')
                @endif
                @include('partials.flexible-sections.news_list')
            </div>
        </div>
    </div>
</div>

