@switch($section['subtitle_value'])
    @case('h1')
    <h1 class="subtitle">{!! $section['section_subtitle'] !!}</h1>
    @break
    @case('h2')
    <h2 class="subtitle">{!! $section['section_subtitle'] !!}</h2>
    @break
    @case('h3')
    <h3 class="subtitle">{!! $section['section_subtitle'] !!}</h3>
    @break
    @case('section-title')
    <span class="subtitle">{!! $section['section_subtitle'] !!}</span>
    @break
@endswitch
