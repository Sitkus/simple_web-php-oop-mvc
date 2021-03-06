<section class="reviews">
    <h2 class="reviews__title"><?php print $data['title'] ?></h2>

    <?php print $data['table']; ?>

    <?php if (isset($data['forms']['create'])): ?>
        <div class="create-form-wrapper">
            <?php print $data['forms']['create']; ?>
        </div>
    <?php endif; ?>
    <?php if ($data['message']): ?>
        <p><?php print $data['message']; ?></p>
    <?php endif; ?>
    <?php foreach ($data['links'] as $link): ?>
        <?php print $link; ?>
    <?php endforeach; ?>
</section>
