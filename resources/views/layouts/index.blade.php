<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trade</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Tailwind -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>

<body>
@yield('content')

@include('layouts.create')


<script>
    var openmodal = document.querySelectorAll('.modal-open');
    for (var i = 0; i < openmodal.length; i++) {
        openmodal[i].addEventListener('click', function (event) {
            event.preventDefault();
            toggleModal()
        })
    }

    const overlay = document.querySelector('.modal-overlay');
    overlay.addEventListener('click', toggleModal);

    var closemodal = document.querySelectorAll('.modal-close');
    for (var i = 0; i < closemodal.length; i++) {
        closemodal[i].addEventListener('click', toggleModal)
    }

    document.onkeydown = function (evt) {
        evt = evt || window.event;
        var isEscape = false;
        if ("key" in evt) {
            isEscape = (evt.key === "Escape" || evt.key === "Esc")
        } else {
            isEscape = (evt.keyCode === 27)
        }
        if (isEscape && document.body.classList.contains('modal-active')) {
            toggleModal()
        }
    };


    function toggleModal() {
        const body = document.querySelector('body');
        const modal = document.querySelector('.modal');
        modal.classList.toggle('opacity-0');
        modal.classList.toggle('pointer-events-none');
        body.classList.toggle('modal-active')
    }


</script>
</body>
</html>

