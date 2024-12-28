<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
    <div class="input-group">
        <input type="search" class="form-control" placeholder="Поиск..." value="<?php echo get_search_query(); ?>" name="s" />
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-search"></i>
        </button>
    </div>
</form>
