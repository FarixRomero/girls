<template>
  <div class="searchbar-container container-custom">
    <div class="searchbar-content">
      <div class="searchbar-content__ipt">
        <input type="text" placeholder="¿Qué buscas?" />
      </div>
      <div class="searchbar-content__ipt">
        <input type="text" placeholder="¿Donde?" />
      </div>
      <div class="searchbar-content__opt">
        <div class="searchbar-content__opt--select">
          <select name id>
            <option value>+ 0 km</option>
          </select>
        </div>
        <div class="searchbar-content__opt--btn">
          <button>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"
            >
              <path
                d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"
              />
            </svg>
            Buscar
          </button>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {};
</script>
<style lang="scss">
.searchbar-container {
  .searchbar-content {
    width: 80%;
    display: flex;
    justify-content: center;
    padding: 25px 0;
    margin: 0 auto;
    &__ipt {
      width: 35%;
      padding: 0 10px;
      input {
        width: 100%;
        padding: 7px 10px;
        border: 1px solid #c1c1c1;
        color: black;
        outline: 0;
      }
    }
    &__opt {
      width: 30%;
      display: flex;
      &--select {
        width: 50%;
        padding: 0 10px;
        select {
          width: 100%;
          padding: 7px 10px;
          text-align: center;
          border: 1px solid #c1c1c1;
          outline: 0;
        }
      }
      &--btn {
        width: 50%;
        padding: 0 10px;
        button {
          width: 100%;
          height: 100%;
          border: none;
          cursor: pointer;
          background-color: rgba(139, 0, 0, 0.7);
          color: white;
          border-radius: 5px;
          text-align: center;
          font-weight: bold;
          outline: 0px;
          svg {
            fill: white !important;
          }
        }
      }
    }
  }
}
</style>