window.onload = function(){
    
    let titre = document.getElementById("titre_connaissances");
    let slide1 = document.getElementById("slide_cns1");
    let slide2 = document.getElementById("slide_cns2");
    let slide3 = document.getElementById("slide_cns3");
    let slide4 = document.getElementById("slide_cns4");
    let slide5 = document.getElementById("slide_cns5");

    $('#carouselConnaissances').on('slid.bs.carousel', function () {
        
        if(slide1.className.indexOf("active") != -1 ){
            titre.innerHTML = "Mes Connaissances en WEB";
        
        }else if(slide2.className.indexOf("active") != -1 ){
            titre.innerHTML = "Mes Connaissances en Base de données";
        
        }else if(slide4.className.indexOf("active") != -1 ){
            titre.innerHTML = "Mes Connaissances en Programmation";

        }else if(slide5.className.indexOf("active") != -1 ){
            titre.innerHTML = "Les logiciels que j'utilise";
        }

    });

}