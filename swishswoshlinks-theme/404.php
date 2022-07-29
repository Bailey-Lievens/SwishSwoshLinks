
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not found</title>

    <style>
        @font-face {
            font-family: 'Roboto';
            src: url(<?php echo(get_template_directory_uri() . '/assets/fonts/Roboto/Roboto-Regular.woff2'); ?>) format('woff2'),
                url(<?php echo(get_template_directory_uri() . '/assets/fonts/Roboto/Roboto-Regular.woff'); ?>) format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        * {
            color: #121212;
            font-family: Roboto;
        }

        body {
            background-color: #F6F6F6;
        }
    </style>
</head>
<body>
    <h1>404 Page not found</h1>
    <p>
        Ah yes the classic 404 page. Click <a target="_blank" href="https://youtu.be/jEB2k6Hs0AY">here</a> or press alt + f4 to fix this error.
    </p>

    <p>
        Would you prefer to go back to homepage? <a href="/">click here!</a>
    </p>
</body>
</html>