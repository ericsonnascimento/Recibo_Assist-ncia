<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="static/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="static/img/ico-grupocyber.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="static/style.css" rel="stylesheet">
    <title>Home</title>
</head>
<body>
    <header>
        <h1>Recibo Assistência</h1>
    </header>
    <aside>
        <section>
            <img src="static/img/Logo-Grupo-Cyber-PNG-04.png" alt="logo_grupocyber">
        </section>
        <nav id="navbar" class="nav-menu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php"><i class="bi bi-house"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=novo_cliente"><i class="bi bi-person-plus"></i></i> Novo Cliente</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-search"></i></i> Consultar Cliente</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-clipboard-plus"></i> Novo Recibo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-search"></i> Consultar Recibo</a>
                </li>
            </ul>
        </nav>
        <main>

        </main>
        <footer>
            
        </footer>
    </aside> 
    <div class="container">
        <?php
            include("config.php");
            switch(@$_REQUEST["page"]){
                case "salvar":
                    include("salvar_cliente.php");
                break;
                case "novo_cliente":
                    include("novo_cliente.php");
                break;
                case "consultar_cliente":
                    include("consultar_cliente.php");
                break;
                case "novo_recibo":
                    include("novo_recibo.php");
                break;
                case "consultar_recibo":
                    include("consultar_recibo.php");
                break;
                default:
                break;
            }
        ?>
    </div>  
</body>
<script src="static/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>