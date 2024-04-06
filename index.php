<?php
const API_URL = "https://fakestoreapi.com/products";
# inicializar sesion de curl para consumir api
$curlHandler = curl_init(API_URL);

// evitar que la data se muestre en el navegador
curl_setopt($curlHandler, CURLOPT_RETURNTRANSFER, true);

// obteniendo los productos
$result = curl_exec($curlHandler);

// parseamos la data a formato json
$products = json_decode($result, true);

// cerramos la conexion
curl_close($curlHandler);
?>

<h1>Productos!</h1>

<div class="contenedor">
    <?php foreach($products as $product): ?>
        <div class="producto">
            <figure>
                <img src=<?= $product['image'] ?> alt="">
            </figure>
            <div>
                <h5><?= $product['title'] ?></h5>
                <p class="price">$<?= $product['price'] ?> USD</p>
                <p><?= $product['description'] ?></p>
                <p><?= $product['category'] ?></p>
                <div class="btn-container">
                    <a>Comprar</a>
                </div>
            </div>
        </div>
    <?php endforeach ?>        
</div>


<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    :root{
        color-scheme: light dark;
    }
    body{
        padding: 3rem;
    }
    h1{
        text-align: center;
        margin: 2rem 0;
    }
    .contenedor{
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 2rem;
    }
    .producto{
        width: 320px;
        background-color: #1e1e1e;
        border-radius: 10px;
        overflow: hidden;
    }
    .producto img{
        width: 100%;
    }
    .producto div{
        padding: 1rem;
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }
    .producto h5{
        font-size: 1.3rem;
        margin-bottom: 1rem;
    }
    .btn-container{
        width: 100%;
    }
    .producto a{
        width: 100%;
        text-align: center;
        padding: 1rem 1rem;
        display: block;
        background-color: red;
        cursor: pointer;
        transition: all ease .3s;
    }
    .producto a:hover{
        background-color: #840303;
    }
    .price{
        font-weight: 700;
        font-size: 1.1rem;
    }
</style>