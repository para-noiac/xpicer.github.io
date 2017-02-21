<!DOCTYPE html>
<html>
    <head>
        <title>Lessons</title>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Laravel 5.1, VueJS 1.0</h1>
            <table class="table table-condensed table-hover">
                <thead>
                    <tr>
                        <th>Lesson</th>
                        <th>Description</th>
                        <th>Link</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lessons as $row)
                    <tr>
                        <td>{{$row["name"]}}</td>
                        <td>{{$row["description"]}}</td>
                        <td>
                            @if(isset($row["link"]))
                                <a class="btn btn-link" target="_blank" href="{{$row["link"]}}" role="button">{{$row["link"]}}</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
