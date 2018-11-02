<!DOCTYPE html><!--htmlで書かれていることを宣言-->
<html lang="ja"><!--日本語のサイトであることを指定-->
<head>
<meta charset="utf-8"><!--エンコードがUTF-8であることを指定-->
<meta name="viewport"
content="width=device-width, initial-scale=1.0 "><!--viewportの設定-->
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"><!--スタイルシートの呼び出し-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"><!--font-awesomeのスタイルシートの呼び出し-->

<?php wp_head(); ?><!--システム・プラグイン用-->
</head>
<body <?php body_class(); ?>>
<header>
  <div class="header-inner">

  </div>
</header>
