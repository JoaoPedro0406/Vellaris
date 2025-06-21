<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <title>Vellaris</title>
</head>

<body>
    <?php include('./include/navbar.php') ?>
    <div class="banner">
        <video autoplay muted loop class="banner-video">
            <source src="./movie/banner-1.mp4" type="video/mp4" />
        </video>

        <div class="conteudo-banner">
            <h1 class="font-title">Vellaris Consultoria</h1>
            <p class="font-paragraph">Somos uma consultoria especializada em soluções estratégicas e tecnológicas para empresas que buscam inovação, eficiência e crescimento sustentável. Com foco em gestão empresarial e transformação digital, conectamos visão e execução para resultados concretos.</p>
        </div>
    </div>


    <div class="element-grid  p-block-20 g-20">
        <h1 class="font-subtitle text-aling-center">Entre em Contato</h1>
        <div class="element-flex justify-around aling-center">
            <div class="element-grid">
                <p class="font-paragraph"> Preencha o formulário ao lado e nossa equipe entrará em contato com você o mais breve possível. Estamos prontos para tirar suas dúvidas e oferecer as melhores soluções para o seu negócio.</p>
            </div>
            <form action="./server/contat.php" method="post" class="form">
                <fieldset class="element-grid">
                    <label for="nome">
                        <p>Nome</p>
                        <input type="text">
                    </label>
                    <label for="sobrenome">
                        <p>Sobrenome</p>
                        <input type="text">
                    </label>
                    <label for="email">
                        <p>Enail</p>
                        <input type="text">
                    </label>
                    <label for="whatsapp">
                        <p>Whatsapp</p>
                        <input type="text">
                    </label>
                    <label for="Empresa">
                        <p>Empresa</p>
                        <input type="text">
                    </label>
                    <label for="cargo">
                        <p>Cargo</p>
                        <input type="text">
                    </label>
                    <label for="segmento">
                        <p>Segmento</p>
                        <select id="segmento" name="segmento" required>
                            <option disabled selected value="">Segmento</option>
                            <option value="Açúcar, Etanol e Energia">Açúcar, Etanol e Energia</option>
                            <option value="Armazenagem Agronegócio">Armazenagem Agronegócio</option>
                            <option value="Armazenamento Insumos">Armazenamento Insumos</option>
                            <option value="Associações Fed. Fundações e Entidades De Classe">Associações Fed. Fundações e Entidades De Classe</option>
                            <option value="Com. de Móveis, Eletros e Eletrônicos">Com. de Móveis, Eletros e Eletrônicos</option>
                            <option value="Com. Outros Bens Duráveis e semi-duráveis">Com. Outros Bens Duráveis e semi-duráveis</option>
                            <option value="Comércio de Alimentos e Bebidas">Comércio de Alimentos e Bebidas</option>
                            <option value="Comércio de Cosméticos, Higiene e Limpeza">Comércio de Cosméticos, Higiene e Limpeza</option>
                            <option value="Comércio de Máquinas e Equipamentos">Comércio de Máquinas e Equipamentos</option>
                            <option value="Comércio de Materiais de Construção">Comércio de Materiais de Construção</option>
                            <option value="Comércio de Medicamentos">Comércio de Medicamentos</option>
                            <option value="Comércio de Moda">Comércio de Moda</option>
                            <option value="Comércio de Veículos e Peças">Comércio de Veículos e Peças</option>
                            <option value="Cooperativa Agronegócio">Cooperativa Agronegócio</option>
                            <option value="Defensivos Agrícolas">Defensivos Agrícolas</option>
                            <option value="Distribuição Agronegócio">Distribuição Agronegócio</option>
                            <option value="Distribuição de Insumos">Distribuição de Insumos</option>
                            <option value="Energia">Energia</option>
                            <option value="Ensino/Educação">Ensino/Educação</option>
                            <option value="Fertilizantes">Fertilizantes</option>
                            <option value="Governo Estadual">Governo Estadual</option>
                            <option value="Governo Federal">Governo Federal</option>
                            <option value="Governo Municipal">Governo Municipal</option>
                            <option value="Hotelaria Turismo e Lazer">Hotelaria Turismo e Lazer</option>
                            <option value="Incorporação e Construção">Incorporação e Construção</option>
                            <option value="Ind. de Cosméticos Higiene e Limpeza">Ind. de Cosméticos Higiene e Limpeza</option>
                            <option value="Ind. de Fumo/Tabaco">Ind. de Fumo/Tabaco</option>
                            <option value="Ind. de Máquinas e Equipamentos">Ind. de Máquinas e Equipamentos</option>
                            <option value="Ind. de Materiais de Construção">Ind. de Materiais de Construção</option>
                            <option value="Ind. de Móveis Eletros Elet. Livros e Brinquedos">Ind. de Móveis Eletros Elet. Livros e Brinquedos</option>
                            <option value="Ind. de Vestuário e Moda">Ind. de Vestuário e Moda</option>
                            <option value="Ind. Farmacêutica">Ind. Farmacêutica</option>
                            <option value="Ind. Outros Bens Duráveis e semi-duráveis">Ind. Outros Bens Duráveis e semi-duráveis</option>
                            <option value="Ind. de Alimentos e Bebidas">Ind. de Alimentos e Bebidas</option>
                            <option value="Ind. Automotiva Veículos e Peças">Ind. Automotiva Veículos e Peças</option>
                            <option value="Logística Agronegócio">Logística Agronegócio</option>
                            <option value="Micronutrientes">Micronutrientes</option>
                            <option value="Mídia">Mídia</option>
                            <option value="Mobilidade Urbana">Mobilidade Urbana</option>
                            <option value="Papel e Celulose">Papel e Celulose</option>
                            <option value="Petróleo e Gás">Petróleo e Gás</option>
                            <option value="Produção Vegetal e Animal">Produção Vegetal e Animal</option>
                            <option value="Químico Petroquímico e Embalagens">Químico Petroquímico e Embalagens</option>
                            <option value="Ração Animal">Ração Animal</option>
                            <option value="Saneamento">Saneamento</option>
                            <option value="Segurança Pública e Segurança Viária">Segurança Pública e Segurança Viária</option>
                            <option value="Sementes">Sementes</option>
                            <option value="Serviços Especializados">Serviços Especializados</option>
                            <option value="Serviços Financeiros">Serviços Financeiros</option>
                            <option value="Serviços Médicos">Serviços Médicos</option>
                            <option value="Shopping Centers">Shopping Centers</option>
                            <option value="Siderurgia e Mineração">Siderurgia e Mineração</option>
                            <option value="Tecnologia">Tecnologia</option>
                            <option value="Telecomunicações">Telecomunicações</option>
                            <option value="Transporte e Logística">Transporte e Logística</option>
                        </select>
                    </label>

                    <label for="faturamentoanual">
                        <p>Faturamento Anual:</p>
                        <select id="faturamentoanual" name="faturamentoanual" required>
                            <option disabled selected value="">Faturamento anual*</option>
                            <option value="Menor que 4,8 milhões">Menor que 4,8 milhões</option>
                            <option value="De 4,8 milhões a 10 milhões">De 4,8 milhões a 10 milhões</option>
                            <option value="De 10,01 a 60 milhões">De 10,01 a 60 milhões</option>
                            <option value="De 60,01 a 300 milhões">De 60,01 a 300 milhões</option>
                            <option value="De 300,01 a 500 milhões">De 300,01 a 500 milhões</option>
                            <option value="De 500,01 a 1 bilhão">De 500,01 a 1 bilhão</option>
                            <option value="De 1,01 a 5 bilhões">De 1,01 a 5 bilhões</option>
                            <option value="Acima de 5 bilhões">Acima de 5 bilhões</option>
                        </select>
                    </label>
                </fieldset>
            </form>

        </div>
    </div>

</body>
<script src="script.js"></script>

</html>