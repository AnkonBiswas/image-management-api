<html>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="uikit/css/uikit.min.css" />
          <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

        <script src="uikit/js/uikit.min.js"></script>
        <script src="uikit/js/uikit-icons.min.js"></script></head>
    <style>
        .uk-container>:last-child {
    /* margin-bottom: 0; */
    margin: auto;
    display: table;
    box-shadow: 0 0 14px #e1e1e1;
    padding: 6%;
    margin-top: 50px;
    margin-bottom: 50px;
}
        </style>
</head>
<div class="uk-container">
    <body>
    <img width="200px" src=" {{ $cate[0]->name }}" alt="">
    <br>
    <a href="" class="uk-button uk-button-primary">rotate 90</a>
    <a href="" class="uk-button uk-button-primary">Rotate 180</a>
    <a href="" class="uk-button uk-button-primary">Resize</a>
    </body>
</div>
</html>
