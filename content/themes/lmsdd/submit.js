var app = {

  elements: [],

  errorsMsg: [],

  init: function() {
    console.log('app.init');

    app.elements.errorsArea = document.getElementById('errors-submit');

    app.elements.submitForm = document.getElementById('submit-form');

    app.createListeners();

    app.displayErrors();
  },

  createListeners: function() {
    app.elements.submitForm.addEventListener('submit', app.handleSubmitForm);
  },

  handleSubmitForm: function(eventSubmit) {
    app.errorsMsg = [];

    if (app.errorsMsg.length > 0) {
      eventSubmit.preventDefault();

      app.displayErrors();
    }
  },

  displayErrors: function() {
    app.elements.errorsArea.innerHTML = '';

    for (var index in app.errorsMsg) {
      app.generateErrorBox(app.errorsMsg[index]);
    }
  },

  generateErrorBox: function(text) {
    var errorBox = document.createElement('div');

    errorBox.className = 'error alert alert-danger';

    errorBox.textContent = text;

    app.elements.errorsArea.appendChild(errorBox);
  }

};

document.addEventListener('DOMContentLoaded', app.init);
