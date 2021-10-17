'use strict'

// use document.querySelector para obtener la referencia de botón
const switcher = document.querySelector('.btn');

// agregue la escucha de eventos y el controlador de eventos para el evento click

switcher.addEventListener('click', function() {
    document.body.classList.toggle('dark-theme')

    var className = document.body.className;
    if(className == "light-theme") {
        this.textContent = "Dark";
    }
    else {
        this.textContent = "Light";
    }


    // Se crea un mensaje en la consola
    console.log('current class name: ' + className);

});