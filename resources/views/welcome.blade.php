<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            body{
                height:max-content;
            }
            h1{
                font-size: xx-large;
                font-weight:1500;
            }
            a{
                text-decoration: none;
                color: #03a9f4;
                width: 100%;
            }

            
        </style>
    </head>
    <body>
        <div class="container" style="height: 100%;">
            <div class="row title mx-auto justify-content-center ">
                <h1>
                    <a href="{{url('/todo/')}}">
                        TO-DO APPLICATION
                    </a>
                </h1>
            </div>
        </div>
    </body>
</html>
