function alertrep(precio, descripcion) {
    swal({
        title: 'Confirmacion',
        text: 'Estas comprando '+descripcion+' con un costo de $' + precio,
        icon: "alert",
        buttons: {
          cancel: "Cancelar",
          catch: {
            text: "Comprar",
            value: "true",
          },
        },

        content: {
            element: "input",
            attributes: {
              id: "cantidad",
              placeholder: "Escribe la cantidad",
              type: "number",
            },
          },
      })

}

function errorre() {
  swal({
      title: 'Error',
      text: 'Estas comprando articulo con un costo de $precio',
      icon: "error",
      image: "./image/re1.webp",
      buttons: {
        cancel: "Cancelar",
        catch: {
          text: "Comprar",
          value: "true",
        },
      },

      content: {
          element: "input",
          attributes: {
            id: "cantidad",
            placeholder: "Escribe la cantidad",
            type: "number",
          },
        },
    })

}


