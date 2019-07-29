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
  
        // Je cible mes inputs
        app.elements.fields = document.querySelectorAll('.field-input');
  
        // J'execute la méthode qui va déployer les addEventListener sur mes elements
        app.createListeners();
  
        // Si jamais j'ai déjà des messages d'erreurs, je les affiche
        app.displayErrors();
  
    },
  
    createListeners: function() {
  
        // Sur mon formulaire, à la soumission, je vérifierai mes champs
        app.elements.submitForm.addEventListener('submit-form', app.handleSubmitForm);
  
        // Je vais boucler sur mon tableau de fields
        for (var index in app.elements.fields) {
            // index est la variable qui va contenir l'index de mes champs
            // 0, 1, ...
  
            // Je créé une variable field et je lui assigne l'element actuellement parcouru dans ma boucle
            var field = app.elements.fields[index];
  
            // Comme je fais un for ... in sur mon tableau de type "node-list"
            // (fourni par mon querySelectorAll)
            // je vais avoir également ma clé "length" de parcourue
            // du coup je vérifie que mon field est bien un objet avant de lui ajouter l'écouteur
            if (typeof field === 'object') {
  
                // Je peux ainsi ajouter mon écouteur sur tous les elements ayant la classe "field-input"
                // ceux-ci ayant été "stockés" dans un tableau
                field.addEventListener('blur', app.handleFieldBlur);
            }
        }
  
    },
  
    // Fonction executée par mon addEventListener sur mon form a l'evenement submit
    handleSubmitForm: function(eventSubmit) {
  
  
  
        // Je nettoie les messages d'erreurs
        app.errorsMsg = [];
  
        // Je viens boucler autant de fois que j'ai d'éléments dans mon
        // tableau de champs input "fields".
        // La clé length contient le nombre d'elements dans mon tableau "fields"
        for (var index = 0; index < app.elements.fields.length; index++) {
  
            var field = app.elements.fields[index];
  
            // On vérifie tous nos champs
            app.checkField(field);
        }
  
        // Si on a des messages d'erreurs à afficher...
        if (app.errorsMsg.length > 0) {
  
            // Si j'ai des messages d'erreurs à afficher, alors:
  
            // 1 - j'annule la soumission du formulaire
            eventSubmit.preventDefault();
  
            // 2 - j'affiche les messages d'erreurs !
            app.displayErrors();
        }
  
    },
  
  
    checkField: function(field) {
  
        // Supprime les classes sur mes éléments si elles existent
        field.classList.remove('invalid');
        field.classList.remove('valid');
  
        // Si le champ n'est pas correctement renseigné
        if (field.value.length < 40) {
  
            // J'ajoute mon message d'erreur dans mon tableau de messages d'erreurs
            app.errorsMsg.push('Es-tu sûr(e) de ta citation ? Elle fait moins de 40 caractères là !');
  
            // J'ajoute une classe d'erreur
            field.classList.add('invalid');
  
        } else {
  
            // J'ajoute une classe "valid"
            field.classList.add('valid');
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