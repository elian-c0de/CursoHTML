<!DOCTYPE html>
<html lang="en">

<head>
    <font face="Arial">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CursoHTML</title>
        <img height="5%" width="100%"
            src="https://www.hostinger.es/tutoriales/wp-content/uploads/sites/7/2018/11/what-is-html.webp" />
        <h1 style="color:#2F1C6A;" align="center"> ¿Qué es HTML? </h1>
        <img height="30%" width="15%" align="left"
            src="http://assets.stickpng.com/thumbs/5847f5bdcef1014c0b5e489c.png" />
        <link rel="icon" type="image/x-icon"
            href="http://www.utmachala.edu.ec/portalwp/wp-content/uploads/2015/08/LOGO_OUT.png">
</head>

<body style="background-color:#E9ECF4;">

    <h2 style="color:#2F1C6A;" align="center">Explicación de los fundamentos del Lenguaje de marcado de hipertexto </h2>
    <p> El <strong>lenguaje de marcado de hipertexto (HTML)</strong> es un lenguaje informático que forma parte de la
        mayoría de las <i>páginas web y aplicaciones en línea</i>. Un hipertexto es un texto que se utiliza para enlazar
        con
        otros textos, mientras que un <u>lenguaje de marcado</u> es una serie de marcas que indican a los servidores web
        la
        estructura y el estilo de un documento. </p>
    <div>
        <nav>
            <aside>
                <section>
                    <h2 style="color:#2F1C6A;">Tabla de contenido </h2>
                    <ul>
                        <li>
                            <a href="#etiquetas"> Etiquetas Basicas</a>
                        </li>
                        <li>
                            <a href="#linea"> Elementos en linea</a>
                        </li>
                        <li>
                            <a href="#bloque"> Elementos en bloque</a>
                        </li>
                        <li>
                            <a href="#espe"> Especificaciones</a>
                        </li>
                        <li>
                            <a href="#control"> Control de Etiquetas From</a>
                        </li>
                        <li>
                            <a href="#atributosEtiquetaForm"> Atributos de la Etiqueta Form</a>
                        </li>
                        <li>
                            <a href="#valid"> Validaciones de Forms</a>
                        </li>
                        <li>
                            <a href="#metodosHTTP"> Métodos de solicitud HTTP</a>
                        </li>
                        <li>
                            <a href="#respuesta"> Deja una respuesta</a>
                        </li>
                    </ul>
                </section>
            </aside>
        </nav>
        <div>
            <main>
                <article>
                    <h1 style="color:#2F1C6A" id="etiquetas"> <strong> Etiquetas basicas HTML</strong> </h1>
                    <h3 style="color:#2F1C6A"> <strong> Etiquetas Semanticas </strong> </h3>
                    <div style="display: flex;justify-content:center;">
                        <table border="1" cellpadding="5" cellspacing="0" width="50%">
                            <thead
                                style="padding: 8px;background: linear-gradient(#f26626 50%,#e54e21 0);color: white;">
                                <tr>
                                    <th style="border: 1px #000000 solid">Tag</th>
                                    <th style="border: 1px #000000 solid">Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="border: 1px #000000 solid"> div </td>
                                    <td style="border: 1px #000000 solid">Defines a section in a document </td>
                                </tr>
                                <tr>
                                    <td style="border: 1px #000000 solid"> span </td>
                                    <td style="border: 1px #000000 solid">Define a section in a document </td>
                                </tr>
                                <tr>
                                    <td style="border: 1px #000000 solid">header </td>
                                    <td style="border: 1px #000000 solid">Define a header for a document </td>
                                </tr>
                                <tr>
                                    <td style="border: 1px #000000 solid">footer </td>
                                    <td style="border: 1px #000000 solid">Define a footer for a document </td>
                                </tr>
                                <tr>
                                    <td style="border: 1px #000000 solid">main </td>
                                    <td style="border: 1px #000000 solid">Specifies the main content </td>
                                </tr>
                                <tr>
                                    <td style="border: 1px #000000 solid">Section </td>
                                    <td style="border: 1px #000000 solid">Define a section in a document </td>
                                </tr>
                                <tr>
                                    <td style="border: 1px #000000 solid">article </td>
                                    <td style="border: 1px #000000 solid">Define an article </td>
                                </tr>
                                <tr>
                                    <td style="border: 1px #000000 solid">aside </td>
                                    <td style="border: 1px #000000 solid">Define content away from the page
                                        contents </td>
                                </tr>
                                <tr>
                                    <td style="border: 1px #000000 solid">detail</td>
                                    <td style="border: 1px #000000 solid">Defines additional details that the
                                        user can view or hide </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <h1 style="color:#2F1C6A"> <strong> Elementos en línea vs bloque </strong> </h1>
                    <section>
                        <h2 style="color:#2F1C6A" id="linea">
                            Elementos en línea
                        </h2>
                        <div>
                            <p>Los elementos en línea son aquellos elementos que no comienzan en una nueva línea cuando
                                inserta el elemento en el código. Se consideran como parte del texto principal y no como
                                una sección separada. Puede agregar espacio a la izquierda o a la derecha de un elemento
                                en línea, pero no puede agregar espacio en la parte superior e inferior del elemento.
                            </p>
                            <p>Por ejemplo, una etiqueta <strong>&lt;strong&gt;</strong> muestra un elemento en negrita,
                                mientras que la etiqueta <strong>&lt;em&gt;</strong> lo muestra en cursiva. Los
                                hipervínculos también son elementos en línea que utilizan una etiqueta
                                <strong>&lt;a&gt;</strong> y un atributo <strong>href</strong> para indicar el destino
                                del enlace:
                            </p>
                            <div style="display:flex;justify-content:center;">
                                <img src="./images/code2.jpeg" alt="">
                            </div>

                        </div>
                        <h2 style="color:#2F1C6A" id="bloque">
                            Elementos en bloque
                        </h2>
                        <div>
                            <p>Los elementos de bloque funcionan exactamente de forma opuesta a los elementos en línea.
                                Comienzan en una nueva línea y ocupan todo el ancho de la página web para el contenido.
                                Puede agregar márgenes superior e inferior a estos elementos y también crean una
                                estructura más grande que los elementos en línea.</p>
                            <p>Todas las páginas HTML utilizan estas tres etiquetas:
                            </p>
                            <ol>
                                <li>La etiqueta <strong> &lt;HTML&gt;
                                    </strong> es el elemento raíz que define todo el documento HTML.</li>
                                <li>La etiqueta <strong>&lt;body&gt;</strong> contiene información meta como el título y
                                    el conjunto de caracteres de la página.La etiqueta

                                    <body> encierra todo el contenido que aparece en la página.
                                </li>
                                <li>La etiqueta <strong>&lt;body&gt;</strong> encierra todo el contenido que aparece en
                                    la página.</li>
                            </ol>
                            <div style="display:flex;justify-content:center;">
                                <img src="./images/code1.jpeg" alt="code1">
                            </div>

                        </div>
                    </section>
                    <section>
                        <h2 style="color:#2F1C6A" id="espe">
                            Especificaciones
                        </h2>
                        <div style="display: flex;justify-content:center;">
                            <table border="1" cellpadding="5" cellspacing="0" width="50%">
                                <thead
                                    style="padding: 8px;background: linear-gradient(#f26626 50%,#e54e21 0);color: white;">
                                    <th>Espeficication</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a
                                                href="https://html.spec.whatwg.org/multipage/grouping-content.html#the-main-element">HTML
                                                Standard
                                                <!-- --> <br><small>#
                                                    <!-- -->the-main-element
                                                </small>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                    <section>
                        <h2 style="color:#2F1C6A" id="control">Control de Etiquetas from</h2>
                        <div>
                            <a href="tags.html">Controles de etiqueta</a>
                        </div>
                    </section>
                    <br />
                    <hr />
                    <br />
                    <section>
                        <h2 style="color:#2F1C6A" id="atributosEtiquetaForm">Atributos de la Etiqueta Form</h2>
                        <div>
                            <p>
                                Como algunas otras <strong>etiquetas HTML</strong> que poseen atributos y propiedades,
                                la etiqueta <code><span>< form></span></code> tiene sus propios atributos.
                            </p>
                        </div>
                        <ul style="color:#2F1C6A">
                            <a href="#accept-charset">
                                <li>accept-charset</li>
                            </a>
                            <a href="#action">
                                <li>action</li>
                            </a>
                            <a href="#autocomplete">
                                <li>autocomplete</li>
                            </a>
                            <a href="#enctype">
                                <li>enctype</li>
                            </a>
                            <a href="#methodform">
                                <li>method</li>
                            </a>
                            <a href="#name">
                                <li>name</li>
                            </a>
                            <a href="#novalidate">
                                <li>novalidate</li>
                            </a>
                            <a href="#rel">
                                <li>rel</li>
                            </a>
                            <a href="#target">
                                <li>target</li>
                            </a>
                        </ul>
                        <div id="accept-charset">
                            <h2>accept-charset</h2>
                            <p>El atributo accept-charset especifica las codificaciones de caracteres que se utilizarán
                                para el envío del formulario.</p>
                            <table border="1">
                                <thead>
                                    <tr>
                                        <td>
                                            <code>
                                            <span>&lt;form<span> action=</span>
                                            <span>"procesar.php"</span> 
                                            accept-charset=<span>"utf-8"</span>&gt;</span>
                                            </code>
                                        </td>
                                    </tr>
                                </thead>
                            </table>

                        </div>
                        <div id="action">
                            <h2>action</h2>
                            <p>El atributo de accion especifica dónde enviar los datos del formulario cuando se envía un
                                formulario.</p>
                            <table border="1">
                                <thead>
                                    <tr>
                                        <td>
                                            <code><span><span></span><span><span>&lt;form<span> action=</span>
                                            <span>"../../form-result.php"</span><span> method=</span>
                                            <span>"post"</span><span> target=</span><span>"_blank"</span>&gt;
                                            </span></span></span>
                                            <br/>
                                            <span><span></span><span>  <span>&lt;p&gt;</span>Texto: <span>&lt;input<span> type=</span>
                                            <span>"text"</span><span> name=</span>
                                            <span>"texto"</span>&gt;</span> 
                                            <span>&lt;input<span> type=</span><span>"submit"</span>
                                            <span> value=</span><span>"Enviar datos"</span>&gt;</span>
                                            <span>&lt;/p&gt;</span></span></span>
                                            <br/>
                                            <span><span></span><span><span>&lt;/form&gt;</span></span></span>
                                            </code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <form action="https://www.htmlquick.com/es/form-result.php" method="post"
                                                target="_blank">
                                                <p>Texto: <input type="text" name="texto"> <input type="submit"
                                                        value="Enviar datos"></p>
                                            </form>
                                        </td>
                                    </tr>
                                </thead>
                            </table>

                        </div>
                        <div id="autocomplete">
                            <h2>autocomplete</h2>
                            <p>El atributo de autocomplete especifica si un formulario debe tener la opción de
                                autocompletar activada o desactivada.
                                Cuando la función de autocompletar está activada, el navegador completa automáticamente
                                los valores en función de los
                                valores que el usuario ha ingresado anteriormente.</p>
                            <ul>
                                <li><b>on</b>: el navegador debería sugerir opciones automáticamente. Este es el valor
                                    por defecto.</li>
                                <li><b>off</b>: el navegador no debería sugerir opciones automáticamente.</li>
                            </ul>
                            <table border="1">
                                <thead>
                                    <tr>
                                        <td>
                                            <code>
                                                <span>&lt;form<span class="atn"> action=</span>
                                                <span>"../../form-result.php"</span>
                                                <span> method=</span>
                                                <span>"post"</span>    
                                                <span> target=</span>    
                                                <span>"_blank"</span>
                                                <span> autocomplete=</span>
                                                <span >"off"</spann>&gt;</span>
                                                <br/>
                                                <span> <span>&lt;p&gt;</span>
                                                Texto: <span>&lt;input<span>
                                                type=</span><span>"text"</span>
                                                <span> name=</span>
                                                <span>"texto"</span>&gt;</span> 
                                                <span>&lt;input<span> type=</span>
                                                <span>"submit"</span><span> value=</span>
                                                <span >"Enviar datos"</span>&gt;</span>
                                                <span>&lt;/p&gt;</span></span>
                                                <br />
                                                <span><span></span><span><span>&lt;/form&gt;</span></span></span>
                                                </code>
                                            </code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3>autocomplete="off"</h3>
                                            <form action="https://www.htmlquick.com/es/form-result.php" method="post"
                                                target="_blank" autocomplete="off">
                                                <p>Texto: <input type="text" name="Texto"> <input type="submit"
                                                        value="Enviar datos"></p>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3>autocomplete="on"</h3>
                                            <form action="https://www.htmlquick.com/es/form-result.php" method="post"
                                                target="_blank" autocomplete="on">
                                                <p>Texto: <input type="text" name="Texto"> <input type="submit"
                                                        value="Enviar datos"></p>
                                            </form>
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div id="enctype">
                            <h2>enctype</h2>
                            <p>El atributo enctype especifica cómo se deben codificar los datos del formulario al
                                enviarlos al servidor.
                                El atributo enctype solo se puede usar si method="post".</p>
                            <ul>
                                <li><b>application/x-www-form-urlencoded</b>: los espacios son reemplazados con signos
                                    más ("+") y los caracteres
                                    especiales son convertidos a valores <i>HEX</i>. Este es el valor por defecto.</li>
                                <li><b>multipart/form-data</b>: no se aplica ninguna codificación. Este valor es
                                    necesario para la subida de
                                    archivos.</li>
                                <li><b>text/plain</b>: solo los espacios son reemplazados por signos más ("+").</li>
                            </ul>
                            <table border="1">
                                <thead>
                                    <tr>
                                        <td>
                                            <code>
                                                <span>&lt;form<span> action=</span>
                                                <span>"../../form-result.php"</span>
                                                <span> method=</span><span>"post"</span>
                                                <span> enctype=</span>
                                                <span>"multipart/form-data"</span>
                                                <span> target=</span>
                                                <span>"_blank"</span>&gt;</span>
                                                <br/>
                                                <span>&lt;p&gt;</span><span>&lt;label&gt;</span>
                                                Archivo: <span>&lt;input<span> type=</span>
                                                <span>"file"</span><span> name=</span>
                                                <span>"archivo"</span>&gt;</span>
                                                <span>&lt;/label&gt;</span> 
                                                <span>&lt;input<span> type=</span>
                                                <span>"submit"</span><span>
                                                value=</span><span>"Enviar datos"</span>&gt;</span>
                                                <span>&lt;/p&gt;</span></span></span>
                                                <br/>
                                                <span><span></span><span><span>&lt;/form&gt;</span></span></span>
                                                </code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3>enctype="multipart/form-data"</h3>
                                            <form action="https://www.htmlquick.com/es/form-result.php" method="post"
                                                enctype="multipart/form-data" target="_blank">
                                                <p><label>Archivo: <input type="file" name="archivo"></label> <input
                                                        type="submit" value="Enviar datos"></p>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3>enctype="text/plain"</h3>
                                            <form action="https://www.htmlquick.com/es/form-result.php" method="post"
                                                enctype="text/plain" target="_blank">
                                                <p><label>Archivo: <input type="file" name="archivo"></label> <input
                                                        type="submit" value="Enviar datos"></p>
                                            </form>
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div id="methodform">
                            <h2>method</h2>
                            <p>El atributo de method especifica cómo enviar datos de formulario (los datos de formulario
                                se envían a la página
                                especificada en el atributo de acción).</p>
                            <ul>
                                <li><b>get</b>: los datos se adjuntan al URL de la petición (el
                                    provisto en el atributo action).
                                    <br />
                                    Los pares nombre-valor se organizan de la forma "nombre=valor" y se
                                    separan unos de otros con un signo "&amp;".
                                    <br />
                                    Toda esta cadena es sumada al URL de la petición, precedida por un signo de
                                    interrogación ("?").
                                    <br />
                                    Por ejemplo, una cadena GET podría ser:
                                    "resultados.php?usuario=john&amp;pass=123456"
                                </li>
                                <li><b>post</b>: los datos se adjuntan al cuerpo de la petición.</li>
                                <li><b>dialog</b>: específico para formularios dentro de un elemento dialog. Instruye al
                                    navegador a cerrar el cuadro de diálogo cuando el
                                    formulario es enviado.
                                    <br />
                                    Los resultados del formulario deberían ser manipulados por
                                    programas.
                                </li>
                            </ul>
                            <table border="1">
                                <thead>
                                    <tr>
                                        <td>
                                            <code>
                                                <span>&lt;form<span> action=</span>
                                                <span>"../../form-result.php"</span>
                                                <span> method=</span><span>"get"</span>
                                                <span> target=</span><span>"_blank"</span>&gt;</span>
                                                <br/>
                                                <span>&lt;p&gt;</span>Nombre de usuario: <span>&lt;input<span>
                                                type=</span><span>"text"</span><span> name=</span>
                                                <span>"usuario"</span>&gt;</span>
                                                <span>&lt;/p&gt;</span></span></span>
                                                <br/>
                                                <span> <span>&lt;p&gt;</span>Contraseña: 
                                                <span>&lt;input<span>
                                                type=</span><span>"password"</span>
                                                <span> name=</span>
                                                <span>"pass"</span>&gt;</span>
                                                <span>&lt;/p&gt;</span></span>
                                                <br/>
                                                <span>&lt;p&gt;</span><span>&lt;input<span> type=</span>
                                                <span>"submit"</span><span> value=</span>
                                                <span>"Enviar datos"</span>&gt;</span>
                                                <span>&lt;/p&gt;</span></span></span>
                                                <br/> 
                                                <span><span></span><span><span>&lt;/form&gt;</span></span></span>
                                                </code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <form action="https://www.htmlquick.com/es/form-result.php" method="get"
                                                target="_blank">
                                                <p>Nombre de usuario: <input type="text" name="usuario"></p>
                                                <p>Contraseña: <input type="password" name="pass"></p>
                                                <p><input type="submit" value="Enviar datos"></p>
                                            </form>
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div id="name">
                            <h2>name</h2>
                            <p>El atributo de name especifica el nombre de un formulario.
                                Se utiliza para hacer referencia a elementos en JavaScript o para hacer referencia a
                                datos de formulario después de
                                enviar un formulario.</p>
                            <table border="1">
                                <thead>
                                    <tr>
                                        <td>
                                            <code>
                                                <span>&lt;form<span> name=</span>
                                                <span>"datosusuario"</span><span>
                                                action=</span><span>"resultado.php"</span>&gt;</span>
                                            </code>
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div id="novalidate">
                            <h2>novalidate</h2>
                            <p>El atributo novalidate es un atributo booleano.
                                Cuando está presente, especifica que los datos del formulario (entrada) no deben
                                validarse cuando se envían.</p>
                            <table border="1">
                                <thead>
                                    <tr>
                                        <td>
                                            <code>
                                                <span>&lt;form<span> action=</span><span>"resultado.php"</span><span>
                                                novalidate&gt;</span></span>
                                            </code>
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div id="rel">
                            <h2>rel</h2>
                            <p>El atributo rel especifica la relación entre el documento actual y el documento
                                vinculado.</p>
                            <table border="1">
                                <thead>
                                    <tr>
                                        <td>
                                            <code>
                                                <span>&lt;form<span> action=</span>
                                                <span>"http://www.otro-servidor.com/recibir-formulario.php"</span>
                                                <span> method=</span><span>"post"</span>
                                                <span> rel=</span><span>"external"</span>&gt;</span>
                                            </code>
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div id="target">
                            <h2>target</h2>
                            <p>El atributo de target especifica un nombre o una palabra clave que indica dónde mostrar
                                la respuesta que se recibe
                                después de enviar el formulario.
                                El atributo target define un nombre o palabra clave para un contexto de navegación (por
                                ejemplo, pestaña, ventana o
                                marco en línea).</p>
                            <ul>
                                <li><b>_blank</b>: en una nueva ventana/pestaña.</li>
                                <li><b>_parent</b>: en el contexto padre inmediato.</li>
                                <li><b>_self</b>: en el mismo contexto que contiene al formulario.</li>
                                <li><b>_top</b>: en el más alto contexto de naveción (el contexto más exterior que
                                    contiene al formulario).</li>
                            </ul>
                            <table border="1">
                                <thead>
                                    <tr>
                                        <td>
                                            <code>
                                                <span>&lt;form<span> action=</span>
                                                <span>"../../form-result.php"</span>
                                                <span> target=</span><span>"_blank"</span>&gt;</span>
                                                <br/>
                                                <span> <span>&lt;p&gt;</span>Texto: <span>&lt;input<span>
                                                type=</span><span>"text"</span><span> name=</span>
                                                <span>"algodetexto"</span>&gt;</span><span>&lt;/p&gt;</span></span>
                                                <br/>
                                                <span>&lt;p&gt;</span><span>&lt;input<span> type=</span>
                                                <span>"submit"</span><span> value=</span>
                                                <span>"Enviar datos"</span>&gt;</span><span>&lt;/p&gt;</span></span></span>
                                                <br/>
                                                <span><span></span><span><span>&lt;/form&gt;</span></span></span>
                                            </code>
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </section>
                    <br />
                    <hr />
                    <br />
                    <section>
                        <h2 style="color:#2F1C6A" id="valid">Validación de Formularios</h2>
                        <div>
                            <p>Al crear un formulario en HTML, debemos ser conscientes de un detalle ineludible: los
                                usuarios se equivocan al rellenar un formulario y para intentar que los datos lleguen
                                correctamente a su destino y evitar cualquier tipo de moderación o revisión posterior.
                                Se suele recurrir a un tipo de proceso automático llamado validación, en el cuál,
                                establecemos unas pautas para que si el usuario introduce alguna información incorrecta
                            </p>
                            <div style="display: flex;gap: 5vw;justify-content: center">
                                <div
                                    style="padding: 10px 20px;box-shadow: -1px 2px 10px #0004;border-radius: 0.5rem;background-color: aliceblue">
                                    1. Solo en Front-end
                                </div>
                                <div
                                    style="padding: 10px 20px;box-shadow: -1px 2px 10px #0004;border-radius: 0.5rem;background-color: aliceblue">
                                    2. Solo en Back-end
                                </div>
                                <div
                                    style="padding: 10px 20px;box-shadow: -1px 2px 10px #0004;border-radius: 0.5rem;background-color: aliceblue">
                                    3. Doble Validación
                                </div>
                            </div>
                            <h2 style="color:#2F1C6A">Tipos de Validación en Front-end</h2>
                            <h3 style="color:#2F1C6A">Validación con HTML-5</h3>
                            <p>La validación de formularios incorporada utiliza características de validación de
                                formularios HTML5 y tiene un mejor rendimiento que las validaciones por JavaScript</p>
                            <h3 style="color:#2F1C6A">Validación con JavaScript</h3>
                            <p>Se la realiza codificando en el mismo lenguaje y es completamente personalizable.</p>
                            <div style="display: flex;justify-content: center;">
                                <img style="width: 900px; border-radius: 0.5rem;" src="./images/validaciones-html5.png"
                                    alt="">
                            </div>
                            <h2 style="color:#2F1C6A">Atributos Básicos</h2>
                            <p>Con estos atributos, podemos crear validaciones básicas en nuestros campos de entrada de
                                datos</p>
                            <div style="display: flex;justify-content: center;">
                                <table border="1" width="50%" cellspacing="0" cellpadding="8">
                                    <thead
                                        style="padding: 8px;background: linear-gradient(#f26626 50%,#e54e21 0);color: white;">
                                        <tr>
                                            <th>Atributo</th>
                                            <th>Valor</th>
                                            <th>Puede actuar sobre...</th>
                                            <th>Descripción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><code>minlength</code></td>
                                            <td><em>número</em></td>
                                            <td>Campos de texto</td>
                                            <td>Establece la longitud mínima del texto requerida.</td>
                                        </tr>
                                        <tr>
                                            <td><code>maxlength</code></td>
                                            <td><em>número</em></td>
                                            <td>Campos de texto</td>
                                            <td>No permite escribir textos superiores a <em>número</em> carácteres.</td>
                                        </tr>
                                        <tr>
                                            <td><code>min</code></td>
                                            <td><em>número</em></td>
                                            <td>Campos numéricos</td>
                                            <td>Establece el número mínimo permitido.</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><em>fecha</em></td>
                                            <td>Campos de fecha</td>
                                            <td>Establece la fecha mínima permitida.</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><em>hora</em></td>
                                            <td>Campos de hora</td>
                                            <td>Establece la hora mínima permitida.</td>
                                        </tr>
                                        <tr>
                                            <td><code>max</code></td>
                                            <td><em>número</em></td>
                                            <td>Campos numéricos</td>
                                            <td>Establece el número máximo permitido.</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><em>fecha</em></td>
                                            <td>Campos de fecha</td>
                                            <td>Establece la fecha máxima permitida.</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><em>hora</em></td>
                                            <td>Campos de hora</td>
                                            <td>Establece la hora máxima permitida.</td>
                                        </tr>
                                        <tr>
                                            <td><code>step</code></td>
                                            <td><em>número</em></td>
                                            <td>Campos numéricos</td>
                                            <td>Establece el salto de números permitido. Por defecto, 1.</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><em>fecha</em></td>
                                            <td>Campos de fecha</td>
                                            <td>Establece el salto de días permitido. Por defecto, 1.</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><em>hora</em></td>
                                            <td>Campos de hora</td>
                                            <td>Establece el salto de segundos permitido. Por defecto, 1.</td>
                                        </tr>
                                        <tr>
                                            <td><code>required</code></td>
                                            <td></td>
                                            <td>Campos en general</td>
                                            <td>Campo obligatorio. Se debe rellenar para enviar formulario.</td>
                                        </tr>
                                        <tr>
                                            <td><code>disabled</code></td>
                                            <td></td>
                                            <td>Campos en general</td>
                                            <td>Campo desactivado. No se puede modificar. No se envía.</td>
                                        </tr>
                                        <tr>
                                            <td><code>readonly</code></td>
                                            <td></td>
                                            <td>Campos en general</td>
                                            <td>Campo de sólo lectura. No se puede modificar. Se envía.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h2 style="color:#2F1C6A">Patrones de Validacion HTML-5</h2>
                            <p>En muchos casos los atributos de validación básicos no son suficientes.Para ello tenemos
                                los patrones de validación HTML5, mucho más potentes y flexibles, que nos permitirán ser
                                mucho más específicos utilizando expresiones regulares para validar datos y lo
                                aplicaremos mediante el atributo <b>pattern</b></p>
                            <div style="display: flex;justify-content: center;">
                                <table border="1" width="50%" cellspacing="0" cellpadding="8">
                                    <thead
                                        style="padding: 8px;background: linear-gradient(#f26626 50%,#e54e21 0);color: white;">
                                        <tr>
                                            <th>Expresión regular</th>
                                            <th>Carácter especial</th>
                                            <th>Significado</th>
                                            <th>Descripción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><code>.</code></td>
                                            <td>Punto</td>
                                            <td>Comodín</td>
                                            <td>Cualquier carácter (o texto de tamaño 1)</td>
                                        </tr>
                                        <tr>
                                            <td><code>A|B</code></td>
                                            <td><em>Pipe</em></td>
                                            <td>Opciones lógicas</td>
                                            <td>Opciones alternativas (o <code>A</code> o <code>B</code> )</td>
                                        </tr>
                                        <tr>
                                            <td><code>C(A|B)</code></td>
                                            <td>Paréntesis</td>
                                            <td>Agrupaciones</td>
                                            <td>Agrupaciones alternativas (o <code>CA</code> o <code>CB</code> )</td>
                                        </tr>
                                        <tr>
                                            <td><code>[0-9]</code></td>
                                            <td>Corchetes</td>
                                            <td>Rangos de carácteres</td>
                                            <td>Un dígito (del <code>0</code> al <code>9</code> )</td>
                                        </tr>
                                        <tr>
                                            <td><code>[A-Z]</code></td>
                                            <td></td>
                                            <td></td>
                                            <td>Una letra mayúscula de la <code>A</code> a la <code>Z</code></td>
                                        </tr>
                                        <tr>
                                            <td><code>[^A-Z]</code></td>
                                            <td><code>^</code> en corchetes</td>
                                            <td>Rango de exclusión</td>
                                            <td>Una letra que no sea mayúscula de la <code>A</code> a la <code>Z</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><code>[0-9]*</code></td>
                                            <td>Asterisco</td>
                                            <td>Cierre o clausura</td>
                                            <td>Un dígito repetido 0 ó más veces (vacío incluido)</td>
                                        </tr>
                                        <tr>
                                            <td><code>[0-9]+</code></td>
                                            <td>Signo más</td>
                                            <td>Cierre positivo</td>
                                            <td>Un dígito repetido 1 ó más veces</td>
                                        </tr>
                                        <tr>
                                            <td><code>[0-9]{3}</code></td>
                                            <td>Llaves</td>
                                            <td>Coincidencia exacta</td>
                                            <td>Cifra de 3 dígitos (dígito repetido <code>3</code> veces)</td>
                                        </tr>
                                        <tr>
                                            <td><code>[0-9]{2,4}</code></td>
                                            <td></td>
                                            <td>Coincidencia (rango)</td>
                                            <td>Cifra de 2 a 4 dígitos (rep. de <code>2</code> a <code>4</code> veces)
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><code>b?</code></td>
                                            <td>Interrogación</td>
                                            <td>Carácter opcional</td>
                                            <td>El carácter <code>b</code> puede aparecer o puede que no</td>
                                        </tr>
                                        <tr>
                                            <td><code>\.</code></td>
                                            <td>Barra invertida</td>
                                            <td>Escape</td>
                                            <td>El carácter <code>.</code> literalmente (no como comodín)</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                    <br><br>
                    <hr>
                    <br>
                    <section>
                        <h2 style="color:#2F1C6A" id="metodosHTTP">
                            Métodos de solicitud HTTP
                        </h2>
                        <div>
                            <h1 style="color:#2F1C6A">
                                ¿Qué es HTTP?
                            </h1>
                            <p>
                                Se desarrolló para permitir la comunicación entre clientes y servidores.
                            </p>
                            <p>
                                Ejemplo: el cliente (navegador) envía una solicitud HTTP al servidor; luego el servidor
                                devuelve una respuesta al cliente. La respuesta incluye información sobre el estado de
                                la solicitud y posiblemente el contenido de la solicitud.
                            </p>
                            <ul> Metodos HTTP
                                <li>GET</li>
                                <li>POST</li>
                                <li>PUT</li>
                                <li>HEAD</li>
                                <li>DELETE</li>
                            </ul>
                            <img style="height: 200px;" src="images/getpost.png" alt="GetPost">
                            <a href="https://app.utmachala.edu.ec/siutmach/public/">
                                <h1>SIUTMACH</h1>
                            </a>
                        </div>
                        <div>
                            <h1 style="color:#2F1C6A">
                                Método GET
                            </h1>
                            <p>
                                GET se utiliza para solicitar datos de un recurso específico.
                            </p>
                            <p>
                                Algunas notas sobre las solicitudes GET:
                            </p>
                            <ul>
                                <li>Las solicitudes GET se pueden almacenar en caché</li>
                                <li>Las solicitudes GET permanecen en el historial del navegador</li>
                                <li>Las solicitudes GET se pueden marcar</li>
                                <li>Las solicitudes GET nunca deben usarse cuando se trata de datos confidenciales</li>
                                <li>Las solicitudes GET tienen restricciones de longitud</li>
                                <li>Las solicitudes GET solo se utilizan para solicitar datos (no modificar)</li>
                            </ul>
                            <img style="height: 200px;" src="images/get.png" alt="Get">
                            <pre>URL: https://app.utmachala.edu.ec/siutmach/public/?nombre=elian&amp;apellido=ramirez&amp;edad=22&amp;genero=hombre</pre>
                        </div>
                        <div>
                            <h1 style="color:#2F1C6A">
                                Método POST
                            </h1>
                            <p>
                                POST se utiliza para enviar datos a un servidor para crear/actualizar un recurso.
                            </p>
                            <p>
                                Algunas notas sobre las solicitudes POST:
                            </p>
                            <ul>
                                <li>Las solicitudes POST nunca se almacenan en caché</li>
                                <li>Las solicitudes POST no permanecen en el historial del navegador</li>
                                <li>Las solicitudes POST no tienen restricciones en la longitud de los datos</li>
                            </ul>
                            <img style="height: 230px;" src="images/post.png" alt="Post">
                            <pre>URL: https://app.utmachala.edu.ec/siutmach/public</pre>
                        </div>
                        <div>
                            <h1 style="color:#2F1C6A">
                                Diferencias Principales
                            </h1>
                            <table border="1" class="default">
                                <tr>
                                    <td align="center">En el método GET la información <br> es visible en la URL lo que
                                        <br> aumenta las vulnerabilidades y <br> el riesgo de hacking. Por el contrario,
                                        <br> el método POST no muestra variables <br> en la URL y también se pueden
                                        utilizar <br> múltiples técnicas de codificación, <br> lo que lo hace
                                        resistente.
                                    </td>
                                    <td align="center">Los datos del método GET se pueden <br> almacenar en caché,
                                        mientras <br> que los datos del método POST no.</td>
                                    <td align="center">En el motodo POST el navegador advierte <br> de que los datos del
                                        formulario se enviarán <br>de nuevo</td>
                                    <td align="center">POST es un poco más seguro que GET porque <br> los parámetros no
                                        se almacenan en el <br> historial del navegador ni en los registros del servidor
                                        web.</td>
                                </tr>
                            </table>
                        </div>
                    </section>
                    <br><br>
                    <hr>
                    <br>
                    <section>
                        <h1 style="color:#2F1C6A" id="respuesta"> <strong> Deja una respuesta</strong> </h1>
                        <h3> ¿Algo que nos quieras comentar?</h3>
                        <textarea name="textarea" rows="10" cols="50">Write something here</textarea>
                        <div class="content">
                            <div class="contact-form">
                                <h3>Inscribete <span> Ahora</span></h3>
                                <form >
                                    <fieldset>
                                        <legend>Datos personales</legend>
                                        <p>
                                            <label for="apellidos">Apellidos</label>
                                            <input type="text" name="apellidos" id="apellidos"
                                                placeholder="Escribe tú Apellido" required pattern="[A-Za-z]+"
                                                required />
                                        </p>
                                        <p>
                                            <label for="nombre">Nombres</label>
                                            <input type="text" name="nombre" id="nombre" placeholder="Escribe tu nombre"
                                                required pattern="[A-Za-z]+" required />
                                        </p>
                                        <p>
                                            <label for="email">Email</label>
                                            <input type="email" name="email" id="email" placeholder="example@gmail.com"
                                                required />
                                        </p>
                                        <p>
                                            <label for="edad">Edad</label>
                                            <input type="number" max="200" min="18" name="edad" id="edad" required />
                                        </p>
                                        <p>
                                            <label for="curso">Curso a inscribirse</label>
                                            <select name="curso" id="curso" required>
                                                <optgroup label="Diseño Front END">
                                                    <option value="HTML">HTML</option>
                                                    <option value="CSS">CSS</option>
                                                    <option value="Diseño UX">Diseño UX</option>
                                                </optgroup>
                                                <optgroup label="Back END">
                                                    <option value="JavaScript">JavaScript</option>
                                                    <option value="PHP">PHP</option>
                                                    <option value="PYTHON">PYTHON</option>
                                                </optgroup>
                                                <optgroup label="Base de Datos">
                                                    <option value="MongoDB">MongoDB</option>
                                                    <option value="SQL Server">SQL Server</option>
                                                    <option value="Mysql">Mysql</option>
                                                </optgroup>
                                            </select>
                                        </p>
                                        <p class="block">
                                            <label for="direccion">Dirección</label>
                                            <textarea name="direccion" id="direccion" rows="3"
                                                placeholder="Dejanos tú Dirección.." minlength="5"></textarea>
                                        </p>
                                        <p>
                                            <label for="seccions">Seccion</label>
                                            <input list="seccions" name="seccion" id="seccion" required />
                                            <datalist id="seccions">
                                                <option value="Vespertina"></option>
                                                <option value="Matutina"></option>
                                                <option value="Diurna"></option>
                                            </datalist>
                                        </p>
                                    </fieldset>
                                    <br />
                                    <p class="button">
                                        <button type="submit">Enviar</button>
                                    </p>
                                </form>
                                <div class="contact-info">
                                <h4>Usuario Registrado</h4>
                                  <ul>
                                    <li>
                                      <i class="fa-solid"> <?php echo $_POST["nombre"]; ?> </i>
                                    </li>
                                    <li>
                                      <i class="fa-solid"><?php echo $_POST["apellidos"]; ?></i>
                                    </li>
                                    <li>
                                      <i class="fa-solid"><?php echo $_POST["email"]; ?></i>
                                    </li>
                                  </ul>
                                  <p>
                                    Atento al correo electronico, pronto recibiras una respuesta de parte de la administracion.
                                  </p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <aside>
                        <h3 style="color:#2F1C6A"> More Information</h3>
                        <ol>
                            <li>
                                <a href="https://youtu.be/MJkdaVFHrto">
                                    HTML desde cero 🗓
                                </a>
                            </li>
                            <li>
                                <a href="https://youtu.be/wZniZEbPAzk">
                                    CSS desde cero 🗓
                                </a>
                            </li>
                            <li>
                                <a href="https://youtu.be/RqQ1d1qEWlE">
                                    JS desde cero 🗓
                                </a>
                            </li>
                        </ol>
                    </aside>
                </article>
            </main>
        </div>
    </div>
</body>
<br><br>
<hr>
<br>
<footer>
    © 2022-2023 Experience.ec - Cursos de Programacion - Frontend & Backend.
</footer>

</html>