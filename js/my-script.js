jQuery(document).ready( function( $ ) {

    $('#upload_image_button').click(function() {

      window.send_to_editor = function(html) {
          imgurl = jQuery(html).attr('src');
          jQuery('#banner_anchor_img_link').val(imgurl);
          jQuery('#picsrc').attr("src",imgurl);
          tb_remove();
      }

      formfield = jQuery('#banner_anchor_img_link').attr('name');
      tb_show( '', 'media-upload.php?type=image&amp;TB_iframe=true' );
      return false;
    });

});
