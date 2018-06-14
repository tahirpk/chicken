$(document).ready(function(){
    
    $('#alertsdiv').fadeIn(2000);
    $('#alertsdiv').fadeOut(1000);
    
    $('#language_english').click(function () {
        $("#active_language").val('english');
        $(this).tab('show');
    });
    $('#language_arabic').click(function () {
        $("#active_language").val('arabic');
        $(this).tab('show');
    });
    $('#language_russian').click(function () {
        $("#active_language").val('russian');
        $(this).tab('show');
    });
    $("#edit_item_frm").on('submit',(function(e){
        
        e.preventDefault();
        
        $.ajax({
            url: $(this).attr("action"),
            type: "POST",
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data){
                $('#edititemmodal').modal('toggle');
               showpitemlists($("#product_id").val());
               
                
            },
            error: function(){} 	        
        });
    }));
    function reshowcatmedia(id,filetype,url,updatediv){
        editfrm4upload
        $.ajax({
            url: url,
            type: 'get',
            data: {id:id, filetype:filetype},
            success: function(data) {
                $("#"+updatediv).html(data);                    
            }             
        }); 
    }
    $("#service_id").change(function(){
        $("#serviceform").submit();
        //alert($(this).val());
        //console.log($(this).val());
    });
    $("#editfrm4upload").on('submit',(function(e){
        e.preventDefault();
        parentupdateurl = $("#mediapopupurl").val();
        medialistdiv=$("#medialistdiv").val();
        var formurl = $(this).attr("action");
        $.ajax({
            url: $(this).attr("action"),
            type: "POST",
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data){
                $('#uploadimageModal').modal('toggle');
                
                var promourl = formurl.split("admin").pop();
                //console.log(parentupdateurl);
               if(promourl=='/change/promotion/image'){
                   if(data.media_type=='Video'){
                       var pattern = 'admin';
                       var baseurlpath = parentupdateurl.substring(0, parentupdateurl.indexOf(pattern));
                       //console.log(baseurlpath);
                       parentupdateurl=baseurlpath+'admin/videos/promotion';
                       console.log(parentupdateurl);
                   }
               }
                
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
   /* $("#pcatdropdown").change(function(){
        var url = $("#productpageurl").val()+'?cid='+$(this).val();
            window.location.href = url;
        });
       */
   $("#processdownloadfrm").submit(function(){
       $('#downloadModal').modal('toggle');
       $('.loadinginprogress').show();
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
    
    $("#selectallitems").change(function(){
        if($(this).is(':checked')) {
          $('input[name^="deleteitemchk"]').each(function () {          
                $(this).prop('checked', true);
            });
              //      $('input:checkbox').prop('checked',true);
                  
        }else {
            $('input[name^="deleteitemchk"]').each(function () {          
                $(this).prop('checked', false);
            });
                 //   $('input:checkbox').prop('checked',false);
                }  
       
    });
   
    
/* ------------ form validations --------------*/

// ----------------- category -----------------
$("#customersettingbtn").click(function(){
        
        $( "#customersettingfrm" ).submit();
    });
    
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
    
    $('#newfoldername').keyup(function(e){
        if(e.keyCode == 13)
        {
            var foldername = $(this).val();
            var folderpath = $("#folderpath").val();
            
            $.ajax({
            url: $("#createdirurl").val(),
            type: 'get',
            data: {foldername:foldername,folderpath:folderpath },
            success: function(data) {
                if(data=='Directory already exists!'){
                    alert('Directory already exists! Please try with different name.');
                }else{
                    loaddir();
                }
                //console.log(data);
                //$("#customfieldsdiv").html(data);
                
            }
        });
        }
    });
    $("#digitalassetimagebtn").click(function(){
        $("#uploaddigitalassetimageModal").modal('toggle');
    });
    $("#digitalsignageaddmedia").on('submit',(function(e){
        e.preventDefault();
        
        $.ajax({
            url: $(this).attr("action"),
            type: "POST",
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data){
                $('#uploaddigitalassetimageModal').modal('toggle');
                if(data=='done'){
                    $("#statuschangealert").html('Media successfully added to digital signage!');
                    loadmediafordigitalsignage();
                }else if(data=='fail'){
                    
                }
                
                
            },
            error: function(){} 	        
        });
    }));
    $("#youtubedownloadfrm").on('submit',(function(e){
        e.preventDefault();
        $(".loadinginprogress").show();
        $("#utubedownloadModal").modal('toggle');
        //return false;
        $.ajax({
            url: $(this).attr("action"),
            type: "POST",
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data){
                $("#videoformates").html('');
                $("#videoformates").html(data);
                $('#downloadModal').modal('toggle');
                $(".loadinginprogress").hide();
                
                
            },
            error: function(){} 	        
        });
    }));
   
    $('#downloadbtn').click(function(){
       
            var folderpath = $("#folderpath").val();
            var externalurl = $("#externalmediaurl").val();
            if(externalurl!=''){
               $.ajax({
                    url: $("#downloadurl").val(),
                    type: 'get',
                    data: {folderpath:folderpath,externalurl:externalurl.replace('/','___')},
                    success: function(data) {
                        console.log(data);
                        $("#statuschangealert").html(data);
                        loadmediafordigitalsignage();

                        $("#externalmediaurl").val('')

                    }
                }); 
            }else{
                alert('Please provide url to download image');
            }
            
       
    });
    $("#folders").change(function(){
        var folder = $(this).val();
        loadfolderfilestoadd(folder);
    });
    $("#delay").change(function(){
        if( $('input[name^="addedimages"]').length ) {
            $("#durationcache").val(0);
            $('input[name^="addedimages"]').each(function() {
            var duration= parseInt($("#durationcache").val())*1 + parseInt($("#delay").val())*1;
            $("#durationcache").val(duration);
            $("#duration").html(duration+' second');
        });
        }
    });
    $("#getfromutube").click(function(){
        $("#utubedownloadModal").modal('toggle');
        
    });
    $('input[name^="service_slider"]').change(function(){
        var service_id=$("#service_id").val();
        var status =$(this).val();
        
        $.ajax({
            url: $("#sliderstatusurl").val(),
            type: 'get',
            data: {service_id:service_id,status:status },
            success: function(data) {
                
                $('#sliderchange').fadeIn(2000);
                $('#sliderchange').fadeOut(1000);
                
            }
        });
        
    });
    $('#campaignmediatype').change(function(){
        var mtype = $(this).val();
        
        $.ajax({
            url: $("#campaignmediatypeurl").val(),
            type: 'get',
            data: {mtype:mtype },
            success: function(data) {
                $( "#folderimages" ).html("");
                $( "#folderimages" ).html(data);
                $('#alertsdiv').fadeIn(2000);
                $('#alertsdiv').fadeOut(1000);
                //loadmediafordigitalsignage();
                
            }
        });
    });
  
});

/***********
     * Custom Functions
     */
    
    function addcmedia(id){
        var folderpath = $("#folders").val();
       // addedimages
       
        $.ajax({
            url: $("#addtocampaign").val(),
            type: 'get',
            data: {id:id },
            success: function(data) {
                $( "#selectedmediafiles" ).append(data);
                $("#durationcache").val(0);
                $('input[name^="addedimages"]').each(function() {
                   var duration= parseInt($("#durationcache").val())*1 + parseInt($("#delay").val())*1;
                   $("#durationcache").val(duration);
                   $("#duration").html(duration+' second');
                });
                $('#alertsdiv').fadeIn(2000);
                $('#alertsdiv').fadeOut(1000);
                
            }
        });
    }
    function deletefromcmedia(id){
        if (confirm('Are you sure? you want to delete this element?')) {
            $('#'+id+"").remove();
        }else{
            return false;
        }
    }
    function addfolder(){
        var foldername = $('#newfoldername').val();
            var folderpath = $("#folderpath").val();
            
            $.ajax({
            url: $("#createdirurl").val(),
            type: 'get',
            data: {foldername:foldername,folderpath:folderpath },
            success: function(data) {
                if(data=='Directory already exists!'){
                    alert('Directory already exists! Please try with different name.');
                }else{
                    
                    loaddir();
                    $('#newfoldername').val('');
                }
                //console.log(data);
                //$("#customfieldsdiv").html(data);
                
            }
        });
    }
    function deleteimg4slider(id){
        if (confirm('Are you sure? you want to delete this element?')) {
           $('#'+id+"").remove();
        if ( $( ".vduration" ).length ){
                    $("#durationcache").val(0);
                    $('input[name^="vduration"]').each(function() {
                       var duration= parseInt($("#durationcache").val()) + parseInt($(this).val());
                       
                       $("#durationcache").val(duration);
                       var hours = Math.floor(parseInt(duration) / 3600);
                       var minutes = Math.floor(parseInt(duration) / 60);
                       var seconds = Math.floor(parseInt(duration) %60);
                       $("#duration").html(parseInt(hours)+':'+minutes+':'+seconds);
                    });
                }else{
                    $("#durationcache").val(0);
                    $('input[name^="addedimages"]').each(function() {
                       var duration= parseInt($("#durationcache").val())*1 + parseInt($("#delay").val())*1;
                       $("#durationcache").val(duration);
                       var hours = Math.floor(parseInt(duration) / 3600);
                       var minutes = Math.floor(parseInt(duration) / 60);
                       var seconds = Math.floor(parseInt(duration) %60);
                       $("#duration").html(parseInt(hours)+':'+minutes+':'+seconds);
                       $("#duration").html(duration+' second');
                    });
                }
        } else {
            return false;
        }
        
        
    }
    function getTime(seconds) {

    //a day contains 60 * 60 * 24 = 86400 seconds
    //an hour contains 60 * 60 = 3600 seconds
    //a minut contains 60 seconds
    //the amount of seconds we have left
    var leftover = parseInt(seconds);

    

    //how many full hours fits in the amount of leftover seconds
    var hours = Math.floor(leftover / 3600);

    //how many seconds are left
    leftover = leftover - (hours * 3600);

    //how many minutes fits in the amount of leftover seconds
    var minutes = leftover / 60;

    //how many seconds are left
    //leftover = leftover - (minutes * 60);
   return hours + ':' + minutes + ':' + leftover;
}
    function addimg(image){
        var folderpath = $("#folders").val();
       // addedimages
       
        $.ajax({
            url: $("#loadmedia4addtoslider").val(),
            type: 'get',
            data: {folderpath:folderpath,image:image },
            success: function(data) {
                $( "#selectedmediafiles" ).append(data);
                $("#durationcache").val(0);
                if ( $( ".vduration" ).length ){
                    $('input[name^="vduration"]').each(function() {
                       var duration= parseInt($("#durationcache").val()) + parseInt($(this).val());
                       
                       $("#durationcache").val(duration);
                       var hours = Math.floor(parseInt(duration) / 3600);
                       var minutes = Math.floor(parseInt(duration) / 60);
                       var seconds = Math.floor(parseInt(duration) %60);
                       $("#duration").html(parseInt(hours)+':'+minutes+':'+seconds);
                    });
                }else{
                    $('input[name^="addedimages"]').each(function() {
                       var duration= parseInt($("#durationcache").val())*1 + parseInt($("#delay").val())*1;
                       $("#durationcache").val(duration);
                       var hours = Math.floor(parseInt(duration) / 3600);
                       var minutes = Math.floor(parseInt(duration) / 60);
                       var seconds = Math.floor(parseInt(duration) %60);
                       $("#duration").html(parseInt(hours)+':'+minutes+':'+seconds);
                      
                    });
                }
                $('#alertsdiv').fadeIn(2000);
                $('#alertsdiv').fadeOut(1000);
                
            }
        });
    }
    function deletedirectory(image){
        if (confirm('All files and subdirectories will be delete by proceeding this command, are you sure to delete it?')) {
            var folderpath = $("#folderpath").val();
            $.ajax({
                url: $("#deletefolderurl").val(),
                type: 'get',
                data: {folderpath:folderpath,image:image },
                success: function(data) {
                    
                    $('#directorydelnotification').fadeIn(2000);
                    $('#directorydelnotification').fadeOut(1000);
                    loaddir();

                }
            });
        }else{
            return false;
        }
        
    }
    function deleteimg(image){
        if (confirm('Are you sure? you want to delete this element?')) {
            var folderpath = $("#folderpath").val();
            $.ajax({
                url: $("#deletemediaurl").val(),
                type: 'get',
                data: {folderpath:folderpath,image:image },
                success: function(data) {
                    $( "#digitalsignageimges" ).html("");
                    $( "#digitalsignageimges" ).html(data);
                    $('#alertsdiv').fadeIn(2000);
                    $('#alertsdiv').fadeOut(1000);
                    loadmediafordigitalsignage();

                }
            });
        }else{
            return false;
        }
        
    }
    function loadfolderfilestoadd(folderpath){
       
        $.ajax({
            url: $("#loadmedia4signageurl").val(),
            type: 'get',
            data: {folderpath:folderpath },
            success: function(data) {
                $( "#folderimages" ).html("");
                $( "#folderimages" ).html(data);
                $('#alertsdiv').fadeIn(2000);
                $('#alertsdiv').fadeOut(1000);
                
            }
        });
    }
    function loadmediafordigitalsignage(){
        var folderpath = $("#folderpath").val();
        $.ajax({
            url: $("#loadmedia4signageurl").val(),
            type: 'get',
            data: {folderpath:folderpath },
            success: function(data) {
                $( "#digitalsignageimges" ).html("");
                $( "#digitalsignageimges" ).html(data);
                $('#alertsdiv').fadeIn(2000);
                $('#alertsdiv').fadeOut(1000);
                
            }
        });
    }
    function loaddir(){
        var folderpath = $("#folderpath").val();
        $.ajax({
            url: $("#loaddirurl").val(),
            type: 'get',
            data: {folderpath:folderpath },
            success: function(data) {
                $( ".folders" ).remove();
                $( data).insertBefore( $( "#addfolderbtn" ) );
                $("#newfolder").show();
                //$("#newfoldername").hide();
                
            }
        });
    }
    function enablenewfolder(){
       
        $("#newfoldername").val('');
        $("#newfoldername").show();
    }
    function ajaxcustomfieelds(moduleid,thiscat, modulename,objectfor, modulefor){
        //console.log($("#customfieldsurl").val()) ;
        //console.log('moduleid:'+moduleid+'_cid:'+$("#pcatdropdown").val()+'_modulename:'+modulename+'_objectfor:'+objectfor+'_modulefor:'+modulefor);
        //return false;
        var catid= thiscat.value;
        $.ajax({
            url: $("#customfieldsajaxurl").val(),
            type: 'get',
            data: {moduleid:moduleid,cid:catid,modulename:modulename,objectfor:objectfor,modulefor:modulefor },
            success: function(data) {
                console.log(data);
                $("#customfieldsdiv").html(data);
                
            }
        });
    }
    
    function updatestatus(id){
    
    $.ajax({
            url: $("#updatestatusurl").val(),
            type: 'get',
            data: {id:id },
            success: function(data) {
                $('#statuschangealert').fadeIn(2000);
                $('#statuschangealert').fadeOut(1000);
                $("#status"+id).html(data)
            }
        });
}

function updateostatus(id){
    var status = $('#status'+id).val();
    $.ajax({
            url: $("#updatestatusurl").val(),
            type: 'get',
            data: {id:id,status:status },
            success: function(data) {
                alert('Status has been changed successfully!');
               // $("#status"+id).html(data)
            }
        });
}
function removeextra(name, divid, displayname, fieldtype, defaultvalues, fielddatatype){
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
    var confir = confirm("Are you sure! you want to delete this extra field permanently in all sub service and products?");
    if (confir == true) {
            $.ajax({
                url: $("#extradelurl").val(),
                type: 'get',
                data: {module_id:module_id,object_id:object_id,namevar:namevar },
                success: function(data) {
                    
                    if(data=='success'){
                        $("#"+divid).remove();
                        $("#"+modulenam+"_customfieldmessage").html(('Field successfully removed for ')+modulenam);
                        $("#"+modulenam+"_customfieldmessage").fadeIn(2000);
                        $("#"+modulenam+"_customfieldmessage").fadeOut(1000);
                       
                    }else{
                        
                    }
                    
                     
                }
            });
        } else {
            
            return false;
        }
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
                                        '<a href="javascript:;" onclick=addextra("custom_name_'+modulenam+'_'+id+'","custom_display_name_'+modulenam+'_'+id+'","custom_fieldtype_'+modulenam+'_'+id+'","custom_default_'+modulenam+'_'+id+'","custom_datatype_'+modulenam+'_'+id+'") id="add_btn_'+modulenam+'_'+id+'" ><img src="'+$('#addsm').val()+'" /></a><a href="javascript:;" id="del_btn_'+modulenam+'_'+id+'" style="display:none" onclick=removeextra("custom_name_'+modulenam+'_'+id+'","'+modulenam+'_'+id+'","custom_display_name_'+modulenam+'_'+id+'","custom_fieldtype_'+modulenam+'_'+id+'","custom_default_'+modulenam+'_'+id+'","custom_datatype_'+modulenam+'_'+id+'") id="del_btn_'+modulenam+'_'+id+'" ><img src="'+$('#delred').val()+'" /></a>'+
                                    '</td>'+
                                '</tr>';
                        $('#add_btn_'+modulenam+'_'+oldid+'').hide();
                        $('#del_btn_'+modulenam+'_'+oldid+'').show();
                      $( html ).insertAfter( $( "#"+modulenam+"_"+oldid ) ); 
                      $("#"+modulenam+"_customfieldmessage").html((obj.message)+modulenam);
                      $("#"+modulenam+"_customfieldmessage").fadeIn(2000);
                        $("#"+modulenam+"_customfieldmessage").fadeOut(1000);
                        
                    }else{
                        $("#"+modulenam+"_customfieldmessage").html(obj.message+modulenam);
                        
                        $("#"+modulenam+"_customfieldmessage").fadeIn(2000);
                        $("#"+modulenam+"_customfieldmessage").fadeOut(1000);
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
    $("#object_id").val(id);
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
function assignvaluestocfields(){
     //var valuesform = Array();
     $("#custom_datatype_"+$("#assigntoid").val()).val('');
        $('input[name^="multivalues"]').each(function() {
            if($(this).val()!=''){
                if($("#custom_datatype_"+$("#assigntoid").val()).val()==''){
                    $("#custom_datatype_"+$("#assigntoid").val()).val($(this).val());
                }else{
                    $("#custom_datatype_"+$("#assigntoid").val()).val($("#custom_datatype_"+$("#assigntoid").val()).val()+','+$(this).val());
                }
                
            }
        
        });
      $("#customextravalmodal").modal('toggle');
}
function multivalassign(id){
    $("#assigntoid").val(id);
    if($("#custom_fieldtype_"+id).val()!='text'){
        $('input[name^="multivalues"]').each(function(i) {
            
            var existingvals= $('#custom_datatype_'+$("#assigntoid").val()+'').val();
          //  alert(existingvals);
            var arrayv = existingvals.split(',');
          
            if(i<arrayv.length){
                $(this).val(arrayv[i]);
            }else{
                $(this).val('');
            }
            
        });
        $("#customextravalmodal").modal('toggle');
       
    }
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
function updateitems(id,pid){
    $("#item_id").val(id);
    if(pid=="0"){
        pid = $("#object_id").val();
    }
    $("#product_id").val(pid);
    
    $.ajax({
                url: $("#itemediturl").val(),
                type: 'get',
                data: {id:id,pid:pid},
                success: function(data) {
                    $("#name0").val(data.name);
                    $("#price0").val(data.price);
                    $("#short_discription0").val(data.short_description);
                    var imagepath = $("#itemimagepath").val();
                    $("#iimage0").attr('src', imagepath+'/'+data.image);
                    if(data.image!=''){
                        $("#iimage0").show();
                    }
                    
                    $('#edititemmodal').modal('toggle');
                    
                }
            });
}
function showpitemlists(id){
    
    $.ajax({
                url: $("#itemspopupurl").val(),
                type: 'get',
                data: {id:id},
                success: function(data) {
                    $("#productitems").html(data); 
                    //$('#itemsmodel').modal('toggle');
                    
                }
            });
}
function showitems(id){
    $("#object_id").val(id);
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
function removethisitem(id){
    
    $( "div" ).remove( "#itemgroups"+id );
}
function moreitems(id){
    var valu = id*1+1;
    $("#addmore"+id).hide();
    $("#removeit"+id).show();
    var iconpath=$("#iconimgpath").val();
    var newdiv = '<div class="col-sm-12 bbottom pm00" id="itemgroups'+valu+'">'+
            '<div class="form-group col-xs-12 ">'+
                            '<div class="col-xs-1 pm00">'+
                                '<div class="col-xs-12 ptop5 aleft pm00"><label class="form-label">Name<span class="error pm00">*</span></label></div>'+
                            '</div>'+
                            '<div class="controls col-xs-2 ">'+
                                '<input type="text" class="form-control" value="" id="name'+valu+'" name="name['+valu+']" placeholder="Name" required="" />'+
                            '</div>'+
                            '<div class="col-xs-1 pm00">'+
                                '<div class="col-xs-12 ptop5 aleft pm00"><label class="form-label">Description<span class="error pm00">*</span></label></div>'+
                            '</div>'+
                            '<div class="controls col-xs-3 ">'+
                                '<input type="text" id="short_discription'+valu+'" name="short_discription['+valu+']" value="" class="form-control" />'+
                            '</div>'+
                            '<div class="col-xs-1 pm00">'+
                                '<div class="col-xs-12 ptop5 aleft pm00"><label class="form-label">Price<span class="error pm00">*</span></label></div>'+
                            '</div>'+
                            '<div class="controls col-xs-1 ">'+
                                '<input type="text" class="form-control" value="" id="price'+valu+'" name="price['+valu+']" placeholder="Price" required="" />'+
                            '</div>'+
                            '<div class="controls col-xs-1 ">'+
                            
                                                ' <input id="item_image'+valu+'" name="item_image['+valu+']" placeholder="Picture" type="file"  />'+
                                            
                            '</div>'+
                            
                            '<div class="controls col-xs-1 ">'+
                               ' <a href="javascript:;" onclick="moreitems('+valu+')" id="addmore'+valu+'" class="tabtoprightlink margin2" rel="tooltip" data-color-class="primary" data-animate=" animated fadeIn" data-toggle="tooltip" data-original-title="Click to add extra item" data-placement="top"><img src="'+iconpath+'/add.png" /></a>  <a onclick="removethisitem('+valu+')" href="javascript:;" class="tabtoprightlink margin2" rel="tooltip" data-color-class="primary" data-animate=" animated fadeIn" data-toggle="tooltip" data-original-title="Click to remove extra item" data-placement="top" style="display:none" id="removeit'+valu+'"><img src="'+iconpath+'/delred.png" /></a>'+
                                    '    </div>'
                                   ' </div>'+
                                    
                            
                                        
                                            '</div>';
    $( newdiv ).insertAfter( $( "#itemgroups"+id ) );
}
function removeitem(id){
    $( "div" ).remove( "#itemgroups"+id );
}
function addmoreimages(id, adtype='category'){
    var title='Service Category BG Image';
    if(adtype=='product'){
        title='Product Image';
    }
    var valu = id*1+1;
    $("#addmore"+id).hide();
    $("#removeit"+id).show();
    
    
    var moreimage = '<div class="form-group col-xs-12 " id="pimage'+valu+'">'+
                                    
                                    '<div class="col-xs-3 ">'+
                                            '<label class="form-label">'+title+'</label>'+
                                            
                                        '</div>'+
                                    '<div class="controls col-sm-7">'+
                                    '<div class="col-xs-7 "><input id="image'+valu+'" name="image[]" type="file" /></div>'+
                                    '<div class="col-xs-5 pull-right"><span class="desc aleft">Hint: "Allowed types JPG, GIF, PNG"</span></div>'+
                                    '</div>'+
                                    '<div class="col-sm-2"><a href="javascript:;" onclick=addmoreimages("'+valu+'","'+adtype+'") id="addmore'+valu+'">Add More</a>  <a style="display:none" onclick="removethisimage('+valu+')" href="javascript:;" id="removeit'+valu+'">Remove</a></div>'+
                                    
                                '</div>';
                        
    
    $( moreimage ).insertAfter( $( "#pimage"+id ) );
}
function addmoreimages_old(id, adtype='category'){
    var title='Service Category BG Image';
    if(adtype=='product'){
        title='Product Image';
    }
    var valu = id*1+1;
    $("#addmore"+id).hide();
    $("#removeit"+id).show();
    var moreimage = '<div class="form-group col-xs-12 " id="pimage'+valu+'">'+
                                    
                                    '<div class="col-xs-2 ">'+
                                            '<div class="col-xs-12 aleft"><label class="form-label">'+title+'</label></div>'+
                                            '<div class="col-xs-12 aleft"><span class="desc aleft">Hint: "Allowed types JPG, GIF, PNG"</span></div>'+
                                        '</div>'+
                                    '<div class="controls col-sm-6">'+
                                    '<div class="col-xs-12 ">'+
                                        
                                                ' <input id="image'+valu+'" name="image[]" type="file" />'+
                                            
                                        '</div>'+
                                    '</div>'+
                                    '<div class="col-sm-2"><a href="javascript:;" onclick="addmoreimages('+valu+')" id="addmore'+valu+'">Add More</a>  <a style="display:none" onclick="removethisimage('+valu+')" href="javascript:;" id="removeit'+valu+'">Remove</a></div>'+
                                    '<div class="col-sm-2"></div>'+
                                '</div>';
                        
    
    $( moreimage ).insertAfter( $( "#pimage"+id ) );
}
function removethisvideo(id){
    
    $( "div" ).remove( "#pvideo"+id );
}
function addmorevideos(id,adtype='category'){
    var title='Service Category Video';
    if(adtype=='product'){
        title='Product Image';
    }
    var valu = id*1+1;
    $("#addmorev"+id).hide();
    $("#removeitv"+id).show();
    
   var addmorevideo = '<div class="form-group col-xs-12 " id="pvideo'+valu+'">'+
                                    
                                    '<div class="col-xs-2 ">'+
                                            '<div class="col-xs-12 aleft"><label class="form-label">'+title+'</label></div>'+
                                            '<div class="col-xs-12 aleft"><span class="desc aleft">Hint: "Allowed types MPG4, MP, FLV, MP4"</span></div>'+
                                        '</div>'+
                                    '<div class="controls col-sm-6">'+
                                    '<div class="col-xs-12 ">'+
                                        
                                                ' <input id="video'+valu+'" name="video[]" placeholder="Video" type="file" />'+
                                            
                                        '</div>'+
                                    '</div>'+
                                    '<div class="col-sm-2"><a href="javascript:;" onclick="addmorevideos('+valu+')" id="addmorev'+valu+'">Add More</a>  <a style="display:none" onclick="removethisvideo('+valu+')" href="javascript:;" id="removeitv'+valu+'">Remove</a></div>'+
                                    '<div class="col-sm-2"></div>'+
                                '</div>';
    $( addmorevideo ).insertAfter( $( "#pvideo"+id ) );
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

/*****************
 * End custom functions
 */