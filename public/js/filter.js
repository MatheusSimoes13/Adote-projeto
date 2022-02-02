



function filtro(){

    var i, input, nome, ul, li, teste;

    input = document.getElementById('input');
    // nome = input.value.toLowerCase();
    const nomesOng = document.querySelectorAll('.name');
    const ongs = document.querySelectorAll('.ulOng');


    console.log(ongs);
    console.log(nomesOng);

    // console.log(nomesOng[i].innerText);
    
    input.addEventListener('keyup',(e) => {
        e.preventDefault();
        const valorNome = input.value.toLowerCase().trim();

        for(i = 0; i < ongs.length; i++){
            if(nomesOng[i].innerText != valorNome){
                // console.log(nomesOng[i].parentNode);
                nomesOng[i].parentNode.style.display = "none";
            }else {
                nomesOng[i].parentNode.style.display = "block";
            }
        }

    //     for(i = 0; i < nomesOng.length; i++){
    //         if(nomesOng[i].classList.contains(valorNome)){
    //             nomesOng[i].style.display = "block";
    //         }else if (valorNome == ""){
    //             nomesOng[i].style.display = "block";
    //         } else{
    //             nomesOng[i].style.display = "none";
    //         }
    //     }

     }
    )

}



filtro();