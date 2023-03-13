<?php include'./components/header.php';?>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript" src="datatables/datatables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/chart.min.js"
    integrity="sha512-v3ygConQmvH0QehvQa6gSvTE2VdBZ6wkLOlmK7Mcy2mZ0ZF9saNbbk19QeaoTHdWIEiTlWmrwAL4hS8ElnGFbA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<?php
    if (isset($data)) {
        unset($data);
    }
    $data = array(
        'initialMonth' => '1',
        'finalMonth' => '12',
        'initialYear' => '2023',
        'finalYear' => '2023',
        'initialDay' => '1',
        'finalDay' => '31',
    );
    $marcas = array(
        "ford", "bajaj", "foton", "fca", "peugeot"
    );
    $data_string = json_encode($data);
    for ($i = 0; $i <= 4; $i++) {
    $ch = curl_init('https://apiautomarcol.up.railway.app/api/'.$marcas[$i].'/vta');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($data_string))
    );
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    $buscador=json_decode(curl_exec($ch),true);
    if ($i != 0) {
        $almacenador=array_merge($almacenador,$buscador);
    }else{
        $almacenador=$buscador;
    }
    $result =  $almacenador;
    }

    $marcas = array('FVN','FVF','FVNB','FVNP','FVNM');
    $mes = date("m");
    $i=0;
    $total = 0;
    $cantidad=0;
    $total_tipo1 = array(
        'FVN' => array(),
        'FVF' => array(),
        'FVNB' => array(),
        'FVNP' => array(),
        'FVNM' => array(),
    );    
    foreach ($marcas as $marca) {
        for($recorrido=0; $recorrido <= $mes; $recorrido++){
            $tipo = $marcas[$recorrido];
            foreach ($result as $documento) {
                if (strpos($documento['Factura'], $tipo) !== false && substr($documento['FechaFactura'], 5, 2) <= $mes) {
                    $total = $total + floatval(preg_replace("/[^0-9]/", "", $documento['ventatotal']));
                }
            }
            array_push($total_tipo1[$tipo], $total);
            $total_tipo1 = json_encode($total_tipo1, true);
            echo 
            '
            <input type="hidden" name="datacontrol" value='.$total_tipo1.'></input>
            ';
        }
    }
?>
<div class="home-content ">
    <div class="basis-11/12 m-4 mt-1 p-4">
        <div class="flex flex-wrap items-center mx-auto">
            <div class="md:basis-9/12 bg-white shadow p-4">
                <canvas id="myChart" class="w-fill"></canvas>
            </div>
            <div class="basis-3/12 mx-2 p-4" style="max-width: 22rem !important;">
                <canvas id="myChart2" class="bg-white shadow m-2 p-4 w-fill h-fill"></canvas>
                <canvas id="myChart3" class="bg-white shadow m-2 p-4 w-fill h-fill"></canvas>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
        const ctx = document.getElementById('myChart');
        const ctx2 = document.getElementById('myChart2');
        const ctx3 = document.getElementById('myChart3');
        const inputs = document.querySelectorAll('input[name*="datacontrol"]');
        const valores = [];
        inputs.forEach((input) => {
            const valor = input.value;
            valores.push(JSON.parse(valor));
        });

        console.log(valores);

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Junio', 'Julio', 'Agosto', 'Septiembre',
                    'Octubre', 'Noviembre', 'Diciembre'
                ],
                datasets: [{
                    label: 'FORD NUEVOS',
                    data: valores[0],
                    borderWidth: 3
                }, ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Venta de Nuevos en el Año'
                    }
                }
            }
        });
        new Chart(ctx2, {
            type: 'doughnut',
            data: {
                labels: ['Ford', 'Foton', 'Bajaj', 'Peugeot', 'FJDR'],
                datasets: [{
                    label: 'Venta de Nuevos',
                    data: valores,
                    borderWidth: 3
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Cantidad Vendida en el Año'
                    }
                }
            }
        });
        new Chart(ctx3, {
            type: 'doughnut',
            data: {
                labels: ['Ford', 'Foton', 'Bajaj', 'Peugeot', 'FJDR'],
                datasets: [{
                    label: 'Venta de Nuevos',
                    data: valores,
                    borderWidth: 3
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Cantidad Vendida en el Año'
                    }
                }
            }
        });
        </script>
    </div>
    <div class='basis-11/12 m-4 mt-1' style="height: 60rem">
        <div class="relative overflow-x-auto bg-white shadow p-4 h-5/6">
            <table class="w-full text-xs text-left text-gray-500">
                <thead class="text-xs text-center uppercase bg-gray-100 text-gray-900">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Factura
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Fecha
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Valor Total
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Marca
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Compra
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Clase
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Color
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Placa
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Vin
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Asesor
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Cliente
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Correo Cliente
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Telefono
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Direccion
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                       $ventatotal = 0;
                       foreach($result as $row) { 
                    ?>
                    <tr class="border-b text-slate-900  hover:bg-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-center">
                            <?php echo $row['Factura']; ?>
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-center">
                            <?php echo $row['FechaFactura'];  ?>
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-center">
                            <?php 
                            echo $row['ventatotal'];
                            $ventatotal = $ventatotal + floatval(preg_replace("/[^0-9]/", "", $row['ventatotal']));
                            ?>
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-center">
                            <?php echo $row['Marca']; ?>
                        </th>
                        <td class="px-6 py-4">
                            <?php echo $row['Modelo']; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['clase']; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['ColorPintura']; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['Placa']; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['Vin']; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['NombreAsesorComercial']; ?>
                        </td>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            <?php echo $row['Cliente']; ?>
                        </th>
                        <td class="px-6 py-4">
                            <?php echo $row['Email']; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['Telefono']; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['Direccion']; ?>
                        </td>
                    </tr>

                    <?php } ?>
                </tbody>
                <tfoot class=" bg-gray-100">
                    <tr class="font-semibold text-gray-900">
                        <th scope="row" class="px-6 py-3 text-base">Total</th>
                        <td class="px-6 py-3"></td>
                        <td class="px-6 py-3">$<?php    echo number_format($ventatotal); ?></td>
                        <td class="px-6 py-3"></td>
                        <td class="px-6 py-3"></td>
                        <td class="px-6 py-3"></td>
                        <td class="px-6 py-3"></td>
                        <td class="px-6 py-3"></td>
                        <td class="px-6 py-3"></td>
                        <td class="px-6 py-3"></td>
                        <td class="px-6 py-3"></td>
                        <td class="px-6 py-3"></td>
                        <td class="px-6 py-3"></td>
                        <td class="px-6 py-3"></td>
                    </tr>
                </tfoot>

            </table>
        </div>
    </div>
</div>

<?php include'./components/footer.php';?>