



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

            if(valorNome == "" || valorNome == null){
                nomesOng[i].parentNode.style.display = "inline-block";
            }
            else if(nomesOng[i].innerText == valorNome){
                nomesOng[i].parentNode.style.display = "inline-block";
            }
            else{
                nomesOng[i].parentNode.style.display = "none";
            }
            
            console.log(valorNome);
        }

    })

}



filtro();