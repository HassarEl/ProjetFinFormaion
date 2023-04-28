@extends('layouts.master')

@section('title')
    Nouvel Fiche
@endsection

@section('css')
    <style>
        @import url('https://rsms.me/inter/inter.css');
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css");
        :root {
            --tblr-font-sans-serif: Inter, -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }
    </style>
    <style>
        .bg-info{
            background: rgb(23,151,184) !important;
            background: linear-gradient(310deg, rgba(23, 152, 184, 0.65) 0%, rgba(23,173,184,0.65) 100%) !important;
            box-shadow: 8px 10px 20px #66666676;
            border-radius: 10px;
            border: 1px solid #fff;
        }
    </style>


@endsection

@section('title_page1')
    Home
@endsection

@section('title_page2')
    Nouvel Fiche
@endsection

@section('content')
    <section class="content">
        <div class="content container cadre">
            <fieldset class="bg-info">
                {{-- Header Parameter --}}
                <div class="p-4">
                    <div class="col-sm-12">
                        <h2 class="pl-5">
                            <i class="bi bi-file-earmark-plus"></i>
                            Nouvel Fiche
                        </h2>
                    </div>
                    <br>
                    <form class="row gy-2 gx-3 align-items-center" action="">
                        <div class="col-4">
                            <i class="bi bi-file-medical"></i>
                            <input type="text" placeholder="N° Fiche" class="form-control" required>
                        </div>
                        <div class="col-4">
                            <i class="bi bi-person"></i>
                            <input type="text" name="Patinent" placeholder="Patinent" class="form-control" required>
                        </div>
                        <div class="col-4">
                            <i class="bi bi-people-fill icon"></i>
                            <input type="text" placeholder="Docteur" class="form-control" required>
                        </div>
                        <hr>
                        <div class="col-4">
                            <i class="bi bi-eyedropper"></i>
                            <select class="form-control sel" name="teinte">
                                <option value="teinte">Teinte</option>
                                <option value="A1">A1</option>
                                <option value="A2">A2</option>
                                <option value="A3">A3</option>
                                <option value="A3.5">A3.5</option>
                                <option value="B1">B1</option>
                                <option value="B2">B2</option>
                                <option value="C1">C1</option>
                                <option value="C2">C2</option>
                            </select>
                        </div>

                    </form>
                    <hr>
                    <!--Nature de travail-->
                    <div class="row">
                        <legend id="ndt">Nature de travail</legend>

                        <div class="col-6">
                            <h5>Fix & Moubile</h5>
                            <select class="form-control sel">
                                <option>CCM</option>
                                <option>IN Ceram</option>
                                <option>CVI</option>
                                <option>C Coulée</option>
                                <option>C Prov</option>
                                <option>FM</option>
                                <option>Implant</option>
                                <option>Stelite</option>
                                <option>Akerse</option>
                                <option>PAP</option>
                                <option>PAT</option>
                                <option>Flexible</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <h5>N° de dents</h5>
                            <input type="number" min="0" max="32" placeholder="N° de dents" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h5>Observation</h5>
                            <input type="text" name="Obs" placeholder="Obs" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <br>
                            <h5>Date D'entrer</h5>
                            <i class="bi bi-calendar3 icon"></i>
                            <input type="date" id="start" name="trip-start" min="2020-01-01">
                        </div>
                        <div class="col-6">
                            <br>
                            <h5>Date de Sortie</h5>
                            <i class="bi bi-calendar3 icon"></i>
                            <input type="date" id="start" name="trip-start" min="2020-01-01">
                        </div>
                    </div>
                    <br>
                    <hr>
                    <br>
                    <div class="row">
                        <div class="col btn" required="required">
                            <button type="submit" class="btn btn-success col-8 Envoyer">Ajouter</button>
                            <button type="reset" class="btn btn-danger col-3 Effacer">Effacer</button>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
    </section>
@endsection

@section('scripts')

@endsection 