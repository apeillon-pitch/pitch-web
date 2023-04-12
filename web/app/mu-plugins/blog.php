<?php

function get_related_articles($number, $id) {
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => $number,
    'orderby'        => 'rand',
    'post__not_in' => array($id),
  );

  $data = get_article_data($args);

  wp_reset_query();

  return $data;
}

function get_articles($number) {
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => $number
  );

  $data = get_article_data($args);

  wp_reset_query();

  return $data;
}

function get_article_data($args)
{
  $query = new WP_Query($args);
  if ($query->have_posts()) {
    while ($query->have_posts()) {
      $query->the_post();
      $title = get_the_title();
      $permalink = get_the_permalink();
      $thumbnail = get_field('thumbnail');
      $excerpt = get_field('excerpt');
      $date = get_the_date();
      $data[] = array(
        'id' => get_the_ID(),
        'title' => $title,
        'permalink' => $permalink,
        'thumbnail' => $thumbnail,
        'excerpt' => $excerpt,
        'date' => $date,
      );
    }
  }

  return $data;
}
