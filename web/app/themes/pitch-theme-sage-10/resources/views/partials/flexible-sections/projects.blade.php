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
              <div class="col-6">
                <a href="{{ $project['permalink'] }}" aria-label="{!! $project['title'] !!}">
                  <div class="card text-start">
                    <div class="thumbnail">
                      <img src="{{ $project['thumbnail'] }}" alt="{!! $project['title'] !!}" class="">
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-between mt-4">
                      @if($project['logo'])
                        <div class="logo">
                          <img src="{{ $project['logo']['url'] }}" alt="{!! $project['title'] !!}" class="">
                        </div>
                      @endif
                      <div class="d-flex flex-column text-end ms-5">
                        <h2 class="title">{!! $project['title'] !!}</h2>
                        @if($project['excerpt'])
                          <p class="mb-0 ms-4 ps-5">{!! $project['excerpt'] !!}</p>
                        @endif
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            @endforeach
          </div>
          @if($section['link'])
            <div class="col-11 mt-5">
              <a href="{{ $section['link']['url'] }}" class="cta mt-5"
                 target="{{ $section['link']['target'] }}">{!! $section['link']['title'] !!}</a>
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>
@endif
