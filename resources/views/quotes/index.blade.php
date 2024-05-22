<div id="quotes">
    @foreach ($quotes as $quote)
        <div>
            <p>
                {{ $quote }}
                <br>
            </p>
        </div>

    @endforeach

</div>

<!-- refresh button -->

<div>
    <a href="{{ route('quotes') }}">
        Refresh
    </a>
</div>
