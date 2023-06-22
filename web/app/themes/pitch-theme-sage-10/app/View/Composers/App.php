<?php

namespace App\View\Composers;

use bootstrap_5_wp_nav_menu_walker;
use Roots\Acorn\View\Composer;
use function get_field;
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
        $permalink = get_the_permalink();
        $thumbnail = get_field('image');
        $data = array(
            'title' => $title,
            'permalink' => $permalink,
            'thumbnail' => $thumbnail,
        );
        return $data;
    }

}
