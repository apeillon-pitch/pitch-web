@switch($section['title_value'])
    @case('h1')
    <h1 class="section-title">{!! $section['section_title'] !!}</h1>
    @break
    @case('h2')
    <h2 class="section-title">{!! $section['section_title'] !!}</h2>
    @break
    @case('h3')
    <h3 class="section-title">{!! $section['section_title'] !!}</h3>
    @break
    @case('section-title')
    <span class="section-title">{!! $section['section_title'] !!}</span>
    @break
@endswitch
