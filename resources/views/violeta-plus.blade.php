@extends('layouts.template-interior')

@section('section')
    <section id="h-logo">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <img src="{{ asset('img/Icons/Logo-Almada-inv.png') }}" class="img-fluid logo-h" alt="">
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 p-0">
                    <img src="{{ asset('img/violeta-plus/cabeceras-fachada-1.jpg') }}" class="img-fluid fachada-violeta"
                        alt="">
                </div>
            </div>
        </div>

    </section>


    <section id="amenidades-m">
        <div class="container-fluid">
            <div class="row ameni">
                <div class="col-lg-4 col-md-4 col-sm-6 imag-planta">
                    <img src="{{ asset('img/violeta-plus/GC_Violeta_Plus_Planta_Baja_02.png') }}" class="img-fluid planta-b"
                        alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 ameni-txt">
                    <h1>Modelo Violeta Plus</h1>
                    <li>Terreno desde: 7 x 17 m </li>
                    <li>Construcción: 65.73 m2</li>
                    <br>

                    <li>Casa de 2 plantas <br>
                        Pasillo lateral <br>
                        Amplio patio <br>
                    </li> <br>
                    <li style="font-weight: 600" class="boold">Planta Arquitectónica</li> <br>
                    <li style="font-weight: 600" class="boold">PLANTA BAJA</li>
                    <li>Sala / Comedor</li>
                    <li>Cocina</li>
                    <li>1/2 baño</li>
                    <li style="font-weight: 600" class="boold">PLANTA ALTA</li>
                    <li>Recámara principal con área
                        para clóset y baño completo</li>
                    <li>Recámara secundaria con área
                        para clóset</li>
                    <li>1 Baño Completo</li>




                    <br>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 imag-planta">
                    <img src="{{ asset('img/violeta-plus/GC_Violeta_Plus_Planta_Alta02.png') }}" class="img-fluid planta-b"
                        alt="">
                </div>

            </div>
        </div>

    </section>




    <section id="formulario">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">

                    <h2 class="un-desarrollo" style="text-align: center;">Un desarrollo de</h2>
                    <div style="text-align: center">
                        <img src="{{ asset('img/Icons/Logo-Calzada.svg') }}" alt="" class="img-fluid circulo-calzada">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 formulario-2">
                    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
                    <script>
                        hbspt.forms.create({
                            portalId: "5510950",
                            formId: "4f90ffd0-7b0f-4c20-a2db-b9e052b6a546"
                        });

                    </script>
                </div>
            </div>
        </div>
    </section>
@endsection
