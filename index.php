<?php
// Dados fictícios para demonstrar como o dashboard pode funcionar.
$compartimentosDisponiveis = 2;
$compartimentosOcupados = 2;

$compartimentos = [
    ["numero" => "A01", "equipamento" => "Furadeira", "estado" => "Ocupado"],
    ["numero" => "A02", "equipamento" => "—", "estado" => "Disponível"],
    ["numero" => "B01", "equipamento" => "Multímetro", "estado" => "Ocupado"],
    ["numero" => "B02", "equipamento" => "—", "estado" => "Disponível"]
];

$eventos = [
    ["operador" => "Ana Souza", "compartimento" => "A01", "resultado" => "Acesso autorizado", "horario" => "23/11/2026 14:32"],
    ["operador" => "Carlos Lima", "compartimento" => "B01", "resultado" => "Acesso autorizado", "horario" => "23/11/2026 13:58"],
    ["operador" => "Credencial desconhecida", "compartimento" => "A02", "resultado" => "Acesso negado", "horario" => "23/11/2026 13:20"]
];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do Armário</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #eee; color: #222; }
        header { background: #333; color: white; padding: 15px 25px; }
        nav { background: #ddd; padding: 15px; width: 160px; min-height: calc(100vh - 58px); float: left; }
        nav p { margin: 10px 0; }
        main { margin-left: 210px; padding: 20px; }
        section { background: white; padding: 15px; margin-bottom: 15px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ccc; text-align: left; }
        @media (max-width: 600px) {
            nav { float: none; width: auto; min-height: 0; }
            nav p { display: inline-block; margin-right: 15px; }
            main { margin-left: 0; }
        }
    </style>
</head>
<body>
    <header>
        <h2>Sistema do Armário de Segurança</h2>
    </header>

    <nav>
        <p>Dashboard</p>
        <p>Operadores</p>
        <p>Compartimentos</p>
        <p>Histórico</p>
    </nav>

    <main>
        <h2>Dashboard</h2>

        <section>
            <h3>Resumo</h3>
            <p>Compartimentos disponíveis: <?php echo $compartimentosDisponiveis; ?></p>
            <p>Compartimentos ocupados: <?php echo $compartimentosOcupados; ?></p>
        </section>

        <section>
            <h3>Compartimentos</h3>
            <table>
                <tr><th>Identificação</th><th>Equipamento</th><th>Estado</th></tr>
                <?php foreach ($compartimentos as $item) { ?>
                    <tr>
                        <td><?php echo $item["numero"]; ?></td>
                        <td><?php echo $item["equipamento"]; ?></td>
                        <td><?php echo $item["estado"]; ?></td>
                    </tr>
                <?php } ?>
            </table>
        </section>

        <section>
            <h3>Últimos eventos</h3>
            <table>
                <tr><th>Operador</th><th>Compartimento</th><th>Resultado</th><th>Data e hora</th></tr>
                <?php foreach ($eventos as $evento) { ?>
                    <tr>
                        <td><?php echo $evento["operador"]; ?></td>
                        <td><?php echo $evento["compartimento"]; ?></td>
                        <td><?php echo $evento["resultado"]; ?></td>
                        <td><?php echo $evento["horario"]; ?></td>
                    </tr>
                <?php } ?>
            </table>
        </section>
    </main>
</body>
</html>
