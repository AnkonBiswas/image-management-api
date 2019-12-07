

function myCategory(id) {

    $("#images").empty();
  
(function() {
  var imageApi = "http://localhost:8000/api/"+api_key+"/"+id;
  $.getJSON( imageApi, {
    tagmode: "any",
    format: "json"
  })
    .done(function( data ) {

html='';
      for (var i = data.length - 1; i >= 0; i--) {
        console.log(data[i]['name']);
        html += '<div><a class="uk-inline" href="'+data[i]['name']+'" data-caption="'+data[i]['title']+'"><img src="'+data[i]['name']+'" alt="'+data[i]['title']+'"></a></div>';
      }

      $('#images').append(html);
    });
})();

}



(function() {
  var imageApi = "http://localhost:8000/api/"+api_key;
  $.getJSON( imageApi, {
    tagmode: "any",
    format: "json"
  })
    .done(function( data ) {

html='';
      for (var i = data.length - 1; i >= 0; i--) {
        console.log(data[i]['name']);
        html += '<div><a class="uk-inline" href="'+data[i]['name']+'" data-caption="'+data[i]['title']+'"><img src="'+data[i]['name']+'" alt="'+data[i]['title']+'"></a></div>';
      }

      $('#images').append(html);
    });
})();




(function() {
  var imageApi = "http://localhost:8000/apicate";


  $('.uk-navbar-nav').load(imageApi);

})();