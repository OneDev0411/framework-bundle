<?php echo $view['form']->errors($context) ?>

<?php foreach ($context->getChildren() as $context): ?>
    <?php echo $view['form']->row($context); ?>
<?php endforeach; ?>