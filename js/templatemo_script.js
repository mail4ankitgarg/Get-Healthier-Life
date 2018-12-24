/*  Free Template by www.templatemo.com  */



/* 

Dragonfruit Template 

http://www.templatemo.com/preview/templatemo_411_dragonfruit 

*/



jQuery(function(){

    $ = jQuery;

    $(window).load( function() {

        $('.external-link').unbind('click');    

    });

    //main menu

    $("#templatemo_banner_menu ul").singlePageNav({offset: $('#templatemo_banner_menu').outerHeight()});

    //banner slide

    $('.banner').unslider({fluid: true});

    $(window).on("load scroll resize", function(){

        banner_height = ($(document).width()/1920) * 760;

        $('.banner').height(banner_height);

        $('.banner ul li').height(banner_height);

        if(banner_height > 250){

            caption_margin_top = (banner_height-100)/2;

            $('.banner .slide_caption:hidden').show();

            $('.banner .slide_caption').css({"margin-top":caption_margin_top});

        }else{

            $('.banner .slide_caption').hide();

        }

        $("#templatemo_banner_slide > ul > li").css({"background-size":"cover"});

    });

/* //Nutri Icon

    $(window).on("load scroll resize", function(){

        		

		nutri_wap_width = $(".nutri_icon").width();

        nutri_icon_padding_left = (nutri_wap_width/100)*30;

        nutri_icon_width = (nutri_wap_width/100)*40;

        nutri_icon_size = (nutri_icon_width/100)*50;

        nutri_icon_padding_top = (nutri_icon_width/100)*25;

        $(".nutri_icon .imgwap").css({

			'margin-left': nutri_icon_padding_left,

			'width': nutri_icon_width,

			'height': nutri_icon_width,

		});

		$("#templatemo_nutritions .nutri_icon .imgwap i").css({

			"font-size":nutri_icon_size,

			"padding-top":nutri_icon_padding_top,

		});

		$(".nutri_icon p").css({

			'padding-left': "10%",

			'padding-right': "10%",

		});

    }); */

/* //Lifestyle Icon

    $(window).on("load scroll resize", function(){

        		

		life_wap_width = $(".life_icon").width();

        life_icon_padding_left = (life_wap_width/100)*30;

        life_icon_width = (life_wap_width/100)*40;

        life_icon_size = (life_icon_width/100)*50;

        life_icon_padding_top = (life_icon_width/100)*25;

        $(".life_icon .imgwap").css({

			'margin-left': life_icon_padding_left,

			'width': life_icon_width,

			'height': life_icon_width,

		});

		$("#templatemo_lifestyle .life_icon .imgwap i").css({

			"font-size":life_icon_size,

			"padding-top":life_icon_padding_top,

		});

		$(".life_icon p").css({

			'padding-left': "10%",

			'padding-right': "10%",

		});

    });	 */

	

	

 //Diet chart

    $(window).on("load resize", function(){

        $.timeline_right_position_top = 0 ;

        $.timeline_old_right_position_top = 0 ;

        $.timeline_left_position_top = 0 ;

        $.timeline_old_left_position_top = 0 ;

        w_width = ($(window).width()>1600) ? 1600 : $(window).width() ;

        $.timeline_item_width = ( w_width - 50) / 2;

        $(".time_line_wap").each(function(){

            //if class name already exit remove

            $(this).children("a.left_timer").remove();

            $(this).children("a.right_timer").remove();

            $(this).removeClass("left_timeline");

            $(this).removeClass("right_timeline");

            if($(window).width()<970){

                $("#templatemo_DietCharts .container-fluid").css({"position":"absolute"});

                positon_left = $("#templatemo_DietCharts .container-fluid").position().left +100;

                //put on right

                $(this).css({   

                                    'left': 70,

                                    'top':$.timeline_right_position_top,

                                    'width': $(window).width() - positon_left

                                 });

                $(this).addClass("right_timeline");

                $.timeline_old_right_position_top = $.timeline_right_position_top;

                $.timeline_right_position_top = $.timeline_right_position_top + $(this).outerHeight() + 40 ;

                $(this).prepend("<a href=\"#\" class=\"right_timer\"><span class=\"glyphicon glyphicon-time\"></span></a>");

                $(this).children("a.right_timer").css({left:-86, width: 60 ,});

            }else if($.timeline_left_position_top == 0){

                $("#templatemo_DietCharts .container-fluid").css({"position":"relative"});

                //put on left

                $(this).css({   

                                    'left':0,

                                    'top':0,

                                    'width': $.timeline_item_width - 50

                                 });

                $(this).addClass("left_timeline");

                $.timeline_old_left_position_top = $.timeline_left_position_top;

                $.timeline_left_position_top = $.timeline_left_position_top + $(this).outerHeight() + 40 ;

                $(this).prepend("<a href=\"#\" class=\"left_timer\"><span class=\"glyphicon glyphicon-time\"></span></a>");

                $(this).children("a.left_timer").css({left:$.timeline_item_width-50,});

            }else if( $.timeline_right_position_top < $.timeline_left_position_top ){

                $("#templatemo_DietCharts .container-fluid").css({"position":"relative"});

                $.timeline_right_position_top = ($.timeline_old_left_position_top + 40) < $.timeline_right_position_top  ? $.timeline_right_position_top : $.timeline_right_position_top + 40;

                //put on right

                $(this).css({   

                                    'left': $.timeline_item_width + 79,

                                    'top':$.timeline_right_position_top,

                                    'width': $.timeline_item_width - 50

                                 });

                $(this).addClass("right_timeline");

                $.timeline_old_right_position_top = $.timeline_right_position_top;

                $.timeline_right_position_top = $.timeline_right_position_top + $(this).outerHeight() + 40 ;

                $(this).prepend("<a href=\"#\" class=\"right_timer\"><span class=\"glyphicon glyphicon-time\"></span></a>");

                $(this).children("a.right_timer").css({left:-99,});

            }else{

                $("#templatemo_DietCharts .container-fluid").css({"position":"relative"});

                $.timeline_left_position_top = ($.timeline_old_right_position_top + 40) < $.timeline_left_position_top ? $.timeline_left_position_top : $.timeline_left_position_top + 40;

                //put on left

                $(this).css({

                                    'left':0,

                                    'top':$.timeline_left_position_top,

                                    'width': $.timeline_item_width - 50

                                 });

                $(this).addClass("left_timeline");

                $.timeline_old_left_position_top = $.timeline_left_position_top;

                $.timeline_left_position_top = $.timeline_left_position_top + $(this).outerHeight() + 40 ;

                $(this).prepend("<a href=\"#\" class=\"left_timer\"><span class=\"glyphicon glyphicon-time\"></span></a>");

                $(this).children("a.left_timer").css({left:$.timeline_item_width-50,});

            }

            //calculate and define container height

            if($.timeline_left_position_top > $.timeline_right_position_top ){

                $("#templatemo_DietCharts .container-fluid").height($.timeline_left_position_top-40);

                $("#templatemo_DietCharts").height($.timeline_left_position_top+200);

            }else{

                $("#templatemo_DietCharts .container-fluid").height($.timeline_right_position_top-40);

                $("#templatemo_DietCharts").height($.timeline_right_position_top+200);

            }

            $(this).fadeIn();

        });

    });

	

	

	

	

    /* //about icon

    $(window).on("load scroll resize", function(){

        about_wap_width = $(".about_icon").width();

        about_icon_padding_left = (about_wap_width/100)*30;

        about_icon_width = (about_wap_width/100)*40;

        about_icon_size = (about_icon_width/100)*50;

        about_icon_padding_top = (about_icon_width/100)*25;

        $(".about_icon .imgwap").css({

			'margin-left': about_icon_padding_left,

			'width': about_icon_width,

			'height': about_icon_width,

		});

        $("#templatemo_about .about_icon .imgwap i").css({

			"font-size":about_icon_size,

			"padding-top":about_icon_padding_top,

		});

        $(".about_icon p").css({

			'padding-left': "10%",

			'padding-right': "10%",

		});

    }); */

	



	

	

	//Testimonials Icon

    $(window).on("load scroll resize", function(){

        		

		testi_wap_width = $(".testi_icon").width();

        testi_icon_padding_left = (nutri_wap_width/100)*30;

        testi_icon_width = (testi_wap_width/100)*40;

        testi_icon_size = (testi_icon_width/100)*50;

        testi_icon_padding_top = (testi_icon_width/100)*25;

        $(".testi_icon .imgwap").css({

			'margin-left': testi_icon_padding_left,

			'width': testi_icon_width,

			'height': testi_icon_width,

		});

		$("#templatemo_testimonial .testi_icon .imgwap i").css({

			"font-size":testi_icon_size,

			"padding-top":testi_icon_padding_top,

		});

		$(".testi_icon p").css({

			'padding-left': "10%",

			'padding-right': "10%",

		});

    });

	

	



		

	

//testimonial

    $.current_testimonial = $("div.testimonial_text").first() ;

    $("div.testimonial_text").hide();

    $.current_testimonial.show();

    $(window).on("load scroll resize", function(){

        testimonial_child_height = $(".testimonial_text").height();

        $("#testimonial_text_wap").height(testimonial_child_height);

        $(".pre_next_wap").height(testimonial_child_height);

    });

    $("#prev_testimonial").click(function(){

        $.current_testimonial.effect("fade",{},200,function(){

                $.current_testimonial_prev = ($.current_testimonial.index() == 0) ? $(".testimonial_text").last() : $.current_testimonial.prev() ;

                $.current_testimonial_prev.fadeIn();

                $.current_testimonial = $.current_testimonial_prev;

        });

        return false;

    });

    $("#next_testimonial").click(function(){

        $.current_testimonial.effect("fade",{},200,function(){

                $.current_testimonial_next = ($.current_testimonial.index() == $(".testimonial_text").last().index() ) ? $(".testimonial_text").first() : $.current_testimonial.next() ;

                $.current_testimonial_next.fadeIn();

                $.current_testimonial = $.current_testimonial_next;

        });

        return false;

    });

	

	

//Articles

    $(".event_box_img").load(function(){

        img_height = $(this).height();

        $(this).parent(".event_box_wap").height(img_height);

    });

    $(window).on("load resize", function(){

        img_height = $(".event_box_img").height();

        if($(window).width()>550){

            $(".event_box_wap").height(img_height);

            $(".event_box_wap").each(function(){

                total_height = $(this).children(".event_box_caption").outerHeight();

                header_height = $(this).children(".event_box_caption").children("h1").outerHeight();

                admin_height = $(this).children(".event_box_caption").children("p").eq(0).outerHeight();

                paragraph_height = $(this).children(".event_box_caption").children("p").eq(1).outerHeight();

                hide_paragraph_height = header_height + admin_height + 10 ;

                //$(this).children(".event_box_caption").css({"top": "-" + hide_paragraph_height + "px"});

            });

        }else{

            $(".event_box_wap").height(img_height);

            $(".event_box_wap").each(function(){

                total_height = $(this).children(".event_box_caption").outerHeight();

                header_height = $(this).children(".event_box_caption").children("h1").outerHeight();

                admin_height = $(this).children(".event_box_caption").children("p").eq(0).outerHeight();

                paragraph_height = $(this).children(".event_box_caption").children("p").eq(1).outerHeight();

                hide_paragraph_height = header_height + admin_height + 10 ;

                //$(this).height(total_height+img_height);

                //$(this).children(".event_box_caption").css({"top": "0px"});

            });

        }

    });

    $(".event_box_wap").hover(function(){

        if($(window).width()>550){

            total_height = $(this).children(".event_box_caption").outerHeight();

            header_height = $(this).children(".event_box_caption").children("h1").outerHeight();

            admin_height = $(this).children(".event_box_caption").children("p").eq(0).outerHeight();

            paragraph_height = $(this).children(".event_box_caption").children("p").eq(1).outerHeight();

            hide_paragraph_height = header_height + admin_height + paragraph_height + 10 ;

            //$(this).children(".event_box_caption").stop().animate({"top": "-" + hide_paragraph_height + "px"});

        }

    },function(){

        if($(window).width()>550){

            total_height = $(this).children(".event_box_caption").outerHeight();

            header_height = $(this).children(".event_box_caption").children("h1").outerHeight();

            admin_height = $(this).children(".event_box_caption").children("p").eq(0).outerHeight();

            paragraph_height = $(this).children(".event_box_caption").children("p").eq(1).outerHeight();

            hide_paragraph_height = header_height + admin_height + 10 ;

            //$(this).children(".event_box_caption").stop().animate({"top": "-" + hide_paragraph_height + "px"});

        }

    });

	

//Gallery





$(".gallery_box_img").load(function(){

        img_height = $(this).height();

        $(this).parent(".gallery_box_wap").height(img_height);

    });

    $(window).on("load resize", function(){

        img_height = $(".gallery_box_img").height();

        if($(window).width()>550){

            $(".gallery_box_wap").height(img_height);

            $(".gallery_box_wap").each(function(){

                total_height = $(this).children(".gallery_box_caption").outerHeight();

                header_height = $(this).children(".gallery_box_caption").children("h1").outerHeight();

                admin_height = $(this).children(".gallery_box_caption").children("p").eq(0).outerHeight();

                paragraph_height = $(this).children(".gallery_box_caption").children("p").eq(1).outerHeight();

                hide_paragraph_height = header_height + admin_height + 10 ;

                $(this).children(".gallery_box_caption").css({"top": "-" + hide_paragraph_height + "px"});

            });

        }else{

            $(".gallery_box_wap").height(img_height);

            $(".gallery_box_wap").each(function(){

                total_height = $(this).children(".gallery_box_caption").outerHeight();

                header_height = $(this).children(".gallery_box_caption").children("h1").outerHeight();

                admin_height = $(this).children(".gallery_box_caption").children("p").eq(0).outerHeight();

                paragraph_height = $(this).children(".gallery_box_caption").children("p").eq(1).outerHeight();

                hide_paragraph_height = header_height + admin_height + 10 ;

                $(this).height(total_height+img_height);

                $(this).children(".gallery_box_caption").css({"top": "0px"});

            });

        }

    });

    $(".gallery_box_wap").hover(function(){

        if($(window).width()>550){

            total_height = $(this).children(".gallery_box_caption").outerHeight();

            header_height = $(this).children(".gallery_box_caption").children("h1").outerHeight();

            admin_height = $(this).children(".gallery_box_caption").children("p").eq(0).outerHeight();

            paragraph_height = $(this).children(".gallery_box_caption").children("p").eq(1).outerHeight();

            hide_paragraph_height = header_height + admin_height + paragraph_height + 10 ;

            $(this).children(".gallery_box_caption").stop().animate({"top": "-" + hide_paragraph_height + "px"});

        }

    },function(){

        if($(window).width()>550){

            total_height = $(this).children(".gallery_box_caption").outerHeight();

            header_height = $(this).children(".gallery_box_caption").children("h1").outerHeight();

            admin_height = $(this).children(".gallery_box_caption").children("p").eq(0).outerHeight();

            paragraph_height = $(this).children(".gallery_box_caption").children("p").eq(1).outerHeight();

            hide_paragraph_height = header_height + admin_height + 10 ;

            $(this).children(".gallery_box_caption").stop().animate({"top": "-" + hide_paragraph_height + "px"});

        }

    });	

	

	

	

   

    //mobile menu and desktop menu

    $("#templatemo_mobile_menu").css({"right":-1500});

    $("#mobile_menu").click(function(){

            $("#templatemo_mobile_menu").show();

            $("#templatemo_mobile_menu").animate({"right":0});

            return false;

    });

    $(window).on("load resize", function(){

            if($(window).width()>768){

                $("#templatemo_mobile_menu").css({"right":-1500});

            }

    });



    jQuery.fn.anchorAnimate = function(settings) {

        settings = jQuery.extend({

            speed : 1100

        }, settings);	

        return this.each(function(){

            var caller = this

            $(caller).click(function (event){

                event.preventDefault();

                var locationHref = window.location.href;

                var elementClick = $(caller).attr("href");

                var destination = $(elementClick).offset().top - $('#templatemo_banner_menu').outerHeight() ;

                $("#templatemo_mobile_menu").animate({"right":-1500});

                $("#templatemo_mobile_menu").fadeOut() ;

                $("html,body").css({"overflow":"auto"});

                $("html,body").stop().animate({ scrollTop: destination}, settings.speed, function(){

                    // Detect if pushState is available

                    if(history.pushState) {

                        history.pushState(null, null, elementClick);

                    }

                });

                return false;

            });

        });

    }

    //animate scroll function calll

    $("#templatemo_mobile_menu a").anchorAnimate();  

	

    //about

    $(document).scroll(function(){

        document_top = $(document).scrollTop();

        event_wapper_top = $("#templatemo_about").position().top - $('#templatemo_banner_menu').outerHeight();

        if(document_top<event_wapper_top){

            degree = (360/event_wapper_top)*(document_top);

            event_animate_num = event_wapper_top - document_top;

            event_animate_alpha = (1/document_top)*(event_wapper_top);

            $("#templatemo_about .imgwap").css({

                        '-webkit-transform': 'rotate(' + degree + 'deg)',

                        '-moz-transform': 'rotate(' + degree + 'deg)',

                        '-ms-transform': 'rotate(' + degree + 'deg)',

                        '-o-transform': 'rotate(' + degree + 'deg)',

                        'transform': 'rotate(' + degree + 'deg)',

            });

            $("#templatemo_about .about_icon").css({

                        'opacity':event_animate_alpha

            });

        }else{

            $("#templatemo_about .imgwap").css({

                        '-webkit-transform': 'rotate(' + 360 + 'deg)',

                        '-moz-transform': 'rotate(' + 360 + 'deg)',

                        '-ms-transform': 'rotate(' + 360 + 'deg)',

                        '-o-transform': 'rotate(' + 360 + 'deg)',

                        'transform': 'rotate(' + 360 + 'deg)',

            });

            $("#templatemo_about .about_icon").css({

                        'opacity':1

            });

        }

    });

	

	/* //nutritions

    $(document).scroll(function(){

        document_top = $(document).scrollTop();

        event_wapper_top = $("#templatemo_nutritions").position().top - $('#templatemo_banner_menu').outerHeight();

        if(document_top<event_wapper_top){

            degree = (360/event_wapper_top)*(document_top);

            event_animate_num = event_wapper_top - document_top;

            event_animate_alpha = (1/document_top)*(event_wapper_top);

            $("#templatemo_nutritions .imgwap").css({

                        '-webkit-transform': 'rotate(' + degree + 'deg)',

                        '-moz-transform': 'rotate(' + degree + 'deg)',

                        '-ms-transform': 'rotate(' + degree + 'deg)',

                        '-o-transform': 'rotate(' + degree + 'deg)',

                        'transform': 'rotate(' + degree + 'deg)',

            });

            $("#templatemo_nutritions .nutri_icon").css({

                        'opacity':event_animate_alpha

            });

        }else{

            $("#templatemo_nutritions .imgwap").css({

                        '-webkit-transform': 'rotate(' + 360 + 'deg)',

                        '-moz-transform': 'rotate(' + 360 + 'deg)',

                        '-ms-transform': 'rotate(' + 360 + 'deg)',

                        '-o-transform': 'rotate(' + 360 + 'deg)',

                        'transform': 'rotate(' + 360 + 'deg)',

            });

            $("#templatemo_nutritions .nutri_icon").css({

                        'opacity':1

            });

        }

    });

	 */

	

	

	

	//Lifestyle

    /* $(document).scroll(function(){

        document_top = $(document).scrollTop();

        event_wapper_top = $("#templatemo_lifestyle").position().top - $('#templatemo_banner_menu').outerHeight();

        if(document_top<event_wapper_top){

            degree = (360/event_wapper_top)*(document_top);

            event_animate_num = event_wapper_top - document_top;

            event_animate_alpha = (1/document_top)*(event_wapper_top);

            $("#templatemo_lifestyle .imgwap").css({

                        '-webkit-transform': 'rotate(' + degree + 'deg)',

                        '-moz-transform': 'rotate(' + degree + 'deg)',

                        '-ms-transform': 'rotate(' + degree + 'deg)',

                        '-o-transform': 'rotate(' + degree + 'deg)',

                        'transform': 'rotate(' + degree + 'deg)',

            });

            $("#templatemo_lifestyle .life_icon").css({

                        'opacity':event_animate_alpha

            });

        }else{

            $("#templatemo_lifestyle .imgwap").css({

                        '-webkit-transform': 'rotate(' + 360 + 'deg)',

                        '-moz-transform': 'rotate(' + 360 + 'deg)',

                        '-ms-transform': 'rotate(' + 360 + 'deg)',

                        '-o-transform': 'rotate(' + 360 + 'deg)',

                        'transform': 'rotate(' + 360 + 'deg)',

            });

            $("#templatemo_lifestyle .life_icon").css({

                        'opacity':1

            });

        }

    }); */

  

    //Articles

    $(document).scroll(function(){

        document_top = $(document).scrollTop();

        event_wapper_top = $("#templatemo_articals").position().top - $('#templatemo_banner_menu').outerHeight();

        if(document_top<event_wapper_top){

            event_animate_num = event_wapper_top - document_top;

            event_animate_alpha = (1/event_wapper_top)*(document_top);

            $("#templatemo_articals .event_animate_left").css({'left': -event_animate_num,'opacity':event_animate_alpha});

            $("#templatemo_articals .event_animate_right").css({'left':event_animate_num,'opacity':event_animate_alpha});

        }else{

            $("#templatemo_articals .event_animate_left").css({'left': 0,'opacity':1});

            $("#templatemo_articals .event_animate_right").css({'left':0,'opacity':1});

        }

    }); 

$(document).click(function(event){
		if ( $(event.target).closest("#templatemo_mobile_menu").get(0) == null ) {  
			if(!$("#templatemo_mobile_menu").is(":hidden")){
				$("#templatemo_mobile_menu").hide();
			}
		} 
	});



    //Appointment

/*     $(document).scroll(function(){

        document_top = $(document).scrollTop();

        event_wapper_top = $("#templatemo_appointment").position().top - $('#templatemo_banner_menu').outerHeight();

        if(document_top<event_wapper_top){

            event_animate_num = event_wapper_top - document_top;

            event_animate_alpha = (1/event_wapper_top)*(document_top);

            $("#templatemo_appointment .event_animate_left").css({'left': -event_animate_num,'opacity':event_animate_alpha});

            $("#templatemo_appointment .event_animate_right").css({'left':event_animate_num,'opacity':event_animate_alpha});

        }else{

            $("#templatemo_appointment .event_animate_left").css({'left': 0,'opacity':1});

            $("#templatemo_appointment .event_animate_right").css({'left':0,'opacity':1});

        }

    });  */

});





