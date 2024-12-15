@extends('layouts.mainTemplate')
@section("title", "Inicio")
@section('content')
    <section class="container-fluid section-page py-3 background-1">
        <div class="title-welcome-section">
            <div class="title-user-port text-wrap w-100 mb-0">Leonel Ruiz</div>
            <div class="subtitle-user-port text-wrap w-100">- Desarrollador Web, Full Stack -</div>
        </div>
    </section>

    <section class="container-fluid section-page bg-secondary ">
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
                            Soy un desarrollador web full stack apasionado por crear soluciones digitales innovadoras y eficientes. Con más de 5 años de experiencia en el campo, he trabajado en una variedad de proyectos que abarcan desde aplicaciones web dinámicas hasta sitios estáticos optimizados.
                            Mi formación profesional en el <a href="#">Instituto Educación IT</a> me ha proporcionado una sólida base en principios de diseño y desarrollo.
                            Siempre estoy buscando aprender nuevas tecnologías y mejorar mis habilidades.
                        </p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-5 border p-2">
                        <p class="title-section-info text-start">Conocimientos en</p>
                        <div class="d-flex justify-content-start aligm-items-center flex-wrap">
                            <img src="{{asset('assets/icons/html5-plain-wordmark.svg')}}" class="m-2" alt="HTML5" title="HTML5" width="40px">
                            <img src="{{asset('assets/icons/css3-plain-wordmark.svg')}}" class="m-2" alt="CSS3" title="CSS3" width="40px">
                            <img src="{{asset('assets/icons/javascript-plain.svg')}}" class="m-2" alt="Javascript" title="Javascript" width="40px">
                            <img src="{{asset('assets/icons/bootstrap-original-wordmark.svg')}}" class="m-2" alt="Bootstrap" title="Bootstrap" width="40px">
                            <img src="{{asset('assets/icons/jquery-plain-wordmark.svg')}}" class="m-2" alt="Jquery" title="Jquery" width="40px">
                            <img src="{{asset('assets/icons/php-original.svg')}}" alt="PHP" class="m-2" title="PHP" width="40px">
                            <img src="{{asset('assets/icons/mysql-original-wordmark.svg')}}" class="m-2" alt="MySQL" title="MySQL" width="40px">
                            <img src="{{asset('assets/icons/laravel-original.svg')}}" class="m-2" alt="Laravel 11" title="Laravel 11" width="40px">
                            <img src="{{asset('assets/icons/git-original.svg')}}" class="m-2" alt="Manejo de GIT" title="Manejo de GIT" width="40px">
                            <img src="{{asset('assets/icons/sqlite-original.svg')}}" class="m-2" alt="SQLITE" title="SQLITE" width="40px">
                            <img src="{{asset('assets/icons/angular-original.svg')}}" class="m-2" alt="Angular" title="Angular" width="40px">
                            <img src="{{asset('assets/icons/react-original.svg')}}" class="m-2" alt="ReactJs" title="ReactJs" width="40px">
                            <img src="{{asset('assets/icons/vuejs-original.svg')}}" class="m-2" alt="Vue.js" title="Vue.js" width="40px">
                            <img src="{{asset('assets/icons/nodejs-plain-wordmark.svg')}}" class="m-2" alt="Node.js" title="Node.js" width="40px">
                            <img src="{{asset('assets/icons/mongodb-original.svg')}}" class="m-2" alt="MongoDB" title="MongoDB" width="40px">
                            <img src="{{asset('assets/icons/electron-original.svg')}}" class="m-2" alt="ElectronJs" title="ElectronJs" width="40px">
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
                    <div class="col-12 border">
                        <p class="title-section-info text-start p-2">Certificados</p>

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
                        <div class="d-flex justify-content-around align-items-center flex-wrap">
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
                    <div class="collapse" id="experienciaProdermicContent">
                        <div class="card card-body">
                            <div class="d-flex justify-content-between justify-content-center flex-wrap">
                                <p class=""><i class="bi bi-geo-alt-fill"></i> Balvanera Cdad. Autónoma de Buenos Aires</p>
                            </div>
                            <p class="">Desarrollo de diversas aplicaciones como sistemas de gestión, catálogos virtuales, landings, e-learning, e-commerce, envío de emails masivos y carritos de compras con chekout Mercadopago.</p>
                            <div class="mb-1">
                                <span class="badge bg-primary">HTML</span>
                                <span class="badge bg-primary">CSS</span>
                                <span class="badge bg-primary">JAVASCRIPT</span>
                                <span class="badge bg-primary">JQUERY</span>
                                <span class="badge bg-primary">BOOTSTRAP</span>
                                <span class="badge bg-primary">PHP</span>
                                <span class="badge bg-primary">MYSQL</span>
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
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="d-flex justify-content-between align-items-center flex-column">
                                <img src="{{asset('assets/img/demoweb.png')}}" class="img-fluid" alt="">
                                <div class="w-100 text-center text-wrap fs-5">Proyecto 01</div>
                                <div class="pb-2">
                                    <hr>
                                    <span class="badge text-bg-primary">Aplicación Web</span>
                                </div>
                            </div>
                        </div>
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