export default function cookies() {
  let $mostrar = document.querySelector(".mostrar");
  let $ocultar = document.querySelector(".ocultar");
  let $politicas = document.querySelector(".-polics-cookies");

  if (localStorage.controlcookie > 0) {
    $politicas.classList.add("hide-cookies");
  }

  $mostrar.addEventListener("click", (e) => {
    $politicas.className = $politicas.className.replace("hide-cookies", "");
  });

  $ocultar.addEventListener("click", (e) => {
    localStorage.controlcookie = localStorage.controlcookie || 0;
    localStorage.controlcookie++; //Se incrementa el valor
    $politicas.classList.add("hide-cookies");
  });
}
