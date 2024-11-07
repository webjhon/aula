document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("voltar").addEventListener("click", function() {
        window.history.back();
}
)});


// COLONIAIS
 

 const precoPaoCaseiro = 3.00;
 const precoCucaDoceDeLeite = 17.00;
 const precoQueijoColonial = 26.00;


 document.addEventListener('DOMContentLoaded', function() {
  
    const adicionarPaoCaseiro = document.getElementById('adicionar-pao-caseiro');
    const adicionarCucaDoceDeLeite = document.getElementById('adicionar-cuca-doce-de-leite');
    const adicionarQueijoColonial = document.getElementById('adicionar-queijo-colonial');

    
   function atualizarTotal(preco) {
    
     let valorTotal = parseFloat(localStorage.getItem('valorTotal')) || 0;
     valorTotal += preco;
     localStorage.setItem('valorTotal', valorTotal.toFixed(2));
   }

   adicionarPaoCaseiro.addEventListener('click', function() {
     atualizarTotal(precoPaoCaseiro);
   });

   adicionarCucaDoceDeLeite.addEventListener('click', function() {
     atualizarTotal(precoCucaDoceDeLeite);
   });

   adicionarQueijoColonial.addEventListener('click', function() {
     atualizarTotal(precoQueijoColonial);
   });
 });

  document.addEventListener('DOMContentLoaded', function() {
     let valorTotal = parseFloat(localStorage.getItem('valorTotal')) || 0;
     document.getElementById('valor-total').innerHTML = `Total: R$ ${valorTotal.toFixed(2)}`;
   });

document.getElementById('zerar').addEventListener('click', function() {
    
    localStorage.setItem('valorTotal', '0.00');
    document.getElementById('valor-total').innerHTML = 'Total: R$ 0.00';
});




// COZINHA

const precoCozinha1 = 7.00; // Detergente Limpol Coco (500ml)
const precoCozinha2 = 5.00; // Kit 3 Esponjas Scotch Brite (kg)
const precoCozinha3 = 18.00; // Desengordurante Mr.Músculo (500ml)


document.addEventListener('DOMContentLoaded', function() {
  
    const adicionarCozinha1 = document.getElementById('adicionar-cozinha1');
    const adicionarCozinha2 = document.getElementById('adicionar-cozinha2');
    const adicionarCozinha3 = document.getElementById('adicionar-cozinha3');


    function atualizarTotal(preco) {
        let valorTotal = parseFloat(localStorage.getItem('valorTotal')) || 0;
        valorTotal += preco;
        localStorage.setItem('valorTotal', valorTotal.toFixed(2));
    }

    adicionarCozinha1.addEventListener('click', function() {
        atualizarTotal(precoCozinha1);
    });

    adicionarCozinha2.addEventListener('click', function() {
        atualizarTotal(precoCozinha2);
    });

    adicionarCozinha3.addEventListener('click', function() {
        atualizarTotal(precoCozinha3);
    });

   
});

document.addEventListener('DOMContentLoaded', function() {
    let valorTotal = parseFloat(localStorage.getItem('valorTotal')) || 0;
    document.getElementById('valor-total').innerHTML = `Total: R$ ${valorTotal.toFixed(2)}`;
});

document.getElementById('zerar').addEventListener('click', function() {
    localStorage.setItem('valorTotal', '0.00');
    document.getElementById('valor-total').innerHTML = 'Total: R$ 0.00';
});














