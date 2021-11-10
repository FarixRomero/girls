<template>
  <div>
    <searchbar-component></searchbar-component>
    <div class="container-carousel">
      <carousel
        class="carousel-ultimas"
        :responsive="{0:{items:1,nav:false},600:{items:5.1,nav:false}}"
        :dots="false"
      >
        <div
          v-for="(item, index) in list"
          :key="index"
          class="carousel-ultimas__item multi-carousel-item"
        >
          <a class="item-link" href>
            <div class="item-link__img">
              <img :src="url_img(item.imgs[0])" alt="Gallery image 1" class="w-100" />
            </div>
            <div class="item-link__info">
              <h2>
                Camila
                <span>Surco</span>
              </h2>
              <p class="disponibility">Disponible AHORA</p>
              <p class="hour">
                <i class="fas fa-history"></i> hace 2 horas
              </p>
            </div>
          </a>
        </div>
      </carousel>
    </div>
    <div class="container-custom">
      <div class="list-cards">
        <a
          :href="url_base+'/kinesiologa/'+(index+1)"
          v-for="(item,index) in list"
          :key="index"
          class="card-item"
        >
          <div class="card-item__header">
            <div class="card-item__header--name">
              <p>
                nombre
                <span>(24)</span>
              </p>
            </div>
            <div class="card-item__header--place">
              <p>
                <svg
                  class="place"
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  viewBox="0 0 24 24"
                  style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"
                >
                  <path
                    d="M12 2C7.589 2 4 5.589 4 9.995 3.971 16.44 11.696 21.784 12 22c0 0 8.029-5.56 8-12 0-4.411-3.589-8-8-8zm0 12c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z"
                  />
                </svg>
                Lugar
                <svg
                  class="check"
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  viewBox="0 0 24 24"
                  style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"
                >
                  <path
                    width="20"
                    height="20"
                    d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-1.999 14.413-3.713-3.705L7.7 11.292l2.299 2.295 5.294-5.294 1.414 1.414-6.706 6.706z"
                  />
                </svg>
              </p>
            </div>
          </div>
          <div class="card-item__background">
            <span class="video">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="20"
                height="20"
                viewBox="0 0 24 24"
                style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"
              >
                <path
                  d="M18 7c0-1.103-.897-2-2-2H4c-1.103 0-2 .897-2 2v10c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-3.333L22 17V7l-4 3.333V7z"
                />
              </svg>
            </span>
            <div class="new">
              <span>NEW</span>
            </div>
            <div class="vip">
              <span>VIP</span>
            </div>
            <div
              id="multi-item-example"
              data-interval="1500"
              class="carousel slide carousel-multi-item"
              data-ride="carousel"
            >
              <div class="carousel-inner" role="listbox">
                <div
                  v-for="(item, index) in item.imgs"
                  :key="index"
                  class="carousel-item"
                  :class="index==0?'active':''"
                >
                  <div class="row-custom">
                    <img :src="url_img(item)" alt />
                  </div>
                  <div class="img-agua">
                    <img :src="url_img('/images/pa.png')" alt />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-item__body">
            <div class="body-profile">
              <div class="profile-info">
                <div class="profile-info__name">
                  <div class="profile-info__name--img">
                    <img
                      src="https://www.kindpng.com/picc/m/22-223941_transparent-avatar-png-male-avatar-icon-transparent-png.png"
                      alt
                    />
                  </div>
                  <p>nombre</p>
                </div>
                <div class="profile-info__time">
                  <span class>timeAgo</span>
                </div>
              </div>
              <div class="profile-contact">
                <p>
                  <svg
                    class="phone"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"
                  >
                    <path
                      d="m20.487 17.14-4.065-3.696a1.001 1.001 0 0 0-1.391.043l-2.393 2.461c-.576-.11-1.734-.471-2.926-1.66-1.192-1.193-1.553-2.354-1.66-2.926l2.459-2.394a1 1 0 0 0 .043-1.391L6.859 3.513a1 1 0 0 0-1.391-.087l-2.17 1.861a1 1 0 0 0-.29.649c-.015.25-.301 6.172 4.291 10.766C11.305 20.707 16.323 21 17.705 21c.202 0 .326-.006.359-.008a.992.992 0 0 0 .648-.291l1.86-2.171a.997.997 0 0 0-.085-1.39z"
                    />
                  </svg> 987654321
                  <svg
                    class="whats"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M18.403 5.633A8.919 8.919 0 0 0 12.053 3c-4.948 0-8.976 4.027-8.978 8.977 0 1.582.413 3.126 1.198 4.488L3 21.116l4.759-1.249a8.981 8.981 0 0 0 4.29 1.093h.004c4.947 0 8.975-4.027 8.977-8.977a8.926 8.926 0 0 0-2.627-6.35m-6.35 13.812h-.003a7.446 7.446 0 0 1-3.798-1.041l-.272-.162-2.824.741.753-2.753-.177-.282a7.448 7.448 0 0 1-1.141-3.971c.002-4.114 3.349-7.461 7.465-7.461a7.413 7.413 0 0 1 5.275 2.188 7.42 7.42 0 0 1 2.183 5.279c-.002 4.114-3.349 7.462-7.461 7.462m4.093-5.589c-.225-.113-1.327-.655-1.533-.73-.205-.075-.354-.112-.504.112s-.58.729-.711.879-.262.168-.486.056-.947-.349-1.804-1.113c-.667-.595-1.117-1.329-1.248-1.554s-.014-.346.099-.458c.101-.1.224-.262.336-.393.112-.131.149-.224.224-.374s.038-.281-.019-.393c-.056-.113-.505-1.217-.692-1.666-.181-.435-.366-.377-.504-.383a9.65 9.65 0 0 0-.429-.008.826.826 0 0 0-.599.28c-.206.225-.785.767-.785 1.871s.804 2.171.916 2.321c.112.15 1.582 2.415 3.832 3.387.536.231.954.369 1.279.473.537.171 1.026.146 1.413.089.431-.064 1.327-.542 1.514-1.066.187-.524.187-.973.131-1.067-.056-.094-.207-.151-.43-.263"
                    />
                  </svg>
                </p>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="container-custom">
      <div class="d-flex flex-column content-testimonio w-100">
        <h1 class="text-center">
          <i class="fa fa-heart"></i> TESTIMONIOS
          <i class="fa fa-heart"></i>
        </h1>
        <div
          id="testimonio"
          class="carousel slide carousel-testimonio"
          data-ride="carousel"
          data-interval="1500"
        >
          <ul class="list-unstyled carousel-indicators indicators-testimonio">
            <li data-target="#testimonio" data-slide-to="0" class></li>
            <li data-target="#testimonio" data-slide-to="1" class></li>
            <li data-target="#testimonio" data-slide-to="2" class="active"></li>
            <li data-target="#testimonio" data-slide-to="3" class></li>
            <li data-target="#testimonio" data-slide-to="4" class></li>
          </ul>
          <div class="carousel-inner">
            <div class="carousel-item">
              <img src="https://placeresdearequipa.com/imagen/fondo.png" />
              <div class="carousel-caption hidden-xs fadeInDown animated">
                <h1>
                  <i>
                    <span>La mejor pagina de escorts del PERU</span>
                  </i>
                </h1>
                <hr class="my-0" />
                <p>Aqui encontraras anuncios de kinesiólogas A1. Sexo delivery.Kinesiólogas en Arequipa, Escorts independientes del PERU, sexo con kinesiólogas del PERU. Culonas, tetonas, jovenictas, maduritas. Encuentra la mejor forma de contactar con kinesiólogas y Damas de compañia</p>

                <p>- Lucio gallegos-</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="https://placeresdearequipa.com/imagen/fondo.png" />
              <div class="carousel-caption hidden-xs fadeInDown animated">
                <h1>
                  <i>
                    <span>Contacto con Kinesiólogas - Escorts</span>
                  </i>
                </h1>
                <hr class="my-0" />
                <p>A la hora de conocer mujeres puedes recurrir a bares,discotekas,webs. placeresdearequipa es un portal de anuncios eroticos que tan solo hacer un click, puedes acceder a un enorme listado de Kinesiólogas,Escorts o mujeres liberales,dispuestas a tener relaciones esporadicas. Si buscas sexo ahora con chicas no profesionales, en pagina placeresdearequipa encontaras un enorme variedad de mujeres jovencitas, con las que podras quedar hoy mismo si asi lo deseas.</p>

                <p>-Matias Fernandez-</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="https://placeresdearequipa.com/imagen/fondo.png" />
              <div class="carousel-caption hidden-xs fadeInDown animated">
                <h1>
                  <i>
                    <span>Escorts Kinesiólogas del PERU</span>
                  </i>
                </h1>
                <hr class="my-0" />
                <p>Selecciona entre los anuncios que publican diariamente Kinesiólogas, Escorts. Fotos reales 100% de kinesiólogas, escorts. Disfruta el placer y la pasion de Kinesiologas economicas que se anuncian en esta pagina. Fotos de kinesiologas, escorts. Enviales un whatsapp a estas kinesiólogas Arequipa para pedirle una cita.</p>

                <p>-Damian-</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="https://placeresdearequipa.com/imagen/fondo.png" />
              <div class="carousel-caption hidden-xs fadeInDown animated">
                <h1>
                  <i>
                    <span>Hermosas Kinesiólogas,Escorts</span>
                  </i>
                </h1>
                <hr class="my-0" />
                <p>Muy buenas y hermosas Escorts,Kinesiólogas cada una de estas Kinesiólogas son lindas mujeres peruanas. Es la mejor seleccion de Damas de compañia que existe en el PERU.</p>

                <p>-Julio Butamante-</p>
              </div>
            </div>
            <div class="carousel-item active">
              <img src="https://placeresdearequipa.com/imagen/fondo.png" />
              <div class="carousel-caption hidden-xs fadeInDown animated">
                <h1>
                  <i>
                    <span>placeresdearequipa</span>
                  </i>
                </h1>
                <hr class="my-0" />
                <p>Sin lugar a duda es la mejor pagina de Escorts, Kinesiólogas. Paro de viaje por motivos de negocio y todas noches durante 4 dias estube llamando a algunas kines vip, y tube la mejor experiencia por medio de la pagina placeresdearequipa.com</p>

                <p>-Daniel-</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div v-if="accept" class="modal-custom">
      <div class="modal-c modal-content">
        <div class="modal-h modal-header">
          <h5
            class="modal-title text-uppercase"
          >por favor, lee el siguiente aviso antes de continuar</h5>
        </div>
        <div class="modal-b modal-body">
          <div class="d-flex flex-column bd-highlight mb-3">
            <div class="p-2 bd-highlight order-lg-0 dont-collapse-sm">
              <ul class="list-group-decimal px-2">
                <li>
                  <strong>Tengo más de 18 años.</strong>
                </li>
                <li>
                  <strong>No se permite la publicación de ningún anuncio que contenga referencias sobre servicios sexuales a cambio de dinero.</strong>
                </li>
                <li>
                  <strong>No se permite adjuntar imágenes pornográficas que muestren órganos genitales explícitamente.</strong>
                </li>
                <li>
                  <strong>La inserción de material pedófilo, incluidos todos los datos de acceso, se comunicará inmediatamente a las autoridades competentes a fin de llegar a los responsables implicados.</strong>
                </li>
                <li>
                  Al publicar un anuncio en Placeres Arequipa,
                  <strong>el Usuario certifica que puede acceder al contenido con todos los derechos</strong> y también declara que cualquier persona representada en las imágenes cargadas es mayor de edad (más de 18 años), y que ha dado su consentimiento para publicarlas en Placeres Arequipa.
                </li>
              </ul>
            </div>
            <div class="p-2 bd-highlight order-lg-1">
              Al hacer clic en el botón "Aceptar", el Usuario declara ser
              <strong>mayor de 18 años</strong> y
              <strong>exime de toda responsabilidad a los proveedores de estos servicios, propietarios y creadores de Placeres Arequipa.com sobre los contenidos y sobre el uso que se haga de la sección.</strong> Asimismo, al hacer clic en el botón "Aceptar", el Usuario declara conocer y aceptar expresamente la
              <a
                target="_blank"
                data-href="/politica-de-privacidad/"
              >"Política de Privacidad"</a>
              del sitio, relativa al tratamiento de sus datos personales.
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-center">
          <a href="/" class="btn btn-outline-primary waves-effect waves-light">Renuncio</a>
          <button
            @click="accept=false"
            type="button"
            class="btn btn-primary waves-effect waves-light"
          >Aceptar</button>
        </div>
      </div>
    </div>
    <footer-component></footer-component>
  </div>
