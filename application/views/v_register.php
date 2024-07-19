<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Snippet - BBBootstrap</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='#' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <style>
        ::-webkit-scrollbar {
            width: 8px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        body {
            background-color: #b6d3ff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background-color: #fff;
            border: none;
            height: 500px;
            overflow: hidden;
        }

        .input-field {
            position: relative;
            margin-top: 5px;
        }

        .input-field input {
            height: 50px;
            outline: none !important;
            border: 2px solid #eee;

        }

        .input-field input:focus {
            box-shadow: none;
            outline: none !important;
        }

        .input-field label {
            position: absolute;
            top: 10px;
            left: 6px;
            transition: all 0.5s;
            background-color: #fff;
            padding: 0px 10px;
            border-radius: 20px;


        }

        .input-field input:focus+label,
        .input-field input:valid+label {
            position: absolute;
            top: -10px;
            left: 6px;
            font-size: 13px;

        }


        .signup-button {
            height: 50px;
            font-size: 19px;
            text-transform: uppercase;
        }

        .right-side {

            position: relative;

        }


        .right-side-content {
            background-color: #0056fb;
            height: 500px;
            width: 100%;
            padding: 10px;
            position: relative;
        }


        .right-side-content .content {
            position: absolute;
            top: 50%;
            left: 0%;
            padding: 0px 40px;
        }

        .right-side span:nth-child(1) {
            height: 120px;
            width: 75px;
            background-color: #ffb91d;
            border-radius: 2px;
            display: flex;
            transform: skew(20deg);
            position: absolute;
            left: -20px;
        }

        .right-side span:nth-child(2) {
            height: 50px;
            width: 40px;
            background-color: #ffb91d;
            border-radius: 2px;
            display: flex;
            transform: skew(20deg);
            position: absolute;
            left: 60px;
            top: 20px;
        }

        .right-side span:nth-child(3) {
            height: 50px;
            width: 40px;
            background-color: #3949AB;
            border-radius: 2px;
            display: flex;
            transform: skew(20deg);
            position: absolute;
            right: 20px;
            top: -20px;
        }

        .right-side span:nth-child(4) {
            height: 140px;
            width: 100px;
            background-color: #3949AB;
            border-radius: 2px;
            display: flex;
            transform: skew(20deg);
            position: absolute;
            right: 40px;
            top: 70px;
        }

        .right-side span:nth-child(5) {
            height: 140px;
            width: 100px;
            background-color: #3949AB;
            border-radius: 2px;
            display: flex;
            transform: skew(20deg);
            position: absolute;
            right: 30px;
            top: 60px;
            object-fit: cover;
            overflow: hidden;
        }

        .right-side span:nth-child(6) {
            height: 140px;
            width: 100px;
            background-color: #3949AB;
            border-radius: 2px;
            display: flex;
            transform: skew(20deg);
            position: absolute;
            top: 400px;
            overflow: hidden;
        }

        .right-side span:nth-child(7) {
            height: 60px;
            width: 40px;
            background-color: #3949AB;
            border-radius: 2px;
            display: flex;
            transform: skew(20deg);
            position: absolute;
            top: 400px;
            right: 10px;
            overflow: hidden;
        }

        .right-side span:nth-child(8) {
            height: 100px;
            width: 70px;
            background-color: #3949AB;
            border-radius: 2px;
            display: flex;
            transform: skew(20deg);
            position: absolute;
            top: 440px;
            right: 40px;
            overflow: hidden;
        }


        .right-side span:nth-child(9) {
            height: 70px;
            width: 40px;
            background-color: #3949AB;
            border-radius: 2px;
            display: flex;
            transform: skew(20deg);
            position: absolute;
            top: 350px;
            right: 90px;
            overflow: hidden;
            transition: all 0.5s;
            transition-delay: 1s;
        }


        .right-side span:nth-child(10) {
            height: 50px;
            width: 100px;
            background-color: #3949AB;
            border-radius: 2px;
            display: flex;
            transform: skew(20deg);
            position: absolute;
            left: 20px;
            top: 340px;
            object-fit: cover;
            overflow: hidden;
            transition: all 0.5s;

        }

        .card:hover .right-side span:nth-child(10) {
            left: 20px;
            top: 330px;
        }

        .card:hover .right-side span:nth-child(9) {
            top: 340px;
            right: 90px;
        }


        .content {
            display: flex;
            color: #fff;
            justify-content: center;
            align-items: center;
        }

        .content h6 {
            text-align: left;
        }

        .content span {
            font-size: 12px;
        }
    </style>
</head>

<body className='snippet-body'>
    <div class="container">
        <div class="card">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="h-100 d-flex justify-content-center align-items-center">
                        <div class="py-4 px-3">
                            <h4>Signup</h4>
                            <div class="row g-2 mt-1">
                                <div class="col-md-6">
                                    <div class="input-field"> <input class="form-control" id="input1" required> <label for="input1">First Name</label> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-field"> <input class="form-control" id="input2" required> <label for="input2">Last Name</label> </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <div class="input-field"> <input class="form-control" id="input3" required> <label for="input3">Email</label> </div>
                                </div>
                            </div>
                            <div class="row mt-2 mb-2">
                                <div class="col-md-12">
                                    <div class="input-field"> <input class="form-control" id="input4" required> <label for="input4">Password</label> </div>
                                </div>
                            </div> <span class="">Password must be atleast 8 characters</span>
                            <div class="row mt-2">
                                <div class="col-md-12"> <button class="btn btn-primary w-100 signup-button">Signup</button> </div>
                            </div>
                            <div class="member mt-1"> <span>Already a member?</span> <a class="text-decoration-none" href="#">Signin</a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-side-content">
                        <div class="content d-flex flex-column">
                            <h2>Explore you activity</h2> <span>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</span>
                        </div>
                        <div class="right-side"> <span></span> <span></span> <span></span> <span></span> <span><img src="https://i.imgur.com/kWmyZvb.jpg"> </span> <span></span> <span></span> <span></span> <span> <img src="https://i.imgur.com/U0863iD.jpg"> </span> <span></span> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="parallelogram"> <span></span> <span></span> <span></span> </div>
    </div>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript' src='#'></script>
    <script type='text/javascript' src='#'></script>
    <script type='text/javascript' src='#'></script>
    <script type='text/javascript'>

    </script>
    <script type='text/javascript'>
        var myLink = document.querySelector('a[href="#"]');
        myLink.addEventListener('click', function(e) {
            e.preventDefault();
        });
    </script>

</body>

</html>