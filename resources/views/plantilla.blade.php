<!DOCTYPE html>
<html lang="en">
<head>
    @include('modulos/head')
</head>
<body>
    <section class="noConteiner">
        <div class="">
            @include('modulos/cabecera')
        </div>
    </section>
    <section class="noConteiner">
        <div class="">
            @yield('content')
        </div>
    </section>
    <section>
        <div class="piee">
            @include('modulos/pie')
        </div>

    </section> 
    @include('modulos/script')
</body>
</html>