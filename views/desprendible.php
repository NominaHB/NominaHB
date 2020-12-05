
<html>

<head>
    <title>Comprobante</title>
</head>
<style>
    .imagen {
        margin-left: 50px;
        height: 18%;
        width: 15%;
    }

    .info {
        margin-top: -110px;
        text-align: right;
    }
</style>

<body>

    <a href="crearPdf.php" class="btn btn-outline-danger">PDF</a>
    <div class="container" style="background-color: white; width: 60%; margin-top: 5%;">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body"  style=" margin-top: 3%; border: 1px solid black; ">
                        <div style="margin-top: 1%;">
                            <h3 align="center">Comprobante de Nómina</h3>
                        </div>
                        <div>
                            <img class="imagen" src="../img/L-nomina.png" alt="">
                        </div>
                        <div class="info">
                            <p><strong>Nombre:    </strong><?php echo $dataempleado[0]->NOMBRES ?> <?php echo $dataempleado[0]->APELLIDOS ?></p>
                            <p><strong> Identificación:    </strong> <?php echo $dataempleado[0]->ID_EMPLEADO ?></p>
                            <p><strong> Cargo:    </strong><?php echo  $datacargo[0]->NOMBRE_CARGO ?> </p>
                            <p><strong>Salario básico:    </strong><?php echo $dataempleado[0]->SALARIO ?> </p>
                        </div>
                        <table align="center" style="width: 100%; border: 1px solid black; border-radius: 5%;" >
                            <thead >
                                <tr style="background-color: #DCDEDE;   border: 1px solid black;"  align="center">
                                    <th style="width: 40%;" >Concepto</th>
                                    <th style="width: 10%;">Cantidad</th>
                                    <th style="width: 25%;">Devengo</th>
                                    <th style="width: 25%;">Deducido</th>
                                </tr>
                                <tr>
                                    <td>Salario Basico</td>
                                    <td align="right">30</td>
                                    <td align="right"><?php echo '$'.number_format($salarioBasico) ?></td>
                                </tr>
                                <?php
                                foreach ($datatiponovedad as $DtTiponovedad) {
                                ?>

                                    <?php
                                    if ($DtTiponovedad->NOMBRE_TN == 'Salud' || $DtTiponovedad->NOMBRE_TN  == 'Pension') {
                                    ?>
                                    
                                        <tr>
                                            <td><?php echo $DtTiponovedad->NOMBRE_TN ?></td>
                                            <td align="right"><?php echo $DtTiponovedad->PORCENTAJE.'%' ?></td>
                                            <td ></td>
                                            <td align="right">
                                                <span>
                                                    <?php
                                                    $number = ($salarioBasico * $DtTiponovedad->PORCENTAJE);
                                                    echo '$'.number_format($number)
                                                    ?>
                                                </span>
                                            </td>
                                        </tr>
                                        
                                    <?php
                                    }
                                    ?>
                                <?php
                                }
                                ?>
                                <?php
                                foreach ($datanovedad as $Dtnovedad) {
                                ?>
                                    <tr >
                                        
                                        <td ><?php echo $Dtnovedad->nombre_tn ?></td>

                                        <td align="right"><?php echo $Dtnovedad->valor ?></td>
                                        <td align="right">
                                            <?php
                                            if ($Dtnovedad->nombre_tn == 'Hora Dominical' || $Dtnovedad->nombre_tn == 'Hora Extra') {
                                            ?>
                                                <span>
                                                    <?php
                                                    $number = ($valorHora * $Dtnovedad->porcentaje) * $Dtnovedad->valor;
                                                    echo number_format($number)
                                                    ?>
                                                </span>
                                            <?php
                                            } elseif ($Dtnovedad->nombre_tn == 'Vacaciones') {
                                            ?>
                                                <span>
                                                    <?php
                                                    $number = ($valorHora * 8) * $Dtnovedad->valor;
                                                    echo  number_format($number)
                                                    ?>
                                                </span>


                                                <span> </span>
                                            <?php
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>

                                <tr >
                                    <td></td>
                                    <td></td>
                                    <td style="background-color: #f2f2f2;  border: 1px solid white;" align="center" > <strong>Total Devengo</strong> </td>
                                    <td align="right"><?php echo '$'.number_format($valorTotalNovedad) ?></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td style="background-color: #f2f2f2;  border: 1px solid white;" align="center"><strong> Total Deducido</strong></td>
                                    <td align="right">$...</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td style="background-color: #f2f2f2; border: 1px solid white;" align="center"> <strong>Total</strong>  </td>
                                    <td align="right"><?php echo '$'.number_format($resultadoTotal) ?></td>
                                </tr>

                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>