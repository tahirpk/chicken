
// Variables
// ------------------------------
var headerHeight = 56;

// ------------------------------
// Browser Detection Plugin
// https://github.com/gabceb/jquery-browser-plugin/
// ------------------------------
!function(a,b){"use strict";var c,d;if(a.uaMatch=function(a){a=a.toLowerCase();var b=/(opr)[\/]([\w.]+)/.exec(a)||/(chrome)[ \/]([\w.]+)/.exec(a)||/(version)[ \/]([\w.]+).*(safari)[ \/]([\w.]+)/.exec(a)||/(webkit)[ \/]([\w.]+)/.exec(a)||/(opera)(?:.*version|)[ \/]([\w.]+)/.exec(a)||/(msie) ([\w.]+)/.exec(a)||a.indexOf("trident")>=0&&/(rv)(?::| )([\w.]+)/.exec(a)||a.indexOf("compatible")<0&&/(mozilla)(?:.*? rv:([\w.]+)|)/.exec(a)||[],c=/(ipad)/.exec(a)||/(iphone)/.exec(a)||/(android)/.exec(a)||/(windows phone)/.exec(a)||/(win)/.exec(a)||/(mac)/.exec(a)||/(linux)/.exec(a)||/(cros)/i.exec(a)||[];return{browser:b[3]||b[1]||"",version:b[2]||"0",platform:c[0]||""}},c=a.uaMatch(b.navigator.userAgent),d={},c.browser&&(d[c.browser]=!0,d.version=c.version,d.versionNumber=parseInt(c.version)),c.platform&&(d[c.platform]=!0),(d.android||d.ipad||d.iphone||d["windows phone"])&&(d.mobile=!0),(d.cros||d.mac||d.linux||d.win)&&(d.desktop=!0),(d.chrome||d.opr||d.safari)&&(d.webkit=!0),d.rv){var e="msie";c.browser=e,d[e]=!0}if(d.opr){var f="opera";c.browser=f,d[f]=!0}if(d.safari&&d.android){var g="android";c.browser=g,d[g]=!0}d.name=c.browser,d.platform=c.platform,a.browser=d}(jQuery,window);


// ------------------------------
// =UTILITY BELT
// Psst: Search for '=u' to come straight here. You're welcome.
// ------------------------------
var Utility = {
    str_replace: function(c, d, b) {
        var a = c.split(d);
        return a.join(b);
    },
    str_exists: function(b, c) {
        var a = b.split(c);
        if (a[0] === b) {
            return false;
        } else {
            return true;
        }
    },
    toggle_fullscreen: function(elem) {
        // can fullscreen any element
        if ((document.fullScreenElement !== undefined && document.fullScreenElement === null) || (document.msFullscreenElement !== undefined && document.msFullscreenElement === null) || (document.mozFullScreen !== undefined && !document.mozFullScreen) || (document.webkitIsFullScreen !== undefined && !document.webkitIsFullScreen)) {
            if (elem.requestFullScreen) {
                elem.requestFullScreen();
            } else if (elem.mozRequestFullScreen) {
                elem.mozRequestFullScreen();
            } else if (elem.webkitRequestFullScreen) {
                elem.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
            } else if (elem.msRequestFullscreen) {
                elem.msRequestFullscreen();
            }
        } else {
            if (document.cancelFullScreen) {
                document.cancelFullScreen();
            } else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
            } else if (document.webkitCancelFullScreen) {
                document.webkitCancelFullScreen();
            } else if (document.msExitFullscreen) {
                document.msExitFullscreen();
            }
        }
    },
    getViewPort: function() {
        var e = window, a = 'inner';
        if (!('innerWidth' in window)) {
            a = 'client';
            e = document.documentElement || document.body;
        }
        return {
            width: e[a + 'Width'],
            height: e[a + 'Height']
        };
    },
    getSidebarViewportHeight: function () {
        var h;
        h = $(window).height() - headerHeight;
        return h;
    },
    sidebar_resizing: function() {
        if ($('#topnav').hasClass('navbar-fixed-top')) {
            $('.static-sidebar').css('top', headerHeight + 'px');
        } else {
            var scr = $('body').scrollTop();

            $('.static-sidebar').css('top', '0px');


            if (scr < headerHeight) {
                $('.static-sidebar').css('top',(headerHeight - scr) + 'px');
            } else {
                $('.static-sidebar').css('top','0px');
            }
        }

        Utility.initScroller();
    },
    getBrandColor: function (name) {
        // Store Brand colors in JS so it can be called from plugins
        var brandColors = {
            'default':      '#fafafa',
            'gray':         '#9e9e9e',

            'inverse':      '#757575',
            'primary':      '#03a9f4',
            'success':      '#8bc34a',
            'warning':      '#ffc107',
            'danger':       '#e51c23',
            'info':         '#00bcd4',
            
            'brown':        '#795548',
            'indigo':       '#3f51b5',
            'orange':       '#ff9800',
            'midnightblue': '#37474f',
            'teal':         '#009688',
            'pink':         '#e91e63',
            'purple':       '#9c27b0',
            'green':        '#4caf50',
            'deeppurple':   '#673ab7',
            'deeporange':   '#ff5722',
            'lime':         '#cddc39',
            'lime':         '#2196f3'
        };

        if (brandColors[name]) {
            return brandColors[name];
        } else {
            return brandColors['default'];
        }
    },
    toggle_leftbar: function() {
        var menuCollapsed = localStorage.getItem('collapsed_menu');
        
        $('body').toggleClass('sidebar-collapsed');

        if (menuCollapsed == "true")
            localStorage.setItem('collapsed_menu', "false");
        else if (menuCollapsed == "false")
            localStorage.setItem('collapsed_menu', "true");
        
        setTimeout(function(){                  // wait 500ms before calling resize
            $(window).trigger('resize');        // so toggle happens faster instead of
        }, 500);                                // sticking out
    },
    initScroller: function() {
        $(".scroll-pane").nanoScroller({ paneClass: 'scroll-track',  sliderClass: 'scroll-thumb', contentClass: 'scroll-content' });
    },
    destroyScroller: function(elem) {
        $(elem).nanoScroller({ destroy: true });
    },
    animateContent: function () {
        if ($.fn.velocity) {
            $('.animated-content .info-tile, .animated-content .panel')
            .css('visibility', 'visible')
            .velocity('transition.slideUpIn', {stagger: 50});
        }
    }
};
// ------------------------------
// =/U
// ------------------------------


