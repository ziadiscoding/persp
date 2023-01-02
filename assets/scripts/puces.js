// pour l'instant only pro page id 12

const thisElement = document.querySelectorAll('.content ul li');
console.log('thisElement', thisElement);

// add span begin li

thisElement.forEach(oneLi => {
    oneLi.innerHTML = '<span></span>' + oneLi.innerHTML;
});