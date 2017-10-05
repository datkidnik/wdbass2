<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel : save form data into MySQL db</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <!--Navigation Bar-->
    <div class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="javascript:void(0)">RMIT ITS helpdesk</a>
            </div>
            <div class="navbar-collapse collapse navbar-inverse-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="http://localhost/assignment1/public/issues/create">home</a></li>
                    <li><a href="javascript:void(0)">FAQ</a></li>
                </ul>
            </div>
        </div>
    </div>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }
        p {
            font-family: "Verdana";
        }
        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {height: 450px}

        .big.help {
            background-color: #555;
            color: #FFFFFF;
        }

        .question {
            text-decoration: underline;
            text-align: right;
        }

        .answer {

        }

        /* Set black background color, white text and some padding */
        footer {

            color: #555;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media  screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height:auto;}
        }
    </style>
</head>
<body>

<div class="container">
    <?php echo $__env->yieldContent('content'); ?>
</div>
<break></break>
<footer class="container-fluid text-center">
    <p>RMIT ITS helpdesk</p>
</footer>
</body>
</html>