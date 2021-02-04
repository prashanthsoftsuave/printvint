<?php

namespace App;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    use PrimaryNav, SearchPreview, Section, HeroSlider, Hero, PageHeader, HomeTestimonial, PostGrid, Featured, CtaBar,
        NewHero, New2CardsBlock, NewLogoListBlock, NewQuoteBlock, NewTechnologyBlock, NewTabsBlock, NewCtaBlock, HeaderCta, NotificationBar;

    /**
     *
     * @return string url of featured image
     */
    public function featured_image()
    {
        if (has_post_thumbnail()) {
            return get_the_post_thumbnail_url();
        }
    }

    public function currentTemplate() {
        return 'homepage';
    }
//
//	public function page_header()
//	{
//		$page_header = get_field('page_header');
//
//		if ( !isset($page_header) || !is_array($page_header) ) return;
//
//		return $this->page_header_output($page_header);
//	}

    public function hero_slider()
    {
        $hero_slider = get_field('hero_slider');

        return $this->hero_slider_output($hero_slider);
    }

    public function cta_bar()
    {

        $cta_bar = get_field('cta_bar');

        return $this->cta_bar_output($cta_bar);
    }

    /**
     * @return array of Content Blocks
     */
    public function content_blocks()
    {
        $content_blocks = get_field('content_blocks');

        if (!isset($content_blocks) || !is_array($content_blocks['hp_cb'])) return;

        return array_map(function ($a) {
            $layout = $a['acf_fc_layout'] . '_output';
            return $this->$layout($a);
        }, $content_blocks['hp_cb']);
    }

}
