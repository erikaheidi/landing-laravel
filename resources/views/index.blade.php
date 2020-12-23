<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Erika Heidi's Awesome Links</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">

    <style>
        html {
            background: url("https://images.unsplash.com/photo-1606926693780-ec99c3f747f3?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        div.link h3 {
            font-size: large;
        }

        div.link p {
            font-size: small;
            color: #718096;
        }
    </style>
</head>
<body>
<section class="section">
    <div class="container">
        <h1 class="title">
            Check out Erika Heidi's awesome links
        </h1>
        <p class="subtitle">
            New content, videos, upcoming events, giveaways, and more cool stuff.
        </p>

        <section class="links">
            @foreach ($links as $link)
                <div class="box link">
                    <h3><a href="{{ $link->url }}" target="_blank" title="Visit Link: {{ $link->url }}">{{ $link->description }}</a></h3>
                    <p>{{$link->url}}</p>
                </div>
            @endforeach
        </section>
    </div>
</section>
</body>
</html>
