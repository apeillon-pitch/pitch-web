<?php

namespace App\View\Composers;

use bootstrap_5_wp_nav_menu_walker;
use Roots\Acorn\View\Composer;
use function get_field;
use function get_the_excerpt;
use function get_the_permalink;
use function get_the_title;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'header' => $this->headerData(),
            'mainMenu' => $this->mainMenu(),
            'siteName' => $this->siteName(),
            'sectionData' => $this->sectionData(),
            'article_data' => $this->article_data(),
            'portfolio_data' => $this->portfolio_data(),
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }

    /**
     * Header
     *
     * @return array
     */
    public function headerData()
    {
        $data = get_field('header_group', 'options');
        $data = array(
            'data' => $data,
        );
        return $data;
    }

    /**
     * Primary Nav Menu arguments
     * @return array
     */
    public function mainMenu()
    {
        $args = array(
            'theme_location' => 'primary_navigation',
            'container_id' => 'navbarSupportedContent',
            'container_class' => 'navbar-desktop',
            'menu_class' => 'nav navbar-nav w-100',
            'walker' => new bootstrap_5_wp_nav_menu_walker()
        );
        return $args;
    }

    /**
     * Section data
     *
     * @return array
     */
    public function sectionData()
    {
        $data = get_field('flexible_content');
        return $data;
    }

    /**
     * Article data
     * @return array
     */
    public function article_data()
    {
        $title = get_the_title();
        $permalink = get_the_permalink();
        $thumbnail = get_field('thumbnail');
        $data = array(
            'title' => $title,
            'permalink' => $permalink,
            'thumbnail' => $thumbnail,
        );
        return $data;
    }

    /**
     * Article data
     * @return array
     */
    public function portfolio_data()
    {
        $title = get_the_title();
        $excerpt = get_the_excerpt();
        $permalink = get_the_permalink();
        $thumbnail = get_post_thumbnail_id();
        $image = get_field('image');
        $category = get_field('category');
        $logo = get_field('logo');
        $challenge = get_field('challenge');
        $result = get_field('result');
        $solution = get_field('solution');
        $designer = get_field('designer');
        $developer = get_field('developer');
        $seo = get_field('seo');
        $conseil = get_field('conseil');
        $data = array(
            'title' => $title,
            'excerpt' => $excerpt,
            'permalink' => $permalink,
            'image' => $image,
            'thumbnail' => $thumbnail,
            'category' => $category,
            'logo' => $logo,
            'challenge' => $challenge,
            'solution' => $solution,
            'result' => $result,
            'designer' => $designer,
            'developer' => $developer,
            'seo' => $seo,
            'conseil' => $conseil,
        );
        return $data;
    }

}
