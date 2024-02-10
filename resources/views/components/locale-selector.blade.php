@foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
    <div class="flex lg:border-b lg:border-medium-grey px-3 py-3 lg:py-1">
        <a class="btn btn-link text-uppercase text-white {{ LaravelLocalization::getCurrentLocale() === $localeCode ? 'btn-primary' : 'btn-secondary' }}" rel="alternate" hreflang="{{ $localeCode }}"
            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
            {{ $localeCode }}
        </a>
    </div>
@endforeach