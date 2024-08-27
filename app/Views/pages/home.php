<div class="container">
<p>Conteúdo da Home Page: <b>Valor da Cache: </b><?= $cache->get('valorCache') ?></p>
<a href="/limparCache" class="btn btn-primary">Limpar Cache</a>
<a href="/adicionarCache" class="btn btn-primary">Adicionar Cache</a>
<a href="/subtrairCache" class="btn btn-primary">Subtrair Cache</a>
<?php
    if(!$cache->get('escondeArea')):
        $cache->save('escondeArea', TRUE, 300); // 300 Equivalent 5 minutes
?>
<div class="alert alert-danger">
    <p>Área do cache</p>
</div>
<?php endif; ?>
</div>