//gallery

 /*   $(document).scroll(function(){

        document_top = $(document).scrollTop();

        gallery_wapper_top = $("#templatemo_gallery").position().top - $('#templatemo_banner_menu').outerHeight();

        if(document_top<gallery_wapper_top){

            gallery_animate_num = gallery_wapper_top - document_top;

            gallery_animate_alpha = (1/gallery_wapper_top)*(document_top);

            $("#templatemo_gallery .gallery_animate_left").css({'left': -gallery_animate_num,'opacity':gallery_animate_alpha});

            $("#templatemo_gallery .gallery_animate_right").css({'left':gallery_animate_num,'opacity':gallery_animate_alpha});

        }else{

            $("#templatemo_gallery .gallery_animate_left").css({'left': 0,'opacity':1});

            $("#templatemo_gallery .gallery_animate_right").css({'left':0,'opacity':1});

        }

    }); 

});*/



//google map

/*function initialize(){

    //define map

    var map;

    //lat lng

    myLatlng = new google.maps.LatLng(28.625778, 77.435018);

    //define style

    var styles = [

        {

            //set all color

            featureType: "all",

            stylers: [{ hue: "#35a9d8" }]

        },

        {

            //hide business

            featureType: "poi.business",

            elementType: "labels",

            stylers: [{ visibility: "off" }]

        }

    ];

    //map options

    var mapOptions = {

        zoom: 16,

        center: myLatlng ,

        mapTypeControlOptions: {mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']} ,

        panControl: true , //hide panControl

        zoomControl: true , //hide zoomControl

        mapTypeControl: true , //hide mapTypeControl

        scaleControl: true , //hide scaleControl

        streetViewControl: true , //hide streetViewControl

        overviewMapControl: true , //hide overviewMapControl

    }

    //adding attribute value

    map = new google.maps.Map(document.getElementById('templatemo_contact_map'), mapOptions);

    var styledMap = new google.maps.StyledMapType(styles,{name: "Styled Map"});

    map.mapTypes.set('map_style', styledMap);

    map.setMapTypeId('map_style');

    //add marker

    var marker = new google.maps.Marker({

        position: myLatlng,

        map: map,

        title: 'dietitian esha singhal (shashi wellness center) ff-32 galleria market ghaziabad uttar pradesh 201016'

    });

}

google.maps.event.addDomListener(window, 'load', initialize);

google.maps.event.addDomListener(window, 'resize', initialize);*/