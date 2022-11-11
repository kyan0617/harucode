<?php
/**
 * <title>タグを出力する
 */
add_theme_support('title-tag');
/**
 * アイキャッチ画像を使用可能にする
 */
add_theme_support('post-thumbnails');
/**
 * タイトル表示調整
 */
add_filter( 'get_the_archive_title', function ($title) {
  if (is_category()) {
      $title = single_cat_title('',false);
  } elseif (is_tag()) {
      $title = single_tag_title('',false);
  } elseif (is_post_type_archive() ){
    $title = post_type_archive_title('',false);
  } elseif (is_search()) {
      $title = '検索結果：'.esc_html( get_search_query(false) );
  } elseif (is_404()) {
      $title = '「404」ページが見つかりません';
  }
  return $title;
});
/**
 * メニュー
 */
add_theme_support('menus');