// ------------------------------
// =PLUGINS. custom made shizzle, yo!
// ------------------------------
(function($) {

  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  $( function() {
    $( "#started_at" ).datepicker();
  } );
  $( function() {
    $( "#ended_on" ).datepicker();
  } );
    // ------------------------------
    // ScrollSidebar
    // ------------------------------
    $.scrollSidebar = function(element, options) {
        var defaults = {};
        var plugin = this;

        plugin.settings = {};
        var $element = $(element),
            element = element;

    }
    $.fn.scrollSidebar = function(options) {
        return this.each(function() {
            if (undefined == $(this).data('scrollSidebar')) {
                var plugin = new $.scrollSidebar(this, options);
                $(this).data('scrollSidebar', plugin);
            };
        });
    };


    // ------------------------------
    // Sidebar Accordion Menu
    // ------------------------------
    $.sidebarAccordion = function(element, options) {
        var defaults = {};
        var plugin = this;

        plugin.settings = {};
        var $element = $(element),
            element = element;

        plugin.init = function() {
            plugin.settings = $.extend({}, defaults, options);

            var menuCollapsed = localStorage.getItem('collapsed_menu');
            if (menuCollapsed === null) {
                localStorage.setItem('collapsed_menu', "false");
            }
            if (menuCollapsed === "true") {
                $('body').addClass('sidebar-collapsed');
            }

            $('body').on('click', 'ul.acc-menu a', function() {
                var LIs = $(this).closest('ul.acc-menu').children('li');
                $(this).closest('li').addClass('clicked');
                $.each( LIs, function(i) {
                    if( $(LIs[i]).hasClass('clicked') ) {
                        $(LIs[i]).removeClass('clicked');
                        return true;
                    }
                    $(LIs[i]).find('ul.acc-menu:visible').slideToggle({duration: 100});
                    $(LIs[i]).removeClass('open');
                });

                if (!$('body').hasClass('sidebar-collapsed') || $(this).parents('ul.acc-menu').length > 1) {
                    if($(this).siblings('ul.acc-menu:visible').length>0)
                        $(this).closest('li').removeClass('open');
                    else
                        $(this).closest('li').addClass('open');
                        $(this).siblings('ul.acc-menu').slideToggle({duration: 100});
                }
            });

            var targetAnchor;
            $.each ($('ul.acc-menu a'), function() {
                if( this.href == window.location ) {
                    targetAnchor = this;
                    return false;
                };
            });

            var parent = $(targetAnchor).closest('li');
            while(true) {
                parent.addClass('active');
                parent.closest('ul.acc-menu').show().closest('li').addClass('open');
                parent = $(parent).parents('li').eq(0);
                if( $(parent).parents('ul.acc-menu').length <= 0 ) break;
            };

            var liHasUlChild = $('li').filter(function(){
                return $(this).find('ul.acc-menu').length;
            });
            $(liHasUlChild).addClass('hasChild');

        };
        plugin.init();
    }
    $.fn.sidebarAccordion = function(options) {
        return this.each(function() {
            if (undefined === $(this).data('sidebarAccordion')) {
                var plugin = new $.sidebarAccordion(this, options);
                $(this).data('sidebarAccordion', plugin);
            }
        });
    }

})(jQuery);
// ------------------------------
// =/P
// ------------------------------
function updatestatus(id){
    
    $.ajax({
            url: $("#updatestatusurl").val(),
            type: 'get',
            data: {id:id },
            success: function(data) {
                $("#status"+id).html(data)
            }
        });
}
function addextra(name, displayname, fieldtype, defaultvalues, fielddatatype){
    
    var namevar = $("#"+name).val();
    var displaynamevar = $("#"+displayname).val();
    var fieldtypevar = $("#"+fieldtype).val();
    var defaultvaluesvar = $("#"+defaultvalues).val();
    var fielddatatypevar = $("#"+fielddatatype).val();
    var modulediv =(name.substring((name).indexOf('custom_name_') + 12));
    var positionpointer = modulediv.indexOf("_");
    var modulenam = modulediv.slice(0,positionpointer);
    var oldid =(modulediv.substring((modulediv).indexOf('_') + 1));
    var module_id = $("#"+modulenam+"_module_id").val();
    var object_id = $("#"+modulenam+"_object_id").val();
    var id = oldid*1+1*1;
    if(namevar==""){
                $("#"+name).addClass('red-border');
                $("#"+name).focus();
                return false;
            }else{
                $("#"+name).removeClass('red-border');
            } 
            if(displaynamevar==""){
                $("#"+displayname).addClass('red-border');
                return false;
            } else{
                $("#"+displayname).removeClass('red-border');
            } 
            if(fieldtypevar==""){
                $("#"+fieldtype).addClass('red-border');
                return false;
            } else{
                $("#"+fieldtype).removeClass('red-border');
            } 
            if(defaultvaluesvar==""){
                $("#"+defaultvalues).addClass('red-border');
                return false;
                
            }else{
                $("#"+defaultvalues).removeClass('red-border');
            } 
            if(fielddatatypevar==""){
                $("#"+fielddatatype).addClass('red-border');
                return false;
                
            }else{
                $("#"+fielddatatype).removeClass('red-border');
            } 
            
        var confir = confirm("Are you sure! you want to add extra field?");
        if (confir == true) {
            $.ajax({
                url: $("#extraurl").val(),
                type: 'get',
                data: {module_id:module_id,object_id:object_id,namevar:namevar, namevar:namevar, displayname:displaynamevar, fieldtype:fieldtypevar, defaultvalues:defaultvaluesvar, fielddatatype:fielddatatypevar },
                success: function(data) {
                    console.log(data);
                    var obj = jQuery.parseJSON( data );
                    
                    if(obj.error=='success'){
                        
                        
                        
                        var html ='<tr class="odd gradeX" id="'+modulenam+'_'+id+'">'+
                                    '<td><input type="text" id="custom_name_'+modulenam+'_'+id+'" value="" /></td>'+
                                    '<td><input type="text" id="custom_display_name_'+modulenam+'_'+id+'" value="" /></td>'+
                                    '<td>'+
                                        '<select id="custom_fieldtype_'+modulenam+'_'+id+'" class="form-control">'+
                                            '<option value="text" >Textbox</option>'+
                                            '<option value="file" >Upload File</option>'+
                                            '<option value="checkbox" >Checkbox</option>'+
                                            '<option value="radio" >Radio</option>'+
                                            '<option value="datepicker" >Date Picker</option>'+
                                            '<option value="editor" >Editor</option>'+
                                            '<option value="select" >Select Dropdown</option>'+
                                            '<option value="multiselect" >Multiselect</option>'+
                                            '<option value="textarea" >Textarea</option>'+
                                        '</select>'+
                                    '</td>'+
                                    '<td class="center"><input type="text" id="custom_default_'+modulenam+'_'+id+'"  value="" /></td>'+
                                    '<td class="center">'+
                                        '<select id="custom_datatype_'+modulenam+'_'+id+'"  class="form-control">'+
                                            '<option value="Static" >Static</option>'+
                                            '<option value="Dynamic" >Dynamic</option>'+
                                            '<option value="None" >None</option>'+
                                        '</select>'+
                                    '</td>'+
                                    '<td>'+
                                        '<a href="javascript:;" onclick=addextra("custom_name_'+modulenam+'_'+id+'","custom_display_name_'+modulenam+'_'+id+'","custom_fieldtype_'+modulenam+'_'+id+'","custom_default_'+modulenam+'_'+id+'","custom_datatype_'+modulenam+'_'+id+'") >Add</a>'+
                                    '</td>'+
                                '</tr>';
                      $( html ).insertAfter( $( "#"+modulenam+"_"+oldid ) ); 
                      $("#"+modulenam+"_customfieldmessage").html((obj.message)+modulenam);
                        $("#"+modulenam+"_customfieldmessage").show();
                    }else{
                        $("#"+modulenam+"_customfieldmessage").html(obj.message+modulenam);
                        $("#"+modulenam+"_customfieldmessage").show();
                    }
                    
                     
                }
            });
        } else {
            
            return false;
        }
    
            
}
function uploadforedit(id){
    $("#upload4mediaid").val(id);
    $('#uploadimageModal').modal('toggle');
}
function uploadforupdate(){
    $.ajax({
                url: $("#uploadforediturl").val(),
                type: 'get',
                data: {id:id},
                success: function(data) {
                    $("#productimages").html(data); 
                    $('#uploadimageModal').modal('toggle');
                    
                }
            });
}
function showimages(id){
    
    $.ajax({
                url: $("#imagespopupurl").val(),
                type: 'get',
                data: {id:id},
                success: function(data) {
                    $("#productimages").html(data); 
                    $('#imagesmodel').modal('toggle');
                    
                }
            });
}

