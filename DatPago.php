<?php
    session_start();
    if($_SESSION['deuda']==0){
        header("location:home.php");
        exit; 
    }
    if(empty($_SESSION['user'])){
        //evita que entre alguien sin unsa sesion activa
        header("location:home.php");
        exit;
    }
    if($_SESSION['cantidad']==0){
        //evita que no haya nada en su carrito
        header("location:home.php");
        exit;
    }
    else{
        session_abort();
        
    include("header.php");
?>

<body onmousemove="actulizar()">
    <div class="container">
        <br>
        <div class="row">
            <div class="col-2"></div>
        
            <div class="col-8" id="firus"><h5>Método de Pago</h5>
            <form action="actualizar.php" method="post" class="row g-3 needs-validation">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="Options" id="inlineRadio1" value="Tarjeta">
                    <label class="form-check-label" for="inlineRadio1">Tarjeta</label>
                </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="Options" id="inlineRadio2" value="oxxo">
                    <label class="form-check-label" for="inlineRadio2">Oxxo</label>
                </div>
            <div class="col-2"></div>
        </div>
        <div class="row" >
            <div class="col-3"></div>
            <div class="col-6" id="opcion"></div>
            <div class="col-3"></div>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 row g-3 needs-validationl">
                <label for="validationCustom01" class="form-label" >Cupón promocional</label>
                <input type="text" class="form-control" id="cupon"  ><!-- onkeyup="validarcupon(this.value) " -->
                <p id="val"></p>
                <div >
                <button onclick="ticket()" class="btn btn-primary col-3" type="firus" >Aplicar cupón</button>
                </div>
                <br>
                <h5>Lugar de envío</h5> 
                <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="validationCustom01"  required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" id="validationCustom02"  required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustomUsername" class="form-label">Correo</label>
                        <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">Ciudad</label>
                        <input type="text" class="form-control" id="ciudad" required>
                        <div class="invalid-feedback">
                        </div>
                        <p id="info2"></p>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom04" class="form-label">País</label>
                        <select class="form-select" name="envio" id="pais" value="Finux" onchange='iva();' required>
                        <option value="ags">(Aguascalientes)</option>
                        <option  value='mx'>México</option>
                        <option  value='usa'>USA</option>
                        </select>
                        <div class="invalid-feedback">
                        </div>
                        <p id="info"></p>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">C.P.</label>
                        <input type="text" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" id="" type="submit">Finalizar</button>
                    </div>
                </form>
            </div>
            <div class="col-2"></div>
        </div>
        <div class="row">
            <div class="col-12"></div>
        </div>
    </div>
    </div>
    <script src="js/funciones.js"></script>
    <script>
        document.getElementById('firus').addEventListener('click', function() {
            let elementoActivo = document.querySelector('input[name="Options"]:checked');
            if(elementoActivo.value=='oxxo') {
                document.getElementById('opcion').innerHTML='<p>Cuenta: 1234 5678 9012 3458</p><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d300.60414201867354!2d-102.31283311540811!3d21.914178689135113!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429eefb1ef5ce0f%3A0xda8f187ad95ffbc0!2sOxxo!5e0!3m2!1ses!2smx!4v1669856705048!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
                
            } else {
                document.getElementById('opcion').innerHTML='<select class="form-select" aria-label="Default select example"><option value="1" selected>Santander</option><option value="2">Banorte</option><option value="3">BBVA</option></select><div class="input-group mb-3"> <span class="input-group-text" >No.</span> <input type="number" class="form-control" placeholder="Número de tarjeta"> </div><div class="input-group mb-3"><input type="date" class="form-control" placeholder="Fecha de caducidad"></div><label for="basic-url" class="form-label">CVV</label><div class="input-group mb-3"><span class="input-group-text" id="basic-addon3">ejemplo:180</span><input type="number" class="form-control" id="basic-url" aria-describedby="basic-addon3"></div>';
            }
        });
    function iva() {
        const cod = document.getElementById("pais").value;
        if(cod=='mx'){
                document.getElementById('info').innerHTML="16% de iva y 500$ de envío";
                document.getElementById('info2').innerHTML="";
        }
        else if(cod=='ags'){
            document.getElementById('info2').innerHTML="¡Envío gratis!";
            document.getElementById('info').innerHTML="16% de iva";
        }
        else if(cod=='usa'){
            document.getElementById('info').innerHTML="9% de iva y 800$ de envío";
            document.getElementById('info2').innerHTML="";
        }
}
    </script>
</body>
<?php
    include("Footer.php");
    }
?>
