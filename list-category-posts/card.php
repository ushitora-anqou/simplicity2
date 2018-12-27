<?php
$html = '<table>';
global $post;
while(have_posts()) {
    the_post();
    $uid = get_the_author_meta('ID');
    $html .= sprintf('<tr><td>%s</td><td><a href="%s">%s</a></td><td><a href="%s">%s</a></td></tr>',
        get_the_date(),
        get_author_posts_url($uid),
        get_avatar($uid, 50) . $this->get_author($post),
        get_permalink($post),
        $this->get_post_title($post)
    );
}
$html .= '</table>';
$this->lcp_output = $html;
?>