function showvideos(id){
    
    $.ajax({
                url: $("#videopopupurl").val(),
                type: 'get',
                data: {id:id},
                success: function(data) {
                    $("#productimages").html(data); 
                    $('#imagesmodel').modal('toggle');
                    
                }
            });
}
function reshowcatmedia(id,filetype,url,updatediv){
    
    $.ajax({
                url: url,
                type: 'get',
                data: {id:id, filetype:filetype},
                success: function(data) {
                    $("#"+updatediv).html(data); 
                   // $('#catmediamodel').modal('toggle');
                    
                }
            });
}
function showcatmedia(id,filetype){
    
    $.ajax({
                url: $("#mediapopupurl").val(),
                type: 'get',
                data: {id:id, filetype:filetype},
                success: function(data) {
                    $("#categorymediadisplay").html(data); 
                    $('#catmediamodel').modal('toggle');
                    
                }
            });
}

function showitems(id){
    
    $.ajax({
                url: $("#itemspopupurl").val(),
                type: 'get',
                data: {id:id},
                success: function(data) {
                    $("#productitems").html(data); 
                    $('#itemsmodel').modal('toggle');
                    
                }
            });
}
function imagepopup(imagename){
    var url= $("#imagepath").val();
    url=url+'/'+imagename;
    $("#viewimg").attr("src",url);
    $('#imageModal').modal('toggle');
}
function removethisimage(id){
    
    $( "div" ).remove( "#pimage"+id );
}
function moreitems(id){
    var valu = id*1+1;
    $("#addmore"+id).hide();
    $("#removeit"+id).show();
    var newdiv = '<div class="col-sm-12 bbottom" id="itemgroups'+valu+'">'+
                                        '<div class="form-group col-sm-3">'+
                                            '<label for="focusedinput" class="col-sm-4 control-label">Name</label>'+
                                            '<div class="col-sm-8">'+
                                                '<input type="text" class="form-control" value="" id="name'+valu+'" name="name['+valu+']" placeholder="Name" required="" />'+
                                            '</div>'+
                                            
                                        '</div>'+
                                       
                                        '<div class="form-group col-sm-3">'+
                                            '<label for="focusedinput" class="col-sm-4 control-label">Price</label>'+
                                              '<div class="col-sm-8">'+
                                                  '<input type="text" class="form-control" value="" id="price'+valu+'" name="price['+valu+']" placeholder="Price" required="" />'+
                                              '</div>'+
                                        '</div>'+
                                        '<div class="form-group col-sm-6">'+
                                            '<label for="focusedinput" class="col-sm-4 control-label">Image( <span class="hint-cls">Allowed types JPG, GIF, PNG</span>)</label>'+

                                            '<div class="col-sm-4">'+
                                                '<input id="image'+valu+'" name="image['+valu+']" placeholder="Image" type="file" required="" />'+
                                            '</div>'+
                                            
                                            '<div class="col-sm-4">'+
                                               
                                            '</div>'+
                                           
                                        '</div>'+
                                        '<div class="form-group col-sm-12">'+
                                            '<label for="txtarea1" class="col-sm-1 control-label">Description</label>'+
                                            '<div class="col-sm-9"><input type="text" id="short_discription'+valu+'" name="short_discription['+valu+']" class="form-control" /></div>'+
                                            '<div class="col-sm-2"><a href="javascript:;" onclick="moreitems('+valu+')" id="addmore'+valu+'">Add More</a>  <a onclick="removeitem('+valu+')" href="javascript:;" style="display:none" id="removeit'+valu+'">Remove</a></div>'+
                                        '</div>'+
                                            '</div>';
    $( newdiv ).insertAfter( $( "#itemgroups"+id ) );
}
function removeitem(id){
    $( "div" ).remove( "#itemgroups"+id );
}
function addmoreimages(id){
    var valu = id*1+1;
    $("#addmore"+id).hide();
    $("#removeit"+id).show();
    var newdiv = '<div class="form-group" id="pimage'+valu+'"><label for="focusedinput" class="col-sm-2 control-label">Image<br><span class="hint-cls">Allowed types JPG, GIF, PNG</span></label><div class="col-sm-6"><input id="image'+valu+'" name="image[]" placeholder="Picture" type="file"></div><div class="col-sm-2"><a href="javascript:;" onclick="addmoreimages('+valu+')" id="addmore'+valu+'">Add More</a>  <a onclick="removethisimage('+valu+')" href="javascript:;" style="display:none" id="removeit'+valu+'">Remove</a></div><div class="col-sm-2"></div></div>';
    $( newdiv ).insertAfter( $( "#pimage"+id ) );
}
function removethisvideo(id){
    
    $( "div" ).remove( "#pvideo"+id );
}
function addmorevideos(id){
    var valu = id*1+1;
    $("#addmorev"+id).hide();
    $("#removeitv"+id).show();
    var newdiv = '<div class="form-group" id="pvideo'+valu+'"><label for="focusedinput" class="col-sm-2 control-label">Video<br><span class="hint-cls">Allowed types MPG4, MP, FLV, MP4</span></label><div class="col-sm-6"><input id="video'+valu+'" name="video[]" placeholder="Video" type="file"></div><div class="col-sm-2"><a href="javascript:;" onclick="addmorevideos('+valu+')" id="addmorev'+valu+'">Add More</a>  <a onclick="removethisvideo('+valu+')" href="javascript:;" style="display:none" id="removeitv'+valu+'">Remove</a></div><div class="col-sm-2"></div></div>';
    $( newdiv ).insertAfter( $( "#pvideo"+id ) );
}
function removethisfile(id){
    
    $( "div" ).remove( "#pfile"+id );
}
function removemedia(trid,id){

    $.ajax({
                url: $("#removemedia").val(),
                type: 'get',
                data: {id:id},
                success: function(data) {
                    if(data=='done'){
                        alert('Media file deleted successfully!');
                        $("#"+trid).remove();
                        
                    }else{
                        alert('Sorry, deleting media file failed!');
                    }
                }
            });

}
function addmorefiles(id){
    var valu = id*1+1;
    $("#addmoref"+id).hide();
    $("#removeitf"+id).show();
    var newdiv = '<div class="form-group" id="pfile'+valu+'"><label for="focusedinput" class="col-sm-2 control-label">Document<br><span class="hint-cls">Allowed types CSV, XLSX, DOCX</span></label><div class="col-sm-6"><input id="file'+valu+'" name="files[]" placeholder="Video" type="file"></div><div class="col-sm-2"><a href="javascript:;" onclick="addmorefiles('+valu+')" id="addmoref'+valu+'">Add More</a>  <a onclick="removethisfile('+valu+')" href="javascript:;" style="display:none" id="removeitf'+valu+'">Remove</a></div><div class="col-sm-2"></div></div>';
    $( newdiv ).insertAfter( $( "#pfile"+id ) );
}

