    <!--<title>Categorias</title>   /* PREGUNTAR SI PONER title en cada pag-->
    <?php include __DIR__.'/include/menu.php'?>

    <section id="main-content-categorias">
        <header>
            <h1> Todas las Categorias</h1>
        </header>

        <div class="categorias-content">

                <ul>
                    <?PHP foreach($result as $categoria): ?>
                        <li>
                            <a
                                    href="index.php?page=productos"> <img src="img/categorias/<?PHP echo $categoria['imagenes_categorias']?>.<?PHP echo $categoria['formato_imagen']?>" alt="<?PHP echo $catergoria['nombre_categoria']?>"></a>
                        </li>
                        </li>
                    <?php endforeach;?>
                </ul>

            </div>

        <p>El protocol per enviar i rebre correus electrònics és l’SMTP. Què és doncs un servei de correu via web com el Gmail?
            EL gmail es un fronted, se utilitza el servidor http. solament se utilitza smtp para enviar desde el servidor al destinatari.
            no es fa servir ni pop ni imap, en el movil es probable que sí que estiguin utilizat imap.


            Per a què s'utilitzen els protocols SMTP, IMAP, i POP3. Quins protocols utilitzen els mètodes d'accés i recuperació de mails “online,” “offline”, i desconnectat?


            Creus que Usenet es podria re-emplaçar de forma eficient per algun tipus de mecanisme que utilitzés el correu?
            no porque los protocolos estan implentado de forma diferent


            Per què creus que XML és actualment utilitzat de forma tan comuna i en aplicacions tan diferents?
            En primer lloc perque es un standard i aixo ajuda molt, es molt estructurat no dona lloc a dubtes, te molta flexibilitat  i permet creixer sende deixer antic el altres documents
            DTD document type description,

            Com estan relacionats WSDL i UDDI?</p>
    </section>


