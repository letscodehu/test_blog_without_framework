
    <form action="editor.php" method="post">

        <textarea id="title" rows="2" cols="60"><?= $selectedPost->title ?></textarea>
        <br>
        <label for="title" style="color: gray">Tu si mozete zmenit nadpis postu</label>

        <br>
        <br>
        <textarea id="teaser" rows="3" cols="60"><?= $selectedPost->teaser; ?></textarea>
        <br>
        <label for="teaser" style="color: gray">Tu si mozete zmenit teaser</label>

        <br>
        <br>
        <textarea id="content" rows="18" cols="60"><?= $selectedPost->content; ?></textarea>
        <br>
        <label for="content" style="color: gray">Tu si mozete zmenit post</label>

        <br>
        <br>
        <em>
            <textarea id="created_by" rows="1" cols="60"><?= $selectedPost->created_by; ?></textarea>
        </em>
        <br>
        <label for="created_by" style="color: gray">Tu si mozete zmenit meno autora</label>
        <br>
        <br>
        <input type="submit" name="button" class="btn" value="Edituj post" >

    </form>
