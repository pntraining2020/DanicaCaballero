<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Time</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/form.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>  

        <!-- Script -->
        <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous">
        </script> 
        <script src="{{ asset('js/clock.js') }}" defer></script>
    </head>
    <body>
        <div id="div">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button"     id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">   
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    @foreach($employees as $employee)
                    <a class="dropdown-item" href="#">{{$employee['Last_Name']}}</a>
                    @endforeach
                </div>
            </div>  
        </div>
        <div class='container mt-5'>
            <div class="row">
                <div class="col">
                    <div class="card text-center">
                        <div class="card-header">
                            <div id="div1">
                                <p id="time"></p>
                            </div>
                        </div>
                        <div class="div">
                        </div>      
                        <div class="card-body mb-5">
                            <a href="#" class="btn btn-primary" id ="in" onclick="clockIn()">ClockIn</a><br>
                            <p id="showTime"></p>
                            <div>
                                <div class="container mb-5 mt-3">
                                    <div class='card'>
                                        <div class='card-header mb-3'>
                                            BREAK
                                        </div>
                                        <div>
                                            <a href="#" class="btn btn-primary">start</a><br>
                                            <p id="bs"></p>
                                            <a href="#" class="btn btn-primary">end</a><br>
                                            <p id="be"></p>
                                        </div>
                                    </div>
                                
                              </div>
                            </div>
                        </div>
                        <div>
                            <a href="#" class="btn btn-success" id="out">ClockOut</a>
                            <p id = "co"></p>
                        </div>
                    </div>

                    <div class="mt-2">
                        <h5>Total Time Worked:</h5>
                        <h5>Hours Left Before Timeout:</h5>
                        <h5>Total Breaks Used:</h5>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
