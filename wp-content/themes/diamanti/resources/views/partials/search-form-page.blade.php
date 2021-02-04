<div class="search-form-page">
    <form  id="pageSearch" class="search-form-page__form" role="search" method="get" action="{{ home_url('/') }}" autocomplete="off">
        <div class="search-form-page__content">
            <label class="search-form-page__label">
                <i class="search-form__input-icon" aria-hidden="true"></i>
                <input type="search" class="search-form-page__field"
                       placeholder="{{ esc_attr_x( 'Search Diamanti', 'placeholder' ) }}"
                       value="{{ trim(get_search_query()) }}" name="s" autocorrect="off" autocomplete="off" />
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
@include('partials.content-post-filters', $data = ['staticSearch' => true])
