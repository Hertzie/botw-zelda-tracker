<template>
  <div>
    <table class="ui table celled azul">
      <thead>
        <tr style="text-align:center;">
          <td
            v-for="header in headers"
            v-bind:key="header.id_header"
            :width="header.width"
          >{{header.nombre}}</td>
        </tr>
      </thead>
      <tbody>
        <tr
          v-for="registro in datos"
          v-bind:key="registro.id_arco_flecha"
          style="text-align:center;"
        >
          <td>{{registro.id_arco_flecha}}</td>
          <td>{{registro.opc_tipo == 1 ? 'Arco' : 'Flecha'}}</td>
          <td>{{registro.nombre_arco_flecha}}</td>
          <td>
            <a class="ui tiny green label" v-if="registro.opc_obtenido == 1">Obtenido</a>
            <a class="ui tiny orange label" v-if="registro.opc_obtenido == 0">No obtenido</a>
          </td>
          <td>
            <div class="ui checkbox">
              <input
                type="checkbox"
                :checked="registro.opc_obtenido == 1"
                v-model="registro.opc_obtenido"
                @change="onRegistroChange(registro)"
              />
              <label></label>
            </div>
          </td>
        </tr>
      </tbody>
      <tfoot>
        <table width="100%" class="ui table celled azul paginated">
          <tr>
            <td width="20%" align="center" style="padding:2px;border:0px;">
              <a class="paginated-icon">
                <i class="big angle double left icon"></i>
              </a>
            </td>
          </tr>
        </table>
      </tfoot>
    </table>
  </div>
</template>

<script>
export default {
  props: ["datos", "headers"],
  mounted() {},
  data() {
    return {
      filtros: {
        cantidadRegistros: 10
      }
    };
  },
  methods: {
    onRegistroChange(registro) {
      axios
        .put("http://127.0.0.1:8000/arco_flecha", {
          id_arco_flecha: registro.id_arco_flecha,
          opc_obtenido: registro.opc_obtenido ? 1 : 0
        })
        .then(resp => {
          if (resp) {
            this.$toastr.s("Registro actualizado correctamente");
          } else {
            this.$toastr.e("Hubo un problema al actualizar el registro");
            registro.opc_obtenido = 0;
          }
        })
        .catch(err => console.log(err));
    }
  }
};
</script>