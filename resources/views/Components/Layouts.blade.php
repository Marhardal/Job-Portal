<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HireNet</title>
    {{-- <link rel="stylesheet" href="{{ asset('choicejs/choices.css') }}"> --}}
    {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    {{-- <link rel="stylesheet" href="{{ asset('chosenjs/chosen.css') }}"> --}}
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> --}}
    <script>
        tinymce.init({
          selector: '#editor',
          toolbar: 'undo redo | styles | bold italic | numlist bullist',
          plugins: 'lists',
        });
      </script>
</head>

<body>
    <div class="container h-screen">{{ $slot }}</div>
    <script src="{{ asset('jquery/jquery.js') }}"></script>
    <script src="{{ asset('chosenjs/chosen.jquery.js') }}"></script>
    <script>
        $(document).ready(function () {
            $(".skills").chosen()
        });
    </script>
    @include('sweetalert::alert')
</body>

</html>
