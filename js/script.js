// use jQuery instead of "$" to avoid conflict
jQuery(document).ready(function(){  
	// MOBILE NAVIGATION 
	jQuery(".mobile-menu").change(function(){
	if (jQuery(this).val()!='') {
		window.location.href=jQuery(this).val();
		}
	});
}); 