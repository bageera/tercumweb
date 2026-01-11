@php
    // Safe defaults
    $title = $title ?? 'Page';
    $current = $current ?? $title;
@endphp

<section class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>{{ $title }}</h2>

            <ul>
                <li>
                    <a href="{{ url(app()->getLocale()) }}">
                        Home
                    </a>
                </li>
                <li>{{ $current }}</li>
            </ul>
        </div>
    </div>
</section>
