
// Selecciona el documento con la clase ".product-container"

const productContainers = [...document.querySelectorAll('.product-container')];

// Selecciona el documento con la clase ".nxt-btn"

const nxtBtn = [...document.querySelectorAll('.nxt-btn')];

// Selecciona el documento con la clase ".pre-btn"

const preBtn = [...document.querySelectorAll('.pre-btn')];

// Para cada item en i

productContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();

    // Establece el width del container con las dimensiones en el html.

    let containerWidth = containerDimensions.width;


    // Le da una scroll a la izquierda del tamaño del container


    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })


    // Le da un scroll a la derecha del tamaño del container

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })
})


// El codigo del carousel se obutvo de: https://youtu.be/OQZNAMjC6Vg