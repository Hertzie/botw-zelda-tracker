<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header" style="text-align:center;">Estadísticas de juego</div>
          <div class="card-body">
            <div class="row row-space">
              <div
                class="col-md-3"
                style="margin-left:77px;"
                v-for="seccion in secciones"
                v-bind:key="seccion.id_seccion"
              >
                <grafica :seccion="seccion.nombre_seccion"></grafica>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["estadisticas", "secciones"],
  data() {
    return {
      seccionesFinal: []
    };
  },
  mounted() {
    console.log("Componente estadisticas");
    this.seccionesFinal = this.secciones.filter(s => s.id_seccion != 6);
    console.log("Secciones: ", this.seccionesFinal);
    console.log("Estadisticas: ", this.estadisticas);
  }
};
</script>
