window.addEventListener('DOMContentLoaded', () => {
    const menu = document.querySelector('.menu'),
    menuItem = document.querySelectorAll('.menu_item'),
    hamburger = document.querySelector('.hamburger');

    hamburger.addEventListener('click' , () => {
        hamburger.classList.toggle('hamburger_active');
        menu.classList.toggle('menu_active');
    });

    menuItem.forEach(item => {
        item.addEventListener('click', () => {
        hamburger.classList.toggle ('hamburger_active');
        menu.classList.toggle ('menu_active');
    })
});


$('[data-modal=buy]').on('click', function (){
$('.overlay, #buy').fadeIn('slow'); 
});


$('.modal_close').on('click', function() {
 $('.overlay, #buy, #trial').fadeOut('slow');
});
$('[class=banner_btn_trial]').on('click', function (){
    $('.overlay, #trial').fadeIn('slow'); 
    });
// $('[class=banner_btn_trial1]').on('click', function (){
//     $('.overlay, #trial').fadeIn('slow'); 
//     });
// $('[class=catalog_button]').on('click', function (){
//       $('.overlay, #trial').fadeIn('slow'); 
//       });
// $('[data-modal=purchase]').on('click', function (){
//         $('#pay').fadeIn('slow'); 
//         });
$(document).ready(function(){
    $('.slider_inner').slick({
        infinite: true,
        dots: false,
        fade: true,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        adaptiveHeight: true,
    });
      });
          
    });

    function setProductOptions(){
        $("#email_id").val("");
        $("#divEmailCheck").html("");
 }


 $(document).ready(function(){

  $('ul.catalog__tabs').on('click', 'li:not(.catalog__tab_active)', function() {
    $(this)
      .addClass('catalog__tab_active').siblings().removeClass('catalog__tab_active')
      .closest('div.container').find('div.catalog__content').removeClass('catalog__content_active').eq($(this).index()).addClass('catalog__content_active');
  });

     $("#trail_dg_form").submit(function(e){
        e.preventDefault();
        console.log($("#trail_dg_form").serialize());

        var data = $("#trail_dg_form").serialize();

        $.ajax({
            'type':'POST',
            'url': '/includes/savecontact.php',
            'data': data,
            success: function(data){
                console.log(data);
                $("#successmsg").html(data);
                $("#successdisp").css("display","block");
                $("#formdisp").css("display","none");
            }

        });
        
     });

     $("#trail_dg_form1").submit(function(e){
        e.preventDefault();
        console.log($("#trail_dg_form1").serialize());

        var data = $("#trail_dg_form1").serialize();

        $.ajax({
            'type':'POST',
            'url': '/includes/savesos.php',
            'data': data,
            success: function(data){
                console.log(data);
                $("#successmsg").html(data);
                $("#successdisp").css("display","block");
                $("#formdisp").css("display","none");
            }

        });
        
     });

 })


 function validateForms(form){
    $(form).validate({
      rules: {
        name: "required",
        phone: "required",
        email: {
          required: true,
          email: true
        }
      },
      messages: {
      name: "Please enter your name",
      phone: "Please enter your phone",
      email: {
        required: "Please enter your email",
        email: "Incorrect email"
  
      }
    }
    });
  }

  validateForms('#consultation-form');
  validateForms('#consultation form');
  validateForms('#order form');

  $('input[name=phone]').mask("+1 (999) 999-99-99");

  $('form').submit(function(e){
    e.preventDefault();
    if($("#name").val().trim().length==0) {
      alert("enter valid name");
      return false;
   }
    $.ajax({
      type: "POST",
      url: "mailer/smart.php",
      data: $(this).serialize()
    }).done(function(){
      $(this).find("input").val("");
      
      $('form').trigger('reset');

    });
    return false;
  });
 
    //  console.log($("#buy_dg_form").serialize());

 

// $('[class=submit_btn]').on('click', function (){
//     $('#trial').fadeOut('slow'); 
//     });  
  
// $('[data-modal=request_btn]').on('click', function (){
//     $('.overlay').fadeOut('slow'); 
//     });   


