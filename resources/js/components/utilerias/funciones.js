export function calcularPorcentaje(porcentaje, completadas, total) {
    return (porcentaje =
        completadas == total
            ? 100.0
            : ((completadas / total) * 100).toFixed(2));
}

export function calcularObtenidos(total, key) {
    return total.filter(e => e[key] == 1).length;
}
