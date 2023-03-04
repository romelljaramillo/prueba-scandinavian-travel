<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <h1>Publicaciones</h1>
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">{{ $post->title }}</h5>
            </div>
            <div class="card-body">
                <p class="card-text">{{ $post->body }}</p>
                <a href="/" class="btn btn-primary">back</a>
            </div>
        </div>
    </div>
</body>
</html>