<?php

$newsUrl = get_field('news_link')['url'] ?? '/';

if (wp_http_validate_url($newsUrl)) {
  wp_redirect($newsUrl);
  exit;
}
