<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    s
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Escola do IF</title>
</head>

<body class="bg-dark">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card bg-secundary mt-5">
                    <div class="card-title bg-primary text-white mt-5">
                        <h3 class="text-center py-3">Acesso a Escola do IF</h3>
                    </div>


                    <div class="card-body">
                        <form action="process.php" method="post">
                            <input type="text" name="usuario" placeholder="Usuario" class="form-control mb-3">
                            <input type="password" name="senha" placeholder=" Senha" class="form-control mb-3">
                            <button class="btn btn-success mt-3" name="Login">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>