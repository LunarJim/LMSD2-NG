var app = {

  elements: [],

  errorsMsg: [],

  init: function() {
    console.log('app.init');

    app.elements.errorsArea = document.getElementById('errors');

    app.elements.loginForm = document.getElementById('login-form');

    app.elements.fields = document.querySelectorAll('.field-input');

    app.createListeners();

    app.displayErrors();
  },

  createListeners: function() {
    app.elements.loginForm.addEventListener('submit', app.handleFormSubmit);

    for (var index in app.elements.fields) {
      var field = app.elements.fields[index];
    }
  },

  handleFormSubmit: function(eventSubmit) {
    app.errorsMsg = [];

    for (var index = 0; index < app.elements.fields.length; index++) {
      var field = app.elements.fields[index];

      app.checkField(field);
    }

    if (app.errorsMsg.length > 0) {
      eventSubmit.preventDefault();

      app.displayErrors();
    }
  },

  checkField: function(field) {
    if (field.value.length < 6) {
      app.errorsMsg.push('Le champ ' + field.placeholder + ' doit contenir au moins 6 caractères');
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
