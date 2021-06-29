<?php
/**
 * Template name: career
 * 
 */

get_header();
if ( have_posts() ) :
  while ( have_posts() ) : the_post();

  $form_id = get_field('career_form_id');
?>

  <div class="component-content mt-5 pt-5 mb-5">
      <div class="container">
        <div class="component-title text-center">
          <h6><?= the_title(); ?></h6>
        </div>
        <div class="component-career component-from mt-5 mb-5">
            <h6 class="text-center"><?= _e('Please Fill The Form', 'unitedgroup'); ?></h6>

            <form class="form-content row g-3 needs-validation mt-4"  method="post" id="gform_<?= $form_id; ?>" action="<?php the_permalink(); ?>/?id=<?= $form_id; ?>"novalidate>

              <input type="hidden" class="gform_hidden" name="is_submit_<?= $form_id; ?>" value="1">
              <input type="hidden" class="gform_hidden" name="gform_submit" value="<?= $form_id; ?>">
              <input type="hidden" class="gform_hidden" name="gform_unique_id" value="">
              <input type="hidden" class="gform_hidden" name="state_<?= $form_id; ?>" value="WyJbXSIsImIzYmFlN2ZjODgxMzM4ODlkOTU3YjdmYWQ5M2UyOTVjIl0=">
              <input type="hidden" class="gform_hidden" name="gform_target_page_number_<?= $form_id; ?>" id="gform_target_page_number_<?= $form_id; ?>" value="0">
              <input type="hidden" class="gform_hidden" name="gform_source_page_number_<?= $form_id; ?>" id="gform_source_page_number_<?= $form_id; ?>" value="1">
              <input type="hidden" name="gform_field_values" value="">
              
              <div class="col-md-12 mb-3">
                <input type="text" name="input_1" class="form-control" id="validationCustom01" placeholder="Name" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please choose a name.
                </div>
                </div>
                <div class="col-md-6 mb-3">
                  <input type="email" name="input_2" class="form-control" id="validationCustom02" placeholder="E-Mail" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                  <div class="invalid-feedback">
                    Please choose a E-Mail.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <input type="text" name="input_3" class="form-control" id="validationCustom03" placeholder="Phone" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                  <div class="invalid-feedback">
                    Please choose a Phone.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <input type="text" name="input_4" class="form-select" id="validationDefault04" required placholder="Governorate" >
                </div>
                <div class="col-md-6 mb-3">
                  <input type="text" class="form-select" id="validationDefault05" required placholder="City" >
                </div>
                <div class="col-md-12 Upload-file">
                  <input type="file" name="input_5" class="upload up" id="file-upload"multiple required/>
                  <label for="file-upload" class="file-upload">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/file-storage.png" class="file">
                    <span class="upl">Attach your CV</span>
                  </label>
                  <div id="file-upload-filename"></div>
                </div>
                <div class="col-12 text-center">
                  <button class="btn btn-primarye" type="submit">Apply</button>
                </div>



            
            </form>
        </div>
     </div>
  </div>
    <!----->



        <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          
          <div class="modal-body text-center our-title">
            <img src="./assets/img/checked.png" alt="checked">
            <p>Your request has been successfully accepted. We will contact you as 
              soon as possible.
            </p>
            <!--21/6-->
            <a href="index.html" type="button" class="btn btn-secondary">ok</a> <!--21/6-->

          </div>
         
        </div>
      </div>
    </div>

<?php
  endwhile;
endif;
get_footer(); 
?>