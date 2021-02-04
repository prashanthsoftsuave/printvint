<?php

namespace App;

use WP_Query;

trait Partner
{

    private function partner_output($a = null)
    {
        return [
            'type' => 'partner',
            'title' => $a['partner_title'],
            'query' => $a['partners']
        ];
    }
}
