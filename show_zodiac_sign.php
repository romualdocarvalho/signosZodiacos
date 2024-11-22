<?php include('layouts/header.php'); ?>

<div class="container">
  <div class="zodiac-result">
    <?php
        if (isset($_POST['data_nascimento']) && !empty($_POST['data_nascimento'])) {
            $data_nascimento = new DateTime($_POST['data_nascimento']);
            $signos = simplexml_load_file("signos.xml");
            $ano_atual = date('Y');
            $signo_encontrado = null;

            foreach ($signos->signo as $signo) {
                $data_inicio = DateTime::createFromFormat('d/m/Y', $signo->dataInicio . '/' . $ano_atual);
                $data_fim = DateTime::createFromFormat('d/m/Y', $signo->dataFim . '/' . $ano_atual);
                
                // Ajuste para signos que atravessam o ano (ex: Capricórnio)
                if ($data_fim < $data_inicio) {
                    if ($data_nascimento->format('m/d') <= $data_fim->format('m/d')) {
                        $data_inicio->modify('-1 year');
                    } else {
                        $data_fim->modify('+1 year');
                    }
                }

                $data_comparar = DateTime::createFromFormat('Y-m-d', 
                    $ano_atual . '-' . $data_nascimento->format('m-d'));

                if ($data_comparar >= $data_inicio && $data_comparar <= $data_fim) {
                    $signo_encontrado = $signo;
                    break;
                }
            }

            if ($signo_encontrado) {
                echo "<h1 class='signo-nome'>" . $signo_encontrado->signoNome . "</h1>";
                echo "<p class='signo-data'>Período: " . $signo_encontrado->dataInicio . " - " . 
                     $signo_encontrado->dataFim . "</p>";
                echo "<p class='signo-descricao'>" . $signo_encontrado->descricao . "</p>";
            } else {
                echo "<div class='alert alert-danger'>Não foi possível determinar o signo.</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Data de nascimento não fornecida.</div>";
        }
        ?>
    <a href="index.php" class="btn btn-primary mt-4">Voltar</a>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>