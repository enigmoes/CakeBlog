<div class="blog-post">
   <div class="pb-4 mb-4 border-bottom">
      <?= $this->Html->link("Añadir artículo",
         ['action' => 'add'],
         ['class' => 'btn btn-sm btn-outline-secondary shadow-sm']
      ) ?>
   </div>
   <div class="mb-2">
      <? if (!empty($this->request->query['q'])): ?>
         <?= $this->Html->link("Limpiar Busqueda",
            ['action' => 'index'],
            ['class' => 'btn btn-sm btn-outline-warning shadow-sm']
         ) ?>
      <? endif; ?>
   </div>
   <? foreach ($articles as $article): ?>
   <div class="mb-3">
      <h2 class="blog-post-title">
         <a href="/articulo/<?= $article->id ?>" class="text-decoration-none text-dark">
            <?= $article->title ?>
         </a>
      </h2>
      <p class="blog-post-meta">
         <?= $article->created->format('F n, Y') ?> by
         <span class="text-capitalize"><?= $article->user->username ?></span>
      </p>
      <p><?= str_replace(array("\r\n", "\n\r", "\r", "\n"), "<br />", $article->body) ?></p>
      <? if ($login) : ?>
         <? if (($article->user_id == $this->request->session()->read('Auth.User.id')) || (
            $this->request->session()->read('Auth.User.role') == 'admin')): ?>
            <div>
               <?= $this->Html->link('Editar',
                  ['action' => 'edit', $article->id],
                  ['class' => 'btn btn-sm btn-outline-info shadow-sm']
               ) ?>
               <?= $this->Form->postLink('Eliminar',
                  ['action' => 'delete', $article->id],
                  [
                     'confirm' => '¿Estás seguro?',
                     'class' => 'btn btn-sm btn-outline-danger shadow-sm'
                  ]
               ) ?>
            </div>
         <? endif; ?>
      <? endif; ?>
   </div>
   <? endforeach; ?>
   <?= $this->element('Comun/pagination') ?>
</div>
