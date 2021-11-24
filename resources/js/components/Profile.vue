<template>
  <div class="profile-container">
    <div class="logo-cont">
      <a :href="url_base">
        <img :src="url_img('/images/logoAQP.png')" alt />
      </a>
    </div>
    <div class>
      <div class="profile-navbar">
        <div class="navbar-content">
          <div class="navbar-left">
            <span class="select">
              <span class="text">JESSIKA</span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="36"
                height="36"
                viewBox="0 0 24 24"
                style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"
              >
                <path d="m5 12 7 6v-5h6v-2h-6V6z" />
              </svg>
            </span>
            <div class="hover-img h-left" style="z-index:1000000">
              <img
                src="https://placeresdelperu.com/wp-content/uploads/2021/09/Kasandra-979792-puta-7-104x146.jpg"
                alt="Kasandra 979792566, escorts en Lima"
              />
              <div class="hover-info">
                <span class="single-pop-np">Anterior modelo</span>
                <h3>KASANDRA</h3>
                <p class="adsub">Encantadora joven venezolana muy linda y de aspecto recatado</p>
              </div>
            </div>
          </div>
          <div class="navbar-info">
            <h1>
              <span class="model-title-bg">VIOLETA</span>
            </h1>
            <h3
              class="model-sub_title"
            >Linda escort independiente de cuerpo delgado exótica y complaciente</h3>
          </div>
          <div class="navbar-right">
            <span class="select">
              <span class="text">JESSIKA</span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="36"
                height="36"
                viewBox="0 0 24 24"
                style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"
              >
                <path d="m19 12-7-6v5H6v2h6v5z" />
              </svg>
            </span>
            <div class="hover-img h-right" style="z-index:1000000">
              <img
                src="https://placeresdelperu.com/wp-content/uploads/2021/09/Kasandra-979792-puta-7-104x146.jpg"
                alt="Kasandra 979792566, escorts en Lima"
              />
              <div class="hover-info">
                <span class="single-pop-np">Siguiente modelo</span>
                <h3>KASANDRA</h3>
                <p class="adsub">Encantadora joven venezolana muy linda y de aspecto recatado</p>
              </div>
            </div>
          </div>
          <div class="navbar-icons">
            <div class="icon">
              <span>
                <img :src="url_flag" alt />
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-photos container-fluid">
        <carousel :responsive="{0:{items:1,nav:false},600:{items:5,nav:false}}">
          <div v-for="(item,index) in imgs" :key="index" class="multi-carousel-item">
            <img @click="openModal()" :src="url_img(item)" alt="Gallery image 1" class="w-100" />
          </div>
        </carousel>
      </div>
      <div class="profile-info container-custom">
        <div class="info-phills">
          <span>Lima</span>
          <span>Miralfores</span>
          <span>Peruanas</span>
          <span>Verificada</span>
          <span>Videollamada</span>
        </div>
        <div class="info-available">
          <div class="info-available__info">
            <p>
              <strong>Disponibilidad</strong>
            </p>
            <p>Disponible ahora</p>
          </div>
        </div>
        <div class="info-detail">
          <table class="table table-striped table-hover">
            <tbody>
              <tr>
                <td class="tc-left">Ciudad:</td>
                <td class="tc-center"></td>
                <td class="text-right">Arequipa.</td>
              </tr>
              <tr>
                <td class="tc-left">Edad:</td>
                <td class="tc-center"></td>
                <td class="text-right">19 años.</td>
              </tr>
              <tr>
                <td class="tc-left">Estatura:</td>
                <td class="tc-center"></td>
                <td class="text-right">1.58 mts.</td>
              </tr>
              <tr>
                <td class="tc-left">Medidas:</td>
                <td class="tc-center"></td>
                <td class="text-right">90 - 57 - 92 cm.</td>
              </tr>
              <tr>
                <td class="tc-left">Pecho natural:</td>
                <td class="tc-center"></td>
                <td class="text-right">Sí.</td>
              </tr>
              <tr>
                <td class="tc-left">Tez:</td>
                <td class="tc-center"></td>
                <td class="text-right">Clara</td>
              </tr>
              <tr>
                <td class="tc-left">Brasier:</td>
                <td class="tc-center"></td>
                <td class="text-right">34B.</td>
              </tr>
              <tr>
                <td class="tc-left">Pantalon:</td>
                <td class="tc-center"></td>
                <td class="text-right">28.</td>
              </tr>
              <tr>
                <td class="tc-left">Nacionalidad:</td>
                <td class="tc-center"></td>
                <td class="text-right">Peruana.</td>
              </tr>
              <tr>
                <td class="tc-left">Ocupación:</td>
                <td class="tc-center"></td>
                <td class="text-right">Universitaria.</td>
              </tr>
              <tr>
                <td class="tc-left">Fumadora:</td>
                <td class="tc-center"></td>
                <td class="text-right">No.</td>
              </tr>
              <tr>
                <td class="tc-left">Bebida Favorita:</td>
                <td class="tc-center"></td>
                <td class="text-right">Vino.</td>
              </tr>
              <tr>
                <td class="tc-left">Hobbies:</td>
                <td class="tc-center"></td>
                <td class="text-right">Bailar, Cantar.</td>
              </tr>
              <tr>
                <td class="tc-left">Idiomas:</td>
                <td class="tc-center"></td>
                <td class="text-right">Español.</td>
              </tr>
              <tr>
                <td class="tc-left">Ubicación:</td>
                <td class="tc-center"></td>
                <td
                  class="text-right"
                  style="color: red; font-weight: 700"
                >Salida en un Hoteles/Motel.</td>
              </tr>
              <tr>
                <td class="tc-left">Disponibilidad:</td>
                <td class="tc-center"></td>
                <td class="text-right" style="color: red; font-weight: 700">Lunes - Domingo.</td>
              </tr>
              <!-- <tr>
                <th scope="row">&nbsp;</th>
                <td>&nbsp;</td>
                <td>Col 1</td>
                <td>Col 2</td>
              </tr>-->
            </tbody>
          </table>
          <div class="llamada">
            <a class="btn btn-primary phone" href>
              <i class="fas fa-phone"></i>
              Llamar
            </a>
            <a class="btn btn-success whats" href>
              <i class="fab fa-whatsapp"></i> Whatsapp
            </a>
          </div>
        </div>
        <div class="info-video">
          <div
            style="video width:560px; height:325px"
            class="embed-responsive embed-responsive-16by9"
          >
            <video width="560" height="315" controls :poster="url_poster">
              <source :src="url_video" type="video/mp4" />
            </video>
          </div>
        </div>
        <div class="info-services">
          <div class="info-services__content">
            <h2 class="title">Servicios</h2>
            <div
              class="d-flex px-4 list-services border"
              style="flex-wrap: wrap; justify-content: space-evenly"
            >
              <span class="bg-light">
                <i class="fa fa-check"></i> Actitud (trato como una novia)
              </span>

              <span class="bg-light">
                <i class="fa fa-check"></i> Beso con pasión
              </span>

              <span class="bg-light">
                <i class="fa fa-check"></i> Oral con condón
              </span>

              <span class="bg-light">
                <i class="fa fa-check"></i> Masajes Eróticos
              </span>

              <span class="bg-light">
                <i class="fa fa-check"></i> Hora completa
              </span>

              <span class="bg-light">
                <i class="fa fa-check"></i> No sexo anal
              </span>

              <span class="bg-light">
                <i class="fa fa-check"></i> En la hora puedes repetir las veces que puedas
              </span>

              <span class="bg-light">
                <i class="fa fa-check"></i> Disfraces y lencería
              </span>
            </div>
          </div>
        </div>
        <div class="info-description">
          <div class="title">
            <h3>ESCORT A1 DE PIEL BLANCA Y RUBA CABELLERA</h3>
          </div>
          <div class="description-content">
            <p class="name">
              IVANNA
              <span>987654321</span>
              <i class="fas fa-mobile-alt"></i>
            </p>
            <span class="whats">
              <i class="fab fa-whatsapp"></i>
            </span>
            <p
              class="description"
            >Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita repellendus rerum ullam nam, ratione atque aspernatur, est hic sint ducimus quos similique alias odit neque corrupti, quibusdam qui veniam non commodi dolorum nihil. Natus, voluptas!</p>
            <p
              class="description"
            >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, optio? Nihil quasi corporis rem dolorem nesciunt officiis facere a earum cum voluptas! Reiciendis excepturi labore officia necessitatibus dolorem, quos libero dolorum cum odio natus? Facilis rerum eligendi debitis magnam, iusto placeat odio amet saepe sint omnis ratione incidunt consequatur doloribus, error, odit perspiciatis! Nobis impedit ipsum molestiae expedita eligendi eveniet, officia animi! Tempore expedita nesciunt autem animi, repudiandae iste corporis eveniet sint cum accusantium adipisci itaque veritatis? Natus, tenetur ad.</p>
          </div>
        </div>
        <div class="info-recommend">
          <div class="recommend-content" id="kineLiveContainer">
            <h2 class="title">
              <b>Escorts mas buscadas en Arequipa:</b>
            </h2>
            <div class="recommend-list" style="display: flex; flex-wrap: wrap">
              <div v-for="(item,index) in lives" :key="index" class="col-6">
                <div class="recommend-list__item" style="padding:15px">
                  <a href>
                    <div
                      style="padding:5px; background: linear-gradient(44deg, red, #d8ff00); border-radius: 50%; position: relative"
                    >
                      <img :src="url_img(item)" class="img-fluid" style="border-radius: 50%" alt />
                      <div
                        class="shake-text"
                        style="position: absolute; top: 20px; background: black; border-radius: 3px; padding: 0 5px"
                      >
                        <div
                          style="display: inline-block; background-color: green; width: 10px; height: 10px; border-radius: 50%"
                        ></div>
                        <span
                          class="live"
                          style="color: white; line-height: 0; display: inline-block"
                        >
                          LIVE
                          <p></p>
                        </span>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer-component></footer-component>
    <div class="modal-custom" v-if="showModal" @keyup.esc="closeModal()">
      <button class="close-modal-c" @click="closeModal()">X</button>
      <div class="modal-custom-cont">
        <div id="carouselIdaaa" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div
              v-for="(item,index) in imgs"
              :key="index"
              class="carousel-item"
              :class="{ 'active':index == 0}"
            >
              <img :src="url_img(item)" alt="Gallery image 1" class="h-100" />
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselIdaaa" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselIdaaa" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import carousel from "vue-owl-carousel";

