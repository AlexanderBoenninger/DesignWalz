$(document).ready(function() {
  const mq = window.matchMedia("(max-width:630px)");
  const mq_2 = window.matchMedia("(max-width:920px)");

  let halb = window.innerWidth / 2 -10;

  function injectStyles(styles) {
      const style = document.createElement('style');
      style.type = 'text/css';
      style.innerHTML = styles;
      document.head.appendChild(style);
    }

    injectStyles(`
      .opener, .segment, .artist_trailer_container, .trailer{
        height: ${window.innerHeight}px ;
      }
      .trailer_container {
        width: ${halb}px ;
      }

    `)


});
