<?php
 session_start();

 if (!empty($_SESSION['nome'])) {
    echo $_SESSION['nome'];
 } else {
    header("Location:login.php");
 }
 

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
    <form action="bd.php?gt=cadpais" method="post" class="d-flex flex-column gap-3
         justify-content-center align-items-center vh-100">
    <h1 class="h2 text-center mt-5">Cadastro de eventos</h1>
    <select class="form-control mb-2" name="pais" id=""  require>
        <option value="">Selecione um país...</option>
        <option value="Afeganistão">Afeganistão</option>
        <option value="Albânia">Albânia</option>
        <option value="Argélia">Argélia</option>
        <option value="Samoa Americana">Samoa Americana</option>
        <option value="Andorra">Andorra</option>
        <option value="Angola">Angola</option>
        <option value="Anguila">Anguila</option>
        <option value="Argentina">Argentina</option>
        <option value="Armênia">Armênia</option>
        <option value="Aruba">Aruba</option>
        <option value="Austrália">Austrália</option>
        <option value="Áustria">Áustria</option>
        <option value="Azerbaijão">Azerbaijão</option>
        <option value="Bahamas">Bahamas</option>
        <option value="Bahrein">Bahrein</option>
        <option value="Bangladesh">Bangladesh</option>
        <option value="Barbados">Barbados</option>
        <option value="Bielorrússia">Bielorrússia</option>
        <option value="Bélgica">Bélgica</option>
        <option value="Belize">Belize</option>
        <option value="Benin">Benin</option>
        <option value="Bermudas">Bermudas</option>
        <option value="Butão">Butão</option>
        <option value="Bolívia">Bolívia</option>
        <option value="Bósnia e Herzegovina">Bósnia e Herzegovina</option>
        <option value="Botsuana">Botsuana</option>
        <option value="Ilha Bouvet">Ilha Bouvet</option>
        <option value="Brasil">Brasil</option>
        <option value="Território Britânico do Oceano Índico">Território Britânico do Oceano Índico</option>
        <option value="Brunei">Brunei</option>
        <option value="Bulgária">Bulgária</option>
        <option value="Burkina Faso">Burkina Faso</option>
        <option value="Burundi">Burundi</option>
        <option value="Camboja">Camboja</option>
        <option value="Camarões">Camarões</option>
        <option value="Canadá">Canadá</option>
        <option value="Cabo Verde">Cabo Verde</option>
        <option value="Ilhas Cayman">Ilhas Cayman</option>
        <option value="República Centro-Africana">República Centro-Africana</option>
        <option value="Chade">Chade</option>
        <option value="Chile">Chile</option>
        <option value="China">China</option>
        <option value="Ilha do Natal">Ilha do Natal</option>
        <option value="Ilhas Cocos (Keeling)">Ilhas Cocos (Keeling)</option>
        <option value="Colômbia">Colômbia</option>
        <option value="Comores">Comores</option>
        <option value="Congo">Congo</option>
        <option value="República Democrática do Congo">República Democrática do Congo</option>
        <option value="Ilhas Cook">Ilhas Cook</option>
        <option value="Costa Rica">Costa Rica</option>
        <option value="Costa do Marfim">Costa do Marfim</option>
        <option value="Croácia">Croácia</option>
        <option value="Cuba">Cuba</option>
        <option value="Chipre">Chipre</option>
        <option value="República Tcheca">República Tcheca</option>
        <option value="Dinamarca">Dinamarca</option>
        <option value="Djibuti">Djibuti</option>
        <option value="Dominica">Dominica</option>
        <option value="República Dominicana">República Dominicana</option>
        <option value="Equador">Equador</option>
        <option value="Egito">Egito</option>
        <option value="El Salvador">El Salvador</option>
        <option value="Guiné Equatorial">Guiné Equatorial</option>
        <option value="Eritreia">Eritreia</option>
        <option value="Estônia">Estônia</option>
        <option value="Etiópia">Etiópia</option>
        <option value="Ilhas Malvinas">Ilhas Malvinas</option>
        <option value="Ilhas Faroé">Ilhas Faroé</option>
        <option value="Fiji">Fiji</option>
        <option value="Finlândia">Finlândia</option>
        <option value="França">França</option>
        <option value="Guiana Francesa">Guiana Francesa</option>
        <option value="Polinésia Francesa">Polinésia Francesa</option>
        <option value="Terras Austrais e Antárticas Francesas">Terras Austrais e Antárticas Francesas</option>
        <option value="Gabão">Gabão</option>
        <option value="Gâmbia">Gâmbia</option>
        <option value="Geórgia">Geórgia</option>
        <option value="Alemanha">Alemanha</option>
        <option value="Gana">Gana</option>
        <option value="Gibraltar">Gibraltar</option>
        <option value="Grécia">Grécia</option>
        <option value="Groenlândia">Groenlândia</option>
        <option value="Granada">Granada</option>
        <option value="Guadalupe">Guadalupe</option>
        <option value="Guam">Guam</option>
        <option value="Guatemala">Guatemala</option>
        <option value="Guiné">Guiné</option>
        <option value="Guiné-Bissau">Guiné-Bissau</option>
        <option value="Guiana">Guiana</option>
        <option value="Haiti">Haiti</option>
        <option value="Ilhas Heard e McDonald">Ilhas Heard e McDonald</option>
        <option value="Vaticano">Vaticano</option>
        <option value="Honduras">Honduras</option>
        <option value="Hong Kong">Hong Kong</option>
        <option value="Hungria">Hungria</option>
        <option value="Islândia">Islândia</option>
        <option value="Índia">Índia</option>
        <option value="Indonésia">Indonésia</option>
        <option value="Irã">Irã</option>
        <option value="Iraque">Iraque</option>
        <option value="Irlanda">Irlanda</option>
        <option value="Israel">Israel</option>
        <option value="Itália">Itália</option>
        <option value="Jamaica">Jamaica</option>
        <option value="Japão">Japão</option>
        <option value="Jordânia">Jordânia</option>
        <option value="Cazaquistão">Cazaquistão</option>
        <option value="Quênia">Quênia</option>
        <option value="Quiribati">Quiribati</option>
        <option value="Coreia do Norte">Coreia do Norte</option>
        <option value="Coreia do Sul">Coreia do Sul</option>
        <option value="Kuwait">Kuwait</option>
        <option value="Quirguistão">Quirguistão</option>
        <option value="Laos">Laos</option>
        <option value="Letônia">Letônia</option>
        <option value="Líbano">Líbano</option>
        <option value="Lesoto">Lesoto</option>
        <option value="Libéria">Libéria</option>
        <option value="Líbia">Líbia</option>
        <option value="Liechtenstein">Liechtenstein</option>
        <option value="Lituânia">Lituânia</option>
        <option value="Luxemburgo">Luxemburgo</option>
        <option value="Macau">Macau</option>
        <option value="Macedônia do Norte">Macedônia do Norte</option>
        <option value="Madagáscar">Madagáscar</option>
        <option value="Malawi">Malawi</option>
        <option value="Malásia">Malásia</option>
        <option value="Maldivas">Maldivas</option>
        <option value="Mali">Mali</option>
        <option value="Malta">Malta</option>
        <option value="Ilhas Marshall">Ilhas Marshall</option>
        <option value="Martinica">Martinica</option>
        <option value="Mauritânia">Mauritânia</option>
        <option value="Maurício">Maurício</option>
        <option value="Mayotte">Mayotte</option>
        <option value="México">México</option>
        <option value="Micronésia">Micronésia</option>
        <option value="Moldávia">Moldávia</option>
        <option value="Mônaco">Mônaco</option>
        <option value="Mongólia">Mongólia</option>
        <option value="Montserrat">Montserrat</option>
        <option value="Marrocos">Marrocos</option>
        <option value="Moçambique">Moçambique</option>
        <option value="Mianmar">Mianmar</option>
        <option value="Namíbia">Namíbia</option>
        <option value="Nauru">Nauru</option>
        <option value="Nepal">Nepal</option>
        <option value="Países Baixos">Países Baixos</option>
        <option value="Antilhas Holandesas">Antilhas Holandesas</option>
        <option value="Nova Caledônia">Nova Caledônia</option>
        <option value="Nova Zelândia">Nova Zelândia</option>
        <option value="Nicarágua">Nicarágua</option>
        <option value="Níger">Níger</option>
    </select>
    <select class="form-control mb-2" name="continente" id=""  require>
        <option value="">Selecione um continente...</option>
        <option value="África">África</option>
        <option value="América">América</option>
        <option value="Antártida">Antártida</option>
        <option value="Ásia">Ásia</option>
        <option value="Europa">Europa</option>
        <option value="Oceania">Oceania</option>
    </select>
    <select class="form-control mb-2" name="regiao_continente" id="regiao_continente" require>
         <option value="">Selecione uma região</option>
        <optgroup label="América">
            <option value="América do Norte">América do Norte</option>
            <option value="América Central">América Central</option>
            <option value="América do Sul">América do Sul</option>
        </optgroup>
        <optgroup label="África">
            <option value="África Setentrional (Norte)">África Setentrional (Norte)</option>
            <option value="África Ocidental">África Ocidental</option>
            <option value="África Central">África Central</option>
            <option value="África Oriental">África Oriental</option>
            <option value="África Austral (Sul)">África Austral (Sul)</option>
        </optgroup>
        <optgroup label="Ásia">
            <option value="Ásia Ocidental (Oriente Médio)">Ásia Ocidental (Oriente Médio)</option>
            <option value="Ásia Central">Ásia Central</option>
            <option value="Sul da Ásia (Subcontinente Indiano)">Sul da Ásia (Subcontinente Indiano)</option>
            <option value="Sudeste Asiático">Sudeste Asiático</option>
            <option value="Leste Asiático (Extremo Oriente)">Leste Asiático (Extremo Oriente)</option>
            </optgroup>
        <optgroup label="Europa">
            <option value="Europa Ocidental">Europa Ocidental</option>
            <option value="Europa Setentrional (Norte)">Europa Setentrional (Norte)</option>
            <option value="Europa Meridional (Sul)">Europa Meridional (Sul)</option>
            <option value="Europa Centro-Oriental">Europa Centro-Oriental</option>
        </optgroup>
        <optgroup label="Oceania">
            <option value="Australásia">Australásia</option>
            <option value="Melanésia">Melanésia</option>
            <option value="Micronésia">Micronésia</option>
            <option value="Polinésia">Polinésia</option>
        </optgroup>
        <optgroup label="Antártida">
            <option value="Antártida">Antártida (Geral)</option>
        </optgroup>
    </select>
        <input class="form-control mb-2" type="text" name="evento" id="" placeholder="Insira um evento..."  require>
        <input class="form-control btn btn-primary" type="submit" value="Cadastrar Informações">
    </form>
</div>

    
</body>
</html>