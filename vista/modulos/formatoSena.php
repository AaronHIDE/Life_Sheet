
<div class="row col-md-3 offset-md-1">
    <a href="principal">
        <button class="button">
            <div class="button-box">
                <span class="button-elem">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46 40">
                        <path
                            d="M46 20.038c0-.7-.3-1.5-.8-2.1l-16-17c-1.1-1-3.2-1.4-4.4-.3-1.2 1.1-1.2 3.3 0 4.4l11.3 11.9H3c-1.7 0-3 1.3-3 3s1.3 3 3 3h33.1l-11.3 11.9c-1 1-1.2 3.3 0 4.4 1.2 1.1 3.3.8 4.4-.3l16-17c.5-.5.8-1.1.8-1.9z">
                        </path>
                    </svg>
                </span>
                <span class="button-elem">
                    <svg viewBox="0 0 46 40">
                        <path
                            d="M46 20.038c0-.7-.3-1.5-.8-2.1l-16-17c-1.1-1-3.2-1.4-4.4-.3-1.2 1.1-1.2 3.3 0 4.4l11.3 11.9H3c-1.7 0-3 1.3-3 3s1.3 3 3 3h33.1l-11.3 11.9c-1 1-1.2 3.3 0 4.4 1.2 1.1 3.3.8 4.4-.3l16-17c.5-.5.8-1.1.8-1.9z">
                        </path>
                    </svg>
                </span>
            </div>
        </button>
    </a>
</div>

<br><br>

