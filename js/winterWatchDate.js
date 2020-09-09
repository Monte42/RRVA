$('.sidebar').css('top', '0px')
var currentYear = new Date()["getFullYear"]()
var nextYear = currentYear + 1;
var formDate1 = document.getElementsByClassName('this-year')
var formDate2 = document.getElementsByClassName('next-year')
for (var i = 0; i < formDate1.length; i++) {
    formDate1[i].innerText = `${currentYear}`
}
for (var i = 0; i < formDate2.length; i++) {
    formDate2[i].innerText = `${nextYear}`
}
// if (isMobileDevice()) {
//   $('.sidebar').css('display', 'none');
//   $('.toggle').css('display', 'block');
//   $('div.content').css('margin', '0');
//   $('#head').css('padding', '5px 0px 0px 0px');
//   $('#title').css('padding', '0% 0% 1% 0%');
//   $('#nav').css('font-size', '1.6em');
// };
//
// function isMobileDevice() {
//     return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
// };
