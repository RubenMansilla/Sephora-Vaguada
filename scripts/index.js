// * Cuando el archivo haya cargado completamente, se ejecuta la función
document.addEventListener('DOMContentLoaded', function() {

    // * heroImages es un array que contiene los elementos HTML del lado izquierdo del hero (el grande)
    const heroImages = [];

    // * Agregamos los elementos HTML al array con el id, push es agregar al final del array en JS
    heroImages.push(document.getElementById('heroImage1'));
    heroImages.push(document.getElementById('heroImage2'));
    heroImages.push(document.getElementById('heroImage3'));
    heroImages.push(document.getElementById('heroImage4'));
    
    // * heroSelectors es un array que contiene los elementos HTML del lado derecho del hero (los pequeños que se pueden seleccionar)
    const heroSelectors = [];

    // * Agregamos los elementos HTML al array según el id
    heroSelectors.push(document.getElementById('heroSelector1'));
    heroSelectors.push(document.getElementById('heroSelector2'));
    heroSelectors.push(document.getElementById('heroSelector3'));
    heroSelectors.push(document.getElementById('heroSelector4'));

    // * Agregamos un evento click a cada uno de los elementos del array heroSelectors, cuando se haga click en alguno de ellos, se ejecuta la función, empezamos recorriendo el array con un for
    for(let i = 0; i < heroSelectors.length; i++) {

        heroSelectors[i].addEventListener('click', function() {

            // * La función recorre el array heroImages y heroSelectors, y remueve la clase imageActual y heroSelectorActual a todos los elementos si es que la tienen
            for(let j = 0; j < heroImages.length; j++) {
                heroImages[j].classList.remove('imageActual');
                heroSelectors[j].classList.remove('heroSelectorActual');
            }

            // * Luego, agrega la clase imageActual y heroSelectorActual al elemento que se le hizo click, de esta forma, se muestra la imagen correspondiente
            heroImages[i].classList.add('imageActual');
            heroSelectors[i].classList.add('heroSelectorActual');

        });
    }
});
