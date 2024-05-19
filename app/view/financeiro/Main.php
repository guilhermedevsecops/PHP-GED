<h1>Financeiro</h1>
<div class="geral">
    <div class="container-1">
        <h1>Boletos</h1>
        <span class="material-icons">
    summarize
    </span>
        <form action="financeiro/uploadBoletos" enctype="multipart/form-data" method="post">
            <input type="file" type="file" name="boletos">
            <input class="enviar" type="submit" name = "nome" value="Enviar">
        </form>
    </div>

    <div class="container-1">
        <h1>Contas a Pagar</h1>
        <figure>
            
        </figure>
        <form action="financeiro/uploadContasPagar" enctype="multipart/form-data" method="post">
            <input type="file" type="file" name="conta">
            <input type="submit" name = "nome" value="Enviar">
        </form>
    </div>

    <div class="container-1">
        <h1>Contas Pagas</h1>
        <figure>
            
        </figure>
        <form action="financeiro/uploadContasPagas" enctype="multipart/form-data" method="post">
            <input type="file" type="file" name="paga">
            <input type="submit" name = "nome" value="Enviar">
        </form>
    </div>
</div>





