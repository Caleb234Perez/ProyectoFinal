<?php 
include_once 'header.php';
?>

<head>
    <link rel="stylesheet" href="estilos/est.css">
    <script src="https://kit.fontawesome.com/f82611f42a.js" crossorigin="anonymous"></script>
    <title>Inicio</title>
</head>

<body>
    <div class="contenedor">
        <div class="nos" style="width: 80%;">
            <p>Al Son Del Corazón es una cadena minorista de música mexicana. Es la empresa más grande de su tipo en la colonia industrial, con 100 m2. Su sede se encuentra en Ojo Caliente 1, Ags. Al son del Corazón supervisa varias subsidiarias, incluidas Musician's Friend, AVDG, Music & Arts, Woodwind & Brasswind y Giardinelli.</p>
            <img src="img/instrumentos.jpg" alt="" class="img">
        </div>
        <div class="tri"  style="width: 80%; padding-top: 20px;">
            <p>Los Trilobits son un talento originario de Aguascalientes, México; un grupo de jóvenes BachUAA quienes unieron su vida al son de la música. Con un repertorio de canciones originales y covers de grupos conocidos, este grupo ha logrado cautivar a sus fans en bares y eventos infantiles y prometen ser la nueva banda del momento..</p>
            <img src="img/trilobits.jpg" alt="" class="img">
            <a href="https://www.facebook.com/people/Los-Trilobits/100083160400769/"><i class="fa-brands fa-facebook-f"></i></a>
            <p>"Si los Trilobits tiene millones de fans, yo soy uno de ellos. Si tienen solo 10 fans, yo soy uno de ellos. Si tan solo tuviesen 1, ese sería yo. Si no tuviesen ningún fan, quiere decir que ya no estoy vivo. Si el mundo está en contra de ellos, yo estoy en contra del mundo."
            - Ethienne Alejandro López Olvera, Trilomaniaco.</p>
        </div>
    </div>
    <!--<br><br><br><br><br><br>-->

    <div>
        <?php
            include("Footer.php");
        ?>
    </div>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>

