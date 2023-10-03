<div class="card-client d-flex flex-column h-100">
  <div class="client-header style-{{ $i }}">
    <figure>
      @if($client['image'])
        <img src="{{ $client['image']['sizes']['medium'] }}"
             alt="{{ $client['image']['alt'] }}"
             width="{{ $client['image']['sizes']['medium-width'] }}px"
             height="{{ $client['image']['sizes']['medium-height'] }}px">
      @else
        @if($i == 1)
          <img src="@asset('images/quote-1.svg')"
               alt="quote"
               width="35px"
               height="26px">
        @elseif($i == 2)
          <img src="@asset('images/quote-2.svg')"
               alt="quote"
               width="35px"
               height="26px">
        @else
          <img src="@asset('images/quote-3.svg')"
               alt="quote"
               width="35px"
               height="26px">
        @endif
      @endif
    </figure>
  </div>
  <div class="client-content d-flex flex-column justify-content-between">
    @if ($client['text'])
      <p>{!! $client['text'] !!}</p>
    @endif
    <div class="d-flex flex-column mt-3">
      @if ($client['name'])
        <span class="name">{!! $client['name'] !!}</span>
      @endif
      <div class="d-flex flex-row">
        @if ($client['job'])
          <span class="job">{!! $client['job'] !!} | </span>
        @endif
        @if ($client['company'])
          <strong class="company">{!! $client['company'] !!}</strong>
        @endif
      </div>
    </div>
  </div>
</div>
