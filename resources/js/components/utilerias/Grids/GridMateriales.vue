<template>
  <div>
    <h4 style="text-align:center;">
      <strong>TOTALES {{obtenidos}} de {{totales.length}} materiales obtenidos ({{porcentaje}}%)</strong>
    </h4>
    <table class="ui table celled azul">
      <thead>
        <tr style="text-align:center;">
          <td>ID</td>
          <td>Material</td>
          <td>Estatus</td>
          <td>Obtenido en</td>
          <td></td>
        </tr>
      </thead>
      <tbody>
        <tr
          v-for="material in materiales"
          v-bind:key="material.id_material"
          style="text-align:center;"
        >
          <td>{{material.id_material}}</td>
          <td>{{material.nombre_material}}</td>
          <td>
            <a class="ui tiny green label" v-if="material.opc_obtenido == 1">Obtenido</a>
            <a class="ui tiny orange label" v-if="material.opc_obtenido == 0">No obtenido</a>
          </td>
          <td>
            <strong>{{material.updated_at && material.opc_obtenido != 0 ? material.updated_at : 'Sin registro'}}</strong>
          </td>
          <td>
            <div class="ui checkbox">
              <input
                type="checkbox"
                :checked="material.opc_obtenido == 1"
                v-model="material.opc_obtenido"
                @change="onRegistroChange(material)"
              />
              <label></label>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import { calcularPorcentaje, calcularObtenidos } from "../funciones";
export default {
  props: ["materiales", "totales"],
  data() {
    return {
      porcentaje: 0.0,
      obtenidos: 0
    };
  },
  mounted() {
    this.calcularTotales();
  },
  methods: {
    calcularTotales() {
      this.obtenidos = calcularObtenidos(this.totales, "opc_obtenido");
      this.porcentaje = calcularPorcentaje(
        this.porcentaje,
        this.obtenidos,
        this.totales.length
      );
    },
    onRegistroChange(material) {
      axios
        .put("http://127.0.0.1:8000/material", {
          id_material: material.id_material,
          opc_obtenido: material.opc_obtenido
        })
        .then(resp => {
          if (resp) {
            this.$toastr.s("Registro actualizado correctamente");
            let actualizado = this.totales.find(
              m => m.id_material == material.id_material
            );
            actualizado.opc_obtenido = material.opc_obtenido;
            this.calcularTotales();
          } else {
            this.$toastr.e("Hubo un error al actualizar el registro");
            material.opc_obtenido = 0;
          }
        })
        .catch(err => console.log(err));
    }
  }
};
</script>