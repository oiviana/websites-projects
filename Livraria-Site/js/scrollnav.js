//identificar o clique no menu
//Verificar o item que foi clicado e fazer referência ao alvo
//verificar a distância entre o alvo e o topo
//Animar scroll até o alvo

$('nav a').click(function(e){

    e.preventDefault(); //tirar comportamento padrão do link 

    var id = $(this).attr('href'), //vai manipular o href dentro da nav
        targetOffset = $(id).offset().top //capturar a distância do id que foi clicado

        $('html, body').animate({ //animar o html e o body
         scrollTop: targetOffset - 161 //vai do topo da página até o alvo
        },900)                         //subtraindo o valor da navbar      
});

