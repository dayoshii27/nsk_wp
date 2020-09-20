<?php 

  // メニューリストの読み込み
  include_once(__DIR__. '/functions/gnav.php');

  // マジックナンバーに名前をつけておく
  $pageNage = 0;
  $url = 1;
  $ownChildMenu = 2;

  function renderGnavMenu() {
    // 第1階層のメニューを出力し、サブメニューがある場合はrenderSubMenuを実行する
    foreach ($gnav_list as $gnav_item) {
      $hasSub = array_key_exists($ownChildMenu, $gnav_item);
      $hasSubClassString = $hasSub ? 'has_sub' : '';
      $subMenuIndex = $gnav_item[$ownChildMenu];
  
      echo '<li class="gnav_li ' . $hasSubClassString . '">';
      echo '<a href="' . home_url() . $gnav_item[$url] . '">' . $gnav_item[$pageNage] . '</a>';
      if ($hasSub) renderSubMenu($subMenuIndex);
      echo '</li>';
    }
  }

  function renderSubMenu($subMenuIndex) {
    // 第2階層のメニューを出力し、第3階層メニューがある場合はrenderChildMenuを実行する
    echo '<ul class="sub_menu_list">';
    foreach ($sub_list[$subMenuIndex] as $index => $sub_item) {
      $hasChild = array_key_exists($ownChildMenu, $sub_item);
      $hasChildClassString = $hasChild ? 'has_child' : '';
      $childMenuIndex = $sub_item[$ownChildMenu];

      echo '<li class="gnav_li ' . $hasChild. '">';
      echo '<a href="' . home_url() . $sub_item[$url] . '">' . $sub_item[$pageNage] . '</a>';
      if ($hasChild) renderChildMenu($childMenuIndex);
      echo '</li>';
    }
    echo '</ul>';
  }
  
  function renderChildMenu($childMenuIndex) {
    echo '<ul class="child_sub_list">';
    foreach ($child_list[$childMenuIndex] as $index => $child_item) {
      echo '<li class="child_sub_li">';
      echo '<a href="' . home_url() . array_values($child_item) . '">' . array_keys($child_item) . '</a>';
      echo '</li>';
    }
    echo '</ul>';
  }
?>
			  