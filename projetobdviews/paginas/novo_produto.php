<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
    require_once '../funcoes/produtos.php';
    require_once '../funcoes/categorias.php';

    $categorias = buscarCategorias();
    $erro = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        try {
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $preco = floatval($_POST['preco']);
            $estoque_minimo = intval($_POST['estoque_minimo']);
            $categoria_id = intval($_POST['categoria_id']);
            if (empty($nome) || empty($descricao)){
                $erro = "Informe os valores obrigatórios!";
            } else {
                if (criarProduto($nome, $descricao, 
                                    $preco, $estoque_minimo, $categoria_id)){
                    header('Location: produtos.php');
                    exit();
                } else {
                    $erro = "Erro ao inserir o produto!";
                }
            }
        } catch (Exception $e){
            $erro = "Erro: ".$e->getMessage();
        }
    }
?>

<div class="container mt-5">
    <h2>Criar Novo Produto</h2>

    <?php if(!empty($erro)):?>
        <p class="text-danger"><?= $erro ?></p>
    <?php endif; ?>

    <form method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea name="descricao" id="descricao" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="preco" class="form-label">Preço</label>
            <input type="number" name="preco" id="preco" class="form-control" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="estoque_minimo" class="form-label">Estoque Mínimo</label>
            <input type="number" name="estoque_minimo" id="estoque_minimo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="categoria_id" class="form-label">Categoria</label>
            <select name="categoria_id" id="categoria_id" class="form-select" required>
                <?php foreach($categorias as $c): ?>
                    <option value="<?= $c['id']?>"><?= $c['nome'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Criar Produto</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
