<time class="updated" datetime="{{ get_post_time('c', true) }}">
  Publié le {{ get_the_date() }}
</time>

<p class="byline author vcard">
  <span>{{ __('Par', 'sage') }}</span>
  @php
    $author_id = get_the_author_meta('ID');
    $author_first_name = get_the_author_meta('user_firstname', $author_id);
    $author_last_name = get_the_author_meta('user_lastname', $author_id);
 @endphp
  <a href="{{ get_author_posts_url($author_id) }}" rel="author" class="fn">
    {!! $author_first_name !!} {!! $author_last_name !!}
  </a>
</p>
