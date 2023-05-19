@if (config('filament.layout.footer.should_show_logo'))
    <div class="flex items-center justify-center filament-footer">
        <a
            href="https://pergo.bg/"
            target="_blank"
            rel="noopener noreferrer"
            class="text-center text-gray-300 hover:text-primary-500 transition"
        >
           <img src="{{ asset('images/logo.png') }}" style="width: 150px ; height: 50px"/>
            <span>
                {{ "Алутрейдинг ЕООД" }}
            </span>
        </a>
    </div>
@endif
