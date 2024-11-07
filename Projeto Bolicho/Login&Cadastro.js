

var senha_certa;
var login_certo;

var cadastro = document.getElementById("form-cadastro");

if (cadastro) {
    cadastro.addEventListener("submit", function(e) {
        e.preventDefault();

        senha_certa = document.getElementById("senha").value;
        login_certo = document.getElementById("email").value;

        localStorage.setItem('getLogin', login_certo);
        localStorage.setItem('getSenha', senha_certa);

        var mensagem = document.getElementById("mensagem");

        if (login_certo && senha_certa) {
            mensagem.innerHTML = "<div style='padding: 15px; margin: 10px 0; border-radius: 5px; text-align: center; font-size: 16px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb;'>Cadastro realizado com sucesso.</div>";
            setTimeout(function() {
                window.location.href = "loginNovo.html";
            }, 3000);
        } else {
            mensagem.innerHTML = "<div style='padding: 15px; margin: 10px 0; border-radius: 5px; text-align: center; font-size: 16px; background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb;'>Indisponibilidade no servidor, tente novamente mais tarde.</div>";
        }
    });
}


var login = document.getElementById("form-login");

if (login) {
    login.addEventListener("submit", function(a) {
        a.preventDefault();

        var loginEmail = document.getElementById("email").value;
        var senha = document.getElementById("senha").value; 

        var mensagem = document.getElementById("mensagem"); 

        login_certo = localStorage.getItem('getLogin');
        senha_certa = localStorage.getItem('getSenha');

        if (login_certo === loginEmail && senha_certa === senha) {
            mensagem.innerHTML = "<div style='padding: 15px; margin: 10px 0; border-radius: 5px; text-align: center; font-size: 16px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb;'> Login efetuado com sucesso.</div>";
            setTimeout(function() {
                window.location.href = "home.html";
            }, 3000);
        } else {
            mensagem.innerHTML = "<div style='padding: 15px; margin: 10px 0; border-radius: 5px; text-align: center; font-size: 16px; background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb;'> Dados incorretos. Por favor, digite seus dados cadastrados.</div>";
        }
    });
}
