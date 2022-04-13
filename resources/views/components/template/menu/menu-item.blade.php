<li class="nav-item">
    <a href="{{ url($url) }}" class="nav-link @if ($active) active @endif">
        <i class="far fa-{{ $icon }}"></i>
        <p>{{ $title }}</p>
    </a>
</li>
