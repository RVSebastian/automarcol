<?php include'./components/header.php';?>
<?php
    if (isset($data)) {
        unset($data);
    }
    $data = array(
        'initialMonth' => '',
        'finalMonth' => '',
        'initialYear' => '',
        'finalYear' => '',
        'initialDay' => '',
        'finalDay' => '',
    );
    $data_string = json_encode($data);
    $ch = curl_init('https://apiautomarcol.up.railway.app/api/ford/vta');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($data_string))
    );
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    $result=json_decode(curl_exec($ch),true);
?>
<div class="home-content">
    <div class="basis-11/12 m-4 mt-0">
        <div class="bg-white p-4 shadow">
            <form>
                <div class="grid md:grid-cols-3 p-2 md:gap-6">
                    <div class="relative z-0 w-full mb-6 group">
                        <select name="floating_phone" id="floating_phone"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                            <option selected disabled>Tipo de documento</option>
                            <option value="FVT">FVT</option>
                        </select>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="email" name="floating_email" id="floating_email"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="floating_email"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nombre
                            del Tercero</label>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">

                            <div class="relative max-w-sm">
                                <input datepicker type="date"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder="Select date">
                            </div>

                        </div>
                        <div class="relative z-0 w-full mb-6 group">

                            <div class="relative max-w-sm">
                                <input datepicker type="date"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder="Select date">
                            </div>

                        </div>
                    </div>
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Buscar</button>
            </form>

        </div>
    </div>
    <div class='basis-11/12 m-4 mt-1'>
        <div class="relative overflow-x-auto bg-white shadow p-4">
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
                       var_dump($result);
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