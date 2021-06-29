    <?php $subscribe = ($_GET['subscribe']? $_GET['subscribe']:'0'); ?>
    
    <!---start-scroll-top-call-->
    <button class="scroll-top" id="goup" data-bs-toggle="modal" data-bs-target="#exampleModal-2">
      <i class="fas fa-phone-alt"></i>
    </button>
    
    <!-- Modal-call -->
    <div class="modal fade" id="exampleModal-2" tabindex="-1" aria-labelledby="exampleModal-2" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content component-from">
          <div class="modal-header">
            <h6 class="text-center"><?= _e('Ask For Phone Call', 'unitedgroup'); ?></h6>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="component-career mb-3">

              <?php if($subscribe == '3'): ?>
                <div class="alert alert-success mt-3" role="alert">
                  <h3><?= _e('thank you for Ask For Phone Call', 'unitedgroup'); ?></h3>
                </div>
              <?php else: ?>

                <form class="form-content form-index-call row g-3 needs-validation mt-1" novalidate="" method="post" enctype="multipart/form-data" id="gform_3" action="/?subscribe=3">
                  <div class="col-md-12 mb-3">
                    <input name="input_1" type="text" class="form-control" id="validationCustom01" placeholder="<?= _e('Name', 'unitedgroup'); ?>" required="">
                  </div>
                  <div class="col-md-12 mb-3">
                    <input name="input_2" type="email" class="form-control" id="validationCustom01" placeholder="<?= _e('E-mail', 'unitedgroup'); ?>" required="">
                  </div>
                  <div class="col-md-12 mb-3">
                    <input name="input_3" type="text" class="form-control" id="validationCustom01" placeholder="<?= _e('Phone', 'unitedgroup'); ?>" required="">
                  </div>
                  
                  <div class="col-12 text-center">
                    <button class="btn btn-primarye" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal"><?= _e('Submit', 'unitedgroup'); ?></button>  <!--21/6-->
                  </div>
                  <input type="hidden" class="gform_hidden" name="is_submit_3" value="1">
                  <input type="hidden" class="gform_hidden" name="gform_submit" value="3">
                  <input type="hidden" class="gform_hidden" name="gform_unique_id" value="">
                  <input type="hidden" class="gform_hidden" name="state_3" value="WyJbXSIsImIzYmFlN2ZjODgxMzM4ODlkOTU3YjdmYWQ5M2UyOTVjIl0=">
                  <input type="hidden" class="gform_hidden" name="gform_target_page_number_3" id="gform_target_page_number_3" value="0">
                  <input type="hidden" class="gform_hidden" name="gform_source_page_number_3" id="gform_source_page_number_3" value="1">
                  <input type="hidden" name="gform_field_values" value="">
                </form>
              <?php endif; ?>
            </div>
          </div>
        
        </div>
      </div>
    </div>
    <!--end--->

    <!--footer-start-->
    <footer class="component-footer">
      <div class="container">
        <div class="row-footer row pt-5 pb-5">
          <div class="col-md-5">
            <div class="d-logo-footer">
              <img src="<?= the_field('logo_footer', 'option'); ?>" alt="logo" class="logo-footer">
            </div>
            <p class="p-footer pt-3 pb-2"><?= the_field('copyright', 'option'); ?></p>
            <ul class="list-group list-group-horizontal link-social">
            <?php 
              if(have_rows('socials_footer', 'option')):
                while( have_rows('socials_footer', 'option') ) : the_row();  
            ?>
              <li> <a href="<?= the_sub_field('social_link'); ?>"><i class="fab fa-<?= the_sub_field('social_icon'); ?>"></i></a></li>
            <?php 
                endwhile; 
              endif;
            ?>
            </ul>
          </div>
          <div class="col-md-3 col-6 list__items">
            <h6 class="hading-footer"><?= _e('Links', 'unitedgroup'); ?></h6>
            <ul class="list-group pt-3">
            <?php 
              if(have_rows('links_footer', 'option')):
                while( have_rows('links_footer', 'option') ) : the_row();  
            ?>
              <li class="list-group-iteme"><a href="<?= the_sub_field('links_url'); ?>"><?= the_sub_field('links_name'); ?></a></li>
              <?php 
                endwhile; 
              endif;
            ?>
            </ul>
          </div>
          <div class="col-md-3 col-6">
            <h6 class="hading-footer"><?= _e('Contact us', 'unitedgroup'); ?></h6>
            <ul class="list-group pt-3">
            <?php 
              if(have_rows('contact_us', 'option')):
                while( have_rows('contact_us', 'option') ) : the_row();  
            ?>
              <li class="list-group-iteme"><?= the_sub_field('contact_us_info', 'option'); ?></li>
              <?php 
                endwhile; 
              endif;
            ?>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!--end-footer-->

    <!--js --> 
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script> 
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/nav-active.js"></script>

    <?php wp_footer(); ?>
  </body>
</html>

