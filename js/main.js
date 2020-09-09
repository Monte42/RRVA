var sidebar = $('.row').children()[0];
var content = $('.home-content');
var slide = $('.slide');

fullBuild()

window.onresize = function() {
    fullBuild()
};


function fullBuild() {
  console.log('build');

  content.css('height', content.height()+ slide.height()+100+'px')
  if (window.innerWidth <= 991) {
    console.log('yed');
    sidebar.remove();
    content.removeClass('container');
  }
  else {
    $('.row').prepend(sidebar)
  }
}
