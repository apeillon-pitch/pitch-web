<div id="section-{{ $row }}"
     class="section-faq {!! $section['padding_top'] !!} {!! $section['padding_bottom'] !!} {!! $section['margin_top'] !!} {!! $section['margin_bottom'] !!}">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-11 col-lg-8">
        @if ( $section['section_title'])
          @include('partials.flexible-sections.section_title')
        @endif
      </div>
    @if($section['item_repeater'])
        <div class="col-11 col-lg-8">
          <div class="accordion" id="accordion-{{ $row }}">
            @foreach($section['item_repeater'] as $index => $item)
              <div class="accordion-item">
                <span class="accordion-header" id="heading-{{ $row }}-{{ $index }}">
                  <h3 class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapse-{{ $row }}-{{ $index }}"
                          aria-expanded="false" aria-controls="collapse-{{ $row }}-{{ $index }}">
                    {!! $item['title'] !!}
                  </h3>
                </span>
                <div id="collapse-{{ $row }}-{{ $index }}" class="accordion-collapse collapse"
                     aria-labelledby="heading-{{ $row }}-{{ $index }}"
                     data-bs-parent="#accordion-{{ $row }}">
                  <div class="accordion-body">
                    {!! $item['text'] !!}
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    @endif
  </div>
</div>

