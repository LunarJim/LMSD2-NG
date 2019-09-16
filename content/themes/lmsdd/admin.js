/* eslint-env jquery */

var adminApp = {

  init: function() {
    console.log('admin_app_init');
    adminApp.$deleteButtons = $('.delete-btn');
    adminApp.$deleteButtons.on('click', adminApp.handleDeleteQuote);
  },

  handleDeleteQuote: function() {
    var $selectedQuoteId = $(this).data('quoteid');

    var $divToDeleteAfterAjaxCall = $('div[data-quotecontainerid=\'' + $selectedQuoteId + '\']');

    var token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL0xNU0QyLU5HIiwiaWF0IjoxNTY4NTc1Mzg2LCJuYmYiOjE1Njg1NzUzODYsImV4cCI6MTU2OTE4MDE4NiwiZGF0YSI6eyJ1c2VyIjp7ImlkIjoiMSJ9fX0.IowlP4H4TPwmk2IKHOKnvtNLoY6u_fpzP5SWw2TkQK8';

    var jqxhr = $.ajax({

      url: 'http://Localhost/LMSD2-NG/wp-json/wp/v2/quote/' + $selectedQuoteId,
      type: 'DELETE',
      contentType: 'application/json',
      headers: { 'Authorization': 'Bearer ' + token }
    });

    jqxhr.done(function() {
      console.log('quote can be deleted');

      $divToDeleteAfterAjaxCall.fadeOut();

      $divToDeleteAfterAjaxCall.remove();
    });

    jqxhr.fail(function() {
      console.log('error while trying to delete via api');
    });
  }

};

document.addEventListener('DOMContentLoaded', adminApp.init);
