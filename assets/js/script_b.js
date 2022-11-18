

//-----------------------CUERPO--------------------------------
if(document.querySelector('#container-slider-b')){
    setInterval('fntExecuteSlide("next")',5000);
 }
 //------------------CARRUSEL DESLIZANTE -------------------------
 if(document.querySelector('.listslider-b')){
    let link = document.querySelectorAll(".listslider-b li a");
    link.forEach(function(link) {
       link.addEventListener('click', function(e){
          e.preventDefault();
          let item = this.getAttribute('itlist');
          let arrItem = item.split("_");
          fntExecuteSlide(arrItem[1]);
          return false;
       });
     });
 }
 
function fntExecuteSlide(side){
    let parentTarget = document.getElementById('slider-b');
    let elements = parentTarget.getElementsByTagName('li');
    let curElement, nextElement;

    for(var i=0; i<elements.length;i++){

        if(elements[i].style.opacity==1){
            curElement = i;
            break;
        }
    }
    if(side == 'prev' || side == 'next'){

        if(side=="prev"){
            nextElement = (curElement == 0)?elements.length -1:curElement -1;
        }else{
            nextElement = (curElement == elements.length -1)?0:curElement +1;
        }
    }else{
        nextElement = side;
        side = (curElement > nextElement)?'prev':'next';

    }
    //---------------------RESALTA LOS PUNTOS-----------------------------
    let elementSel = document.getElementsByClassName("listslider-b")[0].getElementsByTagName("a");
    elementSel[curElement].classList.remove("item-select-slid");
    elementSel[nextElement].classList.add("item-select-slid");
    elements[curElement].style.opacity=0;
    elements[curElement].style.zIndex =0;
    elements[nextElement].style.opacity=1;
    elements[nextElement].style.zIndex =1;
}


addEventListener('DOMContentLoaded',() => {
    const btn_menu =document.querySelector('.bi bi-list')

    if(btn_menu){
        btn_menu.addEventListener('click',()=>{
            const menu_items = document.querySelector('.menu-items')
            menu_items.classList.toggle('show')
        })
    }
})