<div class="container" id="aggFormatoSena">
    <div class="row">
        <div class="col-md-11">

            <div class="section-content">
                <table class="data-table">
                    <tr>
                        <th colspan="10">
                            <div class="title h4">HOJA DE VIDA APRENDICES EN PROGRAMAS DE FORMACIÓN TITULADA</div>
                            <h6>F04-9124-002/ 06-10</h6>
                            <h6>Ejecución de la Formación Profesional</h6>
                            <h6>Desarrollo Curricular</h6>
                        </th>
                        <td>
                            <center>
                                <img src="vista/imagenes/sena.png" alt="Logo SENA" style="width: 150px; height: 150px;">
                            </center>
                        </td>
                    </tr>

                </table>
            </div>

            <br><br><br>

            <div class="section">
                <div class="bubble-number h2 text-white">1</div>
                <div class="section-title h3 bubble text-white">INFORMACION GENERAL DEL APRENDIZ</div>
                <h6>Informacion personal del aprendiz. Usted como empleador podra solicitar aplicacion de esta.</h6>
                <div class="section-content">
                    <table class="data-table">

                        <tr>
                            <th>NOMBRES Y APELLIDOS</th>
                            <td class="input-cell" colspan="10">
                                <div class="inputboxfs">
                                    <input type="text" class="form-control" id="nombres_apellidos"
                                        name="nombres_apellidos" required>
                                    </imput>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th>DOCUMENTO DE IDENTIDAD</th>
                            <td class="input-cell" colspan="10">
                                <div class="inputboxfs">
                                    <input type="text" class="form-control" id="documento" name="documento" required>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th>FECHA DE NACIMIENTO</th>
                            <td class="input-cell" colspan="7">
                                <div class="inputboxfs">
                                    <input type="date" class="form-control" id="fecha_nacimiento"
                                        name="fecha_nacimiento" required>
                                </div>
                            </td>

                            <th>EDAD</th>
                            <td class="input-cell" colspan="3">
                                <div class="inputboxfs">
                                    <input type="number" class="form-control" id="edad" name="edad" required>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th>TELEFONO</th>
                            <td class="input-cell" colspan="10">
                                <div class="inputboxfs">
                                    <input type="number" class="form-control" id="telefono_aprendiz"
                                        name="telefono_aprendiz" required>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th>CORREO ELECTRONICO MISENA</th>
                            <td class="input-cell" colspan="10">
                                <div class="inputboxfs">
                                    <input type="email" class="form-control" id="email_misena" name="email_misena"
                                        required>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th>LIBRETA MILITAR</th>
                            <td class="input-cell" colspan="10">
                                <div class="inputboxfs">
                                    <input type="text" class="form-control" id="libreta_militar" name="libreta_militar"
                                        required>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th>DIRECCIÓN DOMICILIO</th>
                            <td class="input-cell" colspan="10">
                                <div class="inputboxfs">
                                    <input type="point" class="form-control" id="direccion" name="direccion" required>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th>ESTRATO</th>
                            <td colspan="10">
                                <select id="estrato" name="estrato" class="form-control-select inputboxfs opciones" required>
                                <option value="" disabled selected>Seleccione una opción</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <th>CIUDAD</th>
                            <td colspan="10">
                                <div class="inputboxfs">
                                    <input type="point" class="form-control" id="ciudad" name="ciudad" required>
                                </div>
                            </td>
                        </tr>

                    </table>
                </div>

                <br><br><br>

                <div class="section">
                    <div class="bubble-number h2 text-white">2</div>
                    <div class="section-title h3 bubble text-white">FORMACION ACADEMICA</div>
                    <h6>Digita la información referente al titulo obtenido en el grado 11
                        que corresponde a la educación media</h6>
                    <div class="section-content">
                        <table class="data-table" style="border-color: black;">

                            <tr>
                                <th>TÍTULO OBTENIDO</th>
                                <td class="input-cell" colspan="10">
                                    <div class="inputboxfs">
                                        <input type="text" class="form-control" id="titulo_obtenido"
                                            name="titulo_obtenido" required>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th>INSTITUCIÓN EDUCATIVA</th>
                                <td class="input-cell" colspan="10">
                                    <div class="inputboxfs">
                                        <input type="text" class="form-control" id="institucion_educativa"
                                            name="institucion_educativa" required>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th>FECHA GRADO</th>
                                <td class="input-cell" colspan="10">
                                    <div class="inputboxfs">
                                        <input type="date" class="form-control" id="fecha_grado" name="fecha_grado"
                                            required>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <br><br>


                <h6>Si usted ha realizado estudios de nivel superior como Técnico TC, Tecnólogo TL,
                    Especialización Tecnológica TE, Universitaria UN, Especialización ES, Maestría MG,
                    Doctorado DOC, relaciónelos a continuación.
                </h6>
                <div class="section-content">
                    <table class="data-table" style="border-color: black;">

                        <tr>
                            <th>NIVEL</th>
                            <td colspan="10">
                                <select id="nivel" name="nivel" class="form-control-select inputboxfs opciones" required>
                                <option value="" disabled selected>Seleccione una opción:</option>
                                    <option value="Tecnico">TC</option>
                                    <option value="Tecnologo">TL</option>
                                    <option value="EspecializacionTecnologica">TE</option>
                                    <option value="Universitaria">UN</option>
                                    <option value="Especializacion">ES</option>
                                    <option value="Maestria">MG</option>
                                    <option value="Doctorado">DOC</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <th>NOMBRE DE LOS ESTUDIOS</th>
                            <td class="input-cell" colspan="10">
                                <div class="inputboxfs">
                                    <input type="text" class="form-control" id="nombre_estudios" name="nombre_estudios"
                                        required>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th>INSTITUCIÓN EDUCATIVA</th>
                            <td class="input-cell" colspan="10">
                                <div class="inputboxfs">
                                    <input type="text" class="form-control" id="institucion_educativa2"
                                        name="institucion_educativa2" required>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th>SEMESTRES APROBADOS</th>
                            <td class="input-cell" colspan="10">
                                <div class="inputboxfs">
                                    <input type="number" class="form-control" id="semestres_aprobados"
                                        name="semestres_aprobados" required>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>


                <br><br><br>

                <div class="section">
                    <div class="bubble-number h2 text-white">3</div>
                    <div class="section-title h3 bubble text-white">INFORMACION PROGRAMA DE FORMACIÓN</div>
                    <h6>Información relevante del programa de formación, para más información podrá contactar
                        al coordinador ácademico</h6>
                    <div class="section-content">
                        <table class="data-table">

                            <tr>
                                <th>NOMBRE DEL PROGRAMA</th>
                                <td class="input-cell" colspan="10">
                                    <div class="inputboxfs">
                                        <input type="text" class="form-control" id="nombre_programa"
                                            name="nombre_programa" required>
                                        </imput>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th>CÓDIGO DE LA FICHA</th>
                                <td class="input-cell" colspan="10">
                                    <div class="inputboxfs">
                                        <input type="text" class="form-control" id="ficha" name="ficha" required>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th>PERFIL OCUPACIONAL</th>
                                <td class="input-cell" colspan="7">
                                    <div class="inputboxfs">
                                        <input type="text" class="form-control" id="perfil" name="perfil" required>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th>OCUPACIONES A DESEMPEÑAR</th>
                                <td class="input-cell" colspan="10">
                                    <div class="inputboxfs">
                                        <input type="text" class="form-control" id="ocupaciones" name="ocupaciones"
                                            required>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th>CENTRO DE FORMACIÓN</th>
                                <td class="input-cell" colspan="10">
                                    <div class="inputboxfs">
                                        <input type="text" class="form-control" id="centro_formacion"
                                            name="centro_formacion" required>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th>CIUDAD DE FORMACIÓN</th>
                                <td class="input-cell" colspan="10">
                                    <div class="inputboxfs">
                                        <input type="point" class="form-control" id="ciudad_formacion"
                                            name="ciudad_formacion" required>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th>FECHA DE INICIO</th>
                                <td class="input-cell" colspan="10">
                                    <div class="inputboxfs">
                                        <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio"
                                            required>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th>FECHA DE TERMINACIÓN</th>
                                <td class="input-cell" colspan="10">
                                    <div class="inputboxfs">
                                        <input type="date" class="form-control" id="fecha_final" name="fecha_final"
                                            required>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th>ETAPA</th>
                                <td colspan="10">
                                    <select id="etapa" name="etapa" class="form-control-select inputboxfs opciones" required>
                                    <option value="" disabled selected>Seleccione una opción</option>
                                        <option value="Lectiva">Lectiva</option>
                                        <option value="Practica">Práctica</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <th>COORDINADOR ACADEMICO</th>
                                <td colspan="10">
                                    <div class="inputboxfs">
                                        <input type="text" class="form-control" id="coordinador_academico"
                                            name="coordinador_academico" required>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th>TELEFONO</th>
                                <td colspan="10">
                                    <div class="inputboxfs">
                                        <input type="number" class="form-control" id="telefono_coordinador"
                                            name="telefono_coordinador" required>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th>CORREO ELECTRONICO</th>
                                <td colspan="10">
                                    <div class="inputboxfs">
                                        <input type="email" class="form-control" id="email_coordinador"
                                            name="email_coordinador" required>
                                    </div>
                                </td>
                            </tr>

                        </table>
                    </div>

                    <br><br>

                    <div class="section">
                        <div class="bubble-number h2 text-white">4</div>
                        <div class="section-title h3 bubble text-white">FIRMA DEL APRENDIZ</div>
                        <div class="section-content">

                            <table class="data-table">
                                <tr>
                                    <td colspan="10">
                                        <p>
                                        <h6>Manifiesto bajo la gravedad de juramento que no me encuentro dentro de
                                            las
                                            causales de
                                            inhabilidad e incompatibilidad que contravengan el reglamento
                                            estudiantil o
                                            términos legales, para
                                            desarrollar la etapa práctica desempeñándome en una empresa a través del
                                            contrato de aprendizaje, para
                                            todos los efectos legales, certifico que los datos por mí anotados en el
                                            presente formato de hoja de
                                            vida, son veraces.</h6>
                                        </p>
                                    </td>
                                </tr>

                                <tr colspan="10">
                                    <th>Ciudad y Fecha de Diligenciamiento:</th>
                                    <td class="input-cell">
                                        <div class="inputboxfs">
                                            <input type="text" class="form-control" id="fecha_diligenciamiento"
                                                name="diligenciamiento" required>
                                        </div>
                                    </td>

                                    <th>FIRMA:</th>
                                    <td class="input-cell">
                                        <div class="inputboxfs">
                                            <input type="text" class="form-control" id="firma_aprendiz"
                                                name="firma_aprendiz" required>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <br><br><br>

                        <div class="section">
                            <div class="bubble-number h2 text-white">5</div>
                            <div class="section-title h3 bubble text-white">FIRMA FUNCIONARIO PROMOCION Y
                                RELACIONAMIENTO CORPORATIVO SENA</div>
                            <h6>Información del funcionario encargado en el Centro de Formación. Contacte para
                                la legalización del contrato de aprendizaje
                            </h6>
                            <div class="section-content">
                                <table class="data-table">

                                    <tr>
                                        <th>NOMBRE FUNCIONARIO</th>
                                        <td colspan="10">
                                            <div class="inputboxfs">
                                                <input type="text" class="form-control" id="funcionario"
                                                    name="funcionario" required>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>TELEFONO</th>
                                        <td colspan="10">
                                            <div class="inputboxfs">
                                                <input type="number" class="form-control" id="telefono_funcionario"
                                                    name="telefono_funcionario" required>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>CORREO ELECTRONICO</th>
                                        <td colspan="10">
                                            <div class="inputboxfs">
                                                <input type="email" class="form-control" id="email_funcionario"
                                                    name="email_funcionario" required>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>


                            <br><br><br>


                            <div class="section">
                                <div class="bubble-number h2 text-white">6</div>
                                <div class="section-title h3 bubble text-white">INFORMACION SERVICIO NACIONAL DE
                                    APRENDIZAJE</div>

                                <div class="section-content">
                                    <table class="data-table">

                                        <tr>
                                            <th>NIT</th>
                                            <td colspan="7">
                                                <div class="inputboxfs">
                                                    <input type="text" class="form-control" id="nit" name="nit"
                                                        required>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>CENTRO FORMACIÓN</th>
                                            <td colspan="7">
                                                <div class="inputboxfs">
                                                    <input type="text" class="form-control" id="centro_formacion1"
                                                        name="centro_formacion1" required>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>REPRESENTANTE LEGAL</th>
                                            <td colspan="7">
                                                <div class="inputboxfs">
                                                    <input type="text" class="form-control" id="representante_legal"
                                                        name="representante_legal" required>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>CORREO ELECTRONICO</th>
                                            <td colspan="7">
                                                <div class="inputboxfs">
                                                    <input type="email" class="form-control" id="email_representante"
                                                        name="email_representante" required>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>TELEFONO</th>
                                            <td colspan="7">
                                                <div class="inputboxfs">
                                                    <input type="number" class="form-control"
                                                        id="telefono_representante" name="telefono_representante"
                                                        required>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>

                                <br><br><br>

                                <div class="section">
                                    <div class="bubble-number h2 text-white">7</div>
                                    <div class="section-title h3 bubble text-white">OBSERVACIONES DEL JEFE DE
                                        RECURSOS
                                        HUMANOS Y/O CONTRATOS</div>
                                    <div class="section-content">
                                        <table class="data-table">

                                            <tr>
                                                <th>EMPRESA</th>
                                                <td colspan="10">
                                                    <div class="inputboxfs">
                                                        <input type="text" class="form-control" id="empresa"
                                                            name="empresa" required>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>TELEFONO</th>
                                                <td colspan="10">
                                                    <div class="inputboxfs">
                                                        <input type="number" class="form-control" id="telefono_empresa"
                                                            name="telefono_empresa" required>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>FUNCIONARIO</th>
                                                <td colspan="10">
                                                    <div class="inputboxfs">
                                                        <input type="text" class="form-control" id="funcionario_empresa"
                                                            name="funcionario_empresa" required>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th colspan="10">OBSERVACIONES</th>
                                            </tr>

                                            <tr>
                                                <td colspan="10">
                                                    <textarea name="observaciones" rows="20"
                                                        style="width: 100%; border: transparent;"></textarea>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>Marque con una X la desicion de contratar al aprendiz</th>

                                                <td>
                                                    <div>
                                                        Seleccionado
                                                    </div>
                                                </td>

                                                <td colspan="10">
                                                    <div>
                                                        No Seleccionado
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr colspan="10">
                                                <th>Ciudad y Fecha de Diligenciamiento:</th>
                                                <td class="input-cell">
                                                    <div class="inputboxfs">
                                                        <input type="text" class="form-control"
                                                            id="fecha_diligenciamiento1" name="diligenciamiento"
                                                            required>
                                                    </div>
                                                </td>

                                                <th>FIRMA:</th>
                                                <td class="input-cell">
                                                    <div class="inputboxfs">
                                                        <input type="text" class="form-control" id="firma" name="firma"
                                                            required>
                                                    </div>
                                                </td>
                                            </tr>


                                        </table>
                                    </div>


                                    <br>

                                    <h6>Solicitamos a la empresa imprimir y suministrar copia de este documento una vez
                                        realizada la evaluación del aprendiz que será remitida a la oficina de
                                        Relacionamiento
                                        Corporativo del Centro de Formación.
                                    </h6>

                                </div>
                            </div>
                        </div>


                        <br><br>

                        <div class="row">
                            <div class="col-md-2 offset-md-8">
                                <button type="button" class="btn btn-danger" onclick="imprimir()">Descargar
                                    <i class="bi bi-filetype-pdf"></i></button>
                                <script>
                                function imprimir() {
                                    window.print();
                                }
                                </script>
                            </div>

                            <div class="col-md-2" id="transferir">
                                <button type="button" class="btn btn-info"">Enviar
                                <i class=" bi bi-send-plus"></i></button>
                            </div>
                        </div>

                    </div>

                    <br><br><br><br><br>