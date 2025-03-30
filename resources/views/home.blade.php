@extends('layouts.mainTemplate')
@section("title", "Inicio")
@section('header-scripts')
    <link rel="stylesheet" href="{{'css/splide.min.css'}}">
@endsection
@section('content')
    <section class="container-fluid section-page py-3 background-1">
        <div class="title-welcome-section">
            <div class="title-user-port text-wrap w-100 mb-0">Leonel Ruiz</div>
            <div class="subtitle-user-port text-wrap w-100">- Desarrollador Web, Full Stack -</div>
        </div>
    </section>
    <section class="container-fluid section-page bg-secondary py-5">
        <div class="container">
            <p class="title-section mb-0">INFORMACIÓN</p>
            <div class="w-100">
                <section class="row m-0 g-0 p-2">
                    <div class="col-12 col-md-6 col-lg-4 border d-flex justify-content-center align-items-center">
                        <i class="bi bi-person-square display-1"></i>
                    </div>
                    <div class="col-12 col-md-6 col-lg-8 border p-2">
                        <p class="title-section-info text-start">Sobre mi</p>
                        <p class="text-start p-2">
                            Soy un desarrollador web full stack apasionado por crear soluciones digitales innovadoras y eficientes. Con más de 5 años de experiencia en el campo, he trabajado en unos cuantos proyectos que abarcan desde aplicaciones web dinámicas hasta sitios estáticos optimizados.
                            Mi formación profesional en el <a href="https://www.educacionit.com" target="_blank">Instituto Educación IT</a> me ha proporcionado una sólida base en principios de diseño y desarrollo.
                            Siempre estoy buscando aprender nuevas tecnologías y mejorar mis habilidades.
                        </p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-5 border p-2">
                        <p class="title-section-info text-start">Conocimientos en</p>
                        <div class="d-flex justify-content-start aligm-items-center flex-wrap">
                            <img src="{{asset('assets/icons/html5-plain-wordmark.svg')}}" class="m-2" alt="HTML5" title="HTML5" width="40px" data-bs-toggle="tooltip" data-bs-title="HTML5">
                            <img src="{{asset('assets/icons/css3-plain-wordmark.svg')}}" class="m-2" alt="CSS3" title="CSS3" width="40px" data-bs-toggle="tooltip" data-bs-title="CSS3">
                            <img src="{{asset('assets/icons/javascript-plain.svg')}}" class="m-2" alt="Javascript" title="Javascript" width="40px" data-bs-toggle="tooltip" data-bs-title="Javascript">
                            <img src="{{asset('assets/icons/bootstrap-original-wordmark.svg')}}" class="m-2" alt="Bootstrap" title="Bootstrap" width="40px" data-bs-toggle="tooltip" data-bs-title="Bootstrap">
                            <img src="{{asset('assets/icons/jquery-plain-wordmark.svg')}}" class="m-2" alt="Jquery" title="Jquery" width="40px" data-bs-toggle="tooltip" data-bs-title="Jquery">
                            <img src="{{asset('assets/icons/php-original.svg')}}" alt="PHP" class="m-2" title="PHP" width="40px" data-bs-toggle="tooltip" data-bs-title="PHP">
                            <img src="{{asset('assets/icons/mysql-original-wordmark.svg')}}" class="m-2" alt="MySQL" title="MySQL" width="40px" data-bs-toggle="tooltip" data-bs-title="MySQL">
                            <img src="{{asset('assets/icons/laravel-original.svg')}}" class="m-2" alt="Laravel 11" title="Laravel 11" width="40px" data-bs-toggle="tooltip" data-bs-title="LARAVEL 11">
                            <img src="{{asset('assets/icons/git-original.svg')}}" class="m-2" alt="Manejo de GIT" title="Manejo de GIT" width="40px" data-bs-toggle="tooltip" data-bs-title="GIT">
                            <img src="{{asset('assets/icons/sqlite-original.svg')}}" class="m-2" alt="SQLITE" title="SQLITE" width="40px" data-bs-toggle="tooltip" data-bs-title="SQLITE">
                            <img src="{{asset('assets/icons/angular-original.svg')}}" class="m-2" alt="Angular" title="Angular" width="40px" data-bs-toggle="tooltip" data-bs-title="ANGULAR">
                            <img src="{{asset('assets/icons/react-original.svg')}}" class="m-2" alt="ReactJs" title="ReactJs" width="40px" data-bs-toggle="tooltip" data-bs-title="ReactJs">
                            <img src="{{asset('assets/icons/vuejs-original.svg')}}" class="m-2" alt="Vue.js" title="Vue.js" width="40px" data-bs-toggle="tooltip" data-bs-title="VUE.js">
                            <img src="{{asset('assets/icons/nodejs-plain-wordmark.svg')}}" class="m-2" alt="Node.js" title="Node.js" width="40px" data-bs-toggle="tooltip" data-bs-title="NODE js">
                            <img src="{{asset('assets/icons/mongodb-original.svg')}}" class="m-2" alt="MongoDB" title="MongoDB" width="40px" data-bs-toggle="tooltip" data-bs-title="MongoDB">
                            <img src="{{asset('assets/icons/electron-original.svg')}}" class="m-2" alt="ElectronJs" title="ElectronJs" width="40px" data-bs-toggle="tooltip" data-bs-title="Electron Js">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-7 border">
                        <p class="title-section-info text-start p-2">Formación</p>
                        <ul>
                            <li class="mb-2">
                                Desarrollador web Full-stack - Instituto Educación IT  (2019 - 2022) <br>
                                <p class="text-start small text-muted m-0">Sede en CABA</p>
                                <p class="small">Orientado a desarrollar aplicaciones web utilizando lenguajes en el frontend como html, css, javascript y sus frameworks. Mientras en el backend enfocado con PHP y MySQL</p>
                            </li>
                        </ul>
                    </div>
                    @if($certificados->count() > 0)
                    <div class="col-12 border">
                        <p class="title-section-info text-start p-2">Certificados</p>
                        <section class="splide" id="cert_splide" aria-label="Splide Basic HTML Example">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    @if($certificados->count() > 0)
                                        @foreach ($certificados as $certificado)
                                            <li class="splide__slide mx-1 text-center position-relative">
                                                <img src="{{asset("assets/img/certs/" . $certificado->url_imagen_cert)}}" alt="img_not_found" class="img-fluid">
                                                <div class="w-100 fondo-blur position-absolute bottom-0 end-0 text-center">{{$certificado->nombre}} <br><span class="text-muted small">(<i class="bi bi-hand-index-thumb"></i> ver)<span></div>
                                                <a href="javascript:void(0)" class="stretched-link link-moreinfo-cert" data-idc="{{$certificado->id_cert}}"></a>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </section>
                    </div>
                    @endif
                    <div class="col-12 border pb-2">
                        <p class="title-section-info text-start p-2">Otros conocimientos</p>
                        <section class="row m-0 justify-content-center g-2">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card h-100">
                                    <div class="card-body h-100">
                                        <div class="w-100 h-100 d-flex justify-content-between align-items-center flex-wrap">
                                            <div class="text-center w-100">
                                                <i class="bi bi-pc-display display-4"></i><i class="bi bi-tools display-6"></i>
                                            </div>
                                            <div class="w-100 text-wrap text-center">
                                                <p class="mb-0 fs-5 text-wrap">
                                                    Soporte y Reparación de PC
                                                </p>
                                                <p class="small text-start mb-0 text-muted">
                                                    Certificado (2014) - <a href="https://institutosmas.com.ar">Instituto MAS</a> (Lomas de zamora - Bs As)
                                                </p>
                                                <p class="small text-start mb-0">
                                                    Conocimientos en reparación de PC en Software, Hardware, Electrónica y Redes.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card h-100">
                                    <div class="card-body h-100">
                                        <div class="w-100 h-100 d-flex justify-content-between align-items-center flex-wrap">
                                            <div class="text-center w-100">
                                                <i class="bi bi-microsoft display-6" title="Windows 10/11"></i><i class="bi bi-file-earmark-word-fill display-6" title="Word"></i><i class="bi bi-file-earmark-excel-fill display-6" title="Excel"></i><i class="bi bi-file-ppt-fill display-6" title="PowerPoint"></i><i class="bi bi-database-fill display-6" title="Access"></i>
                                            </div>
                                            <div class="w-100 text-wrap text-center">
                                                <p class="mb-0 fs-5 text-wrap">
                                                    Operador de PC
                                                </p>
                                                <p class="small text-start mb-0 text-muted">
                                                    Certificado (2018) - Centro Educativo Lanús (Lanús Este - Bs As)
                                                </p>
                                                <p class="small text-start mb-0">
                                                    Manejo del paquete de Microsoft Office(Access, Excel, Power Point y Word) en el sistema operativo Windows para realizar seguimientos y administración de datos.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <section class="container-fluid section-page-content py-5">
        <div class="container mb-5">
            <p class="title-section mb-0">Experiencia profesional</p>
            <div class="row m-0 justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <button class="btn btn-primary w-100 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#experienciaProdermicContent" aria-expanded="false" aria-controls="experienciaProdermicContent">
                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <div>
                                Desarrollador Web @ ProDermic
                            </div>
                            <div>
                                (2020 - Actualidad)
                            </div>
                            <div>
                                <i class="bi bi-caret-down-fill"></i>
                            </div>
                        </div>
                    </button>
                    <div class="collapse show" id="experienciaProdermicContent">
                        <div class="card card-body">
                            <div class="d-flex justify-content-between justify-content-center flex-wrap">
                                <p class=""><i class="bi bi-geo-alt-fill"></i> Balvanera Cdad. Autónoma de Buenos Aires</p>
                            </div>
                            <p class="">Encargado en los desarrollos de diversas aplicaciones como sistemas de gestión, catálogos virtuales, landings, e-learning, e-commerce, envío de emails masivos y carritos de compras con chekout Mercadopago.</p>
                            <div class="mb-1">
                                <span class="badge bg-primary rounded-0">HTML</span>
                                <span class="badge bg-primary rounded-0">CSS</span>
                                <span class="badge bg-primary rounded-0">JAVASCRIPT</span>
                                <span class="badge bg-primary rounded-0">JQUERY</span>
                                <span class="badge bg-primary rounded-0">BOOTSTRAP</span>
                                <span class="badge bg-primary rounded-0">PHP</span>
                                <span class="badge bg-primary rounded-0">MYSQL</span>
                            </div>
                            <div>
                                Link: <a href="https://prodermic.com.ar" target="_blank" class="link-light">https://prodermic.com.ar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid section-page-content py-5">
        <div class="container mb-5">
            <p class="title-section mb-4">Trabajos y proyectos</p>
            <section class="row m-0">
                <div class="col-12 col-md-6 col-lg-4 col-xxl-3">
                    <div class="card card-selectable position-relative">
                        <div class="card-body p-0">
                            <div class="d-flex justify-content-between align-items-center flex-column">
                                <img src="{{asset('assets/img/demoweb.png')}}" class="img-fluid" alt="">
                                <div class="w-100 text-center text-wrap fs-5">Proyecto 01</div>
                                <p class="mb-0"><span class="text-muted small">(<i class="bi bi-hand-index-thumb"></i> Detalles)<span></p>
                                <div class="pb-2">
                                    <hr>
                                    <span class="badge text-bg-primary rounded-0">Aplicación Web</span>
                                </div>
                            </div>
                        </div>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalDetallesApps" class="stretched-link"></a>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <section class="container-fluid section-page-content bg-dark py-5">
        <div class="container mb-5">
            <p class="title-section mb-4">Contacto</p>
            <div class="row m-0 justify-content-center">
                <div class="col-12 col-md-9">
                    <p>
                        Estoy acá para responder a tus preguntas, colaborar en proyectos o simplemente charlar sobre tecnología y desarrollo web. No dudes en escribirme.
                    </p>
                    <p>
                        Si preferís comunicarte directamente, podes enviarme un correo a
                        <ul>
                            <li> <a href="mailto:LeonelRuiz@dominio.com">LeonelRuiz@dominio.com</a></li>
                        </ul>
                    </p>
                    <div class="row m-0 justify-content-center">
                        <div class="col-12 col-md-6">
                            <p class="text-center"> O seguirme en mis redes sociales actuales:</p>
                            <div class="d-flex justify-content-center align-items-center flex-wrap">
                                <a href="#" class="m-2" title="Mi Github"><i class="bi bi-github fs-2"></i></a>
                                <a href="#" class="m-2" title="Mi Perfil de Linkedin"><i class="bi bi-linkedin fs-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <p class="text-center">
                        Muchas gracias por llegar hasta acá. Te deseo muchos éxitos en tus proyectos.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('modals')
    <!-- Modal -->
    <div class="modal slide-in-right" id="modalDetallesApps" tabindex="-1" aria-labelledby="modalDetallesAppsLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalDetallesAppsLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="min-height: 500px">
                    <h3 class="text-center">Nombre de la aplicación</h3>
                    <section class="row m-0">
                        <div class="col-12 col-md-6 col-lg-7">
                            <p class="text-start small">Descripción</p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quidem ipsam in optio, architecto, ipsum dignissimos, assumenda nemo id ab cupiditate! Minus omnis, quos accusantium odio dignissimos mollitia fuga nemo.
                        </div>
                        <div class="col-12 col-md-6 col-lg-5">
                            <div class="row m-0">
                                <div class="col-12 col-md-6 col-lg-3 border">
                                    Cliente
                                </div>
                                <div class="col-12 col-md-6 col-lg-3 border">
                                    Tecnologías
                                </div>
                                <div class="col-12">
                                    <a href="#" class="">Ver proyecto</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <p class="text-start">Imagenes</p>
                            <div class="row gy-3 m-0 justify-content-center">
                                <div class="col-12 col-md-10 col-lg-8 col-xxl-7">
                                    <img src="{{asset('assets/img/demoweb.png')}}" alt="imagen ejemplo" class="img-fluid">
                                </div>
                                <div class="col-12 col-md-10 col-lg-8 col-xxl-7">
                                    <img src="{{asset('assets/img/demoweb.png')}}" alt="imagen ejemplo" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer-scripts')
    <script>
        const URL_BG1 = `{{asset('assets/img/background-blue-01.jpg')}}`;
        const CERTIFICADOS = @json($certificados);
    </script>
    <script src="{{asset('js/splide.min.js')}}"></script>
    <script src="{{asset('js/pages/home/index.js')}}"></script>
    <script src="{{asset('js/parallax.min.js')}}"></script>
@endsection