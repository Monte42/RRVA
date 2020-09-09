$(document).ready(function() {
  setTimeout(function() {
    pageBuild()
  }, 250)
});

window.onresize = function() {
  pageBuild()
};

var headImg = $('#head-img'),
    body = $('body'),
    footer  = $('#footer'),
    title  = $('#title'),
    sidebar = $('.sidebar'),
    navBar  = $('.toggle'),
    content = $('div.content');


function pageBuild() {
  if (isMobileDevice()) {
    setMobilePage()
  } else {
    setStandardPage()
  }
}

function setStandardPage() {
  // sidebar.offset({top: 0});
  headImg.css('width', '100%');
  content.css('padding', '1vh 10vw 0vh');
  footer.css('margin', '2% 0% 0% 0%');
  footer.offset({left: 0});
  footer.css('width', '100vw');
  footer.css('z-index', '-1')
  if (window.innerWidth <= 768) {
    headImg.offset({left: 0});
  } else {
    headImg.offset({left: sidebar.width()});
  }
}

function setMobilePage() {
  if (screen.availWidth <= 768) {
    headImg.css('width', '100%');
    footer.css('width', '100vw');
    footer.css('margin', '4% 0% 0% 0%');
    footer.offset({left: 0});
    content.css('padding', '1vh 10vw 0vh');
  } else {
    sidebar.css('display','none');
    headImg.offset({left: 0});
    headImg.css('width', '100vw');
    navBar.css('display', 'block');
    title.offset({left: 30});
    content.offset({left: screen.availWidth*.1});
    content.css('padding', '1vh 10vw 0vh');
    body.css('transform', 'translate(17%, 0%)');
    footer.css('width', `${window.innerWidth}px`);
    footer.css('margin', '4% 0% 0% 0%');
    footer.offset({left: screenLeft});
  }
}

function isMobileDevice() {
    return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
};
