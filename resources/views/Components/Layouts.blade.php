<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HireNet</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container h-screen">{{ $slot }}</div>
    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#duty_id'))
            .catch(error => {
                console.error(error);
            });
    </script>
</body>

</html>
