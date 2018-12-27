<?php if ( is_author_visible()): //投稿・固定ページのとき
if (is_amp()) {
    $auther_icon_tag = '<amp-img src="'.get_template_directory_uri().'/images/user.svg" width="12" height="12" class="fa fa-svg fa-fw"></amp-img>';
} else {
    $auther_icon_tag = '<span class="fa fa-user fa-fw"></span>';
}

?>
    <span class="post-author vcard author"><?php echo $auther_icon_tag; ?><span class="fn"<?php is_single() ? '' : ''; ?>><?php
    if ( is_twitter_follow_id_author_visible() && get_twitter_follow_id() ): //TwitterID表示の場合 ?>
         <a href="https://twitter.com/<?php echo esc_html( get_twitter_follow_id() ); ?>" target="_blank" rel="nofollow">@<?php echo esc_html( get_twitter_follow_id() ); ?></a>
<?php
    else: //通常の投稿者表示 ?>
<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>
<?php endif ?></span></span>
<?php endif; ?>

