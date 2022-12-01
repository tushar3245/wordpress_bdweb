<!DOCTYPE html>
<html>
<?php
//header area
include_once('header.php');
?>



</section>
<section id="body_area">
  <div class="container ">
    <div class="row m-0 p-0">
      <div class="col-md-12 bg-danger ">

<div class="float-start">
<?php
      wp_nav_menu(array(
        'theme_location'=>'secendary_menu',
        'menu_class'    =>'ndmanu',
       
      ));
       
      ?>
</div>


     

      </div>
      </div>
      </div>

      <div class="container">
    <div class="row">
      <div class="col-md-12">









        <?php the_content();?>
      </div>
    </div>
  </div>
      </section>
<?php include_once('footer.php')?>
<?php wp_footer();?>
</body>
</html>