jQuery(document).ready(function(){  
  // MOBILE NAVIGATION 
  jQuery(".mobile-menu").change(function(){
    if (jQuery(this).val()!='') {
    window.location.href=jQuery(this).val();
    }
  });
}); 