export default {
  props: ["usuario", "url_base"],
  data() {
    return {
      url: " ",
      showModal: false,
      imgs: [
        "/images/chicas/1.jpeg",
        "/images/chicas/2.jpeg",
        "/images/chicas/3.jpeg",
        "/images/chicas/4.jpeg",
        "/images/chicas/1.jpeg",
        "/images/chicas/2.jpeg",
        "/images/chicas/3.jpeg",
        "/images/chicas/4.jpeg",
      ],
      lives: [
        "/images/chicas/1.jpeg",
        "/images/chicas/2.jpeg",
        "/images/chicas/3.jpeg",
        "/images/chicas/4.jpeg",
      ],
    };
  },
  mounted() {
    this.url = this.url_base + "/images/logoAQP.png";
  },
  methods: {
    url_img(a) {
      return this.url_base + a;
    },
    openModal() {
      this.showModal = true;
    },
    closeModal() {
      this.showModal = false;
    },
  },
  computed: {
    url_flag() {
      return this.url_base + "/images/flag/flags/1x1/pe.svg";
    },
    url_video() {
      return this.url_base + "/video/video-prueba.mp4";
    },
    url_poster() {
      return this.url_base + "/images/poster.png";
    },
  },
  components: {
    carousel,
  },
};
</script>
<style lang="scss" scoped>
.profile-container {
  // background-color: black;
  overflow: hidden;
  .profile-navbar {
    background-image: url("https://www.puertopixel.com/wp-content/uploads/2011/03/Fondos-web-Texturas-web-abtacto-32.jpg");
    // background-repeat: repeat;
    background-position: center;
    background-size: 100%;
    height: 230px;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    .navbar-content {
      position: relative;
      width: 100%;
      .navbar-info {
        width: 100%;
        text-align: center;
        padding: 0 145px;
        h1 {
          font-size: 52px;
          text-transform: uppercase;
          color: white;
          font-family: "Oswald", sans-serif;
          @media (max-width: 600px) {
            font-size: 24px;
          }
        }
        h3 {
          margin: 10px 0 20px;
          color: #ffffff;
          font-size: 24px;
          @media (max-width: 600px) {
            font-size: 14px;
          }
        }
      }
      .navbar-icons {
        position: absolute;
        bottom: -40px;
        left: 0;
        right: 0;
        margin: 0 auto;
        display: flex;
        justify-content: center;
        align-items: center;
        .icon {
          background: rgba(0, 0, 0, 0.3);
          width: 48px;
          height: 48px;
          border-radius: 50px;
          color: #fff;
          text-align: center;
          line-height: 54px;
          display: inline-block;
          margin: 0px 3px;

          span {
            background-size: contain;
            background-position: 50%;
            background-repeat: no-repeat;
            position: relative;
            display: inline-block;
            width: 28px;
            line-height: 25px;
            top: -3px;
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
          }
        }
      }
      .navbar-left {
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        margin: auto 0;

        display: flex;
        align-items: center;
        justify-content: center;
        @media (max-width: 600px) {
          min-width: 75px;
          height: 60px;
        }
        .select {
          color: white;
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          height: 98px;
          min-width: 150px;
          background-color: black;
          .text {
            font-size: 24px;
            @media (max-width: 600px) {
              font-size: 14px;
            }
          }
          svg {
            fill: white !important;
          }
        }
      }
      .navbar-right {
        position: absolute;
        right: 0;
        top: 0;
        bottom: 0;
        margin: auto 0;

        display: flex;
        align-items: center;
        justify-content: center;
        @media (max-width: 600px) {
          min-width: 75px;
          height: 60px;
        }
        .select {
          color: white;
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          height: 98px;
          min-width: 150px;
          background-color: black;
          .text {
            font-size: 24px;
            @media (max-width: 600px) {
              font-size: 14px;
            }
          }
          svg {
            fill: white !important;
          }
        }
      }
      .navbar-left:hover .h-left {
        left: 0;
      }
      .navbar-right:hover .h-right {
        right: 0;
      }
      .hover-img {
        width: 440px;
        height: 184px;
        background-color: white;
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px;
        // padding: 20px 30px 20px 140px;
        padding: 20px 30px;
        position: absolute;

        top: 0;
        bottom: 0;
        margin: auto 0;
        border-radius: 4px;
        display: flex;
        justify-content: space-between;
        transition: all 0.5s;
        .hover-info {
          display: block;
          padding-bottom: 5px;
          color: #cdcdcd;
          text-transform: uppercase;
          font-weight: 400;
          font-size: 1em;
          line-height: 1.2;
          min-width: 120px;
          font-family: "Oswald", sans-serif;
          padding-left: 25px;
          span {
            border-bottom: 2px solid #ab2d2d;
            width: 100%;
            display: block;
            padding-bottom: 5px;
          }
          h3 {
            margin: 0;
            padding: 15px 0 10px;
            color: #333333 !important;
            font-weight: 300;
            font-size: 1.3em;
            line-height: 1.2;
            font-family: "Oswald", sans-serif;
          }
          p {
            font-size: 0.8em;
            line-height: 1.3em;
            color: #777777;
          }
        }
      }
      .h-left {
        left: -500px;
      }
      .h-right {
        right: -500px;
      }
    }
  }
  .carousel-photos {
    padding: 0 !important;
    .carousel {
      .carousel-inner {
        .carousel-item {
          .item-photo {
            // min-height: ;
            img {
              width: 100%;
              height: 100%;
            }
          }
        }
      }
      .carousel-indicators {
        width: 50px;
        margin: 0 auto;
        background-color: white;
        padding: 2px 5px;
        border-radius: 5px;
        margin-top: 50px;
        bottom: -20px;
        box-shadow: 0 -10px 15px -10px rgba(0, 0, 0, 0.7);
        li {
          height: 12px;
          width: 12px;
          border-radius: 50%;
          background-color: black;
        }
      }
    }
  }
  .profile-info {
    margin-top: 30px;
    display: flex;
    flex-direction: column;
    align-items: center;
    .info-phills {
      span {
        background-color: #ab2d2d;
        color: white;
        font-weight: bold;
        padding: 4px 8px;
        border-radius: 8px;
        margin: 0 3px;
      }
    }
    .info-available {
      padding: 25px 0;
      &__info {
        display: flex;
        background-color: #00ff00;
        flex-direction: column;
        justify-content: center;
        padding: 6px 15px;
        border-radius: 15px;
        align-items: center;
        p {
          text-align: center;
          margin: 0;
        }
      }
    }
    .info-detail {
      width: 650px;
      margin: 0 auto;
      max-width: 100%;
      table {
        max-width: 100%;
      }
      .llamada {
        display: flex;
        justify-content: center;
        a {
          margin: 0 15px;
        }
      }
    }
    .info-services {
      width: 650px;
      margin: 0 auto;
      max-width: 100%;
      &__content {
        .title {
          color: #ab2d2d;
          text-align: center;
        }
        .list-services {
          padding: 25px 5px;
          border-radius: 5px;
          span {
            padding: 4px 8px;
            margin: 5px;
            background-color: rgb(233, 233, 233) !important;
            border-radius: 3px;
            i {
              color: #ab2d2d;
            }
          }
        }
      }
    }
    .info-video {
      width: 650px;
      max-width: 100%;
      margin-top: 50px;
      margin-bottom: 50px;
      @media (max-width: 600px) {
        margin-top: 10px;
      }
      .video {
        max-width: 100%;
      }
    }
    .info-description {
      margin-top: 50px;
      max-width: 650px;
      .title {
        h3 {
          text-align: center;

          color: #ab2d2d;
          font-weight: 600;
        }
      }
      .description-content {
        text-align: center;
        .name {
          font-weight: 20px;
          font-weight: 600;
          margin-bottom: 5px;

          span {
            color: #ab2d2d;
          }
        }
        .whats {
          display: block;
          margin: 0 auto;
          font-size: 46px;
          i {
            color: green;
          }
        }
      }
    }
    .info-recommend {
      max-width: 600px;
      margin: 0 auto;
      margin-top: 50px;
      .recommend-content {
        .title {
          text-align: center;
          color: #ab2d2d;
          font-weight: 600;
        }
      }
    }
  }
}
.recommend-list {
  &__item {
    padding: 50px !important;
    @media (max-width: 600px) {
      padding: 25px !important;
    }
  }
}

