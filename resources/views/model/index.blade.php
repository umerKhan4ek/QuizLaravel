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
                        <h2 class="float-left">Data</h2>
                        <a href="/solve" class="btn btn-success float-right">Go to</a> 
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">question</th>
                                <th scope="col">answer</th>
                                <th scope="col">option1</th>
                                <th scope="col">option2</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($form as $singlerow)
                                <tr>
                                
                                    <th scope="col">{{$singlerow->id  }}</th>
                                    <td>{{$singlerow->question  }}</td>
                                    <td>{{$singlerow->answer  }}</td>
                                    <td>{{$singlerow->option1  }}</td>
                                    <td>{{$singlerow->option2  }}</td>
                                </tr>  
                              @endforeach
                               
                             
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>