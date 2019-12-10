function sort() {

var e = document.getElementById("sort");
var sort = e.options[e.selectedIndex].value;

var f = document.getElementById("sv");
var sv = f.options[f.selectedIndex].value;


console.log(sort);
console.log(sv);


var cate = document.getElementById("category").value;





      $("#images").empty();
  
(function() {
  var imageApi = "http://localhost:8000/api/"+api_key+"/"+cate+"/"+sort+"/"+sv;
  $.getJSON( imageApi, {
    tagmode: "any",
    format: "json"
  })
    .done(function( data ) {

html='';
       for (var i = 0; i< data.length; i++) {
        j= i+1;
        html += '<div class="gride image-grid-'+j+'"><a class="uk-inline uk-card uk-card-default uk-card-body" href="upload/'+data[i]['name']+'" data-caption="'+data[i]['title']+'"><img class="uk-card uk-card-default uk-card-body" src="upload/'+data[i]['name']+'" alt="'+data[i]['title']+'"></a></div>';
      }

      $('#images').append(html);
    });
})();
  
}

function myCategory(id) {

  var cate = id;

  document.getElementById("category").value= id;

    $("#images").empty();
  
(function() {
  var imageApi = "http://localhost:8000/api/"+api_key+"/"+id;
  $.getJSON( imageApi, {
    tagmode: "any",
    format: "json"
  })
    .done(function( data ) {

html='';
       for (var i = 0; i< data.length; i++) {
        j= i+1;
        console.log(data[i]['name']);
        html += '<div class="gride image-grid-'+j+'"><a class="uk-inline uk-card uk-card-default uk-card-body" href="upload/'+data[i]['name']+'" data-caption="'+data[i]['title']+'"><img class="uk-card uk-card-default uk-card-body" src="upload/'+data[i]['name']+'" alt="'+data[i]['title']+'"></a></div>';
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
      for (var i = 0; i< data.length; i++) {
        j= i+1;
        console.log(data[i]['name']);
        html += '<div class=" gride image-grid-'+j+'"><a class="uk-inline" href="upload/'+data[i]['name']+'" data-caption="'+data[i]['title']+'"><img class="uk-card uk-card-default uk-card-body" src="upload/'+data[i]['name']+'" alt="'+data[i]['title']+'"></a></div>';
      }

      $('#images').append(html);
    });
})();




(function() {
  var imageApi = "http://localhost:8000/apicate";


  $('.uk-navbar-nav').load(imageApi);

})();