// ------------------------------
// =DOM Ready
// ------------------------------
$(document).ready(function () {
    $("#editfrm4upload").on('submit',(function(e){
        e.preventDefault();
        parentupdateurl = $("#mediapopupurl").val();
        medialistdiv=$("#medialistdiv").val();
        $.ajax({
            url: $(this).attr("action"),
            type: "POST",
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data){
                $('#uploadimageModal').modal('toggle');
               // var obj = jQuery.parseJSON( data );
                console.log(data);
                reshowcatmedia(data.id,data.media_type,parentupdateurl,medialistdiv);
                
            },
            error: function(){} 	        
        });
    }));
   
    
    $("#delallbtn").click(function(){
        var r = confirm("Are you sure, you want to delete all selected elements!");
        if (r == true) {
            $( "#frmdelselected" ).submit();
        }
        
        return false;
    });
   /* $('input[name^="media_type"]').change(function(){
        if($(this).is(':checked')) {
            if($(this).val()=='Single Image'){
                $("#singleimage").show();
                $("#promotion_slider").hide();
                $("#singlevideo").hide();
                $("#promotion_video_slider").hide();
                $("#imagelisting").show();
                $("#videolisting").hide();
            }else if($(this).val()=='Multi Images'){
                $("#singleimage").hide();
                $("#promotion_slider").show();
                $("#singlevideo").hide();
                $("#promotion_video_slider").hide();
                $("#imagelisting").show();
                $("#videolisting").hide();
            }else if($(this).val()=='Single Video'){
                $("#singleimage").hide();
                $("#promotion_slider").hide();
                $("#singlevideo").show();
                $("#promotion_video_slider").hide();
                $("#imagelisting").hide();
                $("#videolisting").show();
            }else if($(this).val()=='Multi Videos'){
                $("#singleimage").hide();
                $("#promotion_slider").hide();
                $("#singlevideo").hide();
                $("#promotion_video_slider").show();
                $("#imagelisting").hide();
                $("#videolisting").show();
            }
           console.log($(this).val());
          
        }
    });*/
    $("#selectalltodel").change(function(){
        if($(this).is(':checked')) {
            $('input[name^="selectfordel"]').each(function () {          
                $(this).prop('checked', true);
            });
         // $('input:checkbox').prop('checked',true);
          
        }else {
                $('input[name^="selectfordel"]').each(function () {          
                    $(this).prop('checked', false);
                });
               //$('input:checkbox').prop('checked',false);
              }
    });
    $("#pcatdropdown").change(function(){
        var url = $("#productpageurl").val()+'?cid='+$(this).val();
            window.location.href = url;
        });
       
   
    $("#deletepromoimages").click(function(){
        if ($("#promo_image_popup input:checkbox:checked").length > 0)
            {
                $( "#promo_image_popup" ).submit();
            }else{
                alert('Please select element to remove!');
                return false;
            }
    });
    $("#selectallimg").change(function(){
        if($(this).is(':checked')) {
          $('input[name^="deleteimage"]').each(function () {          
                $(this).prop('checked', true);
            });
              //      $('input:checkbox').prop('checked',true);
                  
        }else {
            $('input[name^="deleteimage"]').each(function () {          
                $(this).prop('checked', false);
            });
                 //   $('input:checkbox').prop('checked',false);
                }  
       
    });
    $('#sortable').sortable({
        axis: 'y',
        opacity: 0.7,
        handle: 'span',
        update: function(event, ui) {
            var list_sortable = $(this).sortable('toArray').toString();
            //console.log(list_sortable);
    		// change order in the database using Ajax
            $.ajax({
                url: $("#changemenuurl").val(),
                type: 'get',
                data: {list_order:list_sortable},
                success: function(data) {
                    console.log(data);
                    //finished
                }
            });
        }
    }); // fin sortable
    enquire.register("screen and (max-width: 767px)", {
        match : function() {
            //small
            if (!($('body').hasClass('sidebar-scroll'))) { //if not already added
                $('.static-sidebar').addClass('scroll-pane');
                $('.static-sidebar > .sidebar').addClass('scroll-content');
            }
        },  
        unmatch : function() {
            //big
            if (!($('body').hasClass('sidebar-scroll'))) { //if not already added
                console.log('here');
                $('.static-sidebar').removeClass('scroll-pane has-scrollbar');
                $('.static-sidebar > .sidebar').removeClass('scroll-content');
                $('.static-sidebar > .sidebar').css('margin-right','');
                $('.static-sidebar > .sidebar').css('right','');
                $('.static-sidebar.scroll-pane').nanoScroller({ stop: true });
            }
        }
    });

    // Add These To support nanoScroller
    if ($('body').hasClass('sidebar-scroll')) {
        $('.static-sidebar').addClass('scroll-pane');
        $('.sidebar').addClass('scroll-content');
    }


    // Scrollbar and reinitting scrollbars
    Utility.initScroller();
    $('.toolbar').on('shown.bs.dropdown', function () {Utility.initScroller();});
    $('.widget').on('shown.bs.collapse', function () {Utility.initScroller();});
    $('.widget').on('hidden.bs.collapse', function () {Utility.initScroller();});



    Utility.sidebar_resizing();

    // ------------------------------
    // Sidebar Accordion
    // ------------------------------
    $('body').sidebarAccordion();


    // ------------------------------
    // Toggling Sidebars
    // ------------------------------
    $('#trigger-sidebar>a').click(function () {
        Utility.toggle_leftbar();
    });

    $('#trigger-fullscreen').click(function () {
        Utility.toggle_fullscreen(document.documentElement);
    });

    // ------------------------------
    // Megamenu
    // This code will prevent unexpected menu close 
    // when using some components (like accordion, forms, etc)
    // ------------------------------
    $('body').on('click', '.yamm .dropdown-menu, .dropdown-menu-form', function(e) {
      e.stopPropagation()
    })
    
    // -------------------------------
    // For tabs inside dropdowns
    // -------------------------------
    $('.dropdown-menu a[data-toggle="tab"]').click(function (e) {
        e.stopPropagation();
        $(this).tab('show');
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $(this).closest('.dropdown').removeClass('active');        
    });

    // -------------------------------
    // Small screen
    // -------------------------------
    //enquire.register("screen and (min-width: 768px)", {
    //    match : function() {
    //        $('.static-sidebar').css('transform','');
    //    }
    //});

    // -------------------------------
    // Back to Top button
    // -------------------------------
    $('#back-to-top').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });

    // -------------------------------
    // Panel Collapses
    // -------------------------------
    $('a.panel-collapse').click(function() {
        $(this).children().toggleClass("fa-chevron-down fa-chevron-up");
        $(this).closest(".panel-heading").next().slideToggle({duration: 200});
        $(this).closest(".panel-heading").toggleClass('rounded-bottom');
        return false;
    });

    // -------------------------------
    // Quick Start
    // -------------------------------
    $('#headerbardropdown').click(function() {
        $('#headerbar').css('top',0);
        return false;
    });

    $('#headerbardropdown').click(function(event) {
      $('html').one('click',function() {
        $('#headerbar').css('top','-1000px');
      });

      event.stopPropagation();
    });


    // -------------------------------
    // FireFox Shim
    // FireFox is the *only* browser that doesn't support position:relative for
    // block elements with display set to table-cell, which is needed for the footer.
    // TODO: Replace $.browser with Modernizer.
    // -------------------------------
    if ($.browser.mozilla) {
        $('footer').css('width',$('footer').parent().width());

        $(window).on('resize', function() {
            $('footer').css('width',$('footer').parent().width());
        });
    }

    // ---------------------------------
    // Faux Off-cavas effect on collapse
    // ---------------------------------
    enquire.register("screen and (max-width: 767px)", {
        match : function() {  //smallscreen
            $('body').addClass('sidebar-collapsed');

            // if ($('body').hasClass('sidebar-collapsed')) {
                setWidthtoContent();
            // }
            $(window).on('resize', setWidthtoContent);
        },
        unmatch : function() {  //bigscreen
            $('body').removeClass('sidebar-collapsed');

            $('.static-content').css('width','');
            $(window).off('resize', setWidthtoContent);
        }
    });
        
    function setWidthtoContent() {
        var w = $('#wrapper').innerWidth();
        $('.static-content').css('width',(w)+'px');
    }

    // -------------------------------
    // Search on Top
    // -------------------------------
    $('#trigger-toolbar-search').click( function() {
        $("#toolbar-search").toggleClass('active');
        $("#toolbar-search input.form-control").focus();
        $("header#topnav > .toolbar").toggle();
    });

    $('#toolbar-search .input-group-btn:last-child button').click( function() {
        $("#toolbar-search").toggleClass('active');
        $("header#topnav > .toolbar").toggle();
    });

    enquire.register("screen and (max-width: 767px)", {
        unmatch : function() {  //bigscreen
            $("#toolbar-search").removeClass('active');
            $("header#topnav > .toolbar").show();
        }
    });
