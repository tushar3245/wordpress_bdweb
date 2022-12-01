<head lang="<?php language_attributes();?>">
  <meta charset="<?php bloginfo('charset');?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head();?>
</head>
<body <?php body_class(); ?>>  
<section>

<div class="container ">
  <div class="row m-0 p-0">
    <div class="col-md-12 bg-danger p-1">
      <div class="left_top float-start text-white">
Bangladesh National Portal
</div>

<div class="right_top float-end text-white">
10 November, 2022 | Bangla
</div>
    </div>
  </div>
</div>






<div class="container">
  <div class="row">
    <div class="col-md-4">
      <a href=""><img class="img-fluid logo" src="<?php echo get_theme_mod('my_logo');?>"></a>
    </div>
   <div class="col-md-8">
    <div class="manu_top float-end  mt-1 p-0">
    <?php
      
      wp_nav_menu(array(
        'theme_location'=>'main_menu',
        'menu_class'    =>'nav',
       
      ));
      
      
      
      ?>
    </div>
   
    </div>
  </div>
</div>