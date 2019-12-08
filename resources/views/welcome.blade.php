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
        <style>
           .uk-card-default {
   
    height: 300px;
    width: 100%;
}

.uk-card-body {
    padding: 0;
}
        </style>
    </head>
    <body>
            <div class="uk-container">
       <nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-left">
  
        <ul class="uk-navbar-nav">


        </ul>

    </div>
</nav>

<input type="hidden" name="cate" value="0" id="category">

<div class="uk-h3">Slide</div>

<div class="uk-column-1-2">
    <p>
        <div class="uk-margin">

<select id="sort" name="sort" id="" onchange="sort()" class="uk-select">
    <option value="id">Id</option>
    <option value="sort">Sort</option>
        <option value="name">Name</option>
                <option value="title">Title</option>
                <option value="date_added">Date Added</option>
                <option value="date_modified">Date Modified</option>


</select>
</div>
</p>
<p>
        <div class="uk-margin">

Asc/Desc
<select id="sv" name="sv" id="" onchange="sort()" class="uk-select">
    <option value="asc">Asc</option>
    <option value="desc">Desc</option>
</select>
</div></p>


</div>
<div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: slide" id="images">

</div>




</div>


 <script>
api_key="eae5884acd695f3cdf4d36f6a18ac5f3";
// </script>


        <script src="js/main.js"></script>




    </body>
</html>



