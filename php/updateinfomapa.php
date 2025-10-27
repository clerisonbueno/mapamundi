<?php
include_once('bd.php');
$dados = consulta();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Informações - Mapa Mundi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <form action="bd.php?gt=alterar" method="post" class="d-flex flex-column gap-3
         justify-content-center align-items-center vh-100">
    <h1 class="h2 text-center mt-5">Cadastro de eventos</h1>
<select class="form-control mb-2" name="pais" id="" required>
    <option value="">Selecione um país...</option>
    <option value="Afeganistão" <?php echo $dados[0]['pais'] == "Afeganistão" ? 'selected' : '' ?>>Afeganistão</option>
    <option value="Albânia" <?php echo $dados[0]['pais'] == "Albânia" ? 'selected' : '' ?>>Albânia</option>
    <option value="Argélia" <?php echo $dados[0]['pais'] == "Argélia" ? 'selected' : '' ?>>Argélia</option>
    <option value="Samoa Americana" <?php echo $dados[0]['pais'] == "Samoa Americana" ? 'selected' : '' ?>>Samoa Americana</option>
    <option value="Andorra" <?php echo $dados[0]['pais'] == "Andorra" ? 'selected' : '' ?>>Andorra</option>
    <option value="Angola" <?php echo $dados[0]['pais'] == "Angola" ? 'selected' : '' ?>>Angola</option>
    <option value="Anguila" <?php echo $dados[0]['pais'] == "Anguila" ? 'selected' : '' ?>>Anguila</option>
    <option value="Argentina" <?php echo $dados[0]['pais'] == "Argentina" ? 'selected' : '' ?>>Argentina</option>
    <option value="Armênia" <?php echo $dados[0]['pais'] == "Armênia" ? 'selected' : '' ?>>Armênia</option>
    <option value="Aruba" <?php echo $dados[0]['pais'] == "Aruba" ? 'selected' : '' ?>>Aruba</option>
    <option value="Austrália" <?php echo $dados[0]['pais'] == "Austrália" ? 'selected' : '' ?>>Austrália</option>
    <option value="Áustria" <?php echo $dados[0]['pais'] == "Áustria" ? 'selected' : '' ?>>Áustria</option>
    <option value="Azerbaijão" <?php echo $dados[0]['pais'] == "Azerbaijão" ? 'selected' : '' ?>>Azerbaijão</option>
    <option value="Bahamas" <?php echo $dados[0]['pais'] == "Bahamas" ? 'selected' : '' ?>>Bahamas</option>
    <option value="Bahrein" <?php echo $dados[0]['pais'] == "Bahrein" ? 'selected' : '' ?>>Bahrein</option>
    <option value="Bangladesh" <?php echo $dados[0]['pais'] == "Bangladesh" ? 'selected' : '' ?>>Bangladesh</option>
    <option value="Barbados" <?php echo $dados[0]['pais'] == "Barbados" ? 'selected' : '' ?>>Barbados</option>
    <option value="Bielorrússia" <?php echo $dados[0]['pais'] == "Bielorrússia" ? 'selected' : '' ?>>Bielorrússia</option>
    <option value="Bélgica" <?php echo $dados[0]['pais'] == "Bélgica" ? 'selected' : '' ?>>Bélgica</option>
    <option value="Belize" <?php echo $dados[0]['pais'] == "Belize" ? 'selected' : '' ?>>Belize</option>
    <option value="Benin" <?php echo $dados[0]['pais'] == "Benin" ? 'selected' : '' ?>>Benin</option>
    <option value="Bermudas" <?php echo $dados[0]['pais'] == "Bermudas" ? 'selected' : '' ?>>Bermudas</option>
    <option value="Butão" <?php echo $dados[0]['pais'] == "Butão" ? 'selected' : '' ?>>Butão</option>
    <option value="Bolívia" <?php echo $dados[0]['pais'] == "Bolívia" ? 'selected' : '' ?>>Bolívia</option>
    <option value="Bósnia e Herzegovina" <?php echo $dados[0]['pais'] == "Bósnia e Herzegovina" ? 'selected' : '' ?>>Bósnia e Herzegovina</option>
    <option value="Botsuana" <?php echo $dados[0]['pais'] == "Botsuana" ? 'selected' : '' ?>>Botsuana</option>
    <option value="Ilha Bouvet" <?php echo $dados[0]['pais'] == "Ilha Bouvet" ? 'selected' : '' ?>>Ilha Bouvet</option>
    <option value="Brasil" <?php echo $dados[0]['pais'] == "Brasil" ? 'selected' : '' ?>>Brasil</option>
    <option value="Território Britânico do Oceano Índico" <?php echo $dados[0]['pais'] == "Território Britânico do Oceano Índico" ? 'selected' : '' ?>>Território Britânico do Oceano Índico</option>
    <option value="Brunei" <?php echo $dados[0]['pais'] == "Brunei" ? 'selected' : '' ?>>Brunei</option>
    <option value="Bulgária" <?php echo $dados[0]['pais'] == "Bulgária" ? 'selected' : '' ?>>Bulgária</option>
    <option value="Burkina Faso" <?php echo $dados[0]['pais'] == "Burkina Faso" ? 'selected' : '' ?>>Burkina Faso</option>
    <option value="Burundi" <?php echo $dados[0]['pais'] == "Burundi" ? 'selected' : '' ?>>Burundi</option>
    <option value="Camboja" <?php echo $dados[0]['pais'] == "Camboja" ? 'selected' : '' ?>>Camboja</option>
    <option value="Camarões" <?php echo $dados[0]['pais'] == "Camarões" ? 'selected' : '' ?>>Camarões</option>
    <option value="Canadá" <?php echo $dados[0]['pais'] == "Canadá" ? 'selected' : '' ?>>Canadá</option>
    <option value="Cabo Verde" <?php echo $dados[0]['pais'] == "Cabo Verde" ? 'selected' : '' ?>>Cabo Verde</option>
    <option value="Ilhas Cayman" <?php echo $dados[0]['pais'] == "Ilhas Cayman" ? 'selected' : '' ?>>Ilhas Cayman</option>
    <option value="República Centro-Africana" <?php echo $dados[0]['pais'] == "República Centro-Africana" ? 'selected' : '' ?>>República Centro-Africana</option>
    <option value="Chade" <?php echo $dados[0]['pais'] == "Chade" ? 'selected' : '' ?>>Chade</option>
    <option value="Chile" <?php echo $dados[0]['pais'] == "Chile" ? 'selected' : '' ?>>Chile</option>
    <option value="China" <?php echo $dados[0]['pais'] == "China" ? 'selected' : '' ?>>China</option>
    <option value="Ilha do Natal" <?php echo $dados[0]['pais'] == "Ilha do Natal" ? 'selected' : '' ?>>Ilha do Natal</option>
    <option value="Ilhas Cocos (Keeling)" <?php echo $dados[0]['pais'] == "Ilhas Cocos (Keeling)" ? 'selected' : '' ?>>Ilhas Cocos (Keeling)</option>
    <option value="Colômbia" <?php echo $dados[0]['pais'] == "Colômbia" ? 'selected' : '' ?>>Colômbia</option>
    <option value="Comores" <?php echo $dados[0]['pais'] == "Comores" ? 'selected' : '' ?>>Comores</option>
    <option value="Congo" <?php echo $dados[0]['pais'] == "Congo" ? 'selected' : '' ?>>Congo</option>
    <option value="República Democrática do Congo" <?php echo $dados[0]['pais'] == "República Democrática do Congo" ? 'selected' : '' ?>>República Democrática do Congo</option>
    <option value="Ilhas Cook" <?php echo $dados[0]['pais'] == "Ilhas Cook" ? 'selected' : '' ?>>Ilhas Cook</option>
    <option value="Costa Rica" <?php echo $dados[0]['pais'] == "Costa Rica" ? 'selected' : '' ?>>Costa Rica</option>
    <option value="Costa do Marfim" <?php echo $dados[0]['pais'] == "Costa do Marfim" ? 'selected' : '' ?>>Costa do Marfim</option>
    <option value="Croácia" <?php echo $dados[0]['pais'] == "Croácia" ? 'selected' : '' ?>>Croácia</option>
    <option value="Cuba" <?php echo $dados[0]['pais'] == "Cuba" ? 'selected' : '' ?>>Cuba</option>
    <option value="Chipre" <?php echo $dados[0]['pais'] == "Chipre" ? 'selected' : '' ?>>Chipre</option>
    <option value="República Tcheca" <?php echo $dados[0]['pais'] == "República Tcheca" ? 'selected' : '' ?>>República Tcheca</option>
    <option value="Dinamarca" <?php echo $dados[0]['pais'] == "Dinamarca" ? 'selected' : '' ?>>Dinamarca</option>
    <option value="Djibuti" <?php echo $dados[0]['pais'] == "Djibuti" ? 'selected' : '' ?>>Djibuti</option>
    <option value="Dominica" <?php echo $dados[0]['pais'] == "Dominica" ? 'selected' : '' ?>>Dominica</option>
    <option value="República Dominicana" <?php echo $dados[0]['pais'] == "República Dominicana" ? 'selected' : '' ?>>República Dominicana</option>
    <option value="Equador" <?php echo $dados[0]['pais'] == "Equador" ? 'selected' : '' ?>>Equador</option>
    <option value="Egito" <?php echo $dados[0]['pais'] == "Egito" ? 'selected' : '' ?>>Egito</option>
    <option value="El Salvador" <?php echo $dados[0]['pais'] == "El Salvador" ? 'selected' : '' ?>>El Salvador</option>
    <option value="Guiné Equatorial" <?php echo $dados[0]['pais'] == "Guiné Equatorial" ? 'selected' : '' ?>>Guiné Equatorial</option>
    <option value="Eritreia" <?php echo $dados[0]['pais'] == "Eritreia" ? 'selected' : '' ?>>Eritreia</option>
    <option value="Estônia" <?php echo $dados[0]['pais'] == "Estônia" ? 'selected' : '' ?>>Estônia</option>
    <option value="Etiópia" <?php echo $dados[0]['pais'] == "Etiópia" ? 'selected' : '' ?>>Etiópia</option>
    <option value="Ilhas Malvinas" <?php echo $dados[0]['pais'] == "Ilhas Malvinas" ? 'selected' : '' ?>>Ilhas Malvinas</option>
    <option value="Ilhas Faroé" <?php echo $dados[0]['pais'] == "Ilhas Faroé" ? 'selected' : '' ?>>Ilhas Faroé</option>
    <option value="Fiji" <?php echo $dados[0]['pais'] == "Fiji" ? 'selected' : '' ?>>Fiji</option>
    <option value="Finlândia" <?php echo $dados[0]['pais'] == "Finlândia" ? 'selected' : '' ?>>Finlândia</option>
    <option value="França" <?php echo $dados[0]['pais'] == "França" ? 'selected' : '' ?>>França</option>
    <option value="Guiana Francesa" <?php echo $dados[0]['pais'] == "Guiana Francesa" ? 'selected' : '' ?>>Guiana Francesa</option>
    <option value="Polinésia Francesa" <?php echo $dados[0]['pais'] == "Polinésia Francesa" ? 'selected' : '' ?>>Polinésia Francesa</option>
    <option value="Terras Austrais e Antárticas Francesas" <?php echo $dados[0]['pais'] == "Terras Austrais e Antárticas Francesas" ? 'selected' : '' ?>>Terras Austrais e Antárticas Francesas</option>
    <option value="Gabão" <?php echo $dados[0]['pais'] == "Gabão" ? 'selected' : '' ?>>Gabão</option>
    <option value="Gâmbia" <?php echo $dados[0]['pais'] == "Gâmbia" ? 'selected' : '' ?>>Gâmbia</option>
    <option value="Geórgia" <?php echo $dados[0]['pais'] == "Geórgia" ? 'selected' : '' ?>>Geórgia</option>
    <option value="Alemanha" <?php echo $dados[0]['pais'] == "Alemanha" ? 'selected' : '' ?>>Alemanha</option>
    <option value="Gana" <?php echo $dados[0]['pais'] == "Gana" ? 'selected' : '' ?>>Gana</option>
    <option value="Gibraltar" <?php echo $dados[0]['pais'] == "Gibraltar" ? 'selected' : '' ?>>Gibraltar</option>
    <option value="Grécia" <?php echo $dados[0]['pais'] == "Grécia" ? 'selected' : '' ?>>Grécia</option>
    <option value="Groenlândia" <?php echo $dados[0]['pais'] == "Groenlândia" ? 'selected' : '' ?>>Groenlândia</option>
    <option value="Granada" <?php echo $dados[0]['pais'] == "Granada" ? 'selected' : '' ?>>Granada</option>
    <option value="Guadalupe" <?php echo $dados[0]['pais'] == "Guadalupe" ? 'selected' : '' ?>>Guadalupe</option>
    <option value="Guam" <?php echo $dados[0]['pais'] == "Guam" ? 'selected' : '' ?>>Guam</option>
    <option value="Guatemala" <?php echo $dados[0]['pais'] == "Guatemala" ? 'selected' : '' ?>>Guatemala</option>
    <option value="Guiné" <?php echo $dados[0]['pais'] == "Guiné" ? 'selected' : '' ?>>Guiné</option>
    <option value="Guiné-Bissau" <?php echo $dados[0]['pais'] == "Guiné-Bissau" ? 'selected' : '' ?>>Guiné-Bissau</option>
    <option value="Guiana" <?php echo $dados[0]['pais'] == "Guiana" ? 'selected' : '' ?>>Guiana</option>
    <option value="Haiti" <?php echo $dados[0]['pais'] == "Haiti" ? 'selected' : '' ?>>Haiti</option>
    <option value="Ilhas Heard e McDonald" <?php echo $dados[0]['pais'] == "Ilhas Heard e McDonald" ? 'selected' : '' ?>>Ilhas Heard e McDonald</option>
    <option value="Vaticano" <?php echo $dados[0]['pais'] == "Vaticano" ? 'selected' : '' ?>>Vaticano</option>
    <option value="Honduras" <?php echo $dados[0]['pais'] == "Honduras" ? 'selected' : '' ?>>Honduras</option>
    <option value="Hong Kong" <?php echo $dados[0]['pais'] == "Hong Kong" ? 'selected' : '' ?>>Hong Kong</option>
    <option value="Hungria" <?php echo $dados[0]['pais'] == "Hungria" ? 'selected' : '' ?>>Hungria</option>
    <option value="Islândia" <?php echo $dados[0]['pais'] == "Islândia" ? 'selected' : '' ?>>Islândia</option>
    <option value="Índia" <?php echo $dados[0]['pais'] == "Índia" ? 'selected' : '' ?>>Índia</option>
    <option value="Indonésia" <?php echo $dados[0]['pais'] == "Indonésia" ? 'selected' : '' ?>>Indonésia</option>
    <option value="Irã" <?php echo $dados[0]['pais'] == "Irã" ? 'selected' : '' ?>>Irã</option>
    <option value="Iraque" <?php echo $dados[0]['pais'] == "Iraque" ? 'selected' : '' ?>>Iraque</option>
    <option value="Irlanda" <?php echo $dados[0]['pais'] == "Irlanda" ? 'selected' : '' ?>>Irlanda</option>
    <option value="Israel" <?php echo $dados[0]['pais'] == "Israel" ? 'selected' : '' ?>>Israel</option>
    <option value="Itália" <?php echo $dados[0]['pais'] == "Itália" ? 'selected' : '' ?>>Itália</option>
    <option value="Jamaica" <?php echo $dados[0]['pais'] == "Jamaica" ? 'selected' : '' ?>>Jamaica</option>
    <option value="Japão" <?php echo $dados[0]['pais'] == "Japão" ? 'selected' : '' ?>>Japão</option>
    <option value="Jordânia" <?php echo $dados[0]['pais'] == "Jordânia" ? 'selected' : '' ?>>Jordânia</option>
    <option value="Cazaquistão" <?php echo $dados[0]['pais'] == "Cazaquistão" ? 'selected' : '' ?>>Cazaquistão</option>
    <option value="Quênia" <?php echo $dados[0]['pais'] == "Quênia" ? 'selected' : '' ?>>Quênia</option>
    <option value="Quiribati" <?php echo $dados[0]['pais'] == "Quiribati" ? 'selected' : '' ?>>Quiribati</option>
    <option value="Coreia do Norte" <?php echo $dados[0]['pais'] == "Coreia do Norte" ? 'selected' : '' ?>>Coreia do Norte</option>
    <option value="Coreia do Sul" <?php echo $dados[0]['pais'] == "Coreia do Sul" ? 'selected' : '' ?>>Coreia do Sul</option>
    <option value="Kuwait" <?php echo $dados[0]['pais'] == "Kuwait" ? 'selected' : '' ?>>Kuwait</option>
    <option value="Quirguistão" <?php echo $dados[0]['pais'] == "Quirguistão" ? 'selected' : '' ?>>Quirguistão</option>
    <option value="Laos" <?php echo $dados[0]['pais'] == "Laos" ? 'selected' : '' ?>>Laos</option>
    <option value="Letônia" <?php echo $dados[0]['pais'] == "Letônia" ? 'selected' : '' ?>>Letônia</option>
    <option value="Líbano" <?php echo $dados[0]['pais'] == "Líbano" ? 'selected' : '' ?>>Líbano</option>
    <option value="Lesoto" <?php echo $dados[0]['pais'] == "Lesoto" ? 'selected' : '' ?>>Lesoto</option>
    <option value="Libéria" <?php echo $dados[0]['pais'] == "Libéria" ? 'selected' : '' ?>>Libéria</option>
    <option value="Líbia" <?php echo $dados[0]['pais'] == "Líbia" ? 'selected' : '' ?>>Líbia</option>
    <option value="Liechtenstein" <?php echo $dados[0]['pais'] == "Liechtenstein" ? 'selected' : '' ?>>Liechtenstein</option>
    <option value="Lituânia" <?php echo $dados[0]['pais'] == "Lituânia" ? 'selected' : '' ?>>Lituânia</option>
    <option value="Luxemburgo" <?php echo $dados[0]['pais'] == "Luxemburgo" ? 'selected' : '' ?>>Luxemburgo</option>
    <option value="Macau" <?php echo $dados[0]['pais'] == "Macau" ? 'selected' : '' ?>>Macau</option>
    <option value="Macedônia do Norte" <?php echo $dados[0]['pais'] == "Macedônia do Norte" ? 'selected' : '' ?>>Macedônia do Norte</option>
    <option value="Madagáscar" <?php echo $dados[0]['pais'] == "Madagáscar" ? 'selected' : '' ?>>Madagáscar</option>
    <option value="Malawi" <?php echo $dados[0]['pais'] == "Malawi" ? 'selected' : '' ?>>Malawi</option>
    <option value="Malásia" <?php echo $dados[0]['pais'] == "Malásia" ? 'selected' : '' ?>>Malásia</option>
    <option value="Maldivas" <?php echo $dados[0]['pais'] == "Maldivas" ? 'selected' : '' ?>>Maldivas</option>
    <option value="Mali" <?php echo $dados[0]['pais'] == "Mali" ? 'selected' : '' ?>>Mali</option>
    <option value="Malta" <?php echo $dados[0]['pais'] == "Malta" ? 'selected' : '' ?>>Malta</option>
    <option value="Ilhas Marshall" <?php echo $dados[0]['pais'] == "Ilhas Marshall" ? 'selected' : '' ?>>Ilhas Marshall</option>
    <option value="Martinica" <?php echo $dados[0]['pais'] == "Martinica" ? 'selected' : '' ?>>Martinica</option>
    <option value="Mauritânia" <?php echo $dados[0]['pais'] == "Mauritânia" ? 'selected' : '' ?>>Mauritânia</option>
    <option value="Maurício" <?php echo $dados[0]['pais'] == "Maurício" ? 'selected' : '' ?>>Maurício</option>
    <option value="Mayotte" <?php echo $dados[0]['pais'] == "Mayotte" ? 'selected' : '' ?>>Mayotte</option>
    <option value="México" <?php echo $dados[0]['pais'] == "México" ? 'selected' : '' ?>>México</option>
    <option value="Micronésia" <?php echo $dados[0]['pais'] == "Micronésia" ? 'selected' : '' ?>>Micronésia</option>
    <option value="Moldávia" <?php echo $dados[0]['pais'] == "Moldávia" ? 'selected' : '' ?>>Moldávia</option>
    <option value="Mônaco" <?php echo $dados[0]['pais'] == "Mônaco" ? 'selected' : '' ?>>Mônaco</option>
    <option value="Mongólia" <?php echo $dados[0]['pais'] == "Mongólia" ? 'selected' : '' ?>>Mongólia</option>
    <option value="Montserrat" <?php echo $dados[0]['pais'] == "Montserrat" ? 'selected' : '' ?>>Montserrat</option>
    <option value="Marrocos" <?php echo $dados[0]['pais'] == "Marrocos" ? 'selected' : '' ?>>Marrocos</option>
    <option value="Moçambique" <?php echo $dados[0]['pais'] == "Moçambique" ? 'selected' : '' ?>>Moçambique</option>
    <option value="Mianmar" <?php echo $dados[0]['pais'] == "Mianmar" ? 'selected' : '' ?>>Mianmar</option>
    <option value="Namíbia" <?php echo $dados[0]['pais'] == "Namíbia" ? 'selected' : '' ?>>Namíbia</option>
    <option value="Nauru" <?php echo $dados[0]['pais'] == "Nauru" ? 'selected' : '' ?>>Nauru</option>
    <option value="Nepal" <?php echo $dados[0]['pais'] == "Nepal" ? 'selected' : '' ?>>Nepal</option>
    <option value="Países Baixos" <?php echo $dados[0]['pais'] == "Países Baixos" ? 'selected' : '' ?>>Países Baixos</option>
    <option value="Antilhas Holandesas" <?php echo $dados[0]['pais'] == "Antilhas Holandesas" ? 'selected' : '' ?>>Antilhas Holandesas</option>
    <option value="Nova Caledônia" <?php echo $dados[0]['pais'] == "Nova Caledônia" ? 'selected' : '' ?>>Nova Caledônia</option>
    <option value="Nova Zelândia" <?php echo $dados[0]['pais'] == "Nova Zelândia" ? 'selected' : '' ?>>Nova Zelândia</option>
    <option value="Nicarágua" <?php echo $dados[0]['pais'] == "Nicarágua" ? 'selected' : '' ?>>Nicarágua</option>
    <option value="Níger" <?php echo $dados[0]['pais'] == "Níger" ? 'selected' : '' ?>>Níger</option>
