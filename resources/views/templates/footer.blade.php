<footer class="footer-distributed " id="footer">

    <div class="footer-left">

        <h3 class="tecnozone"> <span class="tecno">TECNO</span><span class="foryou">ZONE</span></h3>

        <p class="footer-links">
            <a href="{{route('home')}}" class="enlace_footer_lateral">Home</a>
            |
            <a href="{{route('about')}}" class="enlace_footer_lateral">About</a>
            |
            <a href="{{route('mapa_web')}}" class="enlace_footer_lateral">Mapa Web</a>
            |
            <a href="{{route('licencia')}}" class="enlace_footer_lateral">Licencia</a>
            |
            <a href="{{route('cookies')}}" class="enlace_footer_lateral">Politica de cookies</a>

        </p>
        <div class="mb-3">
            <i class="fa fa-envelope "> </i>
            <a href="mailto:pablo.bonillo@tecnozone.com" class="h6">pablo.bonillo@tecnozone.es</a>

        </div>
        <p class="footer-company-name">tecnozone © {{now()->year}}</p>
    </div>

    <div class="footer-center">

        <div class="ml-2">
            <p class="h4 text-light"> Categorias</p>
        </div>
        <ul id="enlaces_footer" class="">

        </ul>


    </div>

    <div class="footer-right">

        <p class="footer-company-about">
            <span>Sobre tecnozone</span>
            tecnozone se crea para todos los apasionados de la tecnología enfocada a ofrecer reviews y analizar los
            productos más recientes del mercado comparandolos con modelos similares.
        </p>

        <div class="footer-icons">

            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/Tecnozone_ES"  target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="https://github.com/pbm96" target="_blank"><i class="fa fa-github"></i></a>

        </div>

    </div>

</footer>
