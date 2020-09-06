<template>
  <div class="layout page view-center">
    <form class="ui form segments raised w60">
      <div class="ui segment title">
        <div class="one fields">
          <div
            class="sixteen wide field center"
          >TORRES ({{encontradas}} torres descubiertas de {{totales}} - {{porcentaje}}%)</div>
        </div>
      </div>
      <div class="ui segment">
        <div class="ui grid">
          <div v-for="torre in torres" v-bind:key="torre.id_torre" class="four wide column">
            <div class="ui checkbox">
              <input
                type="checkbox"
                :checked="torre.opc_descubierta == 1"
                @change="onTorreChange(torre)"
                v-model="torre.opc_descubierta"
              />
              <label>
                <strong>{{torre.nombre_torre}}</strong>
              </label>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
import { calcularPorcentaje } from "./utilerias/funciones";
export default {
  props: ["torres"],
  data() {
    return {
      encontradas: 0,
      totales: 0,
      porcentaje: 0.0
    };
  },
  mounted() {
    console.log(this.torres);
    this.encontradas = this.torres.filter(t => t.opc_descubierta == 1).length;
    this.totales = this.torres.length;
    this.porcentaje = calcularPorcentaje(
      this.porcentaje,
      this.encontradas,
      this.torres.length
    );
  },
  methods: {
    onTorreChange(torre) {
      axios
        .post("http://127.0.0.1:8000/torre", {
          id_torre: torre.id_torre,
          opc_descubierta: torre.opc_descubierta ? 1 : 0
        })
        .then(resp => {
          if (resp) {
            this.$toastr.s("Registro actualizado correctamente");
            torre.opc_descubierta ? this.encontradas++ : this.encontradas--;
            this.porcentaje = calcularPorcentaje(
              this.porcentaje,
              this.encontradas,
              this.torres.length
            );
          } else {
            this.$toastr.e("Hubo un problema al actualizar el registro");
          }
        })
        .catch(err => {
          console.log(err);
        });
    }
  }
};
</script>