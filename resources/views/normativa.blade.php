<html lang="{{ str_ireplace('_','-',app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smarttruck - Normativa</title>

    <!-- Styles -->
    @vite(['resources/css/app.css'])
    @vite('resources/css/header.css')
    @vite('resources/css/footer.css')
    @vite('resources/css/normativa.css')

    <!-- Scripts -->
    @vite('resources/js/navbar.js')
    @vite('resources/js/modal.js')

</head>
<body>
<header>
    @include('partials/header')
</header>
<main>

    <section>
        <div class="columns is-desktop m-6">
            <div class="column container-blue m-2 hoverable">
                <button class="js-modal-trigger button button-transparent p-6" data-target="modal-mng">
                    <h4 class="title is-4 has-text-white">Marco Normativo General</h4>
                </button>
            </div>
            <div class="column  container-blue m-2 hoverable">
                <button class="js-modal-trigger button button-transparent p-6" data-target="modal-ee">
                    <h4 class="title is-4 has-text-white">Estructura empresarial</h4>
                </button>
            </div>
            <div class="column  container-blue m-2 hoverable">
                <button class="js-modal-trigger button button-transparent p-6" data-target="modal-ce">
                    <h4 class="title is-4 has-text-white">Condiciones de equipo</h4>
                </button>
            </div>
            <div class="column  container-blue m-2 hoverable">
                <button class="js-modal-trigger button button-transparent p-6" data-target="modal-re">
                    <h4 class="title is-4 has-text-white">Relaciones Economicas</h4>
                </button>
            </div>


        </div>
        <div class="columns is-desktop m-6">
            <div class="column  container-blue m-2 hoverable">
                <button class="js-modal-trigger button button-transparent p-6" data-target="modal-nt">
                    <h4 class="title is-4 has-text-white">Normas de Transito</h4>
                </button>
            </div>
            <div class="column container-blue m-2 hoverable">
                <button class="js-modal-trigger button button-transparent p-6" data-target="modal-tm">
                    <h4 class="title is-4 has-text-white">Transporte Multimodal</h4>
                </button>
            </div>
            <div class="column  container-blue m-2 hoverable">
                <button class="js-modal-trigger button button-transparent p-6" data-target="modal-ti">
                    <h4 class="title is-4 has-text-white">Transporte Internacional</h4>
                </button>
            </div>
            <div class="column  container-blue m-2 hoverable">
                <button class="js-modal-trigger button button-transparent p-6" data-target="modal-mp">
                    <h4 class="title is-4 has-text-white">Mercancias Peligrosas</h4>
                </button>
            </div>
        </div>

    </section>
    <section>

        <!-- modales -->

        <!-- modal mng -->

        <div id="modal-mng" class="modal is-clipped">
            <div class="modal-background"></div>
            <div class="modal-content" style="max-height: none;">
                <div class="container-blue is-text-align-center">
                    <h2 class="is-text-align-center title is-2 has-text-white">Marco normativo</h2>

                    <a href="https://www.funcionpublica.gov.co/eva/gestornormativo/norma.php?i=41102" class="" target="_blank">
                        <button class="button is-rounded m-3">Decreto 410 de 1971</button>
                    </a>


                    <a href="https://www.funcionpublica.gov.co/eva/gestornormativo/norma.php?i=296" class="m-3"  target="_blank">
                        <button class="button is-rounded m-3">Ley 105 de 1993</button>
                    </a>

                    <a href="https://www.funcionpublica.gov.co/eva/gestornormativo/norma.php?i=346" class="m-3"  target="_blank">
                        <button class="button is-rounded m-3">Ley 336 de 1996</button>
                    </a>

                    <a href="https://www.funcionpublica.gov.co/eva/gestornormativo/norma.php?i=43101" class="m-3"  target="_blank">
                        <button class="button is-rounded m-3">Ley 1450 de 2011</button>
                    </a>

                    <a href="https://www.academia.edu/26478559/R%C3%89GIMEN_JUR%C3%8DDICO_DEL_TRANSPORTE_TERRESTRE_EN_COLOMBIA" class="m-3"  target="_blank">
                        <button class="button is-rounded m-3">Regimen Juridico</button>
                    </a>

                    <a href="https://www.redjurista.com/Documents/codigo_nacional_de_transito_terrestre_-_ley_769_de_2002.aspx#/" class="m-3"  target="_blank">
                        <button class="button is-rounded m-3">Ley 769 de 2002</button>
                    </a>

                </div>

            </div>
        </div>


        <!-- modal ee -->
        <div id="modal-ee" class="modal is-clipped">
            <div class="modal-background"></div>
            <div class="modal-content" style="max-height: none;">
                <div class="container-blue is-text-align-center">
                    <h2 class="is-text-align-center title is-2 has-text-white">Estructura Empresarial</h2>
                    <a href="https://www.suin-juriscol.gov.co/viewDocument.asp?ruta=Decretos/1390283" class="" target="_blank">
                        <button class="button is-rounded m-3">Decreto 2044 De 1988</button>
                    </a>


                    <a href="https://www.minsalud.gov.co/Normatividad_Nuevo/Forms/DispForm.aspx?ID=4909" class="m-3"  target="_blank">
                        <button class="button is-rounded m-3">Resolución No. 2165 de 2016</button>
                    </a>

                    <a href="https://www.funcionpublica.gov.co/eva/gestornormativo/norma.php?i=4308" class="m-3"  target="_blank">
                        <button class="button is-rounded m-3">Decreto 173 de 2001</button>
                    </a>

                    <a href="https://www.funcionpublica.gov.co/eva/gestornormativo/norma.php?i=43101" class="m-3"  target="_blank">
                        <button class="button is-rounded m-3">Ley 1450 de 2011</button>
                    </a>

                    <a href="https://www.academia.edu/26478559/R%C3%89GIMEN_JUR%C3%8DDICO_DEL_TRANSPORTE_TERRESTRE_EN_COLOMBIA" class="m-3"  target="_blank">
                        <button class="button is-rounded m-3">Regimen Juridico</button>
                    </a>

                    <a href="https://www.redjurista.com/Documents/codigo_nacional_de_transito_terrestre_-_ley_769_de_2002.aspx#/" class="m-3"  target="_blank">
                        <button class="button is-rounded m-3">Ley 769 de 2002</button>
                    </a>

                </div>

            </div>
        </div>

        <!-- modal ce -->
        <div id="modal-ce" class="modal is-clipped">
            <div class="modal-background"></div>
            <div class="modal-content" style="max-height: none;">
                <div class="container-blue is-text-align-center">
                    <h2 class="is-text-align-center title is-2 has-text-white">Condiciones de equipo </h2>
                    <a href="https://www.avancejuridico.com/actualidad/documentosoficiales/2002/44722/r_mt_02502_2002.html" class="" target="_blank">
                        <button class="button is-rounded m-3">Resolucion 2502 de 2002</button>
                    </a>


                    <a href="https://issuu.com/renatabecerra/docs/g2__becerra_gutierrez__contenedores" class="m-3"  target="_blank">
                        <button class="button is-rounded m-3">Manual de contenedores </button>
                    </a>

                    <a href="https://www.invias.gov.co/index.php/normativa/resoluciones-circulares-otros/10387-resolucion-4100-del-28-de-diciembre-de-2004" class="m-3"  target="_blank">
                        <button class="button is-rounded m-3">Resolucion 4100 de 2004</button>
                    </a>

                    <a href="https://www.minambiente.gov.co/asuntos-ambientales-sectorial-y-urbana/normativa-asociada-a-la-desintegracion-de-vehiculos/" class="m-3"  target="_blank">
                        <button class="button is-rounded m-3">Resolucion 646 de 2014</button>
                    </a>



                </div>

            </div>
        </div>

        <!-- modal re -->
        <div id="modal-re" class="modal is-clipped">
            <div class="modal-background"></div>
            <div class="modal-content" style="max-height: none;">
                <div class="container-blue is-text-align-center">
                    <h2 class="is-text-align-center title is-2 has-text-white">Relaciones Economicas </h2>
                    <a href="https://web.mintransporte.gov.co/jspui/handle/001/3845" class="" target="_blank">
                        <button class="button is-rounded m-3">Resolucion 2004 de 2004</button>
                    </a>


                    <a href="https://normativa.colpensiones.gov.co/colpens/docs/decreto_2092_2011.html" class="m-3"  target="_blank">
                        <button class="button is-rounded m-3">Dercreto 2092 de 2011</button>
                    </a>

                    <a href="file:///C:/Users/ADSI%202338894.DESKTOP-Q6BKV9E/Downloads/Costo_por_movilizaci%C3%B3n_y_por_tiempos_log%C3%ADsticos_SEPTIEMBRE2012_definitivo_(1).pdf" class="m-3"  target="_blank">
                        <button class="button is-rounded m-3">Resolucion 4350</button>
                    </a>

                </div>

            </div>

        </div>

        <!-- modal mng -->

        <div id="modal-mng" class="modal is-clipped">
            <div class="modal-background"></div>
            <div class="modal-content" style="max-height: none;">
                <div class="container-blue is-text-align-center">
                    <h2 class="is-text-align-center title is-2 has-text-white">Marco normativo</h2>

                    <a href="https://www.funcionpublica.gov.co/eva/gestornormativo/norma.php?i=41102" class="" target="_blank">
                        <button class="button is-rounded m-3">Decreto 410 de 1971</button>
                    </a>


                    <a href="https://www.funcionpublica.gov.co/eva/gestornormativo/norma.php?i=296" class="m-3"  target="_blank">
                        <button class="button is-rounded m-3">Ley 105 de 1993</button>
                    </a>

                    <a href="https://www.funcionpublica.gov.co/eva/gestornormativo/norma.php?i=346" class="m-3"  target="_blank">
                        <button class="button is-rounded m-3">Ley 336 de 1996</button>
                    </a>

                    <a href="https://www.funcionpublica.gov.co/eva/gestornormativo/norma.php?i=43101" class="m-3"  target="_blank">
                        <button class="button is-rounded m-3">Ley 1450 de 2011</button>
                    </a>

                    <a href="https://www.academia.edu/26478559/R%C3%89GIMEN_JUR%C3%8DDICO_DEL_TRANSPORTE_TERRESTRE_EN_COLOMBIA" class="m-3"  target="_blank">
                        <button class="button is-rounded m-3">Regimen Juridico</button>
                    </a>

                    <a href="https://www.redjurista.com/Documents/codigo_nacional_de_transito_terrestre_-_ley_769_de_2002.aspx#/" class="m-3"  target="_blank">
                        <button class="button is-rounded m-3">Ley 769 de 2002</button>
                    </a>

                </div>

            </div>
        </div>

        <!-- modal nt -->

        <div id="modal-nt" class="modal is-clipped">
            <div class="modal-background"></div>
            <div class="modal-content" style="max-height: none;">
                <div class="container-blue is-text-align-center">
                    <h2 class="is-text-align-center title is-2 has-text-white">Normas de transito</h2>

                    <a href="https://web.mintransporte.gov.co/jspui/handle/001/784" class="" target="_blank">
                        <button class="button is-rounded m-3">Acuerdo 051 de 1993</button>
                    </a>


                    <a href="https://www.funcionpublica.gov.co/eva/gestornormativo/norma.php?i=15424" class="m-3"  target="_blank">
                        <button class="button is-rounded m-3">Decreto 4116 de 2004</button>
                    </a>

                    <a href="http://www.avancejuridico.com/actualidad/documentosoficiales/2008/46892/r_mt_0319_2008.html#:~:text=RESOLUCION%20319%20DE%202008&text=Por%20la%20cual%20se%20dicta,transporte%20p%C3%BAblicoTerrestre%20Automotor%20de%20Carga." class="m-3"  target="_blank">
                        <button class="button is-rounded m-3">Resolucion 0319 de 2008</button>
                    </a>

                    <a href="https://web.mintransporte.gov.co/jspui/handle/001/3801" class="m-3"  target="_blank">
                        <button class="button is-rounded m-3">Resolucion 1050 de 2004</button>
                    </a>

                    <a href="https://www.icbf.gov.co/cargues/avance/docs/resolucion_mintransporte_1384_2010.html" class="m-3"  target="_blank">
                        <button class="button is-rounded m-3">Resolucion 1384 de 2010 </button>
                    </a>


                </div>

            </div>
        </div>

        <!-- modal tm -->

        <div id="modal-tm" class="modal is-clipped">
            <div class="modal-background"></div>
            <div class="modal-content" style="max-height: none;">
                <div class="container-blue is-text-align-center">
                    <h2 class="is-text-align-center title is-2 has-text-white">Transporte Multimodal</h2>

                    <a href="https://publicaciones.fasecolda.com/regimen-de-seguros/chapter/p3-c11-21/" class="" target="_blank">
                        <button class="button is-rounded m-3">Decreto 2685 de 1999</button>
                    </a>


                    <a href="https://www.redjurista.com/Documents/resolucion_4240_de_2000_.aspx#/" class="m-3"  target="_blank">
                        <button class="button is-rounded m-3">Resolucion 4240 de 2000 </button>
                    </a>

                    <a href="Decreto 1232 de 2001" class="m-3"  target="_blank">
                        <button class="button is-rounded m-3">Decreto 1232 de 2001</button>
                    </a>

                </div>

            </div>
        </div>

        <!-- modal ti -->

        <div id="modal-ti" class="modal is-clipped">
            <div class="modal-background"></div>
            <div class="modal-content" style="max-height: none;">
                <div class="container-blue is-text-align-center">
                    <h2 class="is-text-align-center title is-2 has-text-white">Transporte Internacional</h2>

                    <a href="https://www.suin-juriscol.gov.co/viewDocument.asp?id=1474389" class="" target="_blank">
                        <button class="button is-rounded m-3">Decreto 2628 de 2001</button>
                    </a>


                    <a href="https://www.suin-juriscol.gov.co/viewDocument.asp?ruta=Decretos/1304094" class="m-3"  target="_blank">
                        <button class="button is-rounded m-3">Decreto 1530 de 2008 </button>
                    </a>

                    <a href="https://www.suin-juriscol.gov.co/viewDocument.asp?id=1024991" class="m-3"  target="_blank">
                        <button class="button is-rounded m-3">Decreto 0111 de 2010</button>
                    </a>

                </div>

            </div>
        </div>

        <!-- modal mp -->

        <div id="modal-mp" class="modal is-clipped">
            <div class="modal-background"></div>
            <div class="modal-content" style="max-height: none;">
                <div class="container-blue is-text-align-center">
                    <h2 class="is-text-align-center title is-2 has-text-white">Mercancias Peligrosas</h2>

                    <a href="https://www.funcionpublica.gov.co/eva/gestornormativo/norma.php?i=6101#:~:text=El%20presente%20decreto%20tiene%20por,y%20el%20medio%20ambiente%2C%20de" class="" target="_blank">
                        <button class="button is-rounded m-3">Decreto 1609 de 2002</button>
                    </a>


                    <a href="https://www.suin-juriscol.gov.co/viewDocument.asp?ruta=Decretos/1304094" class="m-3"  target="_blank">
                        <button class="button is-rounded m-3">Decreto 1079 de 2015</button>
                    </a>


                </div>

            </div>
        </div>
    </section>

</main>
<footer>
    @include('partials/footer')
</footer>
</body>
