<div class="pb-4 mb-4 border-bottom">
   <?= $this->Html->link("Añadir artículo",
      ['action' => 'add'],
      ['class' => 'btn btn-sm btn-outline-secondary shadow-sm']
   ) ?>
</div>
<div class="mb-3">
   <div class="mb-3">
      <?= $this->Html->link("Ver Articulos",
         ['action' => 'index'],
         ['class' => 'btn btn-sm btn-outline-secondary shadow-sm']
      ) ?>
   </div>
   <h2 class="blog-post-title"><?= $article->title ?></h2>
   <p class="blog-post-meta"><?= $article->created->format('F n, Y') ?> by
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
