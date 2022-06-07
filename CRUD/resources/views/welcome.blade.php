<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left"style='margin-top:50px'>
             <h2>Register</h2>
            </div>
            <div class="pull-right"style='margin:50px'>
                <a class="btn btn-danger"href="{{ route('registers.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('registers.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="name">
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>image:</strong>
                        
                        <input type="file" name="image" class="form-control" placeholder="name">
                    </div>
                </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <strong>Email:</strong>
                    <input class="form-control" type='email'  name="email" placeholder="email">
                </div>
            </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <strong>age:</strong>
                    <input type='text' class="form-control"  name="age" placeholder="age">
                </div>
            </div>



            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-success ">Submit</button>
            </div>
        </div>
    </form>


</body>
</html>
