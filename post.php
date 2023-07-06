<?php
include_once("templates/header.php");

if (isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {
        if ($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}
?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title">
            <?= $currentPost['title'] ?>
            <p id="post-description">
                <?= $currentPost['description'] ?>
            </p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dolores tempore cupiditate unde, sequi mollitia similique praesentium voluptate exercitationem laudantium placeat nesciunt aspernatur nam obcaecati cumque nemo. Similique, est quibusdam.
                Id libero sapiente placeat eveniet explicabo natus non iure officiis animi maiores culpa ratione architecto saepe corrupti tempora nulla sunt cum magni cupiditate porro qui ullam, eaque hic veritatis! Obcaecati?
                Debitis fugiat dolor, obcaecati aliquam facilis accusantium sint, repellat placeat tenetur maiores delectus labore sunt molestiae ullam est, doloribus maxime dolorem sapiente iure! Esse a ex corporis voluptas, accusamus quia.
                Harum, neque cum totam aspernatur sint eum quidem. Cumque dolor saepe nulla, exercitationem corporis libero minima maiores sunt porro accusantium quia quod omnis quam quidem velit officia consectetur placeat harum!
                Sed aliquam, corrupti nesciunt eaque ratione maiores atque vero quidem consequuntur labore, recusandae accusamus! Quod molestias, maxime nemo at aliquid officia veniam aliquam, tempore accusantium accusamus a. Voluptate, ex sunt.
            </p>
            <p class="post-content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dolores tempore cupiditate unde, sequi mollitia similique praesentium voluptate exercitationem laudantium placeat nesciunt aspernatur nam obcaecati cumque nemo. Similique, est quibusdam.
                Id libero sapiente placeat eveniet explicabo natus non iure officiis animi maiores culpa ratione architecto saepe corrupti tempora nulla sunt cum magni cupiditate porro qui ullam, eaque hic veritatis! Obcaecati?
                Debitis fugiat dolor, obcaecati aliquam facilis accusantium sint, repellat placeat tenetur maiores delectus labore sunt molestiae ullam est, doloribus maxime dolorem sapiente iure! Esse a ex corporis voluptas, accusamus quia.
                Harum, neque cum totam aspernatur sint eum quidem. Cumque dolor saepe nulla, exercitationem corporis libero minima maiores sunt porro accusantium quia quod omnis quam quidem velit officia consectetur placeat harum!
                Sed aliquam, corrupti nesciunt eaque ratione maiores atque vero quidem consequuntur labore, recusandae accusamus! Quod molestias, maxime nemo at aliquid officia veniam aliquam, tempore accusantium accusamus a. Voluptate, ex sunt.
            </p>
        </h1>
    </div>
    <aside id="nav-container">
        <h3 id="tag-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach ($currentPost['tags'] as $tag) : ?>
                <li><a href=""><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $category) : ?>
                <li><a href=""><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>

<?php
include_once("templates/footer.php")
?>
</body>

</html>