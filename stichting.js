let open1 = document.getElementById("open1");
let open2 = document.getElementById("open2");
let open3 = document.getElementById("open3");
let zie1 = document.getElementById("zie1");
let zie2 = document.getElementById("zie2");
let zie3 = document.getElementById("zie3");
let tekst4 = document.getElementById("bovenlaagtekst4");
let tekst5 = document.getElementById("bovenlaagtekst5");
let tekst6 = document.getElementById("bovenlaagtekst6");
let kruis = document.getElementsByClassName("kruis");
let contact = document.getElementById("contact");
let formulier = document.getElementById("contactformulier");
let inhoudmail = document.getElementById("inhoudmail");
let verzend = document.getElementById("submit");//uitzoeken hoe formulier versturen!

let alltext = document.getElementsByTagName("div");




/*lettertype aanpassen bij Safari!*/
let browserkind = navigator.userAgent;
let os= browserkind.indexOf("OS") > -1;
let safari = browserkind.indexOf("Safari") > -1;
let uitkomst = ((os == true && safari == true) ? true : false);

if(uitkomst == true){
    for(let i=0; i < alltext.length; i++){
    alltext[i].style.fontFamily = "SmoothPapyrus";
    alltext[i].style.lineHeight = "25px";
}
verzend.style.fontFamily = "SmoothPapyrus";
}
else{
        for(let i=0; i < alltext.length; i++){
    alltext[i].style.fontFamily = "Fantasy";
}}






open1.addEventListener("click", unblock);
open2.addEventListener("click", unblock);
open3.addEventListener("click", unblock);
kruis[0].addEventListener("click", verberg);
kruis[1].addEventListener("click", verberg);
kruis[2].addEventListener("click", verberg);
kruis[3].addEventListener("click", verberg);
contact.addEventListener("click", contactformulier);



function unblock(event){
switch(event.target.id){
case "open1":
zie1.style.display="block";
tekst4.style.display = "block";
break;

case "open2":
zie2.style.display="block";
tekst5.style.display = "block";
break;

case "open3":
zie3.style.display="block";
tekst6.style.display = "block";
break;

}
}





function verberg(){
    zie1.style.display = "none";
    zie2.style.display = "none";
    zie3.style.display = "none";
    tekst4.style.display = "none";
    tekst5.style.display = "none";
    tekst6.style.display = "none";
    formulier.style.display = "none";
}

function contactformulier(){
    formulier.style.display = "block";
}

