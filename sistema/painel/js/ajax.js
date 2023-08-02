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
    $('#titulo_inserir').text('Inserir um novo registro');
    $('#modalForm').modal('show');
    limparCampos();
}




$("#form").submit(function () {

    event.preventDefault();
    var formData = new FormData(this);

    $.ajax({
        url: pagina + "/salvar.php",
        type: 'POST',
        data: formData,

        success: function (mensagem) {
            $('#mensagem').text('');
            $('#mensagem').removeClass()
            if (mensagem.trim() == "Salvo com Sucesso") {

                $('#btn-fechar').click();
                listar();          

            } else {

                $('#mensagem').addClass('text-danger')
                $('#mensagem').text(mensagem)
            }


        },

        cache: false,
        contentType: false,
        processData: false,

    });

});




function excluir(id){
    $.ajax({
        url: pagina + "/excluir.php",
        method: 'POST',
        data: {id},
        dataType: "text",

        success: function (mensagem) {            
            if (mensagem.trim() == "Excluído com Sucesso") {                
                listar();                
            } else {
                $('#mensagem-excluir').addClass('text-danger')
                $('#mensagem-excluir').text(mensagem)
            }

        },      

    });
}






/* alterar imagem passando 2 parametros*/
function alteraImg(img, input) {
    var target = document.getElementById(img);/*pq ela vem primeiro ao selecionar*/
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