<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento ETech 2026</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Eventocss.css">
</head>
<body>
    <!-- Cabeçalho e Navegação -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">ETech 2026</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#inicio">Início</a></li>
                        <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
                        <li class="nav-item"><a class="nav-link" href="#palestrantes">Palestrantes</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Conteúdo Principal -->
    <main>
        <section id="inicio" class="container py-5">
            <div class="row text-center">
                <div class="col-12">
                    <h1>Evento ETech 2026</h1>
                    <p class="lead">Data: 15-17 de Março, 2026 | Local: Centro de Convenções, São Paulo</p>
                    <p>O ETech 2026 é um evento revolucionário que acontecerá entre os dias 15 e 17 de março de 2026, no Centro de Convenções de São Paulo, uma das maiores e mais modernas instalações do Brasil para conferências. Este evento é projetado para ser um marco no cenário da tecnologia e inovação, reunindo líderes da indústria, desenvolvedores, empreendedores, acadêmicos e entusiastas em um ambiente dinâmico e inspirador.</p>
                </div>
            </div>
        </section>

        <section id="sobre" class="container py-5">
            <h2 class="text-center mb-4">Sobre o Evento</h2>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <p> O ETech 2026 tem como missão explorar o futuro da tecnologia digital e seu impacto na sociedade. Com o tema "Conectando o Amanhã: Inovação sem Limites", o evento busca discutir tendências emergentes, como inteligência artificial, computação quântica, realidade aumentada, blockchain e sustentabilidade tecnológica, além de promover a troca de ideias entre os participantes.</p>
                </div>
            </div>
        </section>

        <section id="palestrantes" class="container py-5">
            <h2 class="text-center mb-4">Palestrantes Confirmados</h2>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <ul class="list-unstyled">
                        
                        <?php
                        $palestrantes = [
                            ["nome" => "Cristian", "confirmado" => true],
                            ["nome" => "Samid", "confirmado" => false],
                            ["nome" => "Camila", "confirmado" => true]
                        ];
                        foreach ($palestrantes as $palestrante) {
                            echo "<li class='mb-2'>";
                            echo $palestrante["nome"];
                            if (!$palestrante["confirmado"]) {
                                echo " <span class='badge bg-warning text-dark'>Em Breve!</span>";
                            }
                            echo "</li>";
                        }
                        ?>
                        
                    </ul>
                </div>
            </div>
        </section>
    </main>

    <!-- Rodapé -->
    <footer class="bg-dark text-white text-center py-3">
        <p class="text-muted mb-0">&copy; 2026 ETech - Todos os direitos reservados</p>
        <p class="text-muted">Contato: contato@etech2026.com</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>