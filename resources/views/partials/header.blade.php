<header class="banner">
  <box pa3>
    <a class="brand" href="{{ home_url('/') }}">
      <type h2 f1 sans-serif>{{ get_bloginfo('name', 'display') }}</type>
    </a>

    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </box>
</header>
