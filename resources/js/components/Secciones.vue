<template>
  <ul class="navbar-nav mr-auto" v-if="autorizado == 1">
    <div v-for="seccion in seccionesOrdenadas" v-bind:key="seccion.id_seccion">
      <ul class="navbar-nav ml-auto" v-if="seccion.id_seccion == 6">
        <li class="nav-item drodown">
          <a
            href="#"
            class="nav-link dropdown-toggle"
            role="button"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
            v-pre
            id="navbarCompendium"
          >
            <strong>Compendium</strong>
            <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarCompendium">
            <a
              :href="subseccion.ruta"
              class="dropdown-item hover"
              v-for="subseccion in seccion.subSecciones"
              v-bind:key="subseccion.id_seccion"
            >{{ subseccion.nombre_seccion }}</a>
          </div>
        </li>
      </ul>

      <a :href="seccion.ruta" class="nav-link" v-if="seccion.id_seccion != 6">
        <strong>{{ seccion.nombre_seccion }}</strong>
      </a>
    </div>
  </ul>
</template>

<style>
.navbar .dropdown-menu-right {
  right: 0 !important;
  left: auto !important;
}
</style>

<script>
export default {
  props: ["secciones", "autorizado"],
  data() {
    return {
      seccionesOrdenadas: []
    };
  },
  mounted() {
    const subSeccionesIds = [9, 12, 13, 14, 15];
    const subSecciones = this.secciones.filter(s =>
      subSeccionesIds.includes(s.id_seccion)
    );
    const secciones = this.secciones.filter(
      s => !subSeccionesIds.includes(s.id_seccion)
    );
    if (secciones.find(s => s.id_seccion == 6))
      secciones.find(s => s.id_seccion == 6).subSecciones = [...subSecciones];
    this.seccionesOrdenadas = secciones;
  }
};
</script>
