function confirmacion(e){
    if(confirm("¿Seguro de eliminar este registro?")){
      return true;
    }else{
      e.preventDefault();
    }
  }
  let linkDelete = document.querySelectorAll(".icon-eliminara");
  for(var i = 0; i < linkDelete.length; i++){
    linkDelete[i].addEventListener('click', confirmacion);
  }
