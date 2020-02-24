let disableMenu = false; // false = afficher menu
let menuOn = true;
let listCertificats = null;
let nbLignesParAffichage = 8;
let debutAffichageCertificat = 0;

// Modifier tagName de la balise d'id image selon la largeur de l'ecran
function imageSectionOrDiv() {
    if (
        (
            $('#image').prop("tagName").toLowerCase() != 'div'
            && $(window).width() > 575
            && $(window).width() < 992
        )
        || $(window).width() > $(window).height()
    ) {
        $('#image').replaceWith('<div id="image">' + $('#image').html() + '</div>')
        $('#image').attr
        (
            "class"
            , "col-lg-2 col-md-6 col-pr-2 col-6 order-lg-1 order-md-2 order-xs-2 order-2 order-pr-1 landscape"
        )

    }
    if (
        ($('#image').prop("tagName").toLowerCase() == 'div'
            && ($(window).width() < 576 || $(window).width() > 991)
        )
        || $(window).width() < $(window).height()
    ) {
        $('#image').replaceWith('<section id="image">' + $('#image').html() + '</section>')
        $('#image').attr
        (
            "class"
            , "col-lg-2 col-md-6 col-pr-2 col-12 order-lg-1 order-md-2 order-xs-2 order-2 order-pr-1 landscape"
        )
    }
    // console.log("$(#image)", $('#image')[0])
}

function redimensionEcran() {
    console.log('page height : ',$("#page").height());
    $(".fenetre > section").height($("#page").height());
    console.log('fenetre height : ',$(".fenetre > section").first().height());
    console.log('window height : ',$(window).first().height());
    imageSectionOrDiv();
    if($(window).width() < 577){
        $('.menuLabel').css('display','none');
        $('nav').css('text-align','left');
        $('.menuOff').prop('disabled', !menuOn);
        $('.menuOn').prop('disabled', menuOn);
    }else{
        $('.menuLabel').css('display','');
        $('.menuOff').prop('disabled', menuOn);
        $('.menuOn').prop('disabled', !menuOn);
    }
}

$(document).ready(function () {

    redimensionEcran();
    $(window).bind('resizeEnd', function () {
        afficherCertificatsParPage();
        imageSectionOrDiv();
        redimensionEcran();
    });
    disableMenu = $(window).height() > $(window).width();
    $("span.etoile").each(function (index) {

        const spanValue = $(this).text();
        const svgObject = creatSVG($(this), index + "_" + spanValue.replace('.', '-'));

        console.log(
            "each : spanValue:", spanValue
            , "\t" + index + ": html", $(this).html()
            , '\tsvgObject :', svgObject
        );
    });

    $("#nbCertificatsOpenClassRooms").load("js/certificats-OpenClassRooms.json", function (responseTxt, statusTxt, xhr) {
        /**/
        if (statusTxt == "success") {
            listCertificats = JSON.parse(responseTxt);
            console.log("Success: -" + xhr.status + "- External content loaded successfully!");
            $("#nbCertificatsOpenClassRooms").html(listCertificats.length);
            let htmlCertificats = "";
            listCertificatsSortBy("name");

            console.log("responseTxt: -" + $(this).attr('id') + "\n" + htmlCertificats)
        }
        /**/

        if (statusTxt == "error") {
            const message = "Error: " + xhr.status + " : " + xhr.statusText +
                '\n<br />Erreur du téléchargement du fichier contenant ' +
                'les infos utiles pour renseigner cette zone'
            console.log(message)
            $("#OpenClassRooms").prepend(message)


        }
    });

});

$(window).resize(function () {
    if (this.resizeTO) clearTimeout(this.resizeTO);
    this.resizeTO = setTimeout(function () {
        $(this).trigger('resizeEnd');
    }, 100);

});

function creatSVG(afterElm, id) {
    var svg = document.createElement("object")
    //svg.setAttribute('id', "svg-" + id)
    svg.setAttribute('id', "svg-" + 0)
    svg.data = "/img/" + id.split("_")[1] + ".svg";
    svg.type = "image/svg+xml";
    svg.style = "display: inline;float: right;width:32%;max-height:1em";
    var embed = document.createElement("embed")
    embed.setAttribute('id', "embed-" + id)
    embed.src = "/img/" + id + ".svg";
    embed.type = "image/svg+xml";
    embed.style = "display: inline;float: right;";
    svg.append(embed);
    afterElm.after(svg);
    return svg.contentDocument;
}

