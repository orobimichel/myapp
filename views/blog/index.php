<h1>LES DERNIERS ARTICLES</h1>

<?php foreach($params['posts'] as $post ): ?>

<div class="card mb-3 shadow">
    <div class="card-body">
        <h5 class="card-title">Title</h5>
        <p class="card-text">Content</p>
    </div>
</div>

<?php endforeach ?>