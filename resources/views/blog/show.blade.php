<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body style="background-color: #4e73df">
    <center>
        <div class="container">
            <div class="p-5 text-white rounded">
                <img src="{{ asset('storage/blog/' . $blog->image) }}" class="w-50 rounded" alt="">
                <hr>
                <h4>{{ $blog->title }}</h4>
                <p class="tmt-3">
                    {!! $blog->content !!}
                </p>
                <a href="/garden" class="btn btn-dark">Back</a>
            </div>
        </div>
    </center>
</body>

</html>
