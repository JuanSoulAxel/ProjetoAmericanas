/*MOSTRAR MENUS AO PASSAR MOUSE POR CIMA E FAZÊ-LOS DESAPERECER AO TIRAR MOUSE*/
var moutcel = document.querySelector("#mout-cel"); //pegando o botão
moutcel.addEventListener("mouseover", function() { //quando mouse tiver em cima
    $("#p3-menu-escondido1").show();
});
moutcel.addEventListener("mouseout", function() { //quando mouse não estiver em cima
    $("#p3-menu-escondido1").hide();
    $("#cor-p2-carrossel").show();
});

var mouteled = document.querySelector("#mout-eled");
mouteled.addEventListener("mouseover", function(){
    document.getElementById("p3-menu-escondido2").setAttribute("style","opacity:1; -moz-opacity:0.5; filter:alpha(opacity=50)"); //utilizei esse diferente, pois já tinha usado um tipo de display no css
    $("#cor-p2-carrossel").hide();
});
mouteled.addEventListener("mouseout", function(){
    $("#p3-menu-escondido2").hide();
    $("#cor-p2-carrossel").show();
});

var moutinf = document.querySelector("#mout-inf");
moutinf.addEventListener("mouseover", function() {
    $("#p3-menu-escondido3").show();
    $("#cor-p2-carrossel").hide();
});
moutinf.addEventListener("mouseout", function() { 
    $("#p3-menu-escondido3").hide();
    $("#cor-p2-carrossel").show();
});

var mouttvht = document.querySelector("#mout-tvht");
mouttvht.addEventListener("mouseover", function() { 
    $("#p3-menu-escondido4").show();
    $("#cor-p2-carrossel").hide();
});
mouttvht.addEventListener("mouseout", function() { 
    $("#p3-menu-escondido4").hide();
    $("#cor-p2-carrossel").show();
});

var moutelep = document.querySelector("#mout-elep");
moutelep.addEventListener("mouseover", function() { 
    document.getElementById("p3-menu-escondido5").setAttribute("style","opacity:1; -moz-opacity:0.5; filter:alpha(opacity=50)"); //utilizei esse diferente, pois já tinha usado um tipo de display no css
    $("#cor-p2-carrossel").hide();
});
moutelep.addEventListener("mouseout", function() { 
    $("#p3-menu-escondido5").hide();
    $("#cor-p2-carrossel").show();
});

var moutmov = document.querySelector("#mout-mov");
moutmov.addEventListener("mouseover", function() { 
    document.getElementById("p3-menu-escondido6").setAttribute("style","opacity:1; -moz-opacity:0.5; filter:alpha(opacity=50)"); //utilizei esse diferente, pois já tinha usado um tipo de display no css
    $("#cor-p2-carrossel").hide();
});
moutmov.addEventListener("mouseout", function() { 
    $("#p3-menu-escondido6").hide();
    $("#cor-p2-carrossel").show();
});

var moutbelper = document.querySelector("#mout-belper");
moutbelper.addEventListener("mouseover", function() {
    $("#p3-menu-escondido7").show();
    $("#cor-p2-carrossel").hide();
});
moutbelper.addEventListener("mouseout", function() { 
    $("#p3-menu-escondido7").hide();
    $("#cor-p2-carrossel").show();
});

var moutpasc = document.querySelector("#mout-pasc");
moutpasc.addEventListener("mouseover", function() {
    $("#p3-menu-escondido8").show();
    $("#cor-p2-carrossel").hide();
});
moutpasc.addEventListener("mouseout", function() { 
    $("#p3-menu-escondido8").hide();
    $("#cor-p2-carrossel").show();
});

var moutdep = document.querySelector("#lbl-departamentos"); //todos departamentos
moutdep.addEventListener("mouseover", function() {
    $("#p3-menu-departamentos").show();
    $("#botao-next").hide() && $("#botao-prev").hide() && $("#paginacao").hide() && $("#carrossel-wrapper").hide();
    $("#cor-p2-carrossel").hide();
});
moutdep.addEventListener("mouseout", function() {
    $("#p3-menu-departamentos").hide();
    $("#botao-next").show() && $("#botao-prev").show() && $("#paginacao").show() && $("#carrossel-wrapper").show();
    $("#cor-p2-carrossel").show();
});


/*CARROSSÉIS DE IMAGENS*/

/*CARROSSEL 1*/
var swiper = new Swiper(" .mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    slidePerGroup: 1, //ficar só uma imagem por vez
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: ".swiper-pagination",
        //clickable: true, //com essa linha ele vai mudar de imagem ao clicar na paginação
    },
    navigation: {
        nextEl: ".swiper-button-next", //passar
        prevEl: ".swiper-button-prev", //voltar
    }
});

/*CARROSSEL 2*/
var swiper = new Swiper(" .mySwiper2", {
    slidesPerView: 10,
    spaceBetween: 30,
    loop: false,
    loopFillGroupWithBlank: false, //diferente do primeiro carrossel, esse eu não quero looping
    navigation: {
        nextEl: ".swiper-button-next2", //passar
        prevEl: ".swiper-button-prev2", //voltar
    }
});

/*DESABILITAR PREV AO CLICAR, POIS NÃO TERÁ MAIS PRA ONDE PASSAR*/

$(".swiper-button-prev2").hide(); //botão voltar já vem desabilitado

$(".swiper-button-next2").click(function() {
    $(".swiper-button-next2").hide();
    $(".swiper-button-prev2").show();
});
$(".swiper-button-prev2").click(function() {
    $(".swiper-button-prev2").hide();
    $(".swiper-button-next2").show();
});


/*MUDAR E RETORNAR IMAGEM AO PASSAR E TIRAR MOUSE*/
function mudarImagem() {
    document.getElementById("acentocircun2").src = "img/icone-circun-vermelho.png";
}
function voltarImagem() {
    document.getElementById("acentocircun2").src = "img/icone-circun-inverso.png";
}