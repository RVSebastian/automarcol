$("#marca").change(function () {
  var marca = document.getElementById("marca").value;
  $.ajax({
    type: "POST",
    url: "./components/stocklist.php",
    data: {
      marca: marca,
    },
    beforeSend: function () {
      $("#before").show(), $("#buscarmd").hide(),$("#error").hide(),$("respuesta").hide(),$("resp").hide();
    },
  })
    .done(function (res) {
      $("#resp").html(res), $("#before").hide(), $("#buscarmd").show(),$("#error").hide(),$("resp").show(),$("respuesta").show();
    })
    .fail(function () {
      $("#error").show();
    });
});


// reparar esto
$("#buscar").change(function () {
  var marca = document.getElementById("marca").value;
  var buscador = document.getElementById("buscar").value;
  console.log(buscador);
  if (buscador.lenght > 4) {
    $.ajax({
      type: "POST",
      url: "./components/stocklist.php",
      data: {
        marca: marca,
        buscador: buscador,
      },
      beforeSend: function () {
        $("#before").hide(), $("#buscarmd").hide(),$("#error").hide(),$("resp").hide();
      },
    })
      .done(function (res) {
        $("#resp").html(res);
      })
      .fail(function () {
        $("#error").show();
      });
  }

  
});
