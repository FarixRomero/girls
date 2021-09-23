<template>
  <header class="custom-header">
    <nav>
      <div class="anuncio-nav">
        <button @click="goto">Publicar anuncio</button>
      </div>
      <div class="menu-nav">
        <button @click="showCombo = !showCombo">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z" />
          </svg>
        </button>
        <transition name="slide">
          <div v-if="showCombo" class="dropdown">
            <ul>
              <li>
                <a href>Volver a la web</a>
              </li>
              <li>
                <a href>Panel de control</a>
              </li>
              <li>
                <a href>Textos legales</a>
              </li>
              <li>
                <a href>Cerrar Sesión</a>
              </li>
            </ul>
          </div>
        </transition>
      </div>
    </nav>
  </header>
</template>
<script>
export default {
  name:'header',
  data() {
    return {
      showCombo: false,
    };
  },
  methods: {
    goto() {
      this.$router.push();
    },
  },
};
</script>