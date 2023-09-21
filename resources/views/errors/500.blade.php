<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Ezzy Pay</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="d-flex align-items-center justify-content-center vh-100">
            <div class="text-center row">
                <div class=" col-md-6">
                    <img src="https://www.dropbox.com/s/xq0841cp3icnuqd/flame.png?raw=1" alt=""
                        class="img-fluid">
                </div>
                <div class=" col-md-6 mt-5">
                    <p class="fs-3"> <span class="text-danger">Opps!</span> Something Went wrong.</p>
                    <p class="lead">
                        Something Went wrong.
                    </p>
                    <a href="{{ url()->previous() }}" class="btn btn-primary">Go Back</a>
                </div>

            </div>
        </div>
    </body>

</html>