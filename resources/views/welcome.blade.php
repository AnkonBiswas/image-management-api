<!DOCTYPE html>
<html>
    <head>
        <title>Title</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="uikit/css/uikit.min.css" />
          <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

        <script src="uikit/js/uikit.min.js"></script>
        <script src="uikit/js/uikit-icons.min.js"></script>
    </head>
    <body>
            <div class="uk-container">
       <nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-left">
  
        <ul class="uk-navbar-nav">


        </ul>

    </div>
</nav>



<div class="uk-h3">Slide</div>
<div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: slide" id="images">

</div>




</div>


 <script>

// function myCategory(id) {

//     $("#images").empty();
  
// (function() {
//   var imageApi = "http://localhost:8000/api/123456/"+id;
//   $.getJSON( imageApi, {
//     tagmode: "any",
//     format: "json"
//   })
//     .done(function( data ) {

//       // $.each( data, function( i, item ) {
//       //   // $( "<img>" ).attr( "src", item.media.m ).appendTo( "#images" );
//       //   // if ( i === 3 ) {
//       //   //   return false;
//       //   // }

//       // html = '<div><a class="uk-inline" href="'+item.name+'" data-caption="Caption 1"><img src="'+item.name+'" alt="'+item.title+'"></a></div>';

//       // });
// html='';
//       for (var i = data.length - 1; i >= 0; i--) {
//         console.log(data[i]['name']);
//         html += '<div><a class="uk-inline" href="'+data[i]['name']+'" data-caption="'+data[i]['title']+'"><img src="'+data[i]['name']+'" alt="'+data[i]['title']+'"></a></div>';
//       }

//       $('#images').append(html);
//     });
// })();

// }



// // (function() {
// //   var imageApi = "http://localhost:8000/apicate";
// //   $.getJSON( imageApi, {
// //     tagmode: "any",
// //     format: "json"
// //   })
// //     .done(function( data ) {

// //       // $.each( data, function( i, item ) {
// //       //   // $( "<img>" ).attr( "src", item.media.m ).appendTo( "#images" );
// //       //   // if ( i === 3 ) {
// //       //   //   return false;
// //       //   // }

// //       // html = '<div><a class="uk-inline" href="'+item.name+'" data-caption="Caption 1"><img src="'+item.name+'" alt="'+item.title+'"></a></div>';

// //       // });
// // html='';
// //       for (var i = data.length - 1; i >= 0; i--) {
// //          if (data[i]['parent']==0 ) {
// //             id = data[i]['id'];
// //         html += '<li ><a onclick="myCategory('+data[i]['id']+')">'+data[i]['cname']+'</a>';


           


// //                  html+='<div class="uk-navbar-dropdown"><ul class="uk-nav uk-navbar-dropdown-nav">';


// //                 (function() {
// //                       var imageApi = "http://localhost:8000/apicate";
// //                       $.getJSON( imageApi, {
// //                         tagmode: "any",
// //                         format: "json"
// //                       })
// //                         .done(function( data1 ) {

// //                           // $.each( data, function( i, item ) {
// //                           //   // $( "<img>" ).attr( "src", item.media.m ).appendTo( "#images" );
// //                           //   // if ( i === 3 ) {
// //                           //   //   return false;
// //                           //   // }

// //                           // html = '<div><a class="uk-inline" href="'+item.name+'" data-caption="Caption 1"><img src="'+item.name+'" alt="'+item.title+'"></a></div>';

// //                           // });
// //                           for (var j = data1.length - 1; j >= 0; j--) {

// //                              if (id==data1[j]['parent'] ) {


// //                                         console.log(data1[j]['cname']+id);



// //                             html+='<li class="uk-active"><a onclick="myCategory('+data1[j]['id']+')">'+data1[j]['cname']+'</a></li>';

// //                         }

// //                           }


// //                          html+='</ul></div>';

// //                         });
// //                     })();




// //             }


// //         html+='</li>';
// //       }

// //       $('.uk-navbar-nav').append(html);
// //     });
// // })();


// (function() {
//   var imageApi = "http://localhost:8000/api/123456";
//   $.getJSON( imageApi, {
//     tagmode: "any",
//     format: "json"
//   })
//     .done(function( data ) {

//       // $.each( data, function( i, item ) {
//       //   // $( "<img>" ).attr( "src", item.media.m ).appendTo( "#images" );
//       //   // if ( i === 3 ) {
//       //   //   return false;
//       //   // }

//       // html = '<div><a class="uk-inline" href="'+item.name+'" data-caption="Caption 1"><img src="'+item.name+'" alt="'+item.title+'"></a></div>';

//       // });
// html='';
//       for (var i = data.length - 1; i >= 0; i--) {
//         console.log(data[i]['name']);
//         html += '<div><a class="uk-inline" href="'+data[i]['name']+'" data-caption="'+data[i]['title']+'"><img src="'+data[i]['name']+'" alt="'+data[i]['title']+'"></a></div>';
//       }

//       $('#images').append(html);
//     });
// })();




// (function() {
//   var imageApi = "http://localhost:8000/apicate";


//   $('.uk-navbar-nav').load(imageApi);

// })();

api_key="123456";
// </script>


        <script src="js/main.js"></script>




    </body>
</html>



