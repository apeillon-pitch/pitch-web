<article @php post_class() @endphp>
  <header class="mb-5">
    <div class="row align-items-center">
      <div class="col-12 col-lg-6 bg">
        @php
          $bg = $portfolio_data['image']['sizes'][ 'large' ];
        @endphp
        <div class="bg h-100" style="background-image: url({{ $bg }})"></div>
      </div>
      <div class="col-12 col-lg-6 p-4 text-center text-lg-left">
        <h1 class="entry-title">{!! get_the_title() !!}</h1>
        @php echo the_category(); @endphp
      </div>
    </div>
  </header>
  <div class="container mb-5">
    <div class="row justify-content-center">
      <div class="col-11 col-lg-8">
        <div class="entry-content">
          @php the_content() @endphp
          @php the_tags('<ul class="tags"><li>', '</li><li>', '</li></ul>'); @endphp
          <time class="updated" datetime="{{ get_post_time('c', true) }}">Mis à jour
            le {{ get_the_modified_date() }}</time>
        </div>
      </div>
      <div class="col-11 col-lg-4 mt-4 mt-lg-0">
        <div class="wrapper section-bg-color w-100 p-5 text-center">
          <span class="section-title minus mb-4">A propos </span>
          <p>Le Pitch Web est une agence web basée à Nice et à Paris. Sa spécialité est la conception de site
            web
            pour le CMS Wordpress.</p>
          <a href="{{ home_url() }}" class="d-inline-block cta mt-4">Décourvir l'agence</a>
        </div>
        <div class="wrapper w-100 pt-5 text-center">
          <!-- Start of Meetings Embed Script -->
          <div class="meetings-iframe-container"
               data-src="https://meetings-eu1.hubspot.com/amaury-peillon?embed=true"></div>
          <script type="text/javascript"
                  src="https://static.hsappstatic.net/MeetingsEmbed/ex/MeetingsEmbedCode.js"></script>
          <!-- End of Meetings Embed Script -->
        </div>
      </div>
    </div>
  </div>
  <div class="section-news section-bg-color pb pt">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <span class="section-title minus">Découvrez aussi ...</span>
          @include('partials.flexible-sections.news_list')
        </div>
      </div>
    </div>
  </div>
</article>
