import { getEstudaintes, getEstudainte } from "./API.js";

addEventListener("DOMContentLoaded", async () => {
  const tablaEstudiantes = document.querySelector("#tabla");
  const estudiantes = await getEstudaintes();
  console.log(estudiantes);
  estudiantes.forEach((element) => {
    tablaEstudiantes.innerHTML += `
    <tr class="cards">
      <th scope="row">${element.id}</th>
       <td>${element.nombre}</td>
       <td>${element.especialidad}</td>
       <td><img src="./images/${element.imagen}" alt="Camper"></td>
       <td><button type="button" class="btn btn-info" id="detalle">Notas</button></td>
    </tr>
    `;
  });
});
detalles();
function detalles() {
  const buton = document.querySelector(".btn");
  buton.addEventListener("click", async (e) => {
    console.log(e.target);
    const estudiante = await getEstudainte();
    const detalles = document.querySelector("#detalles");
    // Resto del código para manejar los detalles de los estudiantes
  });
}

//   <td>${element.edad}</td>
//   <td>${element.promedio}</td>
//   <td>${element.nivelCAmpus}</td>
//   <td>${element.nivelIngles}</td>

//   <td>${element.direccion}</td>
//   <td>${element.celular}</td>
//   <td>${element.ingles}</td>
//   <td>${element.Ser}</td>
//   <td>${element.Review}</td>
//   <td>${element.Skills}</td>
//   <td>${element.Asitencia}</td>
