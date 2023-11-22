<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
    body,
    html {
        height: 100%;
        margin: 0;
        overflow: hidden;
    }

    .card {
        height: 100vh;
        width: 100%;
        position: relative;
    }

    .card-body {
        display: flex;
        align-items: center;
        justify-content: center;
        background-image: url('bg.jpg');
        background-size: cover;
        position: relative;
        overflow: hidden;
    }


    .img {
        position: absolute;
        position: left;
        bottom: 0;
        width: 150px;
        height: auto;
        transition: top 0.5s ease;
    }

    .rintangan {
        position: absolute;
        bottom: 0;
        left: 60%;
        transform: translateX(-50%);
        width: 100px;
        height: auto
    }
    </style>
</head>

<body>
    <div class="card">
        <div class="card-header">
            Gim Loncat
        </div>
        <div class="card-body">
            <img src="lebahh.png" alt="" width="100px" id="img" class="img">
            <img src="kaktus.png" alt="" width="60px" height="65px" class="rintangan">

        </div>
    </div>






    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>

<script src="main.js"></script>