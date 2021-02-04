<?php

namespace App;

use Sober\Controller\Controller;

class App extends Controller
{


	public function siteName()
    {
        return get_bloginfo('name');
    }

	public function diamantiSocialSharing() {
		$pageURL = urlencode(get_permalink());
		$pageTitle = str_replace( ' ', '%20', get_the_title());

		$twitterURL = 'https://twitter.com/intent/tweet?text='.$pageTitle.'&amp;url='.$pageURL.'&amp;via=diamanticom';
		$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$pageURL;
		$linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$pageURL.'&amp;title='.$pageTitle;

		$content = '<div class="social-links">';
		$content .= 'SHARE: ';
		$content .= '<a class="social-link facebook" href="'.$facebookURL.'" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>';
		$content .= '<a class="social-link twitter" href="'. $twitterURL .'" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>';
		$content .= '<a class="social-link linkedin" href="'.$linkedInURL.'" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>';
		$content .= '</div>';

		return $content;
	}

	public function newsletterBlock() {
		return [
			'cta' => get_field('newsletter_cta', 'options'),
			'form_id' => get_field('newsletter_form', 'options'),
		];
	}

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public function ctaCards()
    {
        $show_cta = get_field('show_footer_cta');

        $cta_1 = $show_cta == 'default' && get_field('cta_1', 'options')['cta_1_icon'] ? get_field('cta_1', 'options') : get_field('cta_1');
        $cta_2 = $show_cta == 'default' && get_field('cta_2', 'options')['cta_2_icon'] ? get_field('cta_2', 'options') : get_field('cta_2');
        $cta_3 = $show_cta == 'default' && get_field('cta_3', 'options')['cta_3_icon'] ? get_field('cta_3', 'options') : get_field('cta_3');

        return $show_cta == 'hidden' ? [] : [$cta_1, $cta_2, $cta_3];
    }
}
