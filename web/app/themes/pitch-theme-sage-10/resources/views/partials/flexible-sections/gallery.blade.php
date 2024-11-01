<div id="section-{{ $row }}"
     class="section-gallery section-bg-color d-none d-lg-block {!! $section['padding_top'] !!} {!! $section['padding_bottom'] !!} {!! $section['margin_top'] !!} {!! $section['margin_bottom'] !!}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                @if ( $section['section_title'])
                    @include('partials.flexible-sections.section_title')
                @endif
                <div class="row align-items-center">
                    @foreach($section['images'] as $block)
                        <div class="col-6 col-md-4 mb-3 mb-lg-4 text-center">
                          {!! wp_get_attachment_image(  $block['image']['id'], 'full', '', array( "class" => "first img-fluid", "fetchpriority" => "high") ) !!}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

