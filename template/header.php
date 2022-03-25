<html>
<head>
    <link rel="stylesheet" href="template/css/main.css" type="text/css">
    <link rel="stylesheet" href="template/css/dark.css" media="(prefers-color-scheme: dark)">
    <link rel="stylesheet" href="template/css/light.css" media="(prefers-color-scheme: light)">
</head>
<body>

    <div class="menu">
    <?php
        $file = $_SERVER['REQUEST_URI'];

        switch($file){
            case '/foliage':
                echo '
                    <a href="/">Home</a>
                    <a class="active" href="/foliage">Foliarz</a>
                    <a href="/matma">Matma</a>
                    <a href="/about">About</a>
                    ';
                break;
            case '/matma':
                echo '
                    <a href="/">Home</a>
                    <a href="/foliage">Foliarz</a>
                    <a class="active" href="/matma">Matma</a>
                    <a href="/about">About</a>
                    ';
                break;
            case '/about':
                echo '
                    <a href="/">Home</a>
                    <a href="/foliage">Foliarz</a>
                    <a href="/matma">Matma</a>
                    <a class="active" href="/about">About</a>
                    ';
                break;
            default:
                echo '
                    <a class="active" href="/">Home</a>
                    <a href="/foliage">Foliarz</a>
                    <a href="/matma">Matma</a>
                    <a href="/about">About</a>
                    ';
                break;
        }
    ?>
    </div>
<!--<img onclick="" > -->
<img src="template/img/sun.svg" 
    data-light-src="template/img/sun.svg" 
    data-dark-src="template/img/moon.svg"
    alt="light theme" 
    id="theme-selector"
    onclick="switchTheme(this)"
    width="50px"
    height="50px"
>

<script src="template/js/menu.js" onload="setupThemeIcon()"></script>
</body>
</html>



