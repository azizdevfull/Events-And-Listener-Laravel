<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Events</title>
</head>
<body>
    
    <div align="center" class="container mt-5">
        <h1>NewsLetter</h1>

        <form style="width: 50%" action="/subscribe" method="POST">
            @csrf
            <input type="text"
            name="email"
            placeholder="Enter Email...."
            class="form-control"
            ><br>
            <button class="btn btn-primary">
                Submit
            </button>
        </form>
    </div>

</body>
</html>