<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Assesment </title>
</head>
<body>
    <section class="container mb-2">
        <header class="bg-main-color py-4 rounded-3 text-center text-light font fs-2 fw-bold ">
            Time 3.00 PM to 4.30 PM
        </header>
    </section>

    <section class="container text-light mb-2">
        <div class="row">
            <div class="col-md-3">
                <div class="bg-main-color p-4 rounded-3">
                    I am <b>Md Banjir Ahammad</b>. I am originally from Nilphamari but I am now based in Mirpur, Dhaka. I have completed a B.Sc degree with a strong background from the "Central University of Science and Technology”.
                    <br>
                    I have completed a 4-month web designer course,  and a 4-month PHP with Laravel Framework course and now i am learning Mastering Vue.js. I like traveling and Programming.
                </div>

            </div>
            <div class="col-md-9">
                <div class="row">
                    @foreach($posts as $post)
                    <!-- single item -->
                    <div class="col-md-4 col-sm-6">
                        <div class="card mb-3 rounded-3 bg-main-color">
                            <img src="{{ asset($post->image) }}" class="img-thumbnail m-1 rounded-cs-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text"> {{ Str::limit($post->description, $limit = 150, $end = '...') }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>



                <div class="bg-main-color p-4 rounded-3 text-center">
                    <a class="text-light " href="https://github.com/banjirahammad/internship-test.git">https://github.com/banjirahammad</a>
                </div>
            </div>
        </div>
    </section>












<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
