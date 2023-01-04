function alertrep() {
    swal({
        title: 'Confirmacion',
        text: 'Estas comprando articulo con un costo de $precio',
        icon: "warning",
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
              placeholder: "Escribe la cantidad",
              type: "number",
            },
          },
      })

}

