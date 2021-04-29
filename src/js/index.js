
$(document).ready(function(){



    var $item = $('.carousel-item');
    var $wHeight = $(window).height();
    $item.eq(0).addClass('active');
    $item.height($wHeight);
    $item.addClass('full-screen');
    
    $('.carousel img').each(function () {
      var $src = $(this).attr('src');
      var $color = $(this).attr('data-color');
      $(this).parent().css({
        'background-image': 'url(' + $src + ')',
        'background-color': $color
      });
      $(this).remove();
    });
    
    $(window).on('resize', function () {
      $wHeight = $(window).height();
      $item.height($wHeight);
    });
    
    $('.carousel').carousel({
      interval: 3000,
      pause: "false"
    });
    
    $(".new").mouseover(function(){
      $(this).css(
        "box-shadow", "rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px"
      )
      $(".pic").mouseover(function(){
        $(this).css("opacity","0.5px")
        });
      });
      
      $(".new").mouseout(function(){
        $(this).css(
          "box-shadow", "0px"
        )
        $(".pic").mouseover(function(){
          $(this).css("opacity","1px")
          });
        });
        
     
    $('.addToCart').on('click',()=>{
     
     // console.log($('.addToCart').getAttribute('class'))
       image=$('.addToCart').parentsUntil("div.card-body").siblings()[0]
        imageString=image.getAttribute('src').toString()
       $('#orderImage').attr('src',imageString)
       console.log(imageString);
    
    })
  
  
  
  //for quantity counter
  
  $('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
});

$(".input-number").keydown(function (e) {
    // Allow: backspace, delete, tab, escape, enter and .
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
         // Allow: Ctrl+A
        (e.keyCode == 65 && e.ctrlKey === true) || 
         // Allow: home, end, left, right
        (e.keyCode >= 35 && e.keyCode <= 39)) {
             // let it happen, don't do anything
             return;
    }
    // Ensure that it is a number and stop the keypress
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
});
    
  //for total
  
  $('#total').html($('#quantity').val()*120)  
  $('#quantity').on('change',()=>{
  $('#total').html($('#quantity').val()*120)
  
  $('#quantityInput').val(parseInt($('#quantity').val()))
  var totalNum=parseInt($('#total').html())
  $('#totalInput').val(totalNum);
  
  
  })
  // for the hidden inputs
  
  
  
  
  })    

var $item = $('.carousel-item');
var $wHeight = $(window).height();
$item.eq(0).addClass('active');
$item.height($wHeight);
$item.addClass('full-screen');

$('.carousel img').each(function () {
  var $src = $(this).attr('src');
  var $color = $(this).attr('data-color');
  $(this).parent().css({
    'background-image': 'url(' + $src + ')',
    'background-color': $color
  });
  $(this).remove();
});

$(window).on('resize', function () {
  $wHeight = $(window).height();
  $item.height($wHeight);
});

$('.carousel').carousel({
  interval: 3000,
  pause: "false"
});

$(".new").mouseover(function(){
  $(this).css(
    "box-shadow", "rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px"
  )
  $(".pic").mouseover(function(){
    $(this).css("opacity","0.5px")
    });
  });
  
  $(".new").mouseout(function(){
    $(this).css(
      "box-shadow", "0px"
    )
    $(".pic").mouseover(function(){
      $(this).css("opacity","1px")
      });
    });
    

