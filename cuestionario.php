<?php include('form_process1.php'); ?>
<?php include "db.php"; ?>
<?php createRows(); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <title>Cuestionario</title>
</head>

<body>
    <!--     MODAL TRIGGER -->
    <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Complete la Pre-Aprobacion</button>

    <!--     MODAL -->
<!--Para trabajar con el servidor-->
<!--<form id="contact" action="<?= htmlspecialchars($_SERVER[" PHP_SELF "]) ?>" method="post">-->
<!--Para trabajar sevidor Local:-->
    <form action="cuestionario.php" method="post">
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cuestionario</h5>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="dinero">&#191;Cuanto dinero generas en tu negocio?</label>
                        <select id="dinero" value="<?= $dinero ?>"class="form-control">
                                <option>Es un Start Up</option>
                                <option>Menos de $5,000 / mensuales</option>
                                <option>Entre $5k - $10k mensuales</option>
                                <option>Entre $10k - $30k mensuales</option>
                                <option>Entre $30k - $50k mensuales</option>
                                <option>Entre $50k - $100k mensuales</option>
                                <option>Entre $100k (+) mensuales</option>
                                
                            </select>
                        <label for="tiempo">&#191;Cuanto tiempo llevas con tu negocio?</label>
                        <select id="tiempo" value="<?= $tiempo ?>"class="form-control">
                                <option>Acabo de Comprarlo</option>
                                <option>Menos de 6 meses</option>
                                <option>6-12 meses</option>
                                <option>1+ a&ntilde;os</option>
                             </select>
                        <label for="credito">&#191;En cuanto esta tu Credito?</label>
                        <select id="credito" value="<?= $credito ?>" class="form-control">
                                <option>500 o menos</option>
                                <option>500 - 649</option>
                                <option>650 - 679</option>
                                <option>680 - 719</option>
                                <option>720+</option>
                            </select>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="nombre">Nombre del Due&#241;o</label>
                                <input type="text" id="nombre" value="<?= $nombre ?>" class="form-control form-control-md" placeholder="Nombre">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="apellido">*</label>
                                <input type="text" id="apellido" value="<?= $apellido ?>" class="form-control form-control-md" placeholder="Apellido">
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="email">Email</label>
                                <input type="email" id="email" value="<?= $email ?>" class="form-control form-control-md" placeholder="Entrar email" required>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="telefono">Telefono</label>
                                <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" id="telefono" value="<?= $telefono ?>" class="form-control form-control-md" placeholder="Telefono" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="compania">Nombre de la Compa&#241;ia</label>
                            <input type="text" id="compania" value="<?= $compania ?>" class="form-control form-control-md" placeholder="Nombre de la compa&#241;ia">
                        </div>
                        <div class="form-group">
                            <label for="estado">&#191;En que estado esta tu negocio?</label>
                            <select name="estado" id="estado" value="<?= $estado ?>" class="form-control">
                <option value="" selected="selected">Selecciona un estado</option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District Of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="PR">Puerto Rico</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
            </select>

                        </div>
                        <!-- div del form-group-->
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" rows="3" value="<?= $message ?>" class="form-control"></textarea>
                        </div>

                    </div>
                    <!--modal body-->
                    <div class="modal-footer">
                        <button class="btn btn-success" data-dismiss="modal" type="submit" name="submit" >Enviar Pre-Aprobaci&#243;n</button>
                    </div>
                </div>
                
            </div>
        </div>
    </div><!--     modal class div-->
        <br><br>
    </form>



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

</body>

</html>
