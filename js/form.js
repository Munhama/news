$('ul.admin__tabs').on('click', 'li:not(.admin__tab_active)', function() {
    $(this)
      .addClass('admin__tab_active').siblings().removeClass('admin__tab_active')
      .closest('div.admin__wrapper').find('div.admin__form').removeClass('admin__form_active').eq($(this).index()).addClass('admin__form_active');
  });