<?php
$uri = uri_string();
$title = '';
switch ($uri) {
    case '/':
        $title = 'Dashboard';
        break;

    case 'users/create':
        $title = 'Create User';
        break;

    case 'users/login':
        $title = 'Login';
        break;
    default:
        $title = 'Dashboard';
        break;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
        .row.content {
            height: 1500px
        }

        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }

            .row.content {
                height: auto;
            }
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-3 sidenav">
                <?= $this->include('layout/inc/sidebar') ?>
                <br>
                <?= $this->include('layout/inc/search') ?>
            </div>

            <div class="col-sm-9">
                <?= view('layout/inc/title', [
                    'title' => $title
                ]) ?>

                <?php if (session()->has('success') || session()->has('error')) : ?>
                    <?= $this->include('ui/flashMessage') ?>
                <?php endif; ?>

                <?= $this->renderSection('content') ?>
            </div>
        </div>
    </div>

    <footer class="container-fluid">
        <p>Footer Text</p>
    </footer>

    <script>
        $(document).ready(() => {
            $("#delete-alert-success-btn").click(() => {
                console.log('clicked')
                $('#success-alert').hide(100)
            });

            $("#delete-alert-error-btn").click(() => {
                console.log('clicked')
                $('#error-alert').hide(100)
            });
        });
    </script>
</body>

</html>