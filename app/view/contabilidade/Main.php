<h1>Contabilidade</h1>
<div class="geral"> 
    <div class="container-1">
        <h1>Demonstrativo</h1>
        <figure>
        <span id="icone" class="material-icons">calendar_today</span>
        </figure>
        <form action="contabilidade/uploadDemonstrativo" enctype="multipart/form-data" method="post">
            <input type="file" type="file" name="demonstrativo">
            <input type="submit" name = "nome" value="Enviar">
        </form>
    </div>

    <div class="container-1">
        <h1>Movimentos Contabeis</h1>
        <figure>
            
        </figure>
        <form action="contabilidade/uploadMovimentosContabeis" enctype="multipart/form-data" method="post">
            <input type="file" type="file" name="mov_contabeis">
            <input type="submit" name = "nome" value="Enviar">
        </form>
    </div>

    <div class="container-1">
        <h1>Fiscal</h1>
        <figure>
            
        </figure>
        <form action="contabilidade/uploadFiscal" enctype="multipart/form-data" method="post">
            <input type="file" type="file" name="fiscal">
            <input type="submit" name = "nome" value="Enviar">
        </form>
    </div>
</div>





