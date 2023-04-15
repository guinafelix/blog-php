<?php
  include_once("templates/header.php");
  
  if(isset($_GET['id'])) {
    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post) {
      if ($post['id'] == $postId){
        $currentPost = $post;
      }
    }
  }
?>
  <main id="posts-container">
    <div class="content-container">
      <h1 id="main-title">
        <?= $currentPost['title'] ?>
      </h1>
      <p id="post-description">
        <?= $currentPost['description'] ?>
      </p>
      <div class="img-container">
        <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
      </div>
      <p class="post-content">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore eos recusandae eum quaerat voluptatum doloremque! Repellat repellendus quis at delectus exercitationem esse asperiores modi maiores sit consequuntur, culpa sed minima.
        Rerum aut sequi quibusdam eum ex nulla labore assumenda repudiandae aliquam amet consequuntur dignissimos, consectetur molestiae, unde ab, exercitationem atque voluptas laboriosam nemo. Aliquam perferendis voluptates odit et commodi odio?
        Porro minus, illo aspernatur cum numquam, saepe cupiditate iusto excepturi maiores quos culpa optio animi recusandae doloremque fugit dolores officia iure reprehenderit autem. Expedita impedit ratione eius adipisci, est incidunt.
        Mollitia natus maxime debitis reiciendis saepe dignissimos tempore. Doloribus qui assumenda inventore facere dolorem, quidem tempore perspiciatis ratione molestiae! Neque nulla unde nesciunt minima ea quas dolore veniam numquam hic.
        In minima laboriosam perspiciatis porro nemo cumque, placeat sint eveniet nobis necessitatibus culpa delectus vel cum obcaecati magnam aperiam officia doloribus. Vero unde error officiis accusantium corrupti saepe, molestias et!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore eos recusandae eum quaerat voluptatum doloremque! Repellat repellendus quis at delectus exercitationem esse asperiores modi maiores sit consequuntur, culpa sed minima.
        Rerum aut sequi quibusdam eum ex nulla labore assumenda repudiandae aliquam amet consequuntur dignissimos, consectetur molestiae, unde ab, exercitationem atque voluptas laboriosam nemo. Aliquam perferendis voluptates odit et commodi odio?
        Porro minus, illo aspernatur cum numquam, saepe cupiditate iusto excepturi maiores quos culpa optio animi recusandae doloremque fugit dolores officia iure reprehenderit autem. Expedita impedit ratione eius adipisci, est incidunt.
        Mollitia natus maxime debitis reiciendis saepe dignissimos tempore. Doloribus qui assumenda inventore facere dolorem, quidem tempore perspiciatis ratione molestiae! Neque nulla unde nesciunt minima ea quas dolore veniam numquam hic.
        In minima laboriosam perspiciatis porro nemo cumque, placeat sint eveniet nobis necessitatibus culpa delectus vel cum obcaecati magnam aperiam officia doloribus. Vero unde error officiis accusantium corrupti saepe, molestias et!
      </p>
    </div>
  </main>
  <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list" class="tags-container">
      <?php foreach($currentPost['tags'] as $tag): ?>
        <li><a href="#"> <?= $tag ?></a></li>
      <?php endforeach; ?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
      <?php foreach($categories as $category): ?>
        <li><a href="#"> <?= $category ?></a></li>
      <?php endforeach; ?>
    </ul>
  </aside>
<?php
  include_once("templates/footer.php")
?>