</template>
<script>
import carousel from "vue-owl-carousel";

export default {
  props: ["url_base"],
  data() {
    return {
      accept: false,
      list: [
        {
          id: 1,
          imgs: [
            "/images/chicas/1.jpeg",
            // "/images/chicas/2.jpeg",
            // "/images/chicas/3.jpeg",
            // "/images/chicas/4.jpeg",
          ],
        },
        {
          id: 2,
          imgs: [
            "/images/chicas/5.jpeg",
            "/images/chicas/6.jpeg",
            "/images/chicas/7.jpeg",
            "/images/chicas/8.jpeg",
          ],
        },
        {
          id: 1,
          imgs: [
            "/images/chicas/1.jpeg",
            "/images/chicas/2.jpeg",
            "/images/chicas/3.jpeg",
            "/images/chicas/4.jpeg",
          ],
        },
        {
          id: 2,
          imgs: [
            "/images/chicas/5.jpeg",
            "/images/chicas/6.jpeg",
            "/images/chicas/7.jpeg",
            "/images/chicas/8.jpeg",
          ],
        },
        {
          id: 1,
          imgs: [
            "/images/chicas/1.jpeg",
            "/images/chicas/2.jpeg",
            "/images/chicas/3.jpeg",
            "/images/chicas/4.jpeg",
          ],
        },
        {
          id: 2,
          imgs: [
            "/images/chicas/5.jpeg",
            "/images/chicas/6.jpeg",
            "/images/chicas/7.jpeg",
            "/images/chicas/8.jpeg",
          ],
        },
        {
          id: 1,
          imgs: [
            "/images/chicas/1.jpeg",
            "/images/chicas/2.jpeg",
            "/images/chicas/3.jpeg",
            "/images/chicas/4.jpeg",
          ],
        },
        {
          id: 2,
          imgs: [
            "/images/chicas/5.jpeg",
            "/images/chicas/6.jpeg",
            "/images/chicas/7.jpeg",
            "/images/chicas/8.jpeg",
          ],
        },
        {
          id: 1,
          imgs: [
            "/images/chicas/1.jpeg",
            "/images/chicas/2.jpeg",
            "/images/chicas/3.jpeg",
            "/images/chicas/4.jpeg",
          ],
        },
        {
          id: 2,
          imgs: [
            "/images/chicas/5.jpeg",
            "/images/chicas/6.jpeg",
            "/images/chicas/7.jpeg",
            "/images/chicas/8.jpeg",
          ],
        },
        {
          id: 1,
          imgs: [
            "/images/chicas/1.jpeg",
            "/images/chicas/2.jpeg",
            "/images/chicas/3.jpeg",
            "/images/chicas/4.jpeg",
          ],
        },
        {
          id: 2,
          imgs: [
            "/images/chicas/5.jpeg",
            "/images/chicas/6.jpeg",
            "/images/chicas/7.jpeg",
            "/images/chicas/8.jpeg",
          ],
        },
      ],
    };
  },
  mounted() {
    setTimeout(() => {
      // this.accept = true;
    }, 3000);
  },
  components: {
    carousel,
  },
  methods: {
    url_img(a) {
      return this.url_base + a;
    },
  },
  computed: {},
};
</script>
<style lang="scss" scoped>
.container-carousel {
  width: 1140px;
  margin: 0 auto;
  padding: 25px 5px;
  max-width: 100%;
  .carousel-ultimas {
    border: 1px solid black;

    .owl-carousel {
      .owl-stage-outer {
        .owl-stage {
          .owl-item {
            .carousel-ultimas__item {
              .item-link {
                display: flex;
                align-items: center;
                height: 80px;
                justify-content: space-between;
                border-right: 1px solid black;
                text-decoration: none;
                &__img {
                  border: 2px solid red;
                  min-width: 60px;
                  max-width: 60px;
                  height: 60px;
                  border-radius: 50%;
                  // overflow: hidden;
                  margin: 0 10px;
                  img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    object-position: center;
                    border-radius: 50%;
                  }
                }
                &__info {
                  width: 60%;
                  h2 {
                    font-size: 16px;
                    font-weight: bold;
                    color: black;
                    margin: 0;
                    span {
                      color: #cc3366;
                      font-weight: normal;
                    }
                  }
                  p {
                    margin: 0;
                  }
                  .disponibility {
                    color: black;
                    font-size: 12px;
                  }
                  .hour {
                    color: black;
                    font-size: 12px;
                    align-self: flex-end;
                  }
                }
              }
            }
          }
        }
      }
    }
  }
}
</style>