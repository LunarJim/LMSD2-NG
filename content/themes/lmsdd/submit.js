var app = {

    // Je créé une clé sous forme d'un tableau qui va contenir mes elements
    elements: [],
  
    // Je créé une clé sous forme d'un tableau qui va contenir mes messages d'erreurs
    errorsMsg: [],
  
    init: function() {
  
        // Me permet de vérifier que mon code est bien executé
        console.log('app.init');
  
        // Je cible mon element qui va contenir mes messages d'erreurs
        app.elements.errorsArea = document.getElementById('errors-submit');
  
        // Je cible mon element "form"
        app.elements.submitForm = document.getElementById('submit-form');
  
        // J'execute la méthode qui va déployer les addEventListener sur mes elements
        app.createListeners();
  
        // Si jamais j'ai déjà des messages d'erreurs, je les affiche
        app.displayErrors();
  
    },
  
    createListeners: function() {
  
        // Sur mon formulaire, à la soumission, je vérifierai mes champs
        app.elements.submitForm.addEventListener('submit', app.handleSubmitForm);
  
        // Je vais boucler sur mon tableau de fields
  
    },
  
    // Fonction executée par mon addEventListener sur mon form a l'evenement submit
    handleSubmitForm: function(eventSubmit) {
  
  
  
        // Je nettoie les messages d'erreurs
            app.errorsMsg = [];
  
        // Je viens boucler autant de fois que j'ai d'éléments dans mon
        // tableau de champs input "fields".
        // La clé length contient le nombre d'elements dans mon tableau "fields"  
        // Si on a des messages d'erreurs à afficher...
        if (app.errorsMsg.length > 0) {
  
            // Si j'ai des messages d'erreurs à afficher, alors:
  
            // 1 - j'annule la soumission du formulaire
            eventSubmit.preventDefault();
  
            // 2 - j'affiche les messages d'erreurs !
            app.displayErrors();
        }
  
    },
  
    displayErrors: function() {
  
        // Je supprime les messages d'erreurs affichés
        // Je prend l'element qui contient les messages d'erreurs
        // et je vide son innerHTML
        // cela me permet de supprimer a la fois le texte et les div
        app.elements.errorsArea.innerHTML = '';
  
        for (var index in app.errorsMsg) {
  
            app.generateErrorBox(app.errorsMsg[index]);
            // console.log(app.errorsMsg[index]);
        }
    },
  
    generateErrorBox: function(text) {
  
        // Méthode simple pour ajouter un element dans mon DOM
        // l'inconvénient est qu'on doit concatener...
        // app.elements.errorsArea.innerHTML += '<div class="error">'+text+'<div>';
  
        // Je créé un nouvel element du DOM
        var errorBox = document.createElement('div');
  
        // J'assigne une class à mon element
        errorBox.className = 'error alert alert-danger';
        // J'assign un texte à mon element
        errorBox.textContent = text;
  
        // Je place l'element dans le DOM (et donc dans la page)
        // appendChild me permet de dire: "je t'ajouter un nouvel element enfant"
        app.elements.errorsArea.appendChild(errorBox);
    }
  
    
        
};
  
  // Je prends mon document et je lui ajoute un écouteur d'évenement
  // ainsi lorsque le document aura fini de construire le DOM
  // il executera ma méthode 'init' de mon objet 'app'
  document.addEventListener('DOMContentLoaded', app.init);