/* ------------ form validations --------------*/

// ----------------- category -----------------
    $("#createcategoryform").click(function(){
        var errors=0;
        if($("#name").val()==""){
            $("#name").parent().parent().addClass('has-error');
            errors++;
        }
        
        if($("#description").val()==""){
            $("#description").parent().parent().addClass('has-warning');
            
        }
        console.log(errors);
        if(errors>0)
            return false;
        $( "#create_categpry" ).submit();
    });

});
// ------------------------------
// =/D No more D for you.
// ------------------------------


// ------------------------------
// DOM Loaded
// ------------------------------
$(window).bind("load", function() { 
    Utility.animateContent();
    $('body').scrollSidebar();
    $(window).trigger('resize');
});


$(window).scroll(function(){
    Utility.sidebar_resizing();
});

$(window).resize(function(){
    Utility.sidebar_resizing();
});

$.wijets.registerAction( {
    handle: "colorpicker",
    html: '<div class="dropdown"><span class="button-icon has-bg dropdown-toggle" data-toggle="dropdown"><i class="ti ti-palette"></i></span>'+
    '<ul class="panel-color-list dropdown-menu arrow" role="menu">'+
        '<li><span data-style="panel-info"></span></li>'+
        '<li><span data-style="panel-primary"></span></li>'+
        '<li><span data-style="panel-blue"></span></li>'+
        '<li><span data-style="panel-indigo"></span></li>'+
        '<li><span data-style="panel-deeppurple"></span></li>'+
        '<li><span data-style="panel-purple"></span></li>'+
        '<li><span data-style="panel-pink"></span></li>'+
        '<li><span data-style="panel-danger"></span></li>'+
        '<li><span data-style="panel-teal"></span></li>'+
        '<li><span data-style="panel-green"></span></li>'+
        '<li><span data-style="panel-success"></span></li>'+
        '<li><span data-style="panel-lime"></span></li>'+
        '<li><span data-style="panel-yellow"></span></li>'+
        '<li><span data-style="panel-warning"></span></li>'+
        '<li><span data-style="panel-orange"></span></li>'+
        '<li><span data-style="panel-deeporange"></span></li>'+
        '<li><span data-style="panel-midnightblue"></span></li>'+
        '<li><span data-style="panel-bluegray"></span></li>'+
        '<li><span data-style="panel-bluegraylight"></span></li>'+
        '<li><span data-style="panel-black"></span></li>'+
        '<li><span data-style="panel-gray"></span></li>'+
        '<li><span data-style="panel-default"></span></li>'+
        '<li><span data-style="panel-white"></span></li>'+
        '<li><span data-style="panel-brown"></span></li>'+
    '</ul></div>',
    onClick: function () {
    },
    onInit: function () {
        var headerStyle = $(this).getWidgetState('headerStyle');
        if (headerStyle) {
            var widget = $(this).closest('[data-widget]');
            widget.removeClass('panel-info panel-primary panel-blue panel-indigo panel-deeppurple panel-purple panel-pink panel-danger panel-teal panel-green panel-success panel-lime panel-yellow panel-warning panel-orange panel-deeporange panel-midnightblue panel-bluegray panel-bluegraylight panel-black panel-gray panel-default panel-white panel-brown')
                .addClass(headerStyle);
        }
        var button = $(this);
        $(this).find('.dropdown-menu').bind('click', function (e) {
            e.stopPropagation();
        });
        $(this).find('li span').bind('click', function (e) {
            var widget = button.closest('[data-widget]');
            widget.removeClass('panel-info panel-primary panel-blue panel-indigo panel-deeppurple panel-purple panel-pink panel-danger panel-teal panel-green panel-success panel-lime panel-yellow panel-warning panel-orange panel-deeporange panel-midnightblue panel-bluegray panel-bluegraylight panel-black panel-gray panel-default panel-white panel-brown')
                .addClass($(this).attr('data-style'));
            $(button).setWidgetState('headerStyle', $(this).attr('data-style'));
            e.stopPropagation();
        });
    }
});

$.wijets.registerAction( {
  handle: "refresh-demo",
  html: '<span class="button-icon"><i class="ti ti-reload"></i></span>',
  onClick: function () {
  var params = $(this).data('actionParameters');
    var widget = $(this).closest('[data-widget]');
    widget.append('<div class="panel-loading"><div class="panel-loader-' + params.type + '"></div></div>');
    setTimeout( function () {
      widget.find('.panel-loading').remove();
    }, 2000);
  }
});
