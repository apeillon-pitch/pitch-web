<div id="section-{{ $row }}"
     class="section-collapse d-none d-md-block {!! $section['padding_top'] !!} {!! $section['padding_bottom'] !!} {!! $section['margin_top'] !!} {!! $section['margin_bottom'] !!}">
    <div class="wrapper-menu">
        <div class="container">
            <div class="col-12">
                @if($section['section_title'])
                    <span class="d-block text-center section-title mb-5">{!! $section['section_title'] !!}</span>
                @endif
            </div>
            <div class="col-12">
                <div class="row">
                    @php $i=0 @endphp
                    @foreach($section['collapse_repeater'] as $block)
                        <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-lg-0">
                            <a class="btn btn-primary w-100 collapse-repeater-button" data-bs-toggle="collapse"
                               data-bs-target="#collapse-{{ $i }}" role="button" aria-expanded="false"
                               aria-controls="collapse-{{ $i }}">
                                {!! $block['title'] !!}
                            </a>
                        </div>
                        @php $i++ @endphp
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div id="accordion" class="mt-5">
        <div class="container">
            <div class="row">
                @php $i=0 @endphp
                @foreach($section['collapse_repeater'] as $block)
                    <div class="card col-12">
                        <div id="collapse-{{ $i }}" class="collapse" aria-labelledby="heading-{{ $i }}"
                             data-bs-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    @if ($block['image'])
                                        <div class="col-12 col-lg-5">
                                            @php $image = $block['image']['sizes'][ 'large' ] @endphp
                                            <img src="{{ $image }}" class="d-block img-fluid mx-auto" alt="Visuel illustrant un projet Wordpress">
                                        </div>
                                    @endif
                                    @if ($block['tabs_repeater'])
                                        <div class="col-12 col-lg-7">
                                            <nav>
                                                <div class="nav nav-tabs justify-content-center" id="nav-tab"
                                                     role="tablist">
                                                    @php
                                                        $e = 0;
                                                        $active = 'active';
                                                    @endphp
                                                    @foreach($block['tabs_repeater'] as $tab_title)
                                                        <a class="nav-item nav-link {{ $active }}"
                                                           id="nav-{{ $row }}-{{$i}}-{{ $e }}-tab" data-bs-toggle="tab"
                                                           data-bs-target="#nav-{{ $row }}-{{$i}}-{{ $e }}"
                                                           role="tab" aria-controls="nav-home"
                                                           aria-selected="true">{{ $tab_title['title'] }}</a>
                                                        @php $e++; $active = NULL; @endphp
                                                    @endforeach
                                                </div>
                                            </nav>
                                            <div class="tab-content p-5" id="nav-tabContent">
                                                @php
                                                    $t=0;
                                                    $active = 'active show';
                                                @endphp
                                                @foreach($block['tabs_repeater'] as $tab_content)
                                                    <div class="tab-pane fade {{ $active }}"
                                                         id="nav-{{ $row }}-{{$i}}-{{ $t }}"
                                                         role="tabpanel"
                                                         aria-labelledby="nav-{{ $row }}-{{$i}}-{{ $t }}-tab">
                                                        {!! $tab_content['text'] !!}
                                                    </div>
                                                    @php $t++; $active = NULL; @endphp
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @php $i++ @endphp
                @endforeach
            </div>
        </div>
    </div>
</div>

