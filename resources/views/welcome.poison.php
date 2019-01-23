<!doctype html>
<html lang="{{ env('locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title>Atom</title>

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #2a2a2a;
            font-family: 'Averta Standard', 'Segoe UI', sans-serif;
            font-weight: 200;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }

        h1 {
            font-size: 5em;
            margin: 0;
        }

        h5 {
            margin-bottom: 3em;
        }

        .links a {
            font-weight: 600;
            text-decoration: none;
            color: #3a3a3a;
            margin: 1em;
            transition: color .3s;
        }

        .links a:hover {
            color: #000;
            transition: color .3s;
        }
    </style>
</head>
<body>
    <h1>Atom Framework</h1>
    <h5>Framework version : {{ app()->version() }}</h5>

    <div class="links">
        <a href="https://github.com/FrameworkAtom/atom">Github</a>
        <a href="https://atomframework.gitbook.io">Documentation</a>
    </div>
</body>
</html>
