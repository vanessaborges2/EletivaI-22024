<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php'; 
?>

<div class="container mt-5">
    <h2>Editar Produto</h2>

    <form method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" value="" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea name="descricao" id="descricao" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="preco" class="form-label">Preço</label>
            <input type="number" name="preco" id="preco" class="form-control" step="0.01" value="" required>
        </div>
        <div class="mb-3">
            <label for="estoque_minimo" class="form-label">Estoque Mínimo</label>
            <input type="number" name="estoque_minimo" id="estoque_minimo" class="form-control" value="" required>
        </div>
        <div class="mb-3">
            <label for="categoria_id" class="form-label">Categoria</label>
            <select name="categoria_id" id="categoria_id" class="form-control" required>
                    <option value="1">Categoria 1</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar Produto</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
