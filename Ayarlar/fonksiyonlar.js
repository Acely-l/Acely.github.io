$(document).ready(function(){

    $.SoruGöster=function(ElemanID){
        var SoruID=ElemanID;
        var IslenecekAlan="#"+ ElemanID;
        $(".CevapAlanı").slideUp();
        $(IslenecekAlan).parent().find(".CevapAlanı").slideToggle();




    }
});