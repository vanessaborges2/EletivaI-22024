<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php'; 
    require_once '../funcoes/produtos.php';
    require_once '../funcoes/categorias.php';

    $id = $_GET['id'];
    if (!$id){
        header('Location: produtos.php');
        exit();
    }

    $produto = buscarProdutoPorId($id);
    if (!$produto){
        header('Location: produtos.php');
        exit();
    }

    $categorias = buscarCategorias();

    $erro = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        try{
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $preco = floatval($_POST['preco']);
            $estoque_minimo = intval($_POST['estoque_minimo']);
            $categoria_id = intval($_POST['categoria_id']);
            $id = intval($_POST['id']);
            if (empty($nome)){
                $erro = "Preencha os campos obrigatórios!";
            } else {
                if (alterarProduto($id, $nome, $descricao, $preco, 
                        $estoque_minimo, $categoria_id)){
                            header('Location: produtos.php');
                            exit();
                        } else {
                            $erro = "Erro ao alterar o produto!";
                        }
            }

        } catch (Exception $e){
            $erro = "Erro: ".$e->getMessage();
        }
    }
?>

<div class="container mt-5">
    <h2>Editar Produto</h2>

    <?php if(!empty($erro)):?>
        <p class="text-danger"><?= $erro ?></p>
    <?php endif; ?>

    <form method="post">
        <input type="hidden" name="id" value="<?= $id ?>" />
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" value="<?= $produto['nome'] ?>" id="nome" class="form-control" value="" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea name="descricao" id="descricao" class="form-control" required>
            <?= $produto['descricao'] ?>
            </textarea>
        </div>
        <div class="mb-3">
            <label for="preco" class="form-label">Preço</label>
            <input type="number" name="preco" value="<?= $produto['preco'] ?>" id="preco" class="form-control" step="0.01" value="" required>
        </div>
        <div class="mb-3">
            <label for="estoque_minimo" class="form-label">Estoque Mínimo</label>
            <input type="number" name="estoque_minimo" value="<?= $produto['estoque_minimo'] ?>" id="estoque_minimo" class="form-control" value="" required>
        </div>
        <div class="mb-3">
            <label for="categoria_id" class="form-label">Categoria</label>
            <select name="categoria_id" id="categoria_id" class="form-control" required>
                <?php foreach ($categorias as $c): ?>
                    <option value="<?= $c['id'] ?>" 
                    <?= $c['id'] == $produto['categoria_id'] ? 'selected': '' ?> >
                        <?= $c['nome'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar Produto</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
