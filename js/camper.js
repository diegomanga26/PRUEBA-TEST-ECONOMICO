addEventListener('DOMContentLoaded',async(e)=>{
    let conexion = await fetch("http://localhost/SkylAb-158/PRUEBA-TEST-ECONOMICO/uploads/prueba");
    let data = await conexion.json();
    console.log(data);

});