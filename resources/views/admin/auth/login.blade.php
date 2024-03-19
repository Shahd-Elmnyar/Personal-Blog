<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/login.css')}}" />
</head>

<body>


    <div class="container" onclick="">
        <div class="top"></div>
        <div class="bottom"></div>
        <div class="center">
            <h2>Please Sign In</h2>
            @include("admin.inc.message")
            <form method="post" action="{{url("login")}}">
                @csrf
                <input type="email" name="email" placeholder="email">
                <input type="password" name="password" placeholder="password">
                <!-- <h2>&nbsp;</h2> -->
                <!-- <div class="main"> -->
                    <button class="button" type="submit">Send</button>
                    <!-- <div class="loader">
                        <div class="check">
                            <span class="check-one"></span>
                            <span class="check-two"></span>
                        </div>
                    </div> -->

                </div>
</form>
        </div>

</body>

</html>
