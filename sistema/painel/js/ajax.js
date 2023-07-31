$(document).ready(function() {    
    listar();    
} );


function listar(){
    $.ajax({
        url: pagina + "/listar.php",
        method: 'POST',
        data: $('#form').serialize(),
        dataType: "html",

        success:function(result){
            $("#listar").html(result);
            $('#mensagem-excluir').text('');
        }
    });
}



function inserir(){
    $('#mensagem').text('');
    $('#titulo_inserir').text('Inserir Registro');
    $('#modalForm').modal('show');
    limparCampos();
}





/*passando 2 parametros*/
function alteraImg(img, input) {
    var target = document.getElementById(img);/*pq ela vemprimeiro ao selecionar*/
    var file = document.querySelector(input).files[0];

    var reader = new FileReader();

    reader.onloadend = function () {
        target.src = reader.result;
    };

    if (file) {
        reader.readAsDataURL(file);

    } else {
        target.src = "";
    }
}


/*função ela vai pegar oque vem do input name="logo" ao receber uma imagem ele vai exibir essa imagem no id go-Logo*/

/*ou seja recebe em cima no input e exibe em baixo*/