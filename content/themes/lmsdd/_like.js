/* eslint-env jquery

var likeApp = {

  init: function() {

    likeApp.$scoreSpans = $('.score-area');

    likeApp.$scoreSpans.text('0');

    console.log('likeApp is set');

    likeApp.$scoreSpans.on('click', likeApp.loadContents);
  },

  loadContents: function() {
    console.log('loadContents');

    $.ajax({

      url: 'myAjax.ajaxurl',
      method: 'POST',
      data:
        {
        action: 'insertVote',
        vote: 9
        },
      contentType: 'application/json',
      success: function(response) {
        console.log('OK');
      },
      error: function(response) {
        console.log('KO');
      }
    });
  }
};

document.addEventListener('DOMContentLoaded', likeApp.init);

*/
