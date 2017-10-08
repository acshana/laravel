<form action="photo/12" method="post">
    <?php echo method_field('PUT'); ?>
    <?php echo csrf_field(); ?>
    <input type="submit" name="提交" />
</form>