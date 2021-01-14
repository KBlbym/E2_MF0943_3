<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>suscribite a nuestro boletín de noticias</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />

</head>
<body>
    <section class="home-newsletter d-flex">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="row w-100">
                <div class="col-sm-12">
                    <?php
                        if(isset($_GET['error'])){
                            echo "<div class='alert alert-danger' role='alert'>"
                            .$_GET['error'].
                            "</div>";
                        }
                        if(isset($_GET['success'])){
                            echo "<div class='alert alert-success' role='alert'>"
                            .$_GET['success'].
                            "</div>";
                        }
                    ?>
                    <div class="single">
                        <h2>suscribite a nuestro boletín de noticias</h2>
                        <form action="validarEmail.php" method="POST">
                            <div class="input-group">
                                <input name="email" type="email" class="form-control" placeholder="Su direccion de email">
                                <span class="input-group-btn">
                                    <input class="btn btn-theme" type="submit" name="submit">Enviar</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>


