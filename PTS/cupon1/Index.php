<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c11f07c5a0.js" crossorigin="anonymous"></script>

    <style>
        th{
            color: white;
        }
        body{
            background: black;/*
            background-image: url("impacto.jpg");
            background-size: cover;
            background-repeat:no-repeat; */
            font-family: cursive;
        }
        
        .trilo{
            padding
            max-width: 700px;
            height: 100vh;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        button{
            width: 95px;
            height: 95px;
            background: black;
            border: none;
            padding: 30px;
            color: white;
            font-size: 20px;
            transition: .3s ease all;
        }
        button:hover{
            background: white;
            color: black;
        }
        video{
            margin: 0 auto;
        }

        .centro{
            align="center";
        }
    </style>
</head>


<body>
    <div class="trilo">
        <table style="margin-top: 50px;">    
            <th colspan="4" >
                <!---<h2 style="text-align: center">FELICIDADES, HAS ENCONTRADO EL CUPON EVA-01!!!</h2>--->
                <h3 style="text-align: center">HAS ENCONTRADO EL CUPON "TERCER IMPACTO"!!!</h3>
                <br>
                <p style="text-align: center"> El siguiente codigo otorga un 15% de descuento  en tu siguiente compra</p>
                <br>
                <h3 style="text-align: center">   Codigo: EVA01 </h3>
            </th>

            <tr>
                
                <td colspan="4" >
                <center>    
                <video source src="feli.mp4" autoplay></video>
                </center>
                </td>
                
                
            </tr>
    
            <tr style="align-content: middle">
                <td>
                   <a href="#"><button><i class="fa-solid fa-arrow-left"></i></button></a>
                </td>
                <td>  
                    <a href="#"><button><i class="fa-solid fa-house"></i></button></a>
                </td>
                <td> 
                    <a href="#"><button><i class="fa-solid fa-cart-shopping"></i></button></a>
                </td>
                <td>
                    <a href="#"><button><i class="fa-solid fa-shop"></i></button>
                </td>   
            </tr>
        </table>
    </div>
</body>

</html>