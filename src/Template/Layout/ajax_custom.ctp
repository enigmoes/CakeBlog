<!DOCTYPE html>
<html lang="es">
<head>
   <?= $this->Html->charset() ?>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>
      Blog:
      <?= $this->fetch('title') ?>
   </title>
   <?= $this->Html->meta('icon') ?>

   <?= $this->Html->css('lib/bootstrap.css') ?>
   <?= $this->Html->css('custom.css') ?>

   <?= $this->Html->css('//fonts.googleapis.com/css?family=Playfair+Display:700,900') ?>

   <?= $this->fetch('meta') ?>
   <?= $this->fetch('css') ?>
   <?= $this->fetch('script') ?>
</head>
<body>
   <div class="container">
      <?= $this->Flash->render() ?>
      <?= $this->fetch('content') ?>
   </div>
   <?= $this->Html->script('lib/jquery-3.3.1.min.js') ?>
   <?= $this->Html->script('lib/popper.min.js') ?>
   <?= $this->Html->script('lib/bootstrap.min.js') ?>
   <?= $this->Html->script('custom.js') ?>
</body>
</html>
