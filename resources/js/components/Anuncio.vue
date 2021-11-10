<template>
  <div class="container-custom">
    <div class="anuncio-container">
      <div class="header-container">
        <div class="img">
          <img :src="urlLogo" alt />
        </div>
        <div class="text">
          <h2>
            <i class="far fa-smile-beam"></i> Crea un nuevo anuncio
          </h2>
          <p>Llena los datos del formulario para crear tu anuncio.</p>
        </div>
      </div>
      <div class="form-container">
        <form>
          <div class="form-section">
            <h3>Datos de ubicación</h3>
            <div class="form-content">
              <div class="form-cont">
                <label for>Departamento</label>
                <select name id>
                  <option value="arequipa">Arequipa</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-section">
            <h3>Datos de personales</h3>
            <div class="form-content">
              <div class="form-cont area">
                <label for>Descripción</label>
                <textarea name id rows="3"></textarea>
              </div>
              <div class="form-cont">
                <label for>Edad</label>
                <input type="text" />
              </div>
              <div class="form-cont">
                <label for>Estatura</label>
                <input type="text" />
              </div>
              <div class="form-cont">
                <label for>Medidas</label>
                <input type="text" />
              </div>
              <div class="form-cont">
                <label for>Ojos</label>
                <input type="text" />
              </div>
              <div class="form-cont">
                <label for>Cabello</label>
                <input type="text" />
              </div>
              <div class="form-cont">
                <label for>Nacionalidad</label>
                <input type="text" />
              </div>
              <div class="form-cont">
                <label for>Ocupación</label>
                <input type="text" />
              </div>
              <div class="form-cont">
                <label for>Bebida favorita</label>
                <input type="text" />
              </div>
              <div class="form-cont">
                <label for>Hobbies</label>
                <input type="text" />
              </div>
              <div class="form-cont">
                <label for>Idiomas</label>
                <input type="text" />
              </div>
            </div>
          </div>
          <div class="form-section">
            <h3>Disponibilidad</h3>
            <div class="form-content">
              <div class="form-cont">
                <label for>Horario</label>
                <input type="text" />
              </div>
              <div class="form-cont">
                <label for>Dias</label>
                <input type="text" />
              </div>
              <div class="form-cont">
                <label for>Tarifa</label>
                <input type="text" />
              </div>
            </div>
          </div>
          <div class="form-section">
            <h3>Servicios</h3>
            <div class="form-content">
              <div class="form-cont services">
                <label for>Servicios</label>
                <input @keyup.enter="addItem" type="text" v-model="service" />
                <button @click="addItem" type="button">Agregar</button>
                <ul v-if="services.length > 0">
                  <li v-for="(item, index) in services" :key="index">{{item}}</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="form-section">
            <h3>Imagenes</h3>
            <div class="form-content">
              <div class="form-cont">
                <label for>Añadir imagen</label>
                <div class="file-cont">
                  <div class="ipt-file">
                    <div>
                      <i class="fas fa-image"></i>
                    </div>
                    <input @change="createImage($event)" type="file" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-section">
            <h3>Videos</h3>
            <div class="form-content">
              <div class="form-cont">
                <label for>Añadir video</label>
                <div class="file-cont">
                  <div class="ipt-file">
                    <div>
                      <i class="fas fa-video"></i>
                    </div>
                    <input @change="createImage($event)" type="file" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-section">
            <h3>Advertencia</h3>
            <p>
              Para publicar un anuncio debes aceptar que el incumplimiento de determinadas Reglas de Publicación
              <b>—tales como aportar datos o fotos falsas, el uso de fotos de terceros sin autorización, o el uso de tu anuncio para cometer un delito—</b> implicará su eliminación y que el importe que hayas pagado sea retenido en concepto de gastos de tramitación de baja por incumplimiento.
            </p>
            <input type="checkbox" />
            <label for>Acepto los términos y condiciones</label>
          </div>
          <button @click="submitForm" type="button">Publicar anuncio</button>
        </form>
      </div>
    </div>
    <!-- <footer-component></footer-component> -->
  </div>
