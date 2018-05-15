function addOnList(files){ //Ajouter l'elem dans la liste

    console.log($('#input-add-files'));
    var liElem = $('<li class="list-elem">');
    var spanElem =  $('<span class="list-elem-1">').html(files[0].name);
    var inputContainerElem = $('<div class="d-none '+ files[0].name + '">');
    $('#input-add-files').clone().appendTo(inputContainerElem);
    var divElem =  $('<div class="list-elem-2" onclick="deleteMe($(this))">').html('x');
    liElem.append(spanElem, inputContainerElem,divElem);
    $('.list-container').append(liElem);


    //      /!\ Le fichier est stocké dans l'input qui est dans inputContainerElem
}

function deleteMe(elem){  //enlever l'element de la liste
    elem.parent('li').remove();
}

function checkAllFiles() {              //Pour parser tous les fichiers sélectionnés
    $('.list-container > li').each(function () {
       $(this).css('background-color', getRandomColor());
       //alert("Mon nom de fichier est : " + $(this).find('input')[0].files[0].name); // Tu peux enlever le commentaire au debut de la ligne pour tester.
    });
}

function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}