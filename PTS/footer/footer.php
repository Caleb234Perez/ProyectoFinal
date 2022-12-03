<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c11f07c5a0.js" crossorigin="anonymous"></script>

    <style>
        .patas{
            width: 100%;
            background-image: linear-gradient(-20deg, #fc6076 0%, #ff9a44 100%);

        }

        .patas .pulgar{
            width: 100%;
            max-width: 1200px;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(3,1fr);
            grid-gap: 50px;
            padding: 45px 0px; 
        }

        .patas .pulgar .planta figure{
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .patas .pulgar .planta figure img{
            width: 250px;
        } 

        .patas .pulgar .planta h2{
            color: yellow ;
            margin-bottom: 25px ;
            font-size: 20px;
        }

        .patas .pulgar .planta p{
            color: yellow;
            margin-bottom: 10px ;
        }        

        .patas .pulgar .anular a{
            display: inline-block;
            text-decoration: none;
            width: 45px;
            height: 45px;
            line-height: 45px;
            margin-right: 10px;
            text-align: center;
        }
        .patas .indice {
            background-image: linear-gradient(-20deg, #fc6076 0%, #ff9a44 100%);
            padding: 15px 10px;
            text-align: center;
            color: #E0CA3C;

        }

        .patas .indice small{
            font-size: 15px;
        }

        @media screen and (max-width: 800px) {
            .patas .pulgar{
                width: 90%;
                grid-template-columns: repeat(1,1fr);
                grid-gap: 30px;
                padding: 35px 0px; 
            }
        }

    </style>

</head>
<body>
    <footer class="patas" style="padding-top: 300px;">
        <div class="pulgar">
            <div class="planta">
                <figure>
                    <a href="#">
                        <img src="Son.png">
                    </a>
                </figure>
            </div>

            <div class="planta">
                <h2>Al Son Del Corazon</h2>
                <p>La tienda numero 1 de venta de instrumentos en Aguascalientes</p>
            </div>

            <div class="planta">
                <h2>Contactanos en:</h2>
                <div class="anular">
                    <a href="https://www.instagram.com/al.son.del.corazon/" style="color: #E0CA3C"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://wa.me/524499400769" style="color: #E0CA3C"><i class="fa-brands fa-whatsapp"></i></a>
                    <a style="background-image: linear-gradient(-20deg, #ff9a44  0%, #ff9a44 100%); border:none; color: #E0CA3C" class="btn btn-primary" href="https://www.youtube.com/watch?v=5I5DuvMdE6s" role="button">♥</a>
                </div>

                <div style="padding-top: 15px;">
                    <a>
                    <?php
                        date_default_timezone_set('America/Mexico_City');
                        echo date("F d Y H:i:s.");                  
                    ?>
                    </a>
                </div>
            </div>
        </div>

        <div class="indice">
            <small>&copy; 2022, Al Son Del Corazon-Pagina Proyecto Final Sin Fines De Lucro</small>
        </div>
    </footer>
</body>
</html>