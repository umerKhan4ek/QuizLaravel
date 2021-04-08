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
                        <h2 class="float-left">Quiz Section</h2>

                    </div>
                    <div class="card-body text-center">


                        <p>Welcome to Quiz Section</p>
                        
                        <form action="{{ route('nextquestion')  }}" method="get">

                              <input type="submit" value="Start" class="btn btn-primary">
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>