function listCertificatsSortBy(sortBy) {
    listCertificats.sort(function (a, b) {
        if (sortBy != "name") {
            $("#listCertificatsSortBy").html("<i class='fa fa-sort-amount-asc' aria-hidden='true'></i> N° du certificat");
            $("#listCertificatsSortBy").attr("onclick", "listCertificatsSortBy('name')");
            return Number(a.url.split('/').pop()) - Number(b.url.split('/').pop());
        }
        $("#listCertificatsSortBy").html("<i class='fa fa-sort-amount-asc' aria-hidden='true'></i> libelé du certificat");
        $("#listCertificatsSortBy").attr("onclick", "listCertificatsSortBy('numero')");
        return a.name.localeCompare(b.name);
    });
    debutAffichageCertificat = 0;
    $("#certificatsLeft").prop('disabled', true);
    $("#certificatsRight").prop('disabled', false);
    afficherCertificatsParPage()
}
// listCertificats, nbLignesParAffichage
function afficherCertificats(id,list, debutAffichage,nbLignesParAffichage) {
    $(id).html('');
    for (let i = 0; i < nbLignesParAffichage; i++) {
        const index = debutAffichage + i;
        if (index > -1 && index < list.length) {
            $(id).append('<a href="' + list[index].url + '" target="certificat">' +
                '<i class="fa fa-file-pdf-o"> </i> '
                + list[index].name + '</a>\n')
            //$("#certificatsOpenClassRooms").append(htmlCertificats);

            // console.log(i, ':  name :', listCertificats[index].name
            //     , ': url : ', listCertificats[index].url
            // );
        }
    }
}

function afficherCertificatsParPage() {
    let scrollCertificatsOpenClassRooms =
        //$("#certificatsOpenClassRooms ").prop('scrollHeight')* .8< $("#certificatsOpenClassRooms").height();
        $("#OpenClassRooms ").height() * .6 < $("#certificatsOpenClassRooms").height();
    disableMenu = $(window).height() > $(window).width() || $(window).width() < 768;
    nbLignesParAffichage = listCertificats.length;
    do {
        nbLignesParAffichage--;
        afficherCertificats( "#certificatsOpenClassRooms",listCertificats,debutAffichageCertificat,nbLignesParAffichage);
        const height = $("#OpenClassRooms ").prop('scrollHeight');
        const scrollHeight = $("#certificatsOpenClassRooms").prop('scrollHeight');
        scrollCertificatsOpenClassRooms =
            $("#OpenClassRooms ").height() * .7 < $("#certificatsOpenClassRooms").height();
        console.log(
            'nbLignesParAffichage : ', nbLignesParAffichage
            , '\theight : ', height
            , '\tscrollHeight : ', scrollHeight
            , '\t(height * 1.2) < scrollHeight : ', (height * 1.2) < scrollHeight
            , '\tcrollCertificatsOpenClassRooms : ', scrollCertificatsOpenClassRooms
            , '\nwindow width : ', $(window).width()
            , '\ndisableMenu : ', disableMenu);
    } while (scrollCertificatsOpenClassRooms)
}

function nextPage(nb) {
    console.log('nb ', nb, '\t ', debutAffichageCertificat)
    let debut = debutAffichageCertificat + nbLignesParAffichage * nb;
    debutAffichageCertificat = (debut > -1 && debut < listCertificats.length) ? debut : debutAffichageCertificat;
    debut = debutAffichageCertificat + nbLignesParAffichage * nb;
    if (debut < 0) {
        $("#certificatsLeft").prop('disabled', true);
    } else {
        $("#certificatsLeft").prop('disabled', false);
    }
    if (debut > listCertificats.length - 1) {
        $("#certificatsRight").prop('disabled', true);
    } else {
        $("#certificatsRight").prop('disabled', false);
    }

    console.log('nb ', nb, '\t ', debutAffichageCertificat)
    afficherCertificats( "#certificatsOpenClassRooms",listCertificats,debutAffichageCertificat,nbLignesParAffichage);
}

function afficheMenu(message) {
    if (message == 'menuOff') {
        $('.menuOff').prop('disabled', true);
        $('.menuOn').prop('disabled', false);
        $('nav').animate({'max-height': '10vh'}, 500);
    }
    if (message == 'menuOn') {
        $('.menuOff').prop('disabled', false);
        $('.menuOn').prop('disabled', true);
    }
}

