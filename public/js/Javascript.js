$(document).ready(function(){
    var PORTA=":8989";
    var PAGINTERNA="/cefenet/";
    var DIRPAGE="http://"+document.location.hostname+PORTA+PAGINTERNA;
    
    $('#formSelectSexta').on('submit', function(event){
        event.preventDefault();
        var Dados=$(this).serialize();

        $.ajax({
            url: DIRPAGE+'palestra/seleciona',
            method: 'post',
            dataType: 'html',
            data: Dados,
            success: function(Dados){
                $('.resultadoSexta').html(Dados);
            }
        });
    });

    $(document).on('click','.ImageEdit', function(){
        var ImgRel=$(this).attr('rel');
        $.ajax({
            url:DIRPAGE+'cadastro/listaDB/'+ImgRel,
            method:'post',
            dataType:'html',
            data:{'Id':ImgRel},
            success:function(data){
                $('.ResultadoFormulario').html(data);
            }
        })

    })

});