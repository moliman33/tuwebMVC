 function slider(){
    //Acceso a imagenes 
    let slideimagenes = document.querySelectorAll('img');
    //Acceso a botones next y prev
    let next = document.querySelector('.next');
    let prev = document.querySelector('.prev');
    //Acceso a los indicadores
    let indicador = document.querySelectorAll('.indicador');

    let dots = document.querySelector('.dots');

    var counter = 0;
    next.addEventListener('click', slideNext);
    function slideNext(){
        slideimagenes[counter].style.animation = 'next1 0.5s ease-in forwards';
        if(counter >= slideimagenes.length-1){
            counter = 0;
        }else{
            counter ++;
        }
        slideimagenes[counter].style.animation = 'next2 0.5s ease-in forwards';
        indicadores();
    }

    prev.addEventListener('click', slidePrev);
    function slidePrev(){
        slideimagenes[counter].style.animation = 'prev1 0.5s ease-in forwards';
        if(counter == 0){
            counter = slideimagenes.length-1;
        }else{
            counter --;
        }
        slideimagenes[counter].style.animation = 'prev2 0.5s ease-in forwards';
        indicadores();
    }

    //slider Automatico
    let deleteInterval;
    function autoSlide(){
        deleteInterval = setInterval(timer, 2000);
        function timer(){
            slideNext();
        }
    }
    autoSlide();

    //Agregar y remover la clase active de los indicadores

    let i;
    function indicadores(){
        for(i=0; i < indicador.length; i++){
            indicador[i].className = indicador[i].className.replace(' active', '');
        }
        indicador[counter].className += ' active';
    }

    //mouse over
    const contenedor = document.querySelector('.contenedor-slide');
    contenedor.addEventListener('mouseover', function(){
        clearInterval(deleteInterval);
    });
    contenedor.addEventListener('mouseout', autoSlide);

    //Agregar un evento click a los indicadores
    dots.addEventListener('click', (e) => {
        if(e.target.className === ('indicador')){
            var imagenId = e.target.getAttribute('attr');
            if(imagenId > counter){
                slideimagenes[counter].style.animation = 'next1 0.5s ease-in forwards';
                counter = imagenId;
                slideimagenes[counter].style.animation = 'next2 0.5s ease-in forwards';
            }else if(imagenId == counter){
                return;
            }else{
                slideimagenes[counter].style.animation = 'prev1 0.5s ease-in forwards';
                counter = imagenId;
                slideimagenes[counter].style.animation = 'prev2 0.5s ease-in forwards';
            }
            indicadores();
        }
    });

    
}

document.addEventListener("DOMContentLoaded", (e) => {
 
    slider();
    
 
 });
