/*==========================================================
	Warn user before leaving web page with unsaved changes
============================================================*/

$(document).ready(function(){
   	var unsaved = false;

	$("#create_categpry :input, #create_categpry select, #create_categpry textarea, #create_categpry .editor").change(function(){ //trigers change in all input fields including text type
	    unsaved = true;
	});
	$( "#create_categpry" ).submit(function() {
	  unsaved = false;
	});

	$("#create_product :input, #create_product select, #create_product textarea,#create_product .editor").change(function(){ //trigers change in all input fields including text type
	    unsaved = true;
	});
	$( "#create_product" ).submit(function() {
	  unsaved = false;
	});

	$("#create_promotion :input, #create_promotion select, #create_promotion textarea, #create_promotion .editor").change(function(){ //trigers change in all input fields including text type
	    unsaved = true;
	});
	$( "#create_promotion" ).submit(function() {
	  	unsaved = false;
	});

	$("#create_playlist :input,#create_playlist select,#create_playlist textarea, #create_playlist .editor").change(function(){ //trigers change in all input fields including text type
	    unsaved = true;
	});
	$( "#create_playlist" ).submit(function() {
	  unsaved = false;
	});

	$("#create_campaign :input,#create_campaign select, #create_campaign textarea, #create_campaign .editor").change(function(){ //trigers change in all input fields including text type
	    unsaved = true;
	});
	$( "#create_campaign" ).submit(function() {
	  unsaved = false;
	});
	$("#schedule_campaign :input,#schedule_campaign select,#schedule_campaign textarea, #schedule_campaign .editor").change(function(){ //trigers change in all input fields including text type
	    unsaved = true;
	});
	$( "#schedule_campaign" ).submit(function() {
	  unsaved = false;
	});

	$(window).on('beforeunload', function() {
        if (unsaved) {
           
            return 'This page is asking you to confirm that you want to leave - data you have entered may not be saved!';
        }
    }); 
});