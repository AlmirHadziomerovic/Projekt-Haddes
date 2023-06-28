<?php

//Eigene Funktion für die Pagination(Projekte)
function pagination($paged = '', $max_page = '')
{
    $big = 999999999; // need an unlikely integer
    if (!$paged) {
        $paged = get_query_var('paged');
    }

    if (!$max_page) {
        global $wp_query;
        //Isset - Prüft, ob eine Variable deklariert ist und sich von null unterscheidet
        $max_page = isset($wp_query->max_num_pages) ? $wp_query->max_num_pages : 1;
    }

    $html = '<nav class="pagination">';
    $html .= paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, $paged),
        'total' => $max_page,
        'mid_size' => 1,
        'prev_text' => '<span class="icon-arrow-left" aria-label="' . __('Vorherige Seite', 'wifi') . '"></span>',
        'next_text' => '<span class="icon-arrow-right" aria-label="' . __('Nächste Seite', 'wifi') . '"></span>'
    ));
    $html .= '</nav>';
    echo $html;
}