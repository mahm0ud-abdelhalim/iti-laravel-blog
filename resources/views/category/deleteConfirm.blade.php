<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm deleting category</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>

<body>
    <main class="container p-3">


        <a class="btn btn-primary" href="{{route('category.list')}}">All Categories</a>

        <div class="px-4 pt-5 my-5 text-center">
            <div class="col-lg-6 mx-auto">
            <p class="h3" for="name">You are going to permenant delete "{{$category->name}}" category and its articles</p>
                <form method="post" action="{{route('category.delete', $category->id)}}">
                    @method('DELETE')
                    @csrf
                    <div class="form-group d-flex">
                        
                        
                    </div>
                    <div class="form-group p-5">
                        <button type="submit" class="btn btn-danger" >Confirm DELETE</button>
                    </div>
                </form>
            </div>
        </div>
    </main>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



</body>

</html>