.shake-text {
  animation: shake 1s cubic-bezier(0.36, 0.07, 0.19, 0.97) both infinite;
  transform: translate3d(0, 0, 0);
  @media (max-width: 600px) {
    animation: shake 1s cubic-bezier(0.36, 0.07, 0.19, 0.97) both infinite;
    transform: translate3d(0, 0, 0);
  }
}
@keyframes shake {
  10%,
  90% {
    transform: translate3d(-1px, 0, 0);
  }

  20%,
  80% {
    transform: translate3d(2px, 0, 0);
  }

  30%,
  50%,
  70% {
    transform: translate3d(-4px, 0, 0);
  }

  40%,
  60% {
    transform: translate3d(4px, 0, 0);
  }
}
.modal-custom {
  background-color: rgba(0, 0, 0, 0.6);
  // position: relative;
  .close-modal-c {
    border: none;
    background-color: black;
    color: white;
    font-weight: bold;
    font-size: 20px;
    position: absolute;
    width: 30px;
    height: 30px;
    right: 0;
    top: 0;
  }
  &-cont {
    .slide {
      .carousel-inner {
        padding: 75px 50px;
        .carousel-item {
          padding: 75px 50px;
        }
      }
    }
  }
}
.logo-cont {
  padding: 15px;
  text-align: center;
  a {
    img {
      height: 45px;
    }
  }
}
</style>