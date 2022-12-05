function validarcupon(str) {
    if (str.length == 0) {
        document.getElementById('val').innerHTML="";
    }
    else{
        //document.getElementById('val').innerHTML="balto";
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("val").innerHTML = this.responseText;

            }
        };
        xhttp.open("POST", "verificarcupon.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("cup=" + str);
    }
}

function ticket() {
       const str=document.getElementById('cupon').value;
        //document.getElementById('val').innerHTML="balto";
        
       //document.getElementById('cupon');
       if (str.length==0) {
        document.getElementById('val').innerHTML="";
       }
       else{
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("val").innerHTML = this.responseText;

                document.getElementById("pago").innerHTML="total a pagar: <?php echo 'hola'; ?>";

            }
        };
        xhttp.open("POST", "verificarcupon.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("cup=" + str);

    }
}

function actualizar(params) {
    
}
