<h1>Estoque</h1>
<div class="geral">
    <div class="container-1">
        <h1>Balanço</h1>
        <figure>
            
        </figure>
        <form action="estoque/uploadBalanco" enctype="multipart/form-data" method="post">
            <input type="file" type="file" name="balanco">
            <input class="enviar" type="submit" name = "nome" value="Enviar">
        </form>
    </div>

    <div class="container-1">
        <h1>Notas de Entrada</h1>
        <figure>
            
        </figure>
        <form action="estoque/uploadNotaEntrada" enctype="multipart/form-data" method="post">
            <input type="file" type="file" name="nota_entrada">
            <input type="submit" name = "nome" value="Enviar">
        </form>
    </div>

    <div class="container-1">
        <h1>Notas de Saida</h1>
        <figure>
            
        </figure>
        <form action="estoque/uploadNotaSaida" enctype="multipart/form-data" method="post">
            <input type="file" type="file" name="nota_saida">
            <input type="submit" name = "nome" value="Enviar">
        </form>
    </div>
</div>




