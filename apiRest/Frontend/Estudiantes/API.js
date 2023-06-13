const url =
  "http://localhost/Ejercicios-PHP/apiRest/Backend/Controllers/campers.php?";

export const getEstudaintes = async () => {
  try {
    const result = await fetch(url + `op=GetAll`);
    const datosUsuarios = await result.json();
    return datosUsuarios;
  } catch (error) {
    console.log(error);
  }
};

export const getEstudainte = async (id) => {
  try {
    const result = await fetch(url + `op=GetId=id`);
    const datosUsuarios = await result.json();
    return datosUsuarios;
  } catch (error) {
    console.log(error);
  }
};
