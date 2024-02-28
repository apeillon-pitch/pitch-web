@php $projects = get_project() @endphp
@if($projects)
  <div id="section-{{ $row }}"
       class="section-projects {!! $section['padding_top'] !!} {!! $section['padding_bottom'] !!} {!! $section['margin_top'] !!} {!! $section['margin_bottom'] !!}">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          @if ( $section['section_title'])
            @include('partials.flexible-sections.section_title')
          @endif
          <div class="row g-5">
            @foreach($projects as $project)
              <div class="col-4">
                <a href="{{ $project['permalink'] }}" aria-label="{!! $project['title'] !!}">
                  <div class="card">
                    <div class="thumbnail" style="background-image: url({{ $project['thumbnail'] }})"></div>
                    <h2 class="title mt-2">{!! $project['title'] !!}</h2>
                  </div>
                </a>
              </div>
            @endforeach
          </div>
          @if($section['link'])
            <div class="col-11 text-center mt-5">
              <a href="{{ $section['link']['url'] }}" class="cta mt-5"
                 target="{{ $section['link']['target'] }}">{!! $section['link']['title'] !!}</a>
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>
@endif
