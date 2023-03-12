/*MOSTRAR MENUS AO PASSAR MOUSE POR CIMA E FAZÊ-LOS DESAPERECER AO TIRAR MOUSE*/
var moutcel = document.querySelector("#mout-cel"); //pegando o botão
moutcel.addEventListener("mouseover", function() { //quando mouse tiver em cima
    $("#p3-menu-escondido1").show();
    $(".sumir-item").hide();
});
moutcel.addEventListener("mouseout", function() { //quando mouse não estiver em cima
    $("#p3-menu-escondido1").hide();
    $(".sumir-item").show();
});

var mouteled = document.querySelector("#mout-eled");
mouteled.addEventListener("mouseover", function(){
    document.getElementById("p3-menu-escondido2").setAttribute("style","opacity:1; -moz-opacity:0.5; filter:alpha(opacity=50)"); //utilizei esse diferente, pois já tinha usado um tipo de display no css
    $(".sumir-item").hide();
});
mouteled.addEventListener("mouseout", function(){
    $("#p3-menu-escondido2").hide();
    $(".sumir-item").show();
});

var moutinf = document.querySelector("#mout-inf");
moutinf.addEventListener("mouseover", function() {
    $("#p3-menu-escondido3").show();
    $(".sumir-item").hide();
});
moutinf.addEventListener("mouseout", function() { 
    $("#p3-menu-escondido3").hide();
    $(".sumir-item").show();
});

var mouttvht = document.querySelector("#mout-tvht");
mouttvht.addEventListener("mouseover", function() { 
    $("#p3-menu-escondido4").show();
    $(".sumir-item").hide();
});
mouttvht.addEventListener("mouseout", function() { 
    $("#p3-menu-escondido4").hide();
    $(".sumir-item").show();
});

var moutelep = document.querySelector("#mout-elep");
moutelep.addEventListener("mouseover", function() { 
    document.getElementById("p3-menu-escondido5").setAttribute("style","opacity:1; -moz-opacity:0.5; filter:alpha(opacity=50)"); //utilizei esse diferente, pois já tinha usado um tipo de display no css
    $(".sumir-item").hide();
});
moutelep.addEventListener("mouseout", function() { 
    $("#p3-menu-escondido5").hide();
    $(".sumir-item").show();
});

var moutmov = document.querySelector("#mout-mov");
moutmov.addEventListener("mouseover", function() { 
    document.getElementById("p3-menu-escondido6").setAttribute("style","opacity:1; -moz-opacity:0.5; filter:alpha(opacity=50)"); //utilizei esse diferente, pois já tinha usado um tipo de display no css
    $(".sumir-item").hide();
});
moutmov.addEventListener("mouseout", function() { 
    $("#p3-menu-escondido6").hide();
    $(".sumir-item").show();
});

var moutbelper = document.querySelector("#mout-belper");
moutbelper.addEventListener("mouseover", function() {
    $("#p3-menu-escondido7").show();
    $(".sumir-item").hide();
});
moutbelper.addEventListener("mouseout", function() { 
    $("#p3-menu-escondido7").hide();
    $(".sumir-item").show();
});

var moutpasc = document.querySelector("#mout-pasc");
moutpasc.addEventListener("mouseover", function() {
    $("#p3-menu-escondido8").show();
    $(".sumir-item").hide();
});
moutpasc.addEventListener("mouseout", function() { 
    $("#p3-menu-escondido8").hide();
    $(".sumir-item").show();
});

var moutdep = document.querySelector("#lbl-departamentos"); //todos departamentos
moutdep.addEventListener("mouseover", function() {
    $("#p3-menu-departamentos").show();
    $("#botao-next").hide() && $("#botao-prev").hide() && $("#paginacao").hide() && $("#carrossel-wrapper").hide();
    $(".sumir-item").hide();
});
moutdep.addEventListener("mouseout", function() {
    $("#p3-menu-departamentos").hide();
    $("#botao-next").show() && $("#botao-prev").show() && $("#paginacao").show() && $("#carrossel-wrapper").show();
    $(".sumir-item").show();
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
    spaceBetween: 10,
    slidePerGroup: 1,
    loop: false,
    loopFillGroupWithBlank: false, //diferente do primeiro carrossel, esse eu não quero looping
    navigation: {
        nextEl: ".swiper-button-next2", //passar
        prevEl: ".swiper-button-prev2", //voltar
    }
});

/*CARROSSEL 3*/
var swiper = new Swiper(" .mySwiper3", {
    slidesPerView: 5,
    spaceBetween: 5,
    slidePerGroup: 1, //ficar só uma imagem por vez
    loop: false,
    loopFillGroupWithBlank: false,
    navigation: {
        nextEl: ".swiper-button-next3", //passar
        prevEl: ".swiper-button-prev3", //voltar
    }
});

/*CARROSSEL 4*/
var swiper = new Swiper(" .mySwiper4", {
    slidesPerView: 10,
    spaceBetween: 10,
    slidePerGroup: 1,
    loop: false,
    loopFillGroupWithBlank: false, //diferente do primeiro carrossel, esse eu não quero looping
    navigation: {
        nextEl: ".swiper-button-next4", //passar
        prevEl: ".swiper-button-prev4", //voltar
    }
});

/*CARROSSEL 5*/
var swiper = new Swiper(" .mySwiper5", {
    slidesPerView: 5,
    spaceBetween: 5,
    slidePerGroup: 1,
    loop: false,
    loopFillGroupWithBlank: false, 
    navigation: {
        nextEl: ".swiper-button-next5", 
        prevEl: ".swiper-button-prev5",
    }
});

/*CARROSSEL 6*/
var swiper = new Swiper(" .mySwiper6", {
    slidesPerView: 5,
    spaceBetween: 5,
    slidePerGroup: 1,
    loop: false,
    loopFillGroupWithBlank: false, 
    navigation: {
        nextEl: ".swiper-button-next6", 
        prevEl: ".swiper-button-prev6",
    }
});

/*CARROSSEL 7*/
var swiper = new Swiper(" .mySwiper7", {
    slidesPerView: 5,
    spaceBetween: 5,
    slidePerGroup: 1,
    loop: false,
    loopFillGroupWithBlank: false, 
    navigation: {
        nextEl: ".swiper-button-next7", 
        prevEl: ".swiper-button-prev7",
    }
});

/*CARROSSEL 8*/
var swiper = new Swiper(" .mySwiper8", {
    slidesPerView: 5,
    spaceBetween: 5,
    slidePerGroup: 1,
    loop: false,
    loopFillGroupWithBlank: false, 
    navigation: {
        nextEl: ".swiper-button-next8", 
        prevEl: ".swiper-button-prev8",
    }
});

/*CARROSSEL 9*/
var swiper = new Swiper(" .mySwiper9", {
    slidesPerView: 5,
    spaceBetween: 5,
    slidePerGroup: 1,
    loop: false,
    loopFillGroupWithBlank: false, 
    navigation: {
        nextEl: ".swiper-button-next9", 
        prevEl: ".swiper-button-prev9",
    }
});

/*CARROSSEL 2 - DESABILITAR PREV AO CLICAR, POIS NÃO TERÁ MAIS PRA ONDE PASSAR*/
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