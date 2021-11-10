<template>
  <header class="custom-header">
    <nav>
      <img :src="urlLogo" alt />
      <div class="options">
        <div class="anuncio-nav">
          <button @click="goto">
            <span>Publicar</span> Anuncio
          </button>
        </div>
        <div class="menu-nav">
          <button class="menu-btn" @click="openCombo">
            <div class="menu-btn__burger"></div>
          </button>
          <transition name="slide">
            <div v-if="menuOpen" class="dropdown">
              <ul>
                <li>
                  <a href>Volver a la web</a>
                </li>
                <!-- <li>
                  <a href>Panel de control</a>
                </li>-->
                <li>
                  <a href>Textos legales</a>
                </li>
                <!-- <li>
                  <a href>Cerrar Sesión</a>
                </li>-->
              </ul>
            </div>
          </transition>
        </div>
      </div>
    </nav>
  </header>
</template>
<script>
export default {
  props: ["url_base"],
  name: "header",
  data() {
    return {
      menuOpen: false,
    };
  },
  methods: {
    openCombo() {
      const menuBtn = document.querySelector(".menu-btn");

      if (!this.menuOpen) {
        menuBtn.classList.add("open");
        this.menuOpen = true;
      } else {
        menuBtn.classList.remove("open");
        this.menuOpen = false;
      }
    },
    goto() {
      window.location.href = `${this.url_base}/anuncio`;
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
.menu-btn {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 80px;
  height: 80px;
  cursor: pointer;
  transition: all 0.5s ease-in-out;
  /* border: 3px solid #fff; */
}
.menu-btn__burger {
  width: 50px;
  height: 6px;
  background: #ab2d2d;
  border-radius: 5px;
  // box-shadow: 0 2px 5px rgba(255, 101, 47, 0.2);
  transition: all 0.5s ease-in-out;
}
.menu-btn__burger::before,
.menu-btn__burger::after {
  content: "";
  position: absolute;
  width: 50px;
  height: 6px;
  background: #ab2d2d;
  border-radius: 5px;
  left: 0;
  right: 0;
  margin: auto;
  // box-shadow: 0 2px 5px rgba(255, 101, 47, 0.2);
  transition: all 0.5s ease-in-out;
}
.menu-btn__burger::before {
  transform: translateY(-16px);
}
.menu-btn__burger::after {
  transform: translateY(16px);
}
/* ANIMATION */
.menu-btn.open .menu-btn__burger {
  transform: translateX(-50px);
  background: transparent;
  box-shadow: none;
}
.menu-btn.open .menu-btn__burger::before {
  transform: rotate(45deg) translate(35px, -35px);
}
.menu-btn.open .menu-btn__burger::after {
  transform: rotate(-45deg) translate(35px, 35px);
}
</style>