<div class="search-form">
    <form  id="searchModal" class="modal" role="search" method="get" action="{{ home_url('/') }}" autocomplete="off" tabindex="0">
        <div class="modal-content">
            <i class="search-form__input-icon" aria-hidden="true"></i>
            <input type="search" class="search-field"
                   placeholder="{{ esc_attr_x( 'Search Diamanti', 'placeholder' ) }}"
                   value="{{ trim(get_search_query()) }}" name="s" autocorrect="off" autocomplete="off" />
            <button type="button" id="closeSearchModal" class="close-search-modal">
                <i class="search-form__icon search-form__icon--close" aria-hidden="true"></i>
            </button>
            <button type="button" class="search-form__cancel">Cancel</button>
        </div>
        <div class="search-form-results">
            @include('partials.content-post-filters', $data = ['staticSearch' => false])
            <div class="search-form-results__welcome">
                <div class="search-form-results__loader"></div>
            </div>
            <div class="search-form-results__output"></div>
        </div>
    </form>
</div>
