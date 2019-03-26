var appRegister = {

    // Je créé une clé sous forme d'un tableau qui va contenir mes elementsNa
    elementsNa: [],
  
    // Je créé une clé sous forme d'un tableau qui va contenir mes messages d'erreurs
    errorsMsgNa: [],
  
    initNa: function() {
  
        // Me permet de vérifier que mon code est bien executé
        console.log('appRegister.init');
  
        // Je cible mon element qui va contenir mes messages d'erreurs
        appRegister.elementsNa.errorsArea = document.getElementById('errors-na');
  
        // Je cible mon element "form"
        appRegister.elementsNa.registerForm = document.getElementById('register-form');
  
        // Je cible mes inputs
        appRegister.elementsNa.fields = document.querySelectorAll('.field-input-na');
  
        // Je cible l'oeil
        // appRegister.elementsNa.reveal = document.getElementById('reveal-na');
  
        // J'execute la méthode qui va déployer les addEventListener sur mes elementsNa
        appRegister.createListeners();
  
        // Si jamais j'ai déjà des messages d'erreurs, je les affiche
        appRegister.displayErrors();
  
    },
  
    createListeners: function() {
  
        // Sur mon formulaire, à la soumission, je vérifierai mes champs
        appRegister.elementsNa.registerForm.addEventListener('submit', appRegister.handleFormSubmit);
  
        // Je vais boucler sur mon tableau de fields
        for (var index in appRegister.elementsNa.fields) {
            // index est la variable qui va contenir l'index de mes champs
            // 0, 1, ...
  
            // Je créé une variable field et je lui assigne l'element actuellement parcouru dans ma boucle
            var field = appRegister.elementsNa.fields[index];
  
            // Comme je fais un for ... in sur mon tableau de type "node-list"
            // (fourni par mon querySelectorAll)
            // je vais avoir également ma clé "length" de parcourue
            // du coup je vérifie que mon field est bien un objet avant de lui ajouter l'écouteur
            if (typeof field === 'object') {
  
                // Je peux ainsi ajouter mon écouteur sur tous les elementsNa ayant la classe "field-input"
                // ceux-ci ayant été "stockés" dans un tableau
                field.addEventListener('blur', appRegister.handleFieldBlur);
            }
        }
  
       // appRegister.elementsNa.reveal.addEventListener('click', appRegister.handleRevealClick);
    },
  
    // Fonction executée par mon addEventListener sur mon form a l'evenement submit
    handleFormSubmit: function(eventSubmit) {
  
  
  
        // Je nettoie les messages d'erreurs
        appRegister.errorsMsgNa = [];
  
        // Je viens boucler autant de fois que j'ai d'éléments dans mon
        // tableau de champs input "fields".
        // La clé length contient le nombre d'elementsNa dans mon tableau "fields"
        for (var index = 0; index < appRegister.elementsNa.fields.length; index++) {
  
            var field = appRegister.elementsNa.fields[index];
  
            // On vérifie tous nos champs
            appRegister.checkField(field);
        }
  
        // Si on a des messages d'erreurs à afficher...
        if (appRegister.errorsMsgNa.length > 0) {
  
            // Si j'ai des messages d'erreurs à afficher, alors:
  
            // 1 - j'annule la soumission du formulaire
            eventSubmit.preventDefault();
  
            // 2 - j'affiche les messages d'erreurs !
            appRegister.displayErrors();
        }
  
    },
  
    // Fonction executée par mon addEventListener sur mes fields a l'evenement blur
    handleFieldBlur: function(eventBlur){
  
        // Je récupere avec mon target l'element qui a déclenché l'evenement
        var field = eventBlur.target;
  
        appRegister.checkField(field);
    },
  
    checkField: function(field) {
  
        // Supprime les classes sur mes éléments si elles existent
        field.classList.remove('invalid');
        field.classList.remove('valid');
  
        // Si le champ n'est pas correctement renseigné
        if (field.value.length < 4) {
  
            // J'ajoute mon message d'erreur dans mon tableau de messages d'erreurs
            appRegister.errorsMsgNa.push('Le champ '+ field.placeholder +' doit contenir au moins 4 caractères');
  
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
        appRegister.elementsNa.errorsArea.innerHTML = '';
  
        for (var index in appRegister.errorsMsgNa) {
  
            appRegister.generateErrorBox(appRegister.errorsMsgNa[index]);
            // console.log(appRegister.errorsMsgNa[index]);
        }
    },
  
    generateErrorBox: function(text) {
  
        // Méthode simple pour ajouter un element dans mon DOM
        // l'inconvénient est qu'on doit concatener...
        // appRegister.elementsNa.errorsArea.innerHTML += '<div class="error">'+text+'<div>';
  
        // Je créé un nouvel element du DOM
        var errorBox = document.createElement('div');
  
        // J'assigne une class à mon element
        errorBox.className = 'error';
        // J'assign un texte à mon element
        errorBox.textContent = text;
  
        // Je place l'element dans le DOM (et donc dans la page)
        // appRegisterendChild me permet de dire: "je t'ajouter un nouvel element enfant"
        appRegister.elementsNa.errorsArea.appendChild(errorBox);
    },
  
    handleRevealClick: function() {
  
        // je selectionne le champ password
        var fieldPassword = document.getElementById('field-password');
  
        // Si il a un type "password"
        if (fieldPassword.type === 'password') {
  
            // je le change en text pour l'afficher
            fieldPassword.type = 'text';
  
        // Sinon
        } else {
  
            // je le remet en password
            fieldPassword.type = 'password';
        }
    }
  
  };
  
  // Je prends mon document et je lui ajoute un écouteur d'évenement
  // ainsi lorsque le document aura fini de construire le DOM
  // il executera ma méthode 'init' de mon objet 'appRegister'
  document.addEventListener('DOMContentLoaded', appRegister.initNa);