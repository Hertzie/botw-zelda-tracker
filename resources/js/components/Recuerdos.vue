<template>
  <div class="layout page view-center">
    <form class="ui form segments raised w60">
      <div class="ui segment title">
        <div class="one fields">
          <div
            class="sixteen wide field center"
          >RECUERDOS {{obtenidos}} de {{recuerdos.length}} recuerdos encontrados ({{porcentaje}}%)</div>
        </div>
      </div>
      <div class="ui segment">
        <div class="ui grid">
          <div
            v-for="recuerdo in recuerdos"
            v-bind:key="recuerdo.id_recuerdo"
            class="four wide column"
          >
            <div class="ui checkbox">
              <input
                type="checkbox"
                :checked="recuerdo.opc_encontrado == 1"
                v-model="recuerdo.opc_encontrado"
                @change="onRecuerdoChange(recuerdo)"
              />
              <label>
                <strong>{{recuerdo.nombre_recuerdo}}</strong>
              </label>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
import { calcularPorcentaje, calcularObtenidos } from "./utilerias/funciones";
export default {
  props: ["recuerdos"],
  data() {
    return {
      obtenidos: 0,
      porcentaje: 0.0
    };
  },
  mounted() {
    console.log("Recuerdos: ", this.recuerdos);
    this.calcularTotales();
  },
  methods: {
    onRecuerdoChange(recuerdo) {
      console.log(recuerdo.opc_encontrado);
      axios
        .put("http://127.0.0.1:8000/recuerdo", {
          id_recuerdo: recuerdo.id_recuerdo,
          opc_encontrado: recuerdo.opc_encontrado ? 1 : 0
        })
        .then(resp => {
          if (resp) {
            this.$toastr.s("Recuerdo actualizado correctamente.");
            this.calcularTotales();
          } else {
            this.$toastr.e("Hubo un problema al actualizar el registro.");
            recuerdo.opc_encontrado = recuerdo.opc_encontrado == 1 ? 0 : 1;
            this.calcularTotales();
          }
        })
        .catch(err => console.log(err));
    },
    calcularTotales() {
      this.obtenidos = calcularObtenidos(this.recuerdos, "opc_encontrado");
      this.porcentaje = calcularPorcentaje(
        this.porcentaje,
        this.obtenidos,
        this.recuerdos.length
      );
    }
  }
};
</script>