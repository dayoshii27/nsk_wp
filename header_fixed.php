<!DOCTYPE html>
<html lang="ja">
	<head>
		<?php wp_head(); ?>
		<meta charset="utf-8">
		<title>日本システム開発株式会社</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,article">
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png" />
		<link rel="shortcur icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
        <link href="//use.fontawesome.com/releases/v5.8.2/css/all.css" rel="stylesheet">
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114948139-2"></script>
		<script>
  			window.dataLayer = window.dataLayer || [];
  			function gtag(){dataLayer.push(arguments);}
  			gtag('js', new Date());

  			gtag('config', 'UA-114948139-2');
		</script>
</head>
<body>
  <div class="bread_crumb">
    <div class="container">
      <?php if (function_exists('bcn_display')) bcn_display(); ?>
    </div>
  </div>
		
  <div class="main_contents">
    <div id="page_top"></div>
    <header>
      <div class="navToggle"><span></span><span></span><span></span><span>MENU</span></div>
        <div class="spSearchForm">
          <div class="search_form">
            <form method="get" action="<?php echo home_url('/'); ?>">
              <input type="text" name="s" value="<?php echo get_search_query(); ?>" placeholder="Search..."/>
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
          </div>
        </div>
				<nav class="globalMenuSp">
        <ul class="pref">		
          <div class="header_main h_sp">
            <div class="header_link">
              <dl id="toggle-menu">
                <dt class="bold"><a href="<?php echo home_url(); ?>/business/">事業内容</a></dt>
                <dd>
                  <ul class="pref">
                    <li><a href="<?php echo home_url(); ?>/business/ai_solution/">AIソリューション.</a></li>
                    <li><a href="<?php echo home_url(); ?>/business/enterprise/">業務システム開発</a></li>
                    <li><a href="<?php echo home_url(); ?>/business/ec/">ECソリューション</a></li>
                    <li><a href="<?php echo home_url(); ?>/business/embedded/">組込みソフト開発</a></li>
                    <li><a href="<?php echo home_url(); ?>/business/quality//">品質向上サービス</a></li>
                    <li><a href="<?php echo home_url(); ?>/business/education/">教育サービス</a></li>
                    <li><a href="<?php echo home_url(); ?>/business/electronics/">ハードウェア開発</a></li>
                  </ul>
                </dd>
                <dt class="bold"><a href="<?php echo home_url(); ?>/package/">製品情報</a></dt>
                <dd>
                  <ul class="pref">
                    <li><a href="<?php echo home_url(); ?>/package/eorpa/">独自開発RPAエンジン「EoRPA」</a></li>
                    <li><a href="<?php echo home_url(); ?>/package/eorpa_pro/">独自開発RPAエンジン「EoRPA Pro」</a></li>
                    <li><a href="<?php echo home_url(); ?>/package/flowm/">業務整理・可視化ツール「flowM」</a></li>
                    <li><a href="<?php echo home_url(); ?>/package/miite/">RPAロボット管理専用ツール「MiITa」</a></li>
                    <li><a href="<?php echo home_url(); ?>/package/ocr/">高精度OCRエンジン「帳票OCR」</a></li>
                    <li><a href="<?php echo home_url(); ?>/package/google_analytics_solution/">Google Analytics自動化ソリューション</a></li>
                    <li><a href="<?php echo home_url(); ?>/package/remote_support/">RPAリモートサポートサービス</a></li>
                  </ul>
                </dd>
                <dt class="bold none"><a href="<?php echo home_url(); ?>/interview/">導入事例</a></dt>
                <dt class="bold">会社情報</dt>
                <dd>
                  <ul class="pref">
                    <li><a href="<?php echo home_url(); ?>/company/introduction/">ご挨拶</a></li>
                    <li><a href="<?php echo home_url(); ?>/company/">会社概要</a></li>
                    <li><a href="<?php echo home_url(); ?>/company/facilities/">事業所案内・アクセス</a></li>
                    <li><a href="<?php echo home_url(); ?>/company/quality/">品質へのこだわり</a></li>
                    <li><a href="<?php echo home_url(); ?>/company/isms//">情報セキュリティの取り組み</a></li>
                    <li><a href="<?php echo home_url(); ?>/company/institution/">各種制度</a></li>
                    <li><a href="<?php echo home_url(); ?>/company/training/">人材育成</a></li>
                    <li><a href="<?php echo home_url(); ?>/company/welfare/">福利厚生</a></li>
                  </ul>
                </dd>
                <dt class="bold none"><a href="<?php echo home_url(); ?>/category/pr_news/">NEWS</a></dt>
                <dt class="bold none"><a href="<?php echo home_url(); ?>/contact/">お問い合わせ</a></dt>
                <dt class="bold none"><a href="<?php echo home_url(); ?>/businesspartner/">協業企業募集</a></dt>
                <dt class="bold none"><a href="https://recruit.nskint.co.jp">採用情報</a></dt>
              </dl>	
            </div>
          </div>
        </ul>
			</nav>
      <div class="wrapper header_inner">
        <?php if (is_front_page()):?>
          <h1 class="logo_wrap">
        <?php else:?>
          <div class="logo_wrap">
        <?php endif; ?>
        <a href="<?php echo home_url(); ?>/">
          <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" width="120" height="" alt="日本システム開発株式会社">
        </a>
        <?php if (is_front_page()):?>
          </h1>
        <?php else: ?>
          </div>
        <?php endif; ?>
        <ul class="gnav_list">
          <?php 
            // メニューリストの読み込み
            include_once(__DIR__. '/functions/gnav.php');
          ?>
          <li class="h_recruit"><a href="https://recruit.nskint.co.jp">採用情報</a></li>
          <li class="h_search" id="h_search">
            <a href="javascript:void(0);"><i class="fas fa-search"></i></a>
            <div class="search_form">
              <form method="get" action="<?php echo home_url('/'); ?>">
                <input type="text" name="s" value="<?php echo get_search_query(); ?>" placeholder="Search..."/>
                <button type="submit"><i class="fas fa-search"></i></button>
              </form>
            </div>
          </li>
          <script>
              jQuery('#h_search').hover(
                  function() {
                      jQuery('#h_search .search_form').fadeIn(100);
                  }, function() {
                      jQuery('#h_search .search_form').fadeOut(100);
                  });
              // jQuery('#h_search').mouseover(function() {
              // }).mouseout(function() {
              // });
          </script>
        </ul>
      </div>
    </header>
  </div>
</body>
</html>
