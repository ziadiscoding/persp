const listTemoignages = document.querySelectorAll('#sliderTemoignage > li');
console.log(listTemoignages);
let count = 0;

document.getElementById('temoignage').addEventListener('click', () => {
    document.getElementById('sliderTemoignageDisplay').classList.toggle('display');
    displayTemoignage();
})

document.getElementById('close').addEventListener('click', () => {
    document.getElementById('sliderTemoignageDisplay').classList.toggle('display');
})

document.getElementById('before').addEventListener('click', () => {
    if (count === 0) {
        count = listTemoignages.length - 1;
    } else {
        count = count - 1;
    }
    console.log('before', count);
    displayTemoignage();
})

document.getElementById('after').addEventListener('click', () => {
    if (count === (listTemoignages.length - 1)) {
        count = 0;
    } else {
        count = count + 1;
    }
    console.log('after', count);
    displayTemoignage();
})

function displayTemoignage() {
    // console.log('%cTEMOIGNAGE JS', 'font-size:2rem;');
    // console.log(listTemoignages);
    let step = 50;
    if (document.querySelector('#sliderTemoignageDisplay__ul > li')) {
        document.querySelector('#sliderTemoignageDisplay__ul > li').classList.toggle('opacity');
        step = 200;
    }
    setTimeout(() => {
        document.getElementById('sliderTemoignageDisplay__ul').innerHTML = listTemoignages[count].outerHTML;
    }, step);
    setTimeout(() => {
        document.querySelector('#sliderTemoignageDisplay__ul > li').classList.toggle('opacity');
    }, step * 2);
}