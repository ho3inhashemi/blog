<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My blog</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>


    <h1>
        {{ $post->title  }} 
    </h1>

    <div>
        {!! $post->body  !!} 
    </div>

    
    <a href="/">Go Back</a>


</body>
</html>