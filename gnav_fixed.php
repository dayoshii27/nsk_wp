<?php
/**
* グローバルナビメニュー
*/

/**
 * 第１階層メニュー
 * ['表示するメニュー名', 'リンク先url', サブメニューとして割り当てる$sub_listのインデックス]
 * urlは''（空文字）としておくとpointer-eventsを無効にする
 */
$gnav_list = [
  ['事業内容', '/business/', 1],
  ['製品情報', '/package/', 2],
  ['導入事例', '/interview/'],
  ['会社情報', '',3],
  ['NEWS', '/category/news/'],
  ['お問い合わせ', '/contact/'],
  ['協業企業募集', '/businesspartner/']
];

/**
 * 第２階層メニュー
 * ['表示するメニュー名', 'リンク先url', 第３階層メニューとして割り当てる$child_sub_listのインデックス]
 */
$sub_list = [
  [
    ['AIソリューション', '/business/ai_solution/',1],
    ['業務システム開発', '/business/enterprise/',2],
    ['ECソリューション', '/business/ec/',3],
    ['組込みソフト開発', '/business/embedded/',4],
    ['品質向上サービス', '/business/quality/'],
    ['教育サービス', '/business/education/',5],
    ['ハードウェア開発', '/business/electronics/']
  ],
  [
    ['独自開発RPAエンジン「EoRPA」', '/package/eorpa/'],
    ['独自開発RPAエンジン「EoRPA Pro」', '/package/eorpa_pro/'],
    ['業務整理・可視化ツール「flowM」', '/package/flowm/'],
    ['RPAロボット管理専用ツール「MiITa」', '/package/miita/'],
    ['高精度OCRエンジン「帳票OCR」', '/package/ocr/'],
    ['Google Analytics自動化ソリューション', '/package/google_analytics_solution/'],
    ['RPAリモートサポートサービス', '/package/remote_support/']
  ],
  [
    ['ご挨拶', '/company/introduction/'],
    ['会社概要', '/company/'],
    ['事業所案内・アクセス', '/company/facilities/'],
    ['品質へのこだわり', '/company/quality/'],
    ['情報セキュリティの取り組み', '/company/isms/'],
    ['各種制度', '/company/institution/'],
    ['人材育成', '/company/training/'],
    ['福利厚生', '/company/welfare/'],
    ['プライバシーポリシー', '/company/privacy-policy/']
  ]
];

/**
 * 第３階層メニュー
 * ['表示するメニュー名' => 'リンク先url']
 */
$child_sub_list = [
  [
    'AIシステム開発' => '/business/ai_solution/ai_development/',
    'ナンバープレート検知処理AI<br>「License Plate DETECTOR Lite」 ' => '/business/ai_solution/license_plate_detector_lite/',
  ],
  [
    '業務システムソリューション' => '/business/enterprise/business-system/',
    '販売店向けCRMシステム' => '/business/enterprise/crm/',
  ],
  [
    'ECサイト開発' => '/business/ec/ec-dev/',
    'ECサイト運営自動化システム「ECロボ」' => '/business/ec/ecrobo/'
  ],
  [
    'IoTサービス' => '/business/embedded/iot/',
    '車載システム' => '/business/embedded/automotive/',
    'ROSサービス' => '/business/embedded/ros/'],
  [
    'セミナー' => '/business/education/seminar/',
    '特訓！C言語ドリル' => '/business/education/c/',
    '超実践！単体テスト' => '/business/education/unit-testing/',
    '超実践！Linuxアプリプログラミング' => '/business/education/linux-programming/',
    '一からやり直Cドリル' => '/business/education/c-drill/',
    '組込みLinux教材セット' => '/business/education/edu-armadillo/',
    '教育機関向け' => '/business/education/academic/',
  ],
];

// マジックナンバーに名前をつけておく
$pageNage = 0;
$url = 1;
$ownChildMenu = 2;

$renderChildMenu = function ($childMenuIndex) use ($child_sub_list, $pageNage, $url, $ownChildMenu) {
  // 第3階層のメニューを出力する
  echo '<ul class="child_sub_list">';
  foreach ($child_sub_list[$childMenuIndex] as $index => $child_item) {
    echo '<li class="child_sub_li">';
    echo '<a href="' . home_url() . $child_item . '">' . $index . '</a>';
    echo '</li>';
  }
  echo '</ul>';
};

$renderSubMenu = function ($subMenuIndex) use ($sub_list, $renderChildMenu, $pageNage, $url, $ownChildMenu) {
  // 第2階層のメニューを出力し、第3階層メニューがある場合はrenderChildMenuを実行する
  echo '<ul class="sub_menu_list">';
  foreach ($sub_list[$subMenuIndex] as $index => $sub_item) {
    $hasChild = array_key_exists($ownChildMenu, $sub_item);
    $hasChildClassString = $hasChild ? 'has_child' : '';
    $childMenuIndex = $sub_item[$ownChildMenu] - 1;

    echo '<li class="sub_menu_li ' . $hasChildClassString. '">';
    echo '<a href="' . home_url() . $sub_item[$url] . '">' . $sub_item[$pageNage] . '</a>';
    if ($hasChild) $renderChildMenu($childMenuIndex);
    echo '</li>';
  }
  echo '</ul>';
};

$renderGnavMenu = function () use ($gnav_list, $renderSubMenu, $pageNage, $url, $ownChildMenu) {
  // 第1階層のメニューを出力し、サブメニューがある場合はrenderSubMenuを実行する
  foreach ($gnav_list as $gnav_item) {
    $hasSub = array_key_exists($ownChildMenu, $gnav_item);
    $hasSubClassString = $hasSub ? 'has_sub ' : '';
    $noLinkClassString = $gnav_item[$url] === '' ? 'no_link ' : '';
    $subMenuIndex = $gnav_item[$ownChildMenu] - 1;

    echo '<li class="gnav_li ' . $hasSubClassString . $noLinkClassString . '">';
    echo '<a href="' . home_url() . $gnav_item[$url] . '">' . $gnav_item[$pageNage] . '</a>';
    if ($hasSub) $renderSubMenu($subMenuIndex);
    echo '</li>';
  }
};

$renderGnavMenu();