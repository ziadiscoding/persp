document.getElementById('temoignage').addEventListener('click', () => {
    displayTemoignage();
})

function displayTemoignage() {
    console.log('%cTEMOIGNAGE JS', 'font-size:2rem;');
    document.getElementById('sliderTemoignageDisplay').classList.toggle('display');
    const listTemoignages = document.querySelectorAll('#sliderTemoignage > li');
    console.log(listTemoignages);
    document.getElementById('sliderTemoignageDisplay').innerHTML = listTemoignages[0].outerHTML;
}