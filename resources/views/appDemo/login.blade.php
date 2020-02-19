<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class='app-demo-body gradiente-do-tema'>
        <div class='bandeiras'>
            <img class='bandeira' src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQXdxJ6asCrsdZI0_w5B29OwtXz0Id4jWT3hatq4Wg3sQ0pnuDL" alt="">
            <img class='bandeira active' src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRl_9uj3XRuRsDHi5I7zh5Dy4ajTJrx1vW6bbodndVlDZrz8dA-" alt="">
            <img class='bandeira' src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQY5I6VrJ1TYqOWWiZOm04l6ZgWnDpUo_75NtTIhyPIypMjzOts" alt="">
            <img class='bandeira' src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRceRFMRqckH3fKPv032kEwZ-reYUYxymdiJk83ny70U-sNFyKV" alt="">
        </div>

        <div class='titulo'>
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="key" class="svg-inline--fa fa-key fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M512 176.001C512 273.203 433.202 352 336 352c-11.22 0-22.19-1.062-32.827-3.069l-24.012 27.014A23.999 23.999 0 0 1 261.223 384H224v40c0 13.255-10.745 24-24 24h-40v40c0 13.255-10.745 24-24 24H24c-13.255 0-24-10.745-24-24v-78.059c0-6.365 2.529-12.47 7.029-16.971l161.802-161.802C163.108 213.814 160 195.271 160 176 160 78.798 238.797.001 335.999 0 433.488-.001 512 78.511 512 176.001zM336 128c0 26.51 21.49 48 48 48s48-21.49 48-48-21.49-48-48-48-48 21.49-48 48z"></path></svg>
            <div class='texto'>Login</div>
        </div>

        <form action="" class='fields'>
            @csrf
            <input type="text" name='login' placeholder="e@mail.com">
            <input type="password" name='password'>
            <input type="submit" value='Sign in'>
        </form>

        <div class='textinhos'>
            <span>Sogniamo in grande®</span>
            <span>All rights reserved</span>
        </div>
    </div>
</body>
</html>
