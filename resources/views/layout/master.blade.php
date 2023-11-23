<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
    .total {
        margin: auto 0px;
        display: flex;
        flex-direction: column;
    }

    .header {
        background-color: yellow;
        height: 15%;
    }

    .container{
        display:flex;
        flex-direction: wrap;
        justify-content: center;
    }
    </style>
</head>
<body>
    <div.total>
    <header class="header">Header</header>
    <main class="navigation">Naviga</main>
    <div class="container">
        <div class="sidebar">
            Slidebar
        </div>
        <div class="content">
            @yield('content')
        </div>
    </div>
    <footer class="footer">Footer</footer>
    </div.total>

    
</body>
</html>