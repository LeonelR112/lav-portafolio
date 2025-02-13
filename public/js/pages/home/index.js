let CertificadoController = null;

class CertificadosHandler{
    constructor(json_certificados){
        this.certificados = json_certificados;
        this.links_info_certs = document.getElementsByClassName('link-moreinfo-cert');

        if(this.certificados.length > 0){
            for(let link of this.links_info_certs){
                link.addEventListener('click', e => this.showIndoCert(e.target));
            }
        }
    }

    showIndoCert(event){
        let id_cert = parseInt(event.getAttribute('data-idc'));
        let cert = this.certificados.find( element => element.id_cert == id_cert);
        if(!cert) throw new Error("No se encontró un certificado con id " + id_cert);
        Swal.fire({
            title : cert.nombre,
            html : this.getTemplate(cert),
            width: "85rem",
            confirmButtonText: "Cerrar",
            confirmButtonColor: "#2F4D6C",
            customClass: {
                container: '',
                popup: 'bg-secondary text-white',
                header: 'bg-secondary text-white',
                htmlContainer: 'text-white',
            },
            showClass: {
                popup: `tilt-in-fwd-tr`
            },
            hideClass: {
                popup: `slit-out-diagonal-1`
            }
        });
    }

    getTemplate(cert){
        let output_html = `
            <section class="row m-0 g-2">
                <div class="col-12 col-md-6 col-lg-7">
                    <img src="${asset("img/certs/" + cert.url_imagen_cert)}" alt="${cert.nombre}" class="img-fluid" />
                </div>
                <div class="col-12 col-md-6 col-lg-5 d-flex justify-content-center align-items-center flex-column h-100">
                    <h5 class="text-center w-100">Descripción</h5>
                    <hr class="w-100">
                    <div class="w-100">${cert.descripcion}</div>
                    <div class="w-100">
                        ${cert.url_credencial != null ? `<a href="${cert.url_credencial}" target="_blank" class="btn btn-outline-warning m-2"><i class="bi bi-patch-check"></i> Ver credencial</a>` : ''}
                        ${cert.url_credencial != null ? `<a href="${cert.url_imagen_cert}" download="${cert.url_imagen_cert}" class="btn btn-outline-light m-2" title="Descargar en formato jpg"><i class="bi bi-box-arrow-down"></i> Descargar certificado</a>` : ''}
                    </div>
                </div>
            </section>
        `;
        return output_html;
    }
}

document.addEventListener('DOMContentLoaded', e => {
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    CertificadoController = new CertificadosHandler(CERTIFICADOS);

    new Splide('#cert_splide', {
        type: 'slide',
        autoplay: false,
        interval: 5000,
        nearby: 'nearby',
        perPage: 3,
        pagination : false,
        breakpoints: {
            550 :{
                perPage : 1
            },
            820 :{
                perPage: 2
            },
            1300: {
                perPage: 3
            },
            2000: {
                perPage: 4
            }
        }
    } ).mount();

    $('.background-1').parallax({
        imageSrc: URL_BG1,
        speed : 0.5
    });
})

window.addEventListener('scroll', e => {
    let navbar = document.getElementById('main-navbar');
    if(window.scrollY > 500){
        navbar.classList.add("fondo-blur");
        navbar.classList.remove("bg-primary");
    }
    else{
        navbar.classList.add("bg-primary");
        navbar.classList.remove('fondo-blur');
    }
})