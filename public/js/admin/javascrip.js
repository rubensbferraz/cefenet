$(document).ready(function(){
    var PORTA=":8989";
    var PAGINTERNA="/cefenet/";
    var DIRPAGE="http://"+document.location.hostname+PORTA+PAGINTERNA;
    var $nomeAdm = "";
    now = new Date
    if (now.getHours() >= 0 && now.getHours() < 5) {
        document.write('Olá nbsp' + $nomeAdm + 'você está de madrugada! - Tenha um bom trabalho.');
    } else if (now.getHours() >= 5 && now.getHours() < 12) {
        document.write('Olá ' + $nomeAdm + '  - Bom dia, => tenha um bom trabalho ');
    } else if (now.getHours() >= 12 && now.getHours() < 18) {
        document.write('Olá nbsp ' + $nomeAdm + '  - Boa Tarde, => tenha um bom trabalho.');
    } else {
        document.write('Olá nbsp' + $nomeAdm + '  - Boa Noite, => tenha um bom trabalho não deixe de descansar!');
    }
    });

