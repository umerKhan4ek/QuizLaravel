<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <script src="js/app.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="float-left">Quiz Area</h2>

                    </div>
                    <div class="card-body">
                        <form action="{{ route('nextquestion')  }}" method="get">
                            @csrf
                            <h5 class="card-title">
                                <span>Q{{ $form->id}}. </span>
                                {{  $form->question   }}
                            </h5>
                          
    
    
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    {{ $form->option1   }}
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    {{ $form->option2   }}
                                </label>
                              </div>
    
                              <input type="hidden" name="id" value="{{$id}}">
    
                              <input type="submit" value="Next" class="btn btn-primary">

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>