@extends('templates.main')
@section('titulo_pagina', 'Cookies')

@section('estilos')

@endsection


@section('contenido')

    <section class="container bg-light mb-4 p-3 " style="margin-top: 7em">
        <div class="mb-4">
            <h2 class="text-uppercase font-weight-bold">Qué son las cookies y por qué las utilizamos en
                Tecnoforyou</h2>
            <p>Una cookie es un fichero que se descarga en el dispositivo del usuario al acceder a determinadas
                páginas
                web para almacenar y recuperar información sobre la navegación que se efectúa desde dicho
                equipo.</p>

            <p> Las cookies permiten a dicha web, entre otras cosas, almacenar y recuperar información sobre las
                decisiones y hábitos del usuario. En Tecnoforyou las utilizamos para personalizar la experiencia
                dentro
                de nuestras webs, identificar y recordar al usuario registrado y facilitar la navegación.</p>

            <p>Es importante destacar que el uso de cookies no proporciona datos personales del usuario, que de cara
                a
                Tecnoforyou permanece anónimo.</p>

            <p>El usuario puede configurar su navegador para no aceptar el uso de cookies, en cuyo caso la
                personalización de la experiencia no se aplicaría aunque sí podrá seguir accediendo a los contenidos
                de
                nuestras webs con normalidad.</p>

            <p>En la página de Wikipedia <a href="https://es.wikipedia.org/wiki/Cookie_(informática)" class="text-info"
                                            target="_blank">(https://es.wikipedia.org/wiki/Cookie_(informática))</a> es
                posible obtener más información
                acerca de qué son las cookies y cómo funcionan.</p>
        </div>
        <hr>
        <div class="mb-4">
            <p>
                Las Cookies, en función de su permanencia, pueden dividirse en Cookies de sesión o permanentes. Las
                primeras expiran cuando el usuario cierra el navegador. Las segundas expiran en función cuando se
                cumpla
                el objetivo para el que sirven (por ejemplo, para que el usuario se mantenga identificado en
                Tecnoforyou) o bien cuando se borran manualmente.
            </p>
            <p>
                Adicionalmente, en función de su objetivo, las Cookies pueden clasificarse de la siguiente forma:

            </p>
            <p><strong>Cookies de registro:</strong> las Cookies de registro se generan una vez que el Usuario se ha
                registrado o posteriormente ha abierto su sesión, y se utilizan para identificarle en las web y
                servicios con los siguientes objetivos:</p>
            <ul>
                <li>Mantener al usuario identificado de forma que, si cierra un servicio o web, el navegador o el
                    ordenador y en otro momento u otro día vuelve a entrar en dicho servicio o web, seguirá
                    identificado, facilitando así su navegación sin tener que volver a identificarse. Esta
                    funcionalidad
                    se puede suprimir si el usuario pulsa la funcionalidad “Cerrar Sesión”, de forma que esta Cookie
                    se
                    elimina
                    y la próxima vez que entre en la web el usuario tendrá que iniciar sesión para estar
                    identificado.
                </li>
                <li>Comprobar si el usuario está autorizado para acceder a ciertos servicios, por ejemplo, para
                    escribir comentarios.
                </li>
                <li>Adicionalmente, algunos servicios pueden utilizar conectores de terceros tales como Facebook,
                    Twitter o Google. Cuando el usuario se registra en un servicio con credenciales de una red
                    social o
                    sistema de identificación de terceros, autoriza al mismo a guardar una cookie persistente que
                    recuerda su identidad y le garantiza acceso a la web hasta que expira. El usuario puede borrar
                    esta
                    cookie y revocar el acceso a la web mediante redes sociales o sistema de identificación de
                    terceros
                    actualizando sus preferencias en la red social que específica.
                </li>
            </ul>
            <p><strong>Cookies de analítica:</strong> cada vez que un Usuario visita una Web o Servicio, una
                herramienta
                de un proveedor externo (Google Analytics, Chartbeat, comScore y similares) genera una cookie
                analítica
                en el dispositivo del usuario. Esta cookie que sólo se genera en la visita, servirá en próximas
                visitas
                a los servicios de Tecnoforyou para identificar de forma anónima al visitante. Los objetivos
                principales
                que se persiguen son:</p>
            <ul>
                <li>Identificar de forma anónima los contenidos más visitados y por lo tanto más atractivos para los
                    usuarios.
                </li>
                <li>Saber si el usuario que está accediendo es nuevo o repite visita.</li>
            </ul>
            <p><strong>Cookies de geolocalización:</strong> eestas Cookies son utilizadas para averiguar en qué país se
                encuentra cuando se solicita una web o servicio. Esta Cookie es totalmente anónima, y sólo se utiliza
                para ayudar a orientar el contenido a su ubicación, como por ejemplo a efectos de idioma. En ningún caso
                registramos la ubicación exacta desde donde nos estés visitando ni tampoco guardamos información de
                geolocalización de tus dispositivos.</p>
        </div>
        <hr>
        <div class="mb-5">
            <h2>Cómo deshabilitar las cookies en el navegador</h2>
            <p>La mayoría de navegadores actualmente permiten al usuario configurar si desean aceptar cookies y
                cuáles
                de ellas. Estos ajustes normalmente se encuentra en las ‘opciones’ o ‘Preferencias’ del menú de su
                navegador.</p>
            <p>Estas son las instrucciones para configurar las cookies en los principales navegadores:</p>
            <ul>
                <li><strong>Chrome:</strong> Configuración -&gt; Mostrar opciones avanzadas -&gt; Privacidad -&gt;
                    Configuración de contenido. Para más información, puede consultar el soporte de Google o la
                    Ayuda
                    del navegador.
                </li>
                <li><strong>Firefox:</strong> Herramientas -&gt; Opciones -&gt; Privacidad -&gt; Historial -&gt;
                    Configuración Personalizada. Para más información, puede consultar el soporte de Mozilla o la
                    Ayuda
                    del navegador.
                </li>
                <li><strong>Internet Explorer:</strong> Herramientas -&gt; Opciones de Internet -&gt; Privacidad -&gt;
                    Configuración. Para más información, puede consultar el soporte de Microsoft o la Ayuda del
                    navegador.
                </li>
                <li><strong>Safari:</strong> Preferencias -&gt; Seguridad. Para más información, puede consultar el
                    soporte de Apple o la Ayuda del navegador.
                </li>
            </ul>

            <h2 class="text-uppercase">Qué cookies utilizamos en Tecnoforyou
            </h2>

            <ul>
                <li> Recordar su inicio de sesion</li>
                <li>Comprender y guardar las preferencias del usuario para futuras visitas.</li>
            </ul>
            <br>
            <br>
        </div>
    </section>
@endsection
