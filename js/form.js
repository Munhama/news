  $('ul.admin__tabs').on('click', 'li:not(.admin__tab_active)', function() {
    $(this)
      .addClass('admin__tab_active').siblings().removeClass('admin__tab_active')
      .closest('div.admin__wrapper').find('div.admin__form').removeClass('admin__form_active').eq($(this).index()).addClass('admin__form_active');
  });
  function modal() {
    $(document).ready(function() {
      $('.admin__overlay').fadeIn(297,	function(){
        $('.admin__modal') 
        .css('display', 'flex')
        .animate({opacity: 1}, 198);
      });
      
      $('.admin__close').click( function(){
        $('.admin__modal').animate({opacity: 0}, 198, function(){
          $(this).css('display', 'none');
          $('.admin__overlay').fadeOut(297);
        });
      });
      });
    }

  $(document).ready(function() {
    $('#btnA').click(function() {
      sendAjaxForm('result_form', 'create_form', '/admin/create');
      modal();
      return false;
    });
    $('#btnE').click(function() {
      sendAjaxForm('result_form', 'edit_form', '/admin/edit');
      $('.admin__form-update').addClass('admin__form-update_active');
      return false;
    });
    $('#btnD').click(function() {
      sendAjaxForm('result_form', 'delete_form', '/admin/delete');
      modal();
      return false;
    });
    $('#btnU').click(function() {
      sendAjaxForm('result_form', 'update_form', '/admin/edit');
      $('.admin__form-update').removeClass('admin__form-update_active');
      modal();
      return false;
    });
  });

  function sendAjaxForm(result_form, ajax_form, url) {
    $.ajax({
      url:     url,
      type:     "POST",
      data: $("#"+ajax_form).serialize(),
      success: function(response) {
        console.log(response);
        JSON.stringify(response);
        result = $.parseJSON(response);
        if('.admin__form-update_active') {
          document.getElementById("id").value = result.id;
          document.getElementById("title").value = result.title;
          document.getElementById("preview").value = result.preview;
          document.getElementById("text").value = result.text;
          document.getElementById("date").value = result.date;
          document.getElementById("image").value = result.image;
        }
        $("#"+result_form).html(result.msg+' '+result.id+' '+result.msg2);
      },
      error: function(response) {
        $("#"+result_form).html('????????????. ???????????? ???? ????????????????????.');
      }
 	});
}
