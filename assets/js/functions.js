$(document).ready(function() {
  const mq = window.matchMedia("(max-width:630px)");
  const mq_2 = window.matchMedia("(max-width:920px)");

  let header = $('.header').height();
console.log(header);
  function injectStyles(styles) {
      const style = document.createElement('style');
      style.type = 'text/css';
      style.innerHTML = styles;
      document.head.appendChild(style);
    }

    injectStyles(`
      .opener, .segment, .artist_trailer, .trailer{
        height: ${window.innerHeight}px ;
      }
    
    `)


});
