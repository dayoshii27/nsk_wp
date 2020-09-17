<?php
  include_once(__DIR__. '/functions/gnav.php');
  for ($i = 0; $i < count($gnav_list); $i++) {
      echo '<li class="gnav_li ';
      if (array_key_exists(2, $gnav_list[$i])) {
          echo 'has_sub';
      }
      echo '"><a href="'. home_url() . $gnav_list[$i][1] .'">'. $gnav_list[$i][0] .'</a>';
      if (array_key_exists(2, $gnav_list[$i])) {
          $num = $gnav_list[$i][2] - 1;
          $this_sub = $sub_list[$num];
          echo '<ul class="sub_menu_list">';
          for ($l = 0; $l < count($sub_list[$num]);$l++) {
              echo '<li class="sub_menu_li ';
              if (array_key_exists(2, $sub_list[$num][$l])) {
                  echo 'has_child';
              }
              echo '"><a href="'. home_url() . $sub_list[$num][$l][1] .'">'. $sub_list[$num][$l][0] .'</a>';
              if (array_key_exists(2, $sub_list[$num][$l])) {
                  $child_num = $sub_list[$num][$l][2] - 1;
                  echo '<ul class="child_sub_list">';
                  for ($a = 0; $a < count($child_sub_list[$child_num]); $a++) {
                      echo '<li class="child_sub_li"><a href="'. home_url() . array_values($child_sub_list[$child_num])[$a] .'">'. array_keys($child_sub_list[$child_num])[$a] .'</a></li>';
                  }
                  echo '</ul>';
              }
              echo '</li>';
          }
          echo '</ul>';
      }
      echo '</li>';
  }
?>
			  