<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header" style="text-align: center;">
            Medallas
            <strong>({{completadas}} medallas obtenidas de {{restantes}} - {{porcentaje}}%)</strong>
          </div>
          <div class="card-body">
            <div class="row row-space">
              <div
                class="form-check form-check-inline col-md-3"
                style="margin-left:77px;"
                v-for="medalla in medallas"
                :key="medalla.id_medalla"
              >
                <input
                  class="form-check-input"
                  type="checkbox"
                  :id="`inlineCheckbox{{medalla.id_medalla}}`"
                  :value="`option{{medalla.id_medalla}}`"
                  :checked="medalla.opc_obtenida == 1"
                  @change="onChangeMedalla(medalla)"
                />
                <label
                  class="form-check-label"
                  :for="
                                        `inlineCheckbox{{medalla.id_medalla}}`
                                    "
                >{{ medalla.nombre_medalla }}</label>
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
  props: ["medallas"],
  data() {
    return {
      completadas: 0,
      restantes: 0,
      porcentaje: 0.0
    };
  },
  mounted() {
    this.completadas = this.medallas.filter(m => m.opc_obtenida == 1).length;
    this.restantes = this.medallas.length;
    this.porcentaje =
      this.completadas == this.medallas.length
        ? 100.0
        : ((this.completadas / this.medallas.length) * 100).toFixed(2);
  },
  methods: {
    onChangeMedalla(medalla) {
      axios
        .post("http://127.0.0.1:8000/medalla", {
          id_medalla: medalla.id_medalla,
          opc_obtenida: medalla.opc_obtenida
        })
        .then(resp => {
          if (resp.data) {
            this.$toastr.s("Registro actualizado correctamente");
          } else {
            this.$toastr.e("Hubo un problema al actualizar el registro");
          }
        })
        .catch(err => console.log(err));
    }
  }
};
</script>
