
<form action="<?php echo home_url(); ?>" class="search-form">
<label>
<input type="text" id="search" name="s" placeholder="キーワードを入力" value="<?php the_search_query(); ?>">
</label>

<button type="submit" aria-label="検索"></button>
</form>
