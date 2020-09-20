<?php
/**
* グローバルナビメニュー
*/

/* 第１階層メニュー */
$gnav_list = [
  ['事業内容', '/business/', 1],
  ['導入事例', '/interview/',],
  ['会社情報', '', 2],
  ['ニュース', '/category/news/'],
  ['お問い合わせ', '/contact/'],
  ['協業企業募集', '/businesspartner/']
];

/* 第２階層メニュー */
$sub_list = [
  [
	  ['AIソリューション', '/business/ai_solution/',1],
	  ['業務システム開発', '/business/enterprise/',2],
	  ['業務改善パッケージ', '/business/package/',3],
	  ['ECソリューション', '/business/ec/', 4],
	  ['組込みソフト開発', '/business/embedded/',5],
	  ['品質向上サービス', '/business/quality/'],
	  ['教育サービス', '/business/education/',6],
	  ['ハードウェア開発', '/business/electronics/']
  ],
// 	[
// 	  ['独自開発RPAエンジン「EoRPA」', '/package/eorpa/'],
// 	  ['業務整理・可視化ツール「flowM」', '/package/flowm/'],
// 	  ['RPAロボット管理専用ツール「MiITa」', '/package/miita/'],
// 	  ['高精度OCRエンジン「帳票OCR」', '/package/ocr/'],
// 	  ['Google Analytics自動化ソリューション', '/package/google_analytics_solution/'],
// 	  ['RPAリモートサポートサービス', '/package/remote_support/']
//   ],
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
  ],
];

/* 第３階層メニュー */
$child_sub_list = [
  [
    'AIシステム開発' => '/business/ai_solution/ai_development/',
    'ナンバープレート検知AIアプリ<br>「車両ナンバープレート検知 関東版」' => '/business/ai_solution/license_plate_detector_kanto/',
    '画像解析AIアプリ「人数カウントBODY」' => '/business/ai_solution/countbody/',
			
  ],
	[
    '業務システムソリューション' => '/business/enterprise/business-system/',
    '販売店向けCRMシステム' => '/business/enterprise/crm/',
  ],
  [
    '独自開発RPAエンジン「EoRPA」' => '/business/package/eorpa/',
    '業務整理・可視化ツール「flowM」' => '/business/package/flowm/',
    'RPAロボット管理専用ツール「MiITa」' => '/business/package/miita/',
    '高精度OCRエンジン「帳票OCR」' => '/business/package/ocr/',
    'Google Analytics自動化ソリューション' => '/business/package/google_analytics_solution/',
    'RPAリモートサポートサービス' => '/business/package/remote_support/',
  ],
  [
    'ECサイト開発' => '/business/ec/ec-dev/',
    'ECサイト運営自動化システム「ECロボ」' => '/business/ec/ecrobo/'
  ],
	[
    'IoTサービス' => '/business/embedded/iot/',
    '車載システム' => '/business/embedded/automotive/',
    'ROSサービス' => '/business/embedded/ros/'
	],
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
