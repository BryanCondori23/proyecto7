function iniciarMap(){
    var coord = {lat:-17.7987216 ,lng:-63.1876384};
    var map = new google.maps.Map(document.getElementById('map'),{
        zoom:10,
        center:coord
    });
    var marker = new google.maps.Marker({
        position:coord,
        map:map

    })

}
/*
function scrollToBottom() {
    window.scrollTo({
      top: document.documentElement.scrollHeight,
      behavior: 'smooth',
      duration: 10000000
    });
  }
  */
  
  function scrollToBottom() {
    $('html, body').animate({
      scrollTop: $(document).height()
    }, 3000); // Ajusta la duración de la transición aquí (en milisegundos)
  }
  