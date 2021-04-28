
    <header class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 mt-2 border-bottom">
        <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
            <a href="/public/blog"> <img src="{{asset('logo_simple.svg')}}" width="50"> </a>
            <span class="fs-4 pl-1"><b>Itproger</b></span>
        </a>

        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{route('home')}}">Главная</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{route('about')}}" }>Про нас</a>
            <button type="button" id="entered" class="btn btn-outline-primary">Войти</button>


        </nav>
    </header>

