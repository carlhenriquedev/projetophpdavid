<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Relatório de Votação - ClickBest</title>
    <link rel="stylesheet" href="css/relatorios.css">
</head>

<body>

    <header>
        <h1>Relatório de Votação - ClickBest</h1>
    </header>

    <div class="container">

        <div class="relatorio-section">
            <h2 class="relatorio-title">Melhor designer</h2>
            <?php
            include('config/connection.php');
            $query = "
            SELECT 
            candidates.nome, 
            COUNT(votes.id)
            FROM 
            votes
            JOIN 
            candidates ON votes.candidate_id = candidates.id
            WHERE 
            votes.category = 'designer'
            GROUP BY 
            votes.candidate_id
            ORDER BY
            COUNT(votes.id) DESC;";

            $resultado = mysqli_query($conexao, $query);

            echo "<div class='card'>";
            while ($linha = mysqli_fetch_assoc($resultado)) {
                echo "<div class='candidato-box'>";
                echo "<p><strong>Candidato:</strong> " . htmlspecialchars($linha['nome']) . "</p>";
                echo "<p><strong>Votos:</strong> " . $linha['COUNT(votes.id)'] . "</p>";
                echo "</div>";
            }
            echo "</div>";
            ?>
        </div>

        <div class="relatorio-section">
            <h2 class="relatorio-title">Melhor frontend</h2>
            <?php
            include('config/connection.php');
            $query = "
            SELECT 
            candidates.nome, 
            COUNT(votes.id)
            FROM 
            votes
            JOIN 
            candidates ON votes.candidate_id = candidates.id
            WHERE 
            votes.category = 'frontend'
            GROUP BY 
            votes.candidate_id
            ORDER BY
            COUNT(votes.id) DESC;";

            $resultado = mysqli_query($conexao, $query);

            echo "<div class='card'>";
            while ($linha = mysqli_fetch_assoc($resultado)) {
                echo "<div class='candidato-box'>";
                echo "<p><strong>Candidato:</strong> " . htmlspecialchars($linha['nome']) . "</p>";
                echo "<p><strong>Votos:</strong> " . $linha['COUNT(votes.id)'] . "</p>";
                echo "</div>";
            }
            echo "</div>";
            ?>
        </div>

        <div class="relatorio-section">
            <h2 class="relatorio-title">Melhor backend</h2>
            <?php
            include('config/connection.php');
            $query = "
            SELECT 
            candidates.nome, 
            COUNT(votes.id)
            FROM 
            votes
            JOIN 
            candidates ON votes.candidate_id = candidates.id
            WHERE 
            votes.category = 'backend'
            GROUP BY 
            votes.candidate_id
            ORDER BY
            COUNT(votes.id) DESC;";

            $resultado = mysqli_query($conexao, $query);

            echo "<div class='card'>";
            while ($linha = mysqli_fetch_assoc($resultado)) {
                echo "<div class='candidato-box'>";
                echo "<p><strong>Candidato:</strong> " . htmlspecialchars($linha['nome']) . "</p>";
                echo "<p><strong>Votos:</strong> " . $linha['COUNT(votes.id)'] . "</p>";
                echo "</div>";
            }
            echo "</div>";
            ?>
        </div>

        <div class="relatorio-section">
            <h2 class="relatorio-title">Melhor fullstack</h2>
            <?php
            include('config/connection.php');
            $query = "
            SELECT 
            candidates.nome, 
            COUNT(votes.id)
            FROM 
            votes
            JOIN 
            candidates ON votes.candidate_id = candidates.id
            WHERE 
            votes.category = 'fullstack'
            GROUP BY 
            votes.candidate_id
            ORDER BY
            COUNT(votes.id) DESC;";

            $resultado = mysqli_query($conexao, $query);

            echo "<div class='card'>";
            while ($linha = mysqli_fetch_assoc($resultado)) {
                echo "<div class='candidato-box'>";
                echo "<p><strong>Candidato:</strong> " . htmlspecialchars($linha['nome']) . "</p>";
                echo "<p><strong>Votos:</strong> " . $linha['COUNT(votes.id)'] . "</p>";
                echo "</div>";
            }
            echo "</div>";
            ?>
        </div>

        <div class="relatorio-section">
            <h2 class="relatorio-title">Melhor dupla</h2>
            <?php
            include('config/connection.php');
            $query = "
            SELECT 
            candidates.nome, 
            COUNT(votes.id)
            FROM 
            votes
            JOIN 
            candidates ON votes.candidate_id = candidates.id
            WHERE 
            votes.category = 'dupla'
            GROUP BY 
            votes.candidate_id
            ORDER BY
            COUNT(votes.id) DESC;";

            $resultado = mysqli_query($conexao, $query);

            echo "<div class='card'>";
            while ($linha = mysqli_fetch_assoc($resultado)) {
                echo "<div class='candidato-box'>";
                echo "<p><strong>Candidato:</strong> " . htmlspecialchars($linha['nome']) . "</p>";
                echo "<p><strong>Votos:</strong> " . $linha['COUNT(votes.id)'] . "</p>";
                echo "</div>";
            }
            echo "</div>";
            ?>
        </div>

        <div class="relatorio-section">
            <h2 class="relatorio-title">Rei da resenha</h2>
            <?php
            include('config/connection.php');
            $query = "
            SELECT 
            candidates.nome, 
            COUNT(votes.id)
            FROM 
            votes
            JOIN 
            candidates ON votes.candidate_id = candidates.id
            WHERE 
            votes.category = 'resenha'
            GROUP BY 
            votes.candidate_id
            ORDER BY
            COUNT(votes.id) DESC;";

            $resultado = mysqli_query($conexao, $query);

            echo "<div class='card'>";
            while ($linha = mysqli_fetch_assoc($resultado)) {
                echo "<div class='candidato-box'>";
                echo "<p><strong>Candidato:</strong> " . htmlspecialchars($linha['nome']) . "</p>";
                echo "<p><strong>Votos:</strong> " . $linha['COUNT(votes.id)'] . "</p>";
                echo "</div>";
            }
            echo "</div>";
            ?>
        </div>

        <div class="relatorio-section">
            <h2 class="relatorio-title">Mais simpático</h2>
            <?php
            include('config/connection.php');
            $query = "
            SELECT 
            candidates.nome, 
            COUNT(votes.id)
            FROM 
            votes
            JOIN 
            candidates ON votes.candidate_id = candidates.id
            WHERE 
            votes.category = 'simpatico'
            GROUP BY 
            votes.candidate_id
            ORDER BY
            COUNT(votes.id) DESC;";

            $resultado = mysqli_query($conexao, $query);

            echo "<div class='card'>";
            while ($linha = mysqli_fetch_assoc($resultado)) {
                echo "<div class='candidato-box'>";
                echo "<p><strong>Candidato:</strong> " . htmlspecialchars($linha['nome']) . "</p>";
                echo "<p><strong>Votos:</strong> " . $linha['COUNT(votes.id)'] . "</p>";
                echo "</div>";
            }
            echo "</div>";
            ?>
        </div>

        <div class="relatorio-section">
            <h2 class="relatorio-title">Melhor professor</h2>
            <?php
            include('config/connection.php');
            $query = "
            SELECT 
            candidates.nome, 
            COUNT(votes.id)
            FROM 
            votes
            JOIN 
            candidates ON votes.candidate_id = candidates.id
            WHERE 
            votes.category = 'professor'
            GROUP BY 
            votes.candidate_id
            ORDER BY
            COUNT(votes.id) DESC;";

            $resultado = mysqli_query($conexao, $query);

            echo "<div class='card'>";
            while ($linha = mysqli_fetch_assoc($resultado)) {
                echo "<div class='candidato-box'>";
                echo "<p><strong>Candidato:</strong> " . htmlspecialchars($linha['nome']) . "</p>";
                echo "<p><strong>Votos:</strong> " . $linha['COUNT(votes.id)'] . "</p>";
                echo "</div>";
            }
            echo "</div>";
            ?>
        </div>

    </div>

    <footer>
        &copy; 2025 ClickBest - Todos os direitos reservados.
    </footer>

</body>

</html>