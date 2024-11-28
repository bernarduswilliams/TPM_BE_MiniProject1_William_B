<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Employee Form</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link"  href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/create">Create</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="p-5">
        <h1 class="text-center">Create Employee Data</h1>
        <form action="{{route('store')}}" method="POST" enctype="">
            @csrf {{-- !WAJIB! --}}

            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input value="" type="text" class="form-control" id="" name="name">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Reason to Join</label>
                <input value="" type="text" class="form-control" id="" name="reason">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Join Date</label>
                <input value=""type="date" class="form-control" id="" name="join_date">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Interest to Join (Scale 1-10)</label>
                <input value="" type="number" class="form-control" id="" name="scale">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Image</label>
                <input  type="file" class="form-control" id="" name="">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Job</label>
                <select class="form-select" aria-label="Default select example" name="job_category">
                    @foreach ($jobdesks as $jobdesk)
                        <option value="{{$jobdesk->id}}">{{$jobdesk->job_category}}</option>
                   @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>