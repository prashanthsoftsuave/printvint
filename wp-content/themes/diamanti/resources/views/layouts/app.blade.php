<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class()) data-spy="scroll" data-target="story-element-labels">
  <!-- Google Tag Manager (noscript) --> <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PFQGH8Z" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> <!-- End Google Tag Manager (noscript) -->
  @php(do_action('get_header'))
    @include('partials.header')
    <div class="wrap container-fluid p-0" role="document">
      <div class="content">
        <main class="main">
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>
    @php(do_action('get_footer'))
    @include('partials.footer')
    @php(wp_footer())
  </body>
</html>
