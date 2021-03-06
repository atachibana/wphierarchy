<?php

include_once "wp_codex_links.php";
include_once "rss.php";

?>
<!DOCTYPE html>
<html lang="ja" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo _( 'The WordPress Template Hierarchy - a visualization resource' ); ?></title>
		<meta name="description" content="<?php echo _( 'The WordPress Template Hierarchy' ); ?>" />
		<meta name="keywords" content="wordpress, hierarchy" />
		<meta name="author" content="Rami Abraham" />
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/lines.css" />
		<script src="js/modernizr.custom.js"></script>

	</head>
	<body>
		<div class="container">
			<!-- wphierarchy top bar -->
			<div class="wphierarchy-top clearfix">
				<a class="wphierarchy-icon" href="http://wpdocs.osdn.jp/%E3%83%86%E3%83%B3%E3%83%97%E3%83%AC%E3%83%BC%E3%83%88%E9%9A%8E%E5%B1%A4"><span class="hierarchy-name icon-wordpress">WordPressテンプレート階層 詳細(WordPress Codex)</span></a>
				<span class="right"><a class="wphierarchy-icon" href="https://github.com/ramiabraham/wphierarchy"><span class="hierarchy-name icon-github">Fork / Report an Issue</span></a></span>
			</div>
			<header>
			<h3>the</h3>
				<hr />
					<div class="wph-header">
					  <h1>WordPress Template Hierarchy</h1>
					  <h2>A Mini Resource - Japanese edition</h2>
	  				</div>
	  					<div class="clearfix"></div>
				<hr />
			</header>

			<div class="main clearfix">

					<div class="lines">

						<div class="l1"></div>
						<div class="l-small-elbow"></div>
						<div class="l3"></div>
						<div class="l4"></div>
						<div class="l4 l5"></div>
						<div class="l4 l6"></div>
						<div class="l4 l7"></div>
						<div class="l1 l8"></div>
						<div class="l-small-elbow elbowtopright"></div>
						<div class="l-small-elbow elbowbottomleft-date-archives"></div>
						<div class="l-small-elbow elbowbottomleft-date-archives elbowbottomleft-date-archives-2"></div>
						<div class="l-small-elbow elbowtopleft"></div>
						<div class="l-small-elbow elbowtopleft elbowtopleft-index-dot-php"></div>
						<div class="l-small-elbow elbowtopleft elbowtopleft-single"></div>
						<div class="l-small-elbow elbowtopleft elbowtopleft-page"></div>
						<div class="l-small-elbow elbowtopleft elbowtopleft-home"></div>

						<div class="l-small-elbow elbowboth-custom-post-to-single home-to-index"></div>

						<div class="l-small-elbow elbowtopleft elbowtopleft-date"></div>
						<div class="l-small-elbow elbowtopright elbowtopright-paged-false"></div>
						<div class="l-small-elbow elbowboth-paged-false"></div>

						<div class="l-small-elbow elbowtopleft singular-elbow-left"></div>
						<div class="l-small-elbow elbowtopleft singular-connector-right"></div>
						<div class="l-small-elbow elbowtopright elbowtopright-singular-page"></div>
						<div class="l-small-elbow elbowtopright elbowtopright-single-post-page"></div>
						<div class="l-small-elbow elbowtopright elbowtopright-page-template"></div>
						<div class="l-small-elbow elbowtopright elbowtopright-front-page"></div>

						<div class="l-small-elbow elbowboth-custom-post-to-single"></div>
						<div class="l-small-elbow elbowboth-custom-post-to-single elbowboth-blog-post-to-single"></div>
						<div class="l-small-elbow elbowboth-custom-post-to-single elbowboth-singular-page-to-index"></div>
						<div class="singular-page-to-index-extra"></div>

						<div class="l-small-elbow elbowboth-custom-post-to-single elbowboth-page-template-to-page"></div>
						<div class="l-small-elbow elbowboth-custom-post-to-single elbowboth-custom-to-page-slug"></div>
						<div class="site-front-page"></div>

						<div class="l-small-elbow elbowboth-custom-post-to-single elbowboth-front-page-to-home"></div>
						<div class="l-small-elbow elbowboth-custom-post-to-single elbowboth-blog-posts-index-page-to-home"></div>
						<div class="l-small-elbow elbowboth-custom-post-to-single elbowboth-blog-posts-index-page-to-home comments-popup-page"></div>

						<div class="l-small-elbow elbowboth-custom-post-to-single elbowboth-blog-posts-index-page-to-home comments-popup-page error-404-page"></div>

						<div class="l-small-elbow elbowboth-custom-post-to-single elbowboth-blog-posts-index-page-to-home comments-popup-page search-result-page"></div>



					</div>

				<nav id="menu" class="nav col1">
					<ul>

						<li class="wp-grey">
							<a href="<?php echo $wp_codex_links['archive_page']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-archive"></i>
								</span>
								<span class="hierarchy-name">アーカイブ ページ</span>
							</a>
						</li>


						<li class="wp-grey">
							<a href="<?php echo $wp_codex_links['singular_page']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-page"></i>
								</span>
								<span class="hierarchy-name">個別ページ</span>
							</a>
						</li>

						<li class="wp-grey">
							<a href="<?php echo $wp_codex_links['site_front_page']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-home"></i>
								</span>
								<span class="hierarchy-name">サイトフロント ページ</span>
							</a>
						</li>

						<li class="wp-grey">
							<a href="<?php echo $wp_codex_links['blog_posts_index_page']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-blog"></i>
								</span>
								<span class="hierarchy-name"><small>ブログ投稿インデックスページ</small></span>
							</a>
						</li>

						<li class="wp-grey">
							<a href="<?php echo $wp_codex_links['comments_popup_page']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-comments"></i>
								</span>
								<span class="hierarchy-name">コメントポップアップページ</span>
							</a>
						</li>

						<li class="wp-grey">
							<a href="<?php echo $wp_codex_links['error_404_page']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-404"></i>
								</span>
								<span class="hierarchy-name">404エラー ページ</span>
							</a>
						</li>

						<li class="wp-grey">
							<a href="<?php echo $wp_codex_links['search_result_page']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-search"></i>
								</span>
								<span class="hierarchy-name">検索結果 ページ</span>
							</a>
						</li>

					</ul>
				</nav>

				<!--end first menu column, start second menu below -->

				<nav id="menu" class="nav col2">
					<ul>

						<li class="wp-grey">
							<a href="<?php echo $wp_codex_links['single_post_page']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-page"></i>
								</span>
								<span class="hierarchy-name">個別投稿ページ</span>
							</a>
						</li>

						<li class="wp-grey">
							<a href="<?php echo $wp_codex_links['static_page']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-page"></i>
								</span>
								<span class="hierarchy-name">固定ページ</span>
							</a>
						</li>

						<li class="wp-light-blue">
							<a href="<?php echo $wp_codex_links['front_page']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-home"></i>
								</span>
								<span class="hierarchy-name"><?php echo _( 'Front page' ); ?> (front-page.php)</span>
							</a>
						</li>


					</ul>
				</nav> <!-- end second menu column, start third one below -->

				<nav id="menu" class="nav col3">
					<ul>

						<li class="wp-grey">
							<a href="<?php echo $wp_codex_links['author_archive']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-author"></i>
								</span>
								<span class="hierarchy-name">作成者別<br />アーカイブ</span>
							</a>
						</li>

						<li class="wp-grey">
							<a href="<?php echo $wp_codex_links['category_archive']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-category"></i>
								</span>
								<span class="hierarchy-name">カテゴリー<br />アーカイブ</span>
							</a>
						</li>

						<li class="wp-grey">
							<a href="<?php echo $wp_codex_links['custom_post_type_archive']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-category"></i>
								</span>
								<span class="hierarchy-name">カスタム投稿タイプ<br />アーカイブ</span>
							</a>
						</li>

						<li class="wp-grey">
							<a href="<?php echo $wp_codex_links['custom_taxonomy_archive']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-category"></i>
								</span>
								<span class="hierarchy-name">カスタムタクソノミーアーカイブ</span>
							</a>
						</li>

						<li class="wp-grey">
							<a href="<?php echo $wp_codex_links['date_archive']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-date"></i>
								</span>
								<span class="hierarchy-name">日付別アーカイブ</span>
							</a>
						</li>

						<li class="wp-grey">
							<a href="<?php echo $wp_codex_links['tag_archive']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-tag"></i>
								</span>
								<span class="hierarchy-name">タグアーカイブ</span>
							</a>
						</li>

						<li class="wp-grey">
							<a href="<?php echo $wp_codex_links['attachment_post']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-attachment"></i>
								</span>
								<span class="hierarchy-name">添付ファイル投稿</span>
							</a>
						</li>

						<li class="wp-grey">
							<a href="<?php echo $wp_codex_links['custom_post']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-post"></i>
								</span>
								<span class="hierarchy-name">カスタム投稿</span>
							</a>
						</li>

						<li class="wp-grey">
							<a href="<?php echo $wp_codex_links['blog_post']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-post"></i>
								</span>
								<span class="hierarchy-name">ブログ投稿</span>
							</a>
						</li>

						<li class="wp-grey">
							<a href="<?php echo $wp_codex_links['page_template']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-page"></i>
								</span>
								<span class="hierarchy-name">ページテンプレート</span>
							</a>
						</li>

						<li class="wp-grey">
							<a href="<?php echo $wp_codex_links['page_shown_on_front']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-home"></i>
								</span>
								<span class="hierarchy-name">ページを表示</span>
							</a>
						</li>

						<li class="wp-grey">
							<a href="<?php echo $wp_codex_links['posts_shown_on_front']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-home"></i>
								</span>
								<span class="hierarchy-name">投稿を<br />表示</span>
							</a>
						</li>

					</ul>
				</nav>

				<!-- end third menu column, start fourth one below -->

				<nav id="menu" class="nav col4">
					<ul>

						<li class="wp-orange">
							<a href="<?php echo $wp_codex_links['author_nicename']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-author"></i>
								</span>
								<span class="hierarchy-name">author-<span class="highlight">$nicename.php</span></span>
							</a>
						</li>

						<li class="wp-orange">
							<a href="<?php echo $wp_codex_links['category_slug']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-category"></i>
								</span>
								<span class="hierarchy-name">category-<span class="highlight">$slug.php</span></span>
							</a>
						</li>

						<li class="wp-orange">
							<a href="<?php echo $wp_codex_links['taxonomy_taxonomy_term']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-tag"></i>
								</span>
								<span class="hierarchy-name">taxonomy-<span class="highlight">$tax-$term.php</span></span>
							</a>
						</li>

						<li class="wp-grey">
							<a href="<?php echo $wp_codex_links['year_archive']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-date"></i>
								</span>
								<span class="hierarchy-name"><small>年別<br />アーカイブ</small></span>
							</a>
						</li>

						<li class="wp-grey">
							<a href="<?php echo $wp_codex_links['month_archive']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-month"></i>
								</span>
								<span class="hierarchy-name"><small>月別<br />アーカイブ</small></span>
							</a>
						</li>

						<li class="wp-grey">
							<a href="<?php echo $wp_codex_links['day_archive']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-day"></i>
								</span>
								<span class="hierarchy-name"><small>日別<br />アーカイブ</small></span>
							</a>
						</li>

						<li class="wp-orange">
							<a href="<?php echo $wp_codex_links['tag_slug']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-tag"></i>
								</span>
								<span class="hierarchy-name">tag-<span class="highlight">$slug.php</span></span>
							</a>
						</li>

						<li class="wp-orange">
							<a href="<?php echo $wp_codex_links['mimetype']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-attachment"></i>
								</span>
								<span class="hierarchy-name"><span class="highlight">$mimetype.php</span></span>
							</a>
						</li>

						<li class="wp-grey">
							<a href="<?php echo $wp_codex_links['custom_template']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-page"></i>
								</span>
								<span class="hierarchy-name"><small>カスタム<br />テンプレート</small></span>
							</a>
						</li>

						<li class="wp-grey">
							<a href="<?php echo $wp_codex_links['default_template']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-page"></i>
								</span>
								<span class="hierarchy-name"><small>標準<br />テンプレート</small></span>
							</a>
						</li>


					</ul>
				</nav>
				<!-- end fourth menu column, start fifth one below -->

				<nav id="menu" class="nav col5">
					<ul>

					<li class="wp-orange">
							<a href="<?php echo $wp_codex_links['author_id']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-author"></i>
								</span>
								<span class="hierarchy-name">author-<span class="highlight">$id.php</span></span>
							</a>
						</li>

						<li class="wp-orange">
							<a href="<?php echo $wp_codex_links['category_id']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-category"></i>
								</span>
								<span class="hierarchy-name">category-<span class="highlight">$id.php</span></span>
							</a>
						</li>

						<li class="wp-orange">
							<a href="<?php echo $wp_codex_links['taxonomy_taxonomy']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-page"></i>
								</span>
								<span class="hierarchy-name">taxonomy-<span class="highlight">$taxonomy.php</span></span>
							</a>
						</li>

						<li class="wp-orange">
							<a href="<?php echo $wp_codex_links['tag_id']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-tag"></i>
								</span>
								<span class="hierarchy-name">tag-<span class="highlight">$id.php</span></span>
							</a>
						</li>

						<li class="wp-orange">
							<a href="<?php echo $wp_codex_links['subtype']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-attachment"></i>
								</span>
								<span class="hierarchy-name"><span class="highlight">$subtype.php</span></span>
							</a>
						</li>

						<li class="wp-orange">
							<a href="<?php echo $wp_codex_links['custom']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-page"></i>
								</span>
								<span class="hierarchy-name"><span class="highlight">$custom.php</span></span>
							</a>
						</li>


					</ul></nav><!-- end fifth menu column, start sixth one below -->

				<nav id="menu" class="nav col6">
					<ul>

					<li class="wp-orange">
							<a href="<?php echo $wp_codex_links['mimetype_subtype']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-attachment"></i>
								</span>
								<span class="hierarchy-name"><span class="highlight">$mimetype_<br />$subtype.php</span></span>
							</a>
						</li>

						<li class="wp-orange">
							<a href="<?php echo $wp_codex_links['page_slug']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-page"></i>
								</span>
								<span class="hierarchy-name">page-<span class="highlight">$slug.php</span></span>
							</a>
						</li>
						</ul></nav><!-- end sixth menu column, start seventh one below -->

				<nav id="menu" class="nav col7">
					<ul>

						<li class="wp-light-blue">
							<a href="<?php echo $wp_codex_links['author']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-author"></i>
								</span>
								<span class="hierarchy-name">author.php</span>
							</a>
						</li>

						<li class="wp-light-blue">
							<a href="<?php echo $wp_codex_links['category']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-category"></i>
								</span>
								<span class="hierarchy-name">category.php</span>
							</a>
						</li>

						<li class="wp-orange">
							<a href="<?php echo $wp_codex_links['archive_posttype']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-archive"></i>
								</span>
								<span class="hierarchy-name">archive-<span class="highlight">$posttype.php</span></span>
							</a>
						</li>

						<li class="wp-light-blue">
							<a href="<?php echo $wp_codex_links['taxonomy']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-page"></i>
								</span>
								<span class="hierarchy-name">taxonomy.php</span>
							</a>
						</li>

						<li class="wp-light-blue">
							<a href="<?php echo $wp_codex_links['date']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-date"></i>
								</span>
								<span class="hierarchy-name">date.php</span>
							</a>
						</li>

						<li class="wp-light-blue">
							<a href="<?php echo $wp_codex_links['tag']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-tag"></i>
								</span>
								<span class="hierarchy-name">tag.php</span>
							</a>
						</li>

						<li class="wp-light-blue">
							<a href="<?php echo $wp_codex_links['attachment']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-attachment"></i>
								</span>
								<span class="hierarchy-name">attachment.php</span>
							</a>
						</li>

						<li class="wp-orange">
							<a href="<?php echo $wp_codex_links['single_posttype']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-post"></i>
								</span>
								<span class="hierarchy-name">single-<span class="highlight">$posttype.php</span></span>
							</a>
						</li>

						<li class="wp-light-blue">
							<a href="<?php echo $wp_codex_links['single_post']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-post"></i>
								</span>
								<span class="hierarchy-name">single-post.php</span>
							</a>
						</li>

						<li class="wp-orange">
							<a href="<?php echo $wp_codex_links['page_id']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-page"></i>
								</span>
								<span class="hierarchy-name">page-<span class="highlight">$id.php</span></span>
							</a>
						</li>

					</ul>
				</nav>

				<!-- end seventh menu column, start eighth one below -->

				<nav id="menu" class="nav col8">
					<ul>

						<li class="wp-blue">
							<a href="<?php echo $wp_codex_links['archive']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-archive"></i>
								</span>
								<span class="hierarchy-name">archive.php</span>
							</a>
						</li>

						<li class="wp-blue">
							<a href="<?php echo $wp_codex_links['single']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-post"></i>
								</span>
								<span class="hierarchy-name">single.php</span>
							</a>
						</li>

						<li class="wp-blue">
							<a href="<?php echo $wp_codex_links['page']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-page"></i>
								</span>
								<span class="hierarchy-name">page.php</span>
							</a>
						</li>

						<li class="wp-blue">
							<a href="<?php echo $wp_codex_links['home']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-home"></i>
								</span>
								<span class="hierarchy-name">home.php</span>
							</a>
						</li>

						<li class="wp-blue">
							<a href="<?php echo $wp_codex_links['comments_popup']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-comments"></i>
								</span>
								<span class="hierarchy-name">comments-popup.php</span>
							</a>
						</li>

						<li class="wp-blue">
							<a href="<?php echo $wp_codex_links['404']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-404"></i>
								</span>
								<span class="hierarchy-name">404.php</span>
							</a>
						</li>

						<li class="wp-blue">
							<a href="<?php echo $wp_codex_links['search']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-search"></i>
								</span>
								<span class="hierarchy-name">search.php</span>
							</a>
						</li>

					</ul>
				</nav>

				<!-- end eighth menu column, start ninth one below -->

				<nav id="menu" class="nav col9">
					<ul>

						<li class="wp-light-blue">
							<a href="<?php echo $wp_codex_links['paged_true']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-page"></i>
								</span>
								<span class="hierarchy-name">2ページ以降:true paged.php</span>
							</a>
						</li>

						<li class="wp-grey">
							<a href="<?php echo $wp_codex_links['paged_false']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-page"></i>
								</span>
								<span class="hierarchy-name">2ページ以降:false</span>
							</a>
						</li>

						<li class="wp-blue singular">
							<a href="<?php echo $wp_codex_links['singular_php']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-page"></i>
								</span>
								<span class="hierarchy-name">singular.php</span>
								<span class="version-note">(v 4.3+)</span>
							</a>
						</li>



					</ul>
				</nav>

				<!-- end ninth menu column, start last column (index.php) below -->

				<nav id="menu" class="nav col10">
					<ul>

						<li class="wp-blue">
							<a href="<?php echo $wp_codex_links['index']; ?>">
								<span class="icon">
									<i aria-hidden="true" class="icon-star"></i>
								</span>
								<span class="hierarchy-name">index.php</span>
							</a>
						</li>

					</ul>
				</nav>

				<div class="creds">
				<h2><?php echo _('A Quaint and Helpful Thing'); ?></h2>
				<hr/>
				<ul>
				<li><?php echo _( 'Code by' ); ?> <a href="http://twitter.com/ramiabraham">Rami Abraham</a></li>
				<li><?php echo _( 'Design by' ); ?> <a href="http://twitter.com/marktimemedia">Michelle Schulp</a></li>
				<li><a href="http://unofficialtokyo.com/wordpress-template-hierarchy">Japanese translation</a> by <a href="https://github.com/atachibana">Akira Tachibana</a></li>
				<li><?php echo _( 'Icons are the lovely' ); ?> <a href="http://genericons.com">Genericons</a></li>
				</ul>

				<div class="update">
					<h4><?php echo _( 'Latest Update' ); ?>:</h4>
					<p>
					<?php echo get_latest_update(); ?>
					</p>
				</div>

				<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://wphierarchy.com" data-text="<?php echo _( 'the WordPress template hierarchy'); ?>, a mini resource by @marktimemedia and @ramiabraham" data-count="none" data-dnt="true">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				
                <hr />
                Japanese edition by <a href="http://wpdocs.osdn.jp/%E5%88%A9%E7%94%A8%E8%80%85:Akira_Tachibana">Akira Tachibana</a>
                <br />
                <a href="https://github.com/atachibana/wphierarchy"><span class="icon-github"></span> Fork</a>
				</div> 
			</div>
		</div><!-- /container -->
	</body>
</html>
