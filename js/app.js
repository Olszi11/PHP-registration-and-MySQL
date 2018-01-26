$(function() {

  // smooth scroll
  var scroll = $('.back-btn');
  scroll.on('click', function(){
    $('html, body').animate({
    scrollTop: $("#navigation").offset().top
}, 1000);
  });


  // button more
  var button_more= $('.button-more');
  button_more.each(function(){
    $(this).on('click', function(){
        var addText=$(this).parent().find('.add-text');
        var moreOrLess=addText.is(':visible')?'— read more' : '— read less';
        $(this).text(moreOrLess);
        addText.slideToggle(600);
  });
});

  //change color header time=10s after clicking button
  var buttonpush=$('#articles button');
  var headerTitle = $('#header p');
  var bgHeader = $('#header');




  buttonpush.on('click', function(){

    var btn=$(this);


    btn.attr("disabled", true);
    var normalColor= headerTitle.css('color');
    var normalBackground=bgHeader.css('background-color');

    headerTitle.css('color','#2CA7C6');
    bgHeader.css('background-color', '#334F64');
    btn.css('color','#2CA7C6');
    btn.css('background-color', '#334F64');

    if(headerTitle.css('color')!='#334F64' && bgHeader.css('background-color')!='#2CA7C6' )
    {
    setTimeout(function() {
        headerTitle.css('color', normalColor);
        bgHeader.css('background-color', normalBackground);
        btn.attr("disabled", false);
        btn.css('color', normalColor);
        btn.css('background-color', normalBackground);
      }, 4000);
    }else {
      return true;
    }
  });




    //ajax
    var form = $('form');
    var submitButton = form.find('.button');
    var formData = $('#formData');


    submitButton.on('click', function(){

      $.ajax({
        url: '../Projekt2/post.php',
        type: 'POST',
        data: form.serialize()
      }).done(function(data){
        showData(data);
        form.css('display','none');
      }).fail(function(){
        alert("Failure in AJAX request. Please try later!");
      });
    });


    function showData(resp){
      var buttonReturn = $('<div class="buttonReturn">return</div>');

      buttonReturn.on('click', function(){
        formData.css('display','none');
        $(this).off();
        form.css('display','flex');
      });
      formData.html(resp).css('display','flex');
      formData.append(buttonReturn);
    }

});
