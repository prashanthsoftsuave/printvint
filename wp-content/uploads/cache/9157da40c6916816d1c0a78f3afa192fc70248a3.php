<div class="search-form-page">
    <form  id="pageSearch" class="search-form-page__form" role="search" method="get" action="<?php echo e(home_url('/')); ?>" autocomplete="off">
        <div class="search-form-page__content">
            <label class="search-form-page__label">
                <i class="search-form__input-icon" aria-hidden="true"></i>
                <input type="search" class="search-form-page__field"
                       placeholder="<?php echo e(esc_attr_x( 'Search Diamanti', 'placeholder' )); ?>"
                       value="<?php echo e(trim(get_search_query())); ?>" name="s" autocorrect="off" autocomplete="off" />
                <button class="search-form__clear">
                    <i class="search-form__icon search-form__icon--close" aria-hidden="true"></i>
                </button>
            </label>
            <label class="search-form-page__label--submit">
                <button type="submit" class="search-form-page__submit btn">Search</button>
            </label>
        </div>
    </form>
</div>
<?php echo $__env->make('partials.content-post-filters', $data = ['staticSearch' => true], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
