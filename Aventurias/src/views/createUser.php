<?php 
    require_once("Components/layout.php");    
?>

<body id="bodyForCreateUser">
    <?php
        require_once("Components/Header.php");
    ?>
<!-- <section id="formNewAdventure"> -->
        <form class="row g-3" id="form">
<div id="checkImages">
            <div class="form-check, check" >
            <label class="form-check-label" for="flexRadioDefault1">                    
                    <img class="imgAdventure" src="public/images/descenso-en-canoa.jpeg" alt="escoger aventura descenso en canoa">
            </label>
            <br>
                <input class="form-check-input, point" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="descenso en canoa">
                
                </div>
                <div class="form-check, check">
                <label class="form-check-label" for="flexRadioDefault2">
                    <img class="imgAdventure" src="public/images/motosagua.jpeg" alt="Escoger aventura motos de agua">
                </label>
                <br>
                <input class="form-check-input, point" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="motos de agua" >
                
                </div>
                <div class="form-check, check">
                <label class="form-check-label" for="flexRadioDefault3">                    
                    <img class="imgAdventure" src="public/images/parapente.jpeg" alt="escoger aventura parapente">
                </label>
                <br>
                <input class="form-check-input, point" type="radio" name="flexRadioDefault" id="flexRadioDefault3" value="parapente">
                
                </div>
                <div class="form-check, check">
                <label class="form-check-label" for="flexRadioDefault4">
                    <img class="imgAdventure" src="public/images/Ruta_del_Cares.jpeg" alt="Escoger aventura Ruta del Cares">
                </label>
                <br>
                <input class="form-check-input, point" type="radio" name="flexRadioDefault" id="flexRadioDefault4" value="Ruta del Cares" >
                
            </div>
</div>
            <div class="col-md-6">
            <label for="inputName" class="form-label">Nombre</label>
            <input type="name" class="form-control" id="inputName" name="">
            </div>
            <div class="col-md-6">
            <label for="inputPhone" class="form-label">Teléfono</label>
            <input type="tel" class="form-control" id="inputPhone">
            </div>
            <div class="col-12">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="text" class="form-control" id="inputEmail" placeholder="Tu email habitual">
            </div>
            <div class="col-12">
            <label for="inputPeople" class="form-label">Nº de personas:</label>
            <input type="text" class="form-control" id="inputPeople">
            </div>
            <div class="col-md-6">
            <label for="inputInfo" class="form-label">Observaciones:</label>
            <input type="text" class="form-control" id="inputInfo">
            </div>
            
        </form>
        <div class="col-12" id="submitButton">
            <button type="submit" class="btn btn-primary" >Sign in</button>
            </div>
    <!-- </section> -->
       
</body>