</template>
<script>
export default {
  data() {
    return {
      service: "",
      services: [],
    };
  },
  props: ["url_base"],
  methods: {
    addItem() {
      this.services.push(this.service);
      this.service = "";
    },
    submitForm() {
      console.log("enviado");
    },
    createImage(e) {
      var output = document.querySelector(".file-cont");
      let image = document.createElement("img");
      image.classList.add("img-style");
      image.style.height = "75px";
      image.style.width = "120px";
      image.style.marginLeft = "30px";
      image.src = URL.createObjectURL(e.target.files[0]);
      image.onload = function () {
        URL.revokeObjectURL(output.src); // free memory
      };
      output.appendChild(image);
    },
  },
  computed: {
    urlLogo() {
      return this.url_base + "/images/logoAQP.png";
    },
  },
};
</script>
<style lang="scss" scoped>
.container-custom {
  padding: 70px 0;
}
.anuncio-container {
  display: flex;
  flex-direction: column;
  width: 100%;
  .header-container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    width: 100%;
    .img {
      img {
        width: 350px;
        max-width: 100%;
      }
    }
    .text {
      margin-top: 30px;
      padding: 10px 30px;
      background-color: #ab2d2d;
      border-radius: 3px;
      width: 100%;
      h2 {
        color: white;
        font-weight: bold;
        font-size: 20px;
        margin: 0;
      }
      p {
        margin: 0;
        color: white;
        font-size: 16px;
      }
    }
  }
  .form-container {
    display: flex;
    flex-direction: column;
    padding: 35px 0;
    form {
      background-color: rgba(241, 241, 241, 0.8);
      padding: 25px;
      border-radius: 5px;
      .form-section {
        h3 {
          color: #ab2d2d;
          font-size: 18px;
          font-weight: bold;
        }
        .form-content {
          display: flex;
          flex-wrap: wrap;
          padding: 0px 0 35px 0;
          .area {
            width: 100%;
          }
          .form-cont {
            margin-right: 30px;
            padding: 5px;
            display: flex;
            flex-direction: column;
            position: relative;
            label {
              color: #232323;
              font-weight: 500;
            }
            input[type="text"] {
              border: 1px solid #d5d5d5;
              background: white;
              outline: 0px;
              border-radius: 3px;
              padding: 3px;
            }
            textarea {
              border: 1px solid #d5d5d5;
              background: white;
              outline: 0px;
              border-radius: 3px;
              padding: 3px;
              resize: none;
            }
            select {
              border: 1px solid #d5d5d5;
              background: white;
              outline: 0px;
              border-radius: 3px;
              padding: 3px;
              resize: none;
            }
            .file-cont {
              display: flex;
              flex-wrap: wrap;
              .ipt-file {
                position: relative;
                border: 1px solid #d5d5d5;
                max-width: 100px;
                cursor: pointer;
                div {
                  border-radius: 4px;
                  width: 100px;
                  height: 75px;
                  display: flex;
                  font-size: 60px;
                  display: flex;
                  justify-content: center;
                  align-items: center;
                  margin: 0 !important;
                  box-sizing: border-box;
                  color: #918e8e;
                }
                input {
                  position: absolute;
                  left: 0;
                  top: 0;
                  width: 100px;
                  height: 75px;
                  opacity: 0;
                }
              }
              .img-style {
                width: 120px;
                height: 75px;
                padding: 0 25px;
                margin-left: 25px;
              }
            }
            .img-style {
              width: 120px;
              height: 75px;
              padding: 0 25px;
              margin-left: 25px;
            }
          }
          .services {
            // display: flex;
            button {
              margin-top: 10px;
              background-color: #ab2d2d;
              border-radius: 4px;
              color: white;
              font-weight: bold;
              outline: 0;
              cursor: pointer;
              border: none;
              width: 120px;
              padding: 4px 15px;
            }
            ul {
              margin-top: 10px;
              li {
                // padding: 2px;
              }
            }
          }
        }
      }

      button {
        margin-top: 10px;
        background-color: #ab2d2d;
        border-radius: 4px;
        color: white;
        font-weight: bold;
        outline: 0;
        cursor: pointer;
        border: none;
        width: 220px;
        padding: 9px 25px;
        text-transform: uppercase;
      }
    }
  }
}
</style>