<footer class="bg-dark px-4 mt-auto">
    <div class="container">
        <div class="d-flex justify-content-center align-items-start py-4" style="gap: 100px">
            <ul class="d-flex flex-column gap-2 my-2 ps-0 footer-text" style="list-style: none">
                <li class="">
                    {{ __('UAB "LTMD Networks"') }}
                </li>
                <li class="">
                    {{ __('Kapsų g. 21-24') }}
                </li>
                <li class="">
                    {{ __('LT-02166 Vilnius') }}
                </li>
                <li class="">
                    {{ __('+37066001110') }}
                </li>
            </ul>
            <a href="{{ route('contact') }}" class="btn btn-light mt-2" style="font-size: 16px; padding: 10px 22px">
                {{ __('Susisiekite') }}
            </a>
        </div>
    </div>
    <div style="background-color: rgb(80, 80, 80); height: 1px"></div>
    <div class="container">
        <p class="text-center footer-text py-4">
            {{ __('© 2007-2023 LTMD Networks. Visos teisės saugomos.') }}
        </p>
    </div>
</footer>

<style>
    .footer-text {
        font-size: 16px; 
        color: #b3b3b3
    }
</style>