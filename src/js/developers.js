

for (var i = 0; i < $(".tablet").length; i+=2) {
    $(".tablet")[i].setAttribute("data-aos", "fade-left");
}
for (var i = 1; i < $(".tablet").length; i+=2) {
    $(".tablet")[i].setAttribute("data-aos", "fade-right");
}
var displacement = 300;
for (var i = 0; i < $(".tablet").length; i++) {
    var D = String(displacement) + "px";
    $(".tablet")[i].style.top = D;
    displacement += 250;
}
