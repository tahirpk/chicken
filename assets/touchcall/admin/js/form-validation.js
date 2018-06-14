$(document).ready(function() {


    if ($.isFunction($.fn.validate)) {
        
        
        $('#register_user').validate({
            focusInvalid: false,
            ignore: "",
            rules: {
                name: {
                    minlength: 5,
                    required: true
                },
                username: {
                   minlength: 5,
                    required: true
                },
                email: {
                   minlength: 5,
                    required: true,
                    
                },
                password: {
                   minlength: 5,
                    required: true,
                    
                },
                password_confirmation: {
                   minlength: 5,
                    required: true,
                    equalTo: "#password"
                },
                /*mainimage: {
                   // minlength: 5,
                    required: true
                }*/
            },
            invalidHandler: function(event, validator) {
                //display error alert on form submit    
            },

            errorPlacement: function(label, element) { // render error placement for each input type   
                console.log(label);
                $('<span class="error"></span>').insertAfter(element).append(label)
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
            },

            highlight: function(element) { // hightlight error inputs
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
               // alert('highlight');
            },

            unhighlight: function(element) { // revert the change done by hightlight
        
            },

            success: function(label, element) {
                
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-error').addClass('has-success');
                //alert('success');
            },

            submitHandler: function(form) {
                $('.loadinginprogress').show();
              form.submit();
            }
        });
         $('#change_profile').validate({
            focusInvalid: false,
            ignore: "",
            rules: {
                name: {
                    minlength: 5,
                    required: true
                },
                email: {
                   minlength: 5,
                    required: true
                },
                password: {
                   minlength: 5,
                    required: true,
                    
                },
                /*mainimage: {
                   // minlength: 5,
                    required: true
                }*/
            },
            messages:{
                password: "Please type your password for verification if you are valid user"
            },
            invalidHandler: function(event, validator) {
                //display error alert on form submit    
            },

            errorPlacement: function(label, element) { // render error placement for each input type   
                console.log(label);
                $('<span class="error"></span>').insertAfter(element).append(label)
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
            },

            highlight: function(element) { // hightlight error inputs
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
               // alert('highlight');
            },

            unhighlight: function(element) { // revert the change done by hightlight
        
            },

            success: function(label, element) {
                
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-error').addClass('has-success');
                //alert('success');
            },

            submitHandler: function(form) {
                $('.loadinginprogress').show();
              form.submit();
            }
        });
        $('#change_pass').validate({
            focusInvalid: false,
            ignore: "",
            rules: {
                old_password: {
                    minlength: 5,
                    required: true
                },
                password: {
                   minlength: 5,
                    required: true
                },
                confirm_password: {
                   minlength: 5,
                    required: true,
                    equalTo: "#password"
                },
                /*mainimage: {
                   // minlength: 5,
                    required: true
                }*/
            },
            invalidHandler: function(event, validator) {
                //display error alert on form submit    
            },

            errorPlacement: function(label, element) { // render error placement for each input type   
                console.log(label);
                $('<span class="error"></span>').insertAfter(element).append(label)
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
            },

            highlight: function(element) { // hightlight error inputs
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
               // alert('highlight');
            },

            unhighlight: function(element) { // revert the change done by hightlight
        
            },

            success: function(label, element) {
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-error').addClass('has-success');
                //alert('success');
            },

            submitHandler: function(form) {
              form.submit();
            }
        });
        $('#change_u_pass').validate({
            focusInvalid: false,
            ignore: "",
            rules: {
                
                password: {
                   minlength: 5,
                    required: true
                },
                confirm_password: {
                   minlength: 5,
                    required: true,
                    equalTo: "#password"
                },
                /*mainimage: {
                   // minlength: 5,
                    required: true
                }*/
            },
            invalidHandler: function(event, validator) {
                //display error alert on form submit    
            },

            errorPlacement: function(label, element) { // render error placement for each input type   
                console.log(label);
                $('<span class="error"></span>').insertAfter(element).append(label)
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
            },

            highlight: function(element) { // hightlight error inputs
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
               // alert('highlight');
            },

            unhighlight: function(element) { // revert the change done by hightlight
        
            },

            success: function(label, element) {
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-error').addClass('has-success');
                //alert('success');
            },

            submitHandler: function(form) {
              form.submit();
            }
        });
        $('#create_knowledge').validate({
            focusInvalid: false,
            ignore: "",
            rules: {
                name: {
                    //minlength: 5,
                    required: function(element) {
                                if($("#active_language").val()=='english')
                                    return true;
                                else
                                    return false
                                  }
                },
                name_ar: {
                    //minlength: 5,
                    required: function(element) {
                                if($("#active_language").val()=='arabic')
                                    return true;
                                else
                                    return false
                                  }
                },
                name_ru: {
                    //minlength: 5,
                    required: function(element) {
                                if($("#active_language").val()=='russian')
                                    return true;
                                else
                                    return false
                                  }
                },
                parent_id: {
                   // minlength: 5,
                    required: true
                },
                
            },
            invalidHandler: function(event, validator) {
                //display error alert on form submit    
            },

            errorPlacement: function(label, element) { // render error placement for each input type   
                console.log(label);
                $('<span class="error"></span>').insertAfter(element).append(label)
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
            },

            highlight: function(element) { // hightlight error inputs
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
               // alert('highlight');
            },

            unhighlight: function(element) { // revert the change done by hightlight
        
            },

            success: function(label, element) {
                
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-error').addClass('has-success');
                //alert('success');
            },

            submitHandler: function(form) {
                $('.loadinginprogress').show();
              form.submit();
            }
        });
        $('#create_knowledge_category').validate({
            focusInvalid: false,
            ignore: "",
            rules: {
                name: {
                    //minlength: 5,
                    required:  function(element) {
                                if($("#active_language").val()=='english')
                                    return true;
                                else
                                    return false
                                  }
                },
                name_ar: {
                    //minlength: 5,
                    required:  function(element) {
                                if($("#active_language").val()=='arabic')
                                    return true;
                                else
                                    return false
                                  }
                },
                name_ru: {
                    //minlength: 5,
                    required:  function(element) {
                                if($("#active_language").val()=='russian')
                                    return true;
                                else
                                    return false
                                  }
                },
            },
            invalidHandler: function(event, validator) {
                //display error alert on form submit    
            },

            errorPlacement: function(label, element) { // render error placement for each input type   
                console.log(label);
                $('<span class="error"></span>').insertAfter(element).append(label)
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
            },

            highlight: function(element) { // hightlight error inputs
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
               // alert('highlight');
            },

            unhighlight: function(element) { // revert the change done by hightlight
        
            },

            success: function(label, element) {
                
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-error').addClass('has-success');
                //alert('success');
            },

            submitHandler: function(form) {
                $('.loadinginprogress').show();
              form.submit();
            }
        });
        $('#create_asset').validate({
            focusInvalid: false,
            ignore: "",
            rules: {
                title: {
                    //minlength: 5,
                    required: true
                },
                device_key: {
                    //minlength: 5,
                    required: true
                },
                floor_no: {
                    //minlength: 5,
                    required: true
                },
                room_no: {
                    //minlength: 5,
                    required: true
                },
                targeted_ip: {
                    //minlength: 5,
                    required: true
                },
                started_at: {
                    //minlength: 5,
                    required: true
                },
            },
            invalidHandler: function(event, validator) {
                //display error alert on form submit    
            },

            errorPlacement: function(label, element) { // render error placement for each input type   
                console.log(label);
                $('<span class="error"></span>').insertAfter(element).append(label)
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
            },

            highlight: function(element) { // hightlight error inputs
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
               // alert('highlight');
            },

            unhighlight: function(element) { // revert the change done by hightlight
        
            },

            success: function(label, element) {
                
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-error').addClass('has-success');
                //alert('success');
            },

            submitHandler: function(form) {
                $('.loadinginprogress').show();
              form.submit();
            }
        });
        $('#create_product').validate({
            focusInvalid: false,
            ignore: "",
            rules: {
                
                product_name: {
                    
                    required: function(element) {
                                if($("#active_language").val()=='english')
                                    return true;
                                else
                                    return false
                                  }
                },
                parent_id: {
                   // minlength: 5,
                    required: true
                },
               
                product_price: {
                   // minlength: 5,
                    required: true
                },
               
                product_short_discription: {
                   // minlength: 5,
                    required: function(element) {
                                if($("#active_language").val()=='english')
                                    return true;
                                else
                                    return false
                                  }
                },
                product_name_ar: {
                    
                    required: function(element) {
                                if($("#active_language").val()=='arabic')
                                    return true;
                                else
                                    return false
                                  }
                },
                
                product_short_discription_ar: {
                   // minlength: 5,
                    required: function(element) {
                                if($("#active_language").val()=='arabic')
                                    return true;
                                else
                                    return false
                                  }
                },
                product_name_ru: {
                    
                    required: function(element) {
                                if($("#active_language").val()=='russian')
                                    return true;
                                else
                                    return false
                                  }
                },
                
                product_short_discription_ru: {
                   // minlength: 5,
                    required: function(element) {
                                if($("#active_language").val()=='russian')
                                    return true;
                                else
                                    return false
                                  }
                },
                "image[]": { required:function(element) {
                                if($("#imageesist").val()=='Yes')
                                    return false;
                                else
                                    return true;
                                  }, accept: "jpg|jpeg|png|gif" }
                
            },
            invalidHandler: function(event, validator) {
                //display error alert on form submit    
            },

            errorPlacement: function(label, element) { // render error placement for each input type   
                console.log(label);
                $('<span class="error"></span>').insertAfter(element).append(label)
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
            },

            highlight: function(element) { // hightlight error inputs
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
               // alert('highlight');
            },

            unhighlight: function(element) { // revert the change done by hightlight
        
            },

            success: function(label, element) {
                
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-error').addClass('has-success');
                unsaved=false;
            },

            submitHandler: function(form) {
                $('.loadinginprogress').show();
              if($("#id").length){
                       form.submit();
                   }
              var name = $('.removeduplication').val();
                var module = $("#modulename").val();
                var isduplicatev =checkduplicate(name,module);
                isduplicatev.success(form,function (data) {
                   // alert(form);
                            if(data=='yes'){
                                var parent = $('.removeduplication').parent().parent('.form-group');
                                parent.removeClass('has-success').addClass('has-error');
                                $( ".removeduplication" ).attr( "aria-invalid", "true" );
                                $('#'+$( ".removeduplication" ).attr( "id")+'-error').text('Campaign already exists, Please try again after changing campaign title!');
                        $('.loadinginprogress').hide();        
                        return false;
                            }else{
                                form.submit();
                            }
                          });
            }
        });
        $('#create_promotion').validate({
            focusInvalid: false,
            ignore: "",
            rules: {
                title: {
                    
                    required: true
                },
                delay: {
                    
                    required: true
                },
                transition_effects: {
                   // minlength: 5,
                    required: true
                },
               
                status: {
                   // minlength: 5,
                    required: true
                },
                media_type: {
                   // minlength: 5,
                    required: true
                },
                
                
            },
            invalidHandler: function(event, validator) {
                //display error alert on form submit    
            },

            errorPlacement: function(label, element) { // render error placement for each input type   
                console.log(label);
                $('<span class="error"></span>').insertAfter(element).append(label)
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
            },

            highlight: function(element) { // hightlight error inputs
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
               // alert('highlight');
            },

            unhighlight: function(element) { // revert the change done by hightlight
            
            },

            success: function(label, element) {
                
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-error').addClass('has-success');
                
            },

            submitHandler: function(form) {
               $('.loadinginprogress').show();
              var name = $('.removeduplication').val();
                var module = $("#modulename").val();
                var isduplicatev =checkduplicate(name,module);
                isduplicatev.success(form,function (data) {
                   // alert(form);
                   
                            if(data=='yes'){
                                var parent = $('.removeduplication').parent().parent('.form-group');
                                
                                if($("#id").length){
                                    
                                }else{
                                    parent.removeClass('has-success').addClass('has-error');
                                $( ".removeduplication" ).attr( "aria-invalid", "true" );
                                $('#'+$( ".removeduplication" ).attr( "id")+'-error').text('Campaign already exists, Please try again after changing slider title!');
                            $('.loadinginprogress').hide();        
                            return false;
                                }
                            }
                            if($('input[name^="addedimages"]').length>0){
                                    
                                }else{
                                    alert('Please add atleast one image to slider!');
                                    $('.loadinginprogress').hide();
                                    return false;
                                }
                                //
                            
                            form.submit();
                          });
            }
        });
        $('#add_currency_new').validate({
            focusInvalid: false,
            ignore: "",
            rules: {
                field_name: {
                    nowhitespace: true,
                    required: true,
                   // noSpace: true
                },
                display_name: {
                    
                    required: true
                },
                currency_name: {
                   // minlength: 5,
                    required: true
                },
               
                currency_code: {
                   // minlength: 5,
                    required: true
                },
                conversion_rate: {
                   // minlength: 5,
                    required: true
                },
                
                
            },
            invalidHandler: function(event, validator) {
                //display error alert on form submit    
            },

            errorPlacement: function(label, element) { // render error placement for each input type   
                console.log(label);
                $('<span class="error"></span>').insertAfter(element).append(label)
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
            },

            highlight: function(element) { // hightlight error inputs
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
               // alert('highlight');
            },

            unhighlight: function(element) { // revert the change done by hightlight
        
            },

            success: function(label, element) {
                
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-error').addClass('has-success');
                //alert('success');
            },

            submitHandler: function(form) {
                $('.loadinginprogress').show();
                var token= $("#ctoken").val();
               var parent_id= $("#parent_id").val();
                var field_name= $("#field_name").val();
                var display_name= $("#display_name").val();
                var currency_name= $("#currency_name").val();
                var currency_code= $("#currency_code").val();
                var conversion_rate= $("#conversion_rate").val();
                $.ajax({
                    url: $("#currencycreteurl").val(),
                    type: 'post',
                    data: {_token:token,parent_id:parent_id, field_name:field_name, display_name:display_name, currency_name:currency_name, currency_code:currency_code, conversion_rate },
                    success: function(data) {
                        if(data=='2'){
                            $('.loadinginprogress').hide();
                            $("#currencymessage").html('Please change field name, filed name already exist');
                            
                            return false;
                        }else if(data=='1'){
                            location.reload();
                        }else{
                            $("#currencymessage").html('Sorry! saving new currency process fail, please try again.');
                        }

                    }
                });
                $('.loadinginprogress').hide();
                return false;
            }
        });
        $('#create_playlist').validate({
            focusInvalid: false,
            ignore: "",
            rules: {
                title: {
                    
                    required: true
                },
                
                media_type: {
                   // minlength: 5,
                    required: true
                },
                
                
            },
            invalidHandler: function(event, validator) {
                //display error alert on form submit    
            },

            errorPlacement: function(label, element) { // render error placement for each input type   
                //console.log(label);
                $('<span class="error"></span>').insertAfter(element).append(label)
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
            },

            highlight: function(element) { // hightlight error inputs
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
               // alert('highlight');
            },

            unhighlight: function(element) { // revert the change done by hightlight
        
            },

            success: function(label, element) {
                
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-error').addClass('has-success');
                unsaved=false;
            },

            submitHandler: function(form) {
                $('.loadinginprogress').show();
              var name = $('.removeduplication').val();
                var module = $("#modulename").val();
                var isduplicatev =checkduplicate(name,module);
                isduplicatev.success(form,function (data) {
                   // alert(form);
                            if(data=='yes'){
                                var parent = $('.removeduplication').parent().parent('.form-group');
                                
                                if($("#id").length){
                                    
                                }else{
                                    parent.removeClass('has-success').addClass('has-error');
                                $( ".removeduplication" ).attr( "aria-invalid", "true" );
                                $('#'+$( ".removeduplication" ).attr( "id")+'-error').text('Campaign already exists, Please try again after changing campaign title!');
                            $('.loadinginprogress').hide();        
                            return false;
                                }
                                
                            }
                                if($('input[name^="addedimages"]').length>0){
                                    
                                }else{
                                    alert('Please add atleast one video to playlist!');
                                    $('.loadinginprogress').hide();
                                    return false;
                                }
                                //
                            
                            form.submit();
                          });
            }
        });
        $('#create_campaign').validate({
            focusInvalid: false,
            ignore: "",
            rules: {
                title: {
                    required: true
                    
                },
                status: {
                    required: true
                },
                start_date: {
                    required: true
                },
                end_date: {
                    required: true
                },
                
                
                
            },
            invalidHandler: function(event, validator) {
                //display error alert on form submit    
            },

            errorPlacement: function(label, element) { // render error placement for each input type   
               // console.log(element);
                $('<span class="error"></span>').insertAfter(element).append(label)
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
            },

            highlight: function(element) { // hightlight error inputs
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
               // alert('highlight');
            },

            unhighlight: function(element) { // revert the change done by hightlight
        
            },

            success: function(label, element) {
                //unsaved=false;
                //$("#isduplicate").val('no')
                
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-error').addClass('has-success');
                //alert('success');
            },

            submitHandler: function(form) {
                $('.loadinginprogress').show();
                var name = $('.removeduplication').val();
                var module = $("#modulename").val();
                var isduplicatev =checkduplicate(name,module);
                isduplicatev.success(form,function (data) {
                   // alert(form);
                        if(data=='yes'){
                                var parent = $('.removeduplication').parent().parent('.form-group');
                                
                                if($("#id").length){
                                    
                                }else{
                                    parent.removeClass('has-success').addClass('has-error');
                                $( ".removeduplication" ).attr( "aria-invalid", "true" );
                                $('#'+$( ".removeduplication" ).attr( "id")+'-error').text('Campaign already exists, Please try again after changing campaign title!');
                                $('.loadinginprogress').hide();
                                    return false;
                                }
                                
                            }
                                if($('input[name^="addedimages"]').length>0){
                                    
                                }else{
                                    alert('Please add atleast video playlist or slideshow to campaign!');
                                    $('.loadinginprogress').hide();
                                    return false;
                                }
                                //
                            
                            form.submit();
                            
                            
                          });
                
                
              //  alert('res');
             // form.submit();
            }
        });
        $('#create_item').validate({
            focusInvalid: false,
            ignore: "",
            rules: {
                "name[]": {
                    
                    required: true
                },
                "price[]": {
                    
                    required: true
                },
                "short_discription[]": {
                   // minlength: 5,
                    required: true
                },
                "item_image[]": { required:true, accept: "jpg|jpeg|png|gif" }
                
            },
            invalidHandler: function(event, validator) {
                //display error alert on form submit    
            },

            errorPlacement: function(label, element) { // render error placement for each input type   
                console.log(label);
                $('<span class="error"></span>').insertAfter(element).append(label)
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
            },

            highlight: function(element) { // hightlight error inputs
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
               // alert('highlight');
            },

            unhighlight: function(element) { // revert the change done by hightlight
        
            },

            success: function(label, element) {
                
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-error').addClass('has-success');
                //alert('success');
            },

            submitHandler: function(form) {
                $('.loadinginprogress').show();
              form.submit();
            }
        });
        $('#create_categpry').validate({
            focusInvalid: false,
            ignore: "",
            rules: {
                name: {
                   // minlength: 5,
                    required:  function(element) {
                                if($("#active_language").val()=='english')
                                    return true;
                                else
                                    return false
                                  }
                },
                successmessage: {
                   // minlength: 5,
                    required:  function(element) {
                                if($("#active_language").val()=='english')
                                    return true;
                                else
                                    return false
                                  }
                },
                errormessage: {
                   // minlength: 5,
                    required:  function(element) {
                                if($("#active_language").val()=='english')
                                    return true;
                                else
                                    return false
                                  }
                },
                name_ar: {
                  //  minlength: 5,
                    required:  function(element) {
                                if($("#active_language").val()=='arabic')
                                    return true;
                                else
                                    return false
                                  }
                },
                successmessage_ar: {
                   // minlength: 5,
                    required:  function(element) {
                                if($("#active_language").val()=='arabic')
                                    return true;
                                else
                                    return false
                                  }
                },
                errormessage_ar: {
                   // minlength: 5,
                    required:  function(element) {
                                if($("#active_language").val()=='arabic')
                                    return true;
                                else
                                    return false
                                  }
                },
                name_ru: {
                  //  minlength: 5,
                    required:  function(element) {
                                if($("#active_language").val()=='russian')
                                    return true;
                                else
                                    return false
                                  }
                },
                successmessage_ru: {
                   // minlength: 5,
                    required:  function(element) {
                                if($("#active_language").val()=='russian')
                                    return true;
                                else
                                    return false
                                  }
                },
                errormessage_ru: {
                   // minlength: 5,
                    required:  function(element) {
                                if($("#active_language").val()=='russian')
                                    return true;
                                else
                                    return false
                                  }
                },
                printer_ip: {
                   // minlength: 5,
                    required:  function(element) {
                                if($("#parent_id").val()=='')
                                    return true;
                                else
                                    return false
                                  }
                },
                mainimage: {
                   required: function(element) {
                                if($("#imageesist").val()=='Yes')
                                    return false;
                                else
                                    return true;
                                  }, 
                   accept: "jpg|jpeg|png|gif"
                    
                },
                files: {
                   required: function(element) {
                                if($("#sbgiesist").val()=='Yes')
                                    return false;
                                else
                                    return true;
                                  }, 
                   accept: "jpg|jpeg|png|gif"
                    
                }
            },
            invalidHandler: function(event, validator) {
                //display error alert on form submit    
            },

            errorPlacement: function(label, element) { // render error placement for each input type   
                //console.log(label);
                $('<span class="error"></span>').insertAfter(element).append(label)
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
            },

            highlight: function(element) { // hightlight error inputs
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
               // alert('highlight');
            },

            unhighlight: function(element) { // revert the change done by hightlight
        
            },

            success: function(label, element) {
                
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-error').addClass('has-success');
               // unsaved=false;
            },

            submitHandler: function(form) {
             $('.loadinginprogress').show();
              var name = $('.removeduplication').val();
                var module = $("#modulename").val();
                var isduplicatev =checkduplicate(name,module);
                isduplicatev.success(form,function (data) {
                   // alert(form);
                            if(data=='yes'){
                                var parent = $('.removeduplication').parent().parent('.form-group');
                                parent.removeClass('has-success').addClass('has-error');
                                $( ".removeduplication" ).attr( "aria-invalid", "true" );
                                $('#'+$( ".removeduplication" ).attr( "id")+'-error').text('Campaign already exists, Please try again after changing campaign title!');
                                $('.loadinginprogress').hide();
                                return false;
                            }else{
                                form.submit();
                            }
                          });
            }
        });
        $('#create_page').validate({
            focusInvalid: false,
            ignore: "",
            rules: {
                name: {
                    minlength: 5,
                    required: function(element) {
                        if($("#active_language").val()=='english')
                            return true;
                        else
                            return false
                          }
                },
                description: {
                   // minlength: 5,
                    required: function(element) {
                        if($("#active_language").val()=='english')
                            return true;
                        else
                            return false
                          }
                },
                name_ar: {
                    minlength: 5,
                    required: function(element) {
                        if($("#active_language").val()=='arabic')
                            return true;
                        else
                            return false;
                          }
                },
                description_ar: {
                   // minlength: 5,
                    required: function(element) {
                        if($("#active_language").val()=='arabic')
                            return true;
                        else
                            return false
                          }
                },
                name_ru: {
                    minlength: 5,
                    required: function(element) {
                        if($("#active_language").val()=='russian')
                            return true;
                        else
                            return false
                          }
                },
                description_ru: {
                   // minlength: 5,
                    required: function(element) {
                        if($("#active_language").val()=='russian')
                            return true;
                        else
                            return false
                          }
                },
            },
            invalidHandler: function(event, validator) {
                //display error alert on form submit    
            },

            errorPlacement: function(label, element) { // render error placement for each input type   
                //console.log(label);
                $('<span class="error"></span>').insertAfter(element).append(label)
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
            },

            highlight: function(element) { // hightlight error inputs
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
            },

            unhighlight: function(element) { // revert the change done by hightlight

            },

            success: function(label, element) {
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-error').addClass('has-success');
            },

            submitHandler: function(form) {
                form.submit();
            }
        });
        $('#create_role').validate({
            focusInvalid: false,
            ignore: "",
            rules: {
                name: {
                    minlength: 5,
                    required: true
                },
                display_name: {
                    minlength: 5,
                    required: true
                }
            },
            invalidHandler: function(event, validator) {
                //display error alert on form submit    
            },

            errorPlacement: function(label, element) { // render error placement for each input type   
                console.log(label);
                $('<span class="error"></span>').insertAfter(element).append(label)
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
            },

            highlight: function(element) { // hightlight error inputs
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
            },

            unhighlight: function(element) { // revert the change done by hightlight

            },

            success: function(label, element) {
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-error').addClass('has-success');
            },

            submitHandler: function(form) {
                form.submit();
            }
        });
        $('#edit_user').validate({
            focusInvalid: false,
            ignore: "",
            rules: {
                role_id: {
                   // minlength: 5,
                    required: true
                },
                status: {
                    //minlength: 5,
                    required: true
                }
            },
            invalidHandler: function(event, validator) {
                //display error alert on form submit    
            },

            errorPlacement: function(label, element) { // render error placement for each input type   
                console.log(label);
                $('<span class="error"></span>').insertAfter(element).append(label)
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
            },

            highlight: function(element) { // hightlight error inputs
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
            },

            unhighlight: function(element) { // revert the change done by hightlight

            },

            success: function(label, element) {
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-error').addClass('has-success');
            },

            submitHandler: function(form) {
                form.submit();
            }
        });
        $('#msg_validate').validate({
            focusInvalid: false,
            ignore: "",
            rules: {
                formfield1: {
                    minlength: 2,
                    required: true
                },
                formfield2: {
                    required: true,
                    email: true
                },
                formfield3: {
                    required: true,
                    url: true
                }
            },

            invalidHandler: function(event, validator) {
                //display error alert on form submit    
            },

            errorPlacement: function(label, element) { // render error placement for each input type   
                console.log(label);
                $('<span class="error"></span>').insertAfter(element).append(label)
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
            },

            highlight: function(element) { // hightlight error inputs
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
            },

            unhighlight: function(element) { // revert the change done by hightlight

            },

            success: function(label, element) {
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-error').addClass('has-success');
            },

            submitHandler: function(form) {
                form.submit();
            }
        });


        $('#icon_validate').validate({
            errorElement: 'span',
            errorClass: 'error',
            focusInvalid: false,
            ignore: "",
            rules: {
                formfield1: {
                    minlength: 2,
                    required: true
                },
                formfield2: {
                    required: true,
                    email: true
                },
                formfield3: {
                    required: true,
                    url: true
                }
            },

            invalidHandler: function(event, validator) {
                //display error alert on form submit    
            },

            errorPlacement: function(error, element) { // render error placement for each input type
                var icon = $(element).parent().parent('.form-group').find('i');
                var parent = $(element).parent().parent('.form-group');
                icon.removeClass('fa fa-check').addClass('fa fa-times');
                parent.removeClass('has-success').addClass('has-error');
            },

            highlight: function(element) { // hightlight error inputs
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
            },

            unhighlight: function(element) { // revert the change done by hightlight

            },

            success: function(label, element) {
                var icon = $(element).parent().parent('.form-group').find('i');
                var parent = $(element).parent().parent('.form-group');
                icon.removeClass("fa fa-times").addClass('fa fa-check');
                parent.removeClass('has-error').addClass('has-success');
            },

            submitHandler: function(form) {

            }
        });


        $('#general_validate').validate({
            focusInvalid: false,
            ignore: "",
            rules: {
                formfield1: {
                    required: true
                },
                formfield2: {
                    required: true,
                    email: true
                },
                formfield3: {
                    required: true,
                    url: true
                },
                formfield4: {
                    required: true,
                    creditcardtypes: true
                },
                formfield5: {
                    number: true,
                    required: true,
                },
                formfield6: {
                    minlength: 3,
                    required: true,
                },
                formfield7: {
                    maxlength: 5,
                    required: true,
                },
                formfield8: {
                    maxlength: 5,
                    required: true,
                },
                formfield9: {
                    maxlength: 5,
                    required: true,
                    equalTo: "#formfield8"
                },
                formfield10: {
                    required: true,
                },
                formfield11: {
                    required: true,
                    alphanumeric: true,
                },

            },

            invalidHandler: function(event, validator) {
                //display error alert on form submit    
            },

            errorPlacement: function(label, element) { // render error placement for each input type   
                console.log(label);
                $('<span class="error"></span>').insertAfter(element).append(label)
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
            },

            highlight: function(element) { // hightlight error inputs
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-success').addClass('has-error');
            },

            unhighlight: function(element) { // revert the change done by hightlight

            },

            success: function(label, element) {
                var parent = $(element).parent().parent('.form-group');
                parent.removeClass('has-error').addClass('has-success');
            },

            submitHandler: function(form) {

            }
        });








        //Form Wizard Validations
        var $validator = $("#commentForm").validate({
            rules: {
                txtFullName: {
                    required: true,
                    minlength: 3
                },
                txtEmail: {
                    required: true,
                    email: true,
                },
                txtPhone: {
                    number: true,
                    required: true,
                }
            },
            errorPlacement: function(label, element) {
                $('<span class="arrow"></span>').insertBefore(element);
                $('<span class="error"></span>').insertAfter(element).append(label)
            }
        });


    }



    if ($.isFunction($.fn.bootstrapWizard)) {

        $('#pills').bootstrapWizard({
            'tabClass': 'nav nav-pills',
            'debug': false,
            onShow: function(tab, navigation, index) {
                console.log('onShow');
            },
            onNext: function(tab, navigation, index) {
                console.log('onNext');
                if ($.isFunction($.fn.validate)) {
                    var $valid = $("#commentForm").valid();
                    if (!$valid) {
                        $validator.focusInvalid();
                        return false;
                    } else {
                        $('#pills').find('.form-wizard').children('li').eq(index - 1).addClass('complete');
                        $('#pills').find('.form-wizard').children('li').eq(index - 1).find('.step').html('<i class="fa fa-check"></i>');
                    }
                }
            },
            onPrevious: function(tab, navigation, index) {
                console.log('onPrevious');
            },
            onLast: function(tab, navigation, index) {
                console.log('onLast');
            },
            onTabClick: function(tab, navigation, index) {
                console.log('onTabClick');
                //alert('on tab click disabled');
            },
            onTabShow: function(tab, navigation, index) {
                console.log('onTabShow');
                var $total = navigation.find('li').length;
                var $current = index + 1;
                var $percent = ($current / $total) * 100;
                $('#pills .progress-bar').css({
                    width: $percent + '%'
                });
            }
        });

        $('#pills .finish').click(function() {
            alert('Finished!, Starting over!');
            $('#pills').find("a[href*='tab1']").trigger('click');
        });







    }




});
function checkduplicate(name,module){
       var id=0;
       if($("#id").length>0){
           id=$("#id").val();
       }
        var token = $("#srftknid").val();
        return $.ajax({
            url: $("#duplicationcheckurl").val(),
            type: 'post',
            data: {module:module,name:name, _token:token, id:id },
            success: function(data) {
               // console.log(data);
                //$("#isduplicate").val(data)
                //return data;
            }
        });
    }