</select>

    <select class="form-control mb-2" name="continente" id=""  require>
        <option value="">Selecione um continente...</option>
        <option value="África" <?php echo $dados[0]['continente'] == "África" ? 'selected' : '' ?>>África</option>
        <option value="América" <?php echo $dados[0]['continente'] == "América" ? 'selected' : '' ?>>América</option>
        <option value="Antártida" <?php echo $dados[0]['continente'] == "Antártida" ? 'selected' : '' ?>>Antártida</option>
        <option value="Ásia" <?php echo $dados[0]['continente'] == "Ásia" ? 'selected' : '' ?>>Ásia</option>
        <option value="Europa" <?php echo $dados[0]['continente'] == "Europa" ? 'selected' : '' ?>>Europa</option>
        <option value="Oceania" <?php echo $dados[0]['continente'] == "Oceania" ? 'selected' : '' ?>>Oceania</option>
    </select>
    <select class="form-control mb-2" name="regiao_continente" id="regiao_continente" required>
    <option value="">Selecione uma região</option>

    <optgroup label="América">
        <option value="América do Norte" <?php echo $dados[0]['regiao_continente'] == "América do Norte" ? 'selected' : '' ?>>América do Norte</option>
        <option value="América Central" <?php echo $dados[0]['regiao_continente'] == "América Central" ? 'selected' : '' ?>>América Central</option>
        <option value="América do Sul" <?php echo $dados[0]['regiao_continente'] == "América do Sul" ? 'selected' : '' ?>>América do Sul</option>
    </optgroup>

    <optgroup label="África">
        <option value="África Setentrional (Norte)" <?php echo $dados[0]['regiao_continente'] == "África Setentrional (Norte)" ? 'selected' : '' ?>>África Setentrional (Norte)</option>
        <option value="África Ocidental" <?php echo $dados[0]['regiao_continente'] == "África Ocidental" ? 'selected' : '' ?>>África Ocidental</option>
        <option value="África Central" <?php echo $dados[0]['regiao_continente'] == "África Central" ? 'selected' : '' ?>>África Central</option>
        <option value="África Oriental" <?php echo $dados[0]['regiao_continente'] == "África Oriental" ? 'selected' : '' ?>>África Oriental</option>
        <option value="África Austral (Sul)" <?php echo $dados[0]['regiao_continente'] == "África Austral (Sul)" ? 'selected' : '' ?>>África Austral (Sul)</option>
    </optgroup>

    <optgroup label="Ásia">
        <option value="Ásia Ocidental (Oriente Médio)" <?php echo $dados[0]['regiao_continente'] == "Ásia Ocidental (Oriente Médio)" ? 'selected' : '' ?>>Ásia Ocidental (Oriente Médio)</option>
        <option value="Ásia Central" <?php echo $dados[0]['regiao_continente'] == "Ásia Central" ? 'selected' : '' ?>>Ásia Central</option>
        <option value="Sul da Ásia (Subcontinente Indiano)" <?php echo $dados[0]['regiao_continente'] == "Sul da Ásia (Subcontinente Indiano)" ? 'selected' : '' ?>>Sul da Ásia (Subcontinente Indiano)</option>
        <option value="Sudeste Asiático" <?php echo $dados[0]['regiao_continente'] == "Sudeste Asiático" ? 'selected' : '' ?>>Sudeste Asiático</option>
        <option value="Leste Asiático (Extremo Oriente)" <?php echo $dados[0]['regiao_continente'] == "Leste Asiático (Extremo Oriente)" ? 'selected' : '' ?>>Leste Asiático (Extremo Oriente)</option>
    </optgroup>

    <optgroup label="Europa">
        <option value="Europa Ocidental" <?php echo $dados[0]['regiao_continente'] == "Europa Ocidental" ? 'selected' : '' ?>>Europa Ocidental</option>
        <option value="Europa Setentrional (Norte)" <?php echo $dados[0]['regiao_continente'] == "Europa Setentrional (Norte)" ? 'selected' : '' ?>>Europa Setentrional (Norte)</option>
        <option value="Europa Meridional (Sul)" <?php echo $dados[0]['regiao_continente'] == "Europa Meridional (Sul)" ? 'selected' : '' ?>>Europa Meridional (Sul)</option>
        <option value="Europa Centro-Oriental" <?php echo $dados[0]['regiao_continente'] == "Europa Centro-Oriental" ? 'selected' : '' ?>>Europa Centro-Oriental</option>
    </optgroup>

    <optgroup label="Oceania">
        <option value="Australásia" <?php echo $dados[0]['regiao_continente'] == "Australásia" ? 'selected' : '' ?>>Australásia</option>
        <option value="Melanésia" <?php echo $dados[0]['regiao_continente'] == "Melanésia" ? 'selected' : '' ?>>Melanésia</option>
        <option value="Micronésia" <?php echo $dados[0]['regiao_continente'] == "Micronésia" ? 'selected' : '' ?>>Micronésia</option>
        <option value="Polinésia" <?php echo $dados[0]['regiao_continente'] == "Polinésia" ? 'selected' : '' ?>>Polinésia</option>
    </optgroup>

    <optgroup label="Antártida">
        <option value="Antártida" <?php echo $dados[0]['regiao_continente'] == "Antártida" ? 'selected' : '' ?>>Antártida (Geral)</option>
    </optgroup>
</select>

        <input class="form-control mb-2" type="text" name="evento" id="" placeholder= <?php echo $dados[0]['evento'] ?>   require>
        <input class="form-control btn btn-primary" type="submit" value="Cadastrar Informações">
    </form>
</div>

    
</body>
</html>