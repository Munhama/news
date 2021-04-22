$('ul.admin__tabs').on('click', 'li:not(.admin__tab_active)', function() {
    $(this)
      .addClass('admin__tab_active').siblings().removeClass('admin__tab_active')
      .closest('div.admin__wrapper').find('div.admin__form').removeClass('admin__form_active').eq($(this).index()).addClass('admin__form_active');
  });

  $(document).ready(function() {
    $('#btnD').click(function() {
      sendAjaxForm('result_form', 'delete_form', '/admin');
      return false;
    });
    $('#btnA').click(function() {
      sendAjaxForm('result_form', 'create_form', '/admin');
      return false;
    });
  });

  function sendAjaxForm(result_form, ajax_form, url) {
    $.ajax({
        url:     url,
        type:     "POST",
        data: $("#"+ajax_form).serialize(),
        success: function(response) {
        	result=response.split('<')[0];
          JSON.stringify(result);
          result = $.parseJSON(result);

        	$("#"+result_form).html(result.msg+' '+result.id+' '+result.msg2);
    	},
    	error: function(response) {
            $("#"+result_form).html('Ошибка. Данные не отправлены.');
    	}
 	});
}