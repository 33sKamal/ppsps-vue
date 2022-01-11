<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">


    <link rel="stylesheet" href="{{ asset('css/pps-ps-pdf.css') }}">

</head>

<body>

    <div id="container">
        <div class="header-box mb-5">
            <div class="text-center">
                <h2 class="m-0">
                    PLAN PARTICULIER DE SÉCURITÉ
                </h2>
                <h2 class="m-0">
                    ET DE PROTECTION DE LA SANTÉ
                </h2>

            </div>
        </div>

        <div class="separator-3"></div>

        <h2>1 - RENSEIGNEMENTS ADMINISTRATIFS</h2>

        <h3>Chantier</h3>

        <div class="h-180 border-solid">

            @if ($store.state.pps_ps.logo_path)
                <div class="w-80 box-size-bor p-1 bg-gray float-left h-100">
                    <p class="">Nom du chantier : <strong> {{ $store.state.pps_ps.chantier_name }} </strong> </p>
                    <p class="mb-0">Adresse : <strong> {{ $store.state.pps_ps.address }} </strong> </p>
                    <p class="mb-0">Ville : <strong> {{ $store.state.pps_ps.city }} </strong> </p>
                </div>
                <div class="w-20 box-size-bor float-right border-dashed h-100 ">
                    <img src="{{ asset($store.state.pps_ps.logo_path) }}" class="w-90 displayed">
                </div>
            @else
                <div class="w-100 box-size-bor p-1 bg-gray float-left h-100">
                    <p class="">Nom du chantier : <strong> {{ $store.state.pps_ps.chantier_name }} </strong> </p>
                    <p class="mb-0">Adresse : <strong> {{ $store.state.pps_ps.address }} </strong> </p>
                    <p class=""> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>
                            {{ $store.state.pps_ps.address_two }} </strong></p>
                </div>
            @endif
        </div>

        <h3>Description des travaux</h3>

        @if ($store.state.pps_ps.chantier_lot)
            <div class="{{ count($store.state.pps_ps.chantier_lot) > 3 ? 'h-260' : 'h-180' }} border-solid ">
                <div class="w-100  box-size-bor p-1 bg-gray float-left h-100">
                    <p class="mb-0"><strong>
                            {{                             $store.state.pps_ps.chantier_description }}
                        </strong>
                    </p>


                    <p class="mb-0">
                        <strong>
                            @if (count($store.state.pps_ps.chantier_lot) > 1)
                                Lots retenus
                            @else
                                Lot retenu
                            @endif
                        </strong>
                    </p>

                    <ul>
                        @foreach ($store.state.pps_ps.chantier_lot as $chantier_lot)
                            <li>
                                <p class="mb-0">
                                    <strong>{{ $chantier_lot }}</strong>
                                </p>
                            </li>
                        @endforeach

                    </ul>

                </div>
            </div>
        @endif

        <h3>Responsable de l'opération</h3>

        <div class="h-200 border-solid">
            <div class="w-100 box-size-bor p-1 bg-gray float-left h-100">
                <p class="mb-0">date  du PPSPS modifié : : <strong> {{ now()->format('d/m/Y') }} </strong>
                </p>
                <p class="mb-0">Nom : <strong> {{ $store.state.pps_ps.responsable_name }} </strong> </p>
                <p class="mb-0">Tél : <strong> {{ $store.state.pps_ps.responsable_phone }} </strong> </p>
            </div>
        </div>

        <div class="new-page"></div>

        <h3>Identification de l'entreprise :</h3>
        <div class="w-100 border-solid box-size-bor p-1 mb-3 bg-gray float-left ">
            <p class="mb-0">Nom : <strong> {{ $store.state.pps_ps.entreprise_name }} </strong>&nbsp; &nbsp; &nbsp;
                &nbsp; Tél : <strong> {{ $store.state.pps_ps.entreprise_phone }} </strong> &nbsp; &nbsp; &nbsp; &nbsp; </p>
            <p class="mb-0">Adresse : <strong> {{ $store.state.pps_ps.entreprise_address_one }} </strong> </p>
            <p class=""> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>
                    {{ $store.state.pps_ps.entreprise_address_two }} </strong></p>
            <p class="mb-0">Qualifications : <strong> {{ $store.state.pps_ps.entreprise_qualifications }} </strong> </p>
            <p class="mb-0">
                Responsable de la société : <strong> {{ $store.state.pps_ps.entreprise_ste_responsable_name }} </strong>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                Responsable de chantier :<strong> {{ $store.state.pps_ps.entreprise_chantier_responsable_name }} </strong> </p>
        </div>


        <h3>Travaux :</h3>

        <div class="border-solid w-100 box-size-bor p-1 mb-3 bg-gray float-left h-100">
            <p class="mb-0">Nature des travaux : <strong> {{ $store.state.pps_ps.works_type }} </strong>&nbsp; &nbsp;
                &nbsp; &nbsp; </p>
            <p class="mb-0">Existence du plan général de coordination : <strong>
                    {{ $store.state.pps_ps.works_is_cordination ? 'Oui' : 'Non' }} </strong> </p>
            @php
                $date_begin = now()->subDays(rand(0, 90));
            @endphp

            <p>
                Démarrage des travaux :<strong>{{ $store.state.pps_ps.works_start_date }}</strong>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Fin des travaux :<strong>{{ $store.state.pps_ps.works_ends_date }}</strong>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Avec un délais de : <strong>{{ $store.state.pps_ps.works_delay }}</strong>
            </p>


            @php
                $min_effectif = rand(0, 5);
            @endphp
            <p>
                Effectif prévisionnel : min de {{ $store.state.pps_ps.works_effectif_min }} et un max de
                {{ $store.state.pps_ps.works_effectif_max }}.
            </p>

            <p>
                Nombre de travailleurs secouristes sur chantier
                :<strong>{{ $store.state.pps_ps.works_secouristes_number }}</strong>
            </p>
            <hr>
            <p>
                Du lundi au jeudi :
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                de <strong>{{ $store.state.pps_ps.works_daily_morning_hour }}</strong> :
                <strong>{{ $store.state.pps_ps.works_daily_morning_minutes }}</strong> :
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                au <strong>{{ $store.state.pps_ps.works_daily_evning_hour }}</strong> :
                <strong>{{ $store.state.pps_ps.works_daily_evning_minutes }}</strong> :
            <p>
                Le vendredi :
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                de <strong>{{ $store.state.pps_ps.works_friday_morning_hour }}</strong> :
                <strong>{{ $store.state.pps_ps.works_friday_morning_minutes }}</strong> :
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                au <strong>{{ $store.state.pps_ps.works_friday_evning_hour }}</strong> :
                <strong>{{ $store.state.pps_ps.works_friday_evning_minutes }}</strong> :

            </p>
            <p>
                Approvisionnement : {{ $store.state.pps_ps.works_approvisionnement }}
            </p>
        </div>

        <h3>Travaux sous-traités :</h3>

        <div class="border-solid w-100 box-size-bor p-1 mb-3 bg-gray float-left h-100">


            @if ($store.state.pps_ps.soutraits_number == 0)
                <h4>
                    Non
                </h4>

            @else

                <ul>
                    @for ($i = 0; $i < count($store.state.pps_ps.soutraits_id); $i++)

                        @if ($i >= 1)
                            <hr>
                        @endif

                        <li>
                            Entreprise N : <b>{{ $i + 1 }}</b>
                            <p class="mb-0">
                                Entreprise : <strong>{{ $store.state.pps_ps.soutraits_name[$i] }}</strong>
                            </p>
                            <p class="mb-0">
                                Adresse : <strong>{{ $store.state.pps_ps.soutraits_address[$i] }}</strong>
                            </p>
                            <p class="mb-0">
                                Nature des travaux sous-traités : <strong>{{ $store.state.pps_ps.soutraits_nature[$i] }}</strong>
                            </p>
                            <p>
                                Diffusion du PPSPS
                                <strong>{{ $store.state.pps_ps.soutraits_diff_ppsps[$i] ? 'Oui' : 'Non' }}</strong>
                            </p>

                        </li>
                    @endfor

                </ul>
            @endif

        </div>

        <div class="new-page"></div>

        <h3>Désignation des participant :</h3>

        <div class="border-solid w-100 box-size-bor p-1 mb-3 bg-gray float-left h-100">

            <h4>MAITRE D'OUVRAGE :</h4>

            <p>Nom : </p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <b>
                {{                 $store.state.pps_ps.maitre_ouvrage_name }}
            </b>
            <p>Adresse : </p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <b>
                {{                 $store.state.pps_ps.maitre_ouvrage_address }}
            </b>
            <p> </p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <b>
                {{                 $store.state.pps_ps.maitre_ouvrage_address_two }}
            </b>
            <p>Téléphone : </p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <b>
                {{                 $store.state.pps_ps.maitre_ouvrage_phone }}
            </b>

            <h4>MAITRISE D'ŒUVRE :</h4>

            <p>Nom : </p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <b>
                {{                 $store.state.pps_ps.maitrise_ouvrage_name }}
            </b>
            <p>Adresse : </p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <b>
                {{                 $store.state.pps_ps.maitrise_ouvrage_address }}
            </b>
            <p> </p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <b>
                {{                 $store.state.pps_ps.maitrise_ouvrage_address_two }}
            </b>
            <p>Téléphone : </p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <b>
                {{                 $store.state.pps_ps.maitrise_ouvrage_phone }}
            </b>

            <h4>COORDINATEUR SPS :</h4>

            <p>Nom : </p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <b>
                {{                 $store.state.pps_ps.coordinateur_sps_name }}
            </b>
            <p>Adresse : </p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <b>
                {{                 $store.state.pps_ps.coordinateur_sps_address }}
            </b>
            <p> </p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <b>
                {{                 $store.state.pps_ps.coordinateur_sps_address_two }}
            </b>
            <p>Téléphone : </p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <b>
                {{                 $store.state.pps_ps.coordinateur_sps_phone }}
            </b>


            <p class="mb-0">
                Existe-t-il un plan général de coordination : <strong>
                    {{ $store.state.pps_ps.works_is_cordination ? 'Oui' : 'Non' }} </strong> </p>

        </div>

        <div class="new-page"></div>

        <h3>Organismes de prévention : </h3>

        <div class="h-260 border-solid">
            <div class="w-100 box-size-bor p-1 bg-gray float-left h-260">
                <p class="">OPPBTP : <strong> {{ $store.state.pps_ps.oppbtp }} </strong> </p>
                <p class="">INSPECTION DU TRAVAIL : <strong> {{ $store.state.pps_ps.inspection_du_travail }}
                    </strong> </p>
                <p class="">CRAM : <strong> {{ $store.state.pps_ps.cram }} </strong> </p>
                <p class="">MÉDECINE DU TRAVAIL : <strong> {{ $store.state.pps_ps.médecine_du_travail }} </strong>
                </p>
            </div>
        </div>

        <h2 class="">2 - ORGANISATION PROPRE AU CHANTIER</h2>


        <h3>Emplacement des installations de chantier : {{ $store.state.pps_ps.chantier_emplacement }}</h3>
        <div class="h-180 border-solid ">
            <div class="w-100  box-size-bor p-1 bg-gray float-left h-100">
                <p class="">
                    Le client ou l'entreprise générale met à disposition les installations de chantier :
                    <strong>VOIR PGC</strong>
                </p>
                <ul>
                    @for ($i = 0; $i < count($store.state.pps_ps.chantier_installations); $i++)
                        <li>
                            <strong>{{ $store.state.pps_ps.chantier_installations[$i] }}</strong>
                        </li>
                    @endfor
                </ul>

                <p class=""><strong>
                        {{                         $store.state.pps_ps.chantier_description }}
                    </strong>
                </p>
            </div>
        </div>

        <h3>Conditions de circulation et de stationnement sur le chantier</h3>
        <div class="h-360 border-solid ">
            <div class="w-100  box-size-bor p-1 bg-gray float-left h-360">
                <p class="">
                    Parking
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <strong>
                        {{ $store.state.pps_ps.chantier_parking ? 'Oui' : 'Non' }}
                    </strong>

                </p>
                <p class="">
                    Plan de circulation :
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <strong>
                        {{ $store.state.pps_ps.chantier_plan_circulation ? 'Oui' : 'Non' }}
                    </strong>
                </p>
                <h4>Organisation des livraisons : </h4>
                <p class="">
                    horaires de livraison :
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <strong>{{ $store.state.pps_ps.chantier_livraison_morning }}</strong>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <strong>{{ $store.state.pps_ps.chantier_livraison_evening }}</strong>
                </p>
                <p>Le chef de chantier sera informé des dates et horaires de livraison.</p>
                <p>
                    Lors de la réception des livraisons, un salarié guidera le chauffeur : livraison au pied du
                    bâtiment accés sous-sol
                </p>

                @if ($store.state.pps_ps.dhol)
                    <h4>DHOL :</h4>
                    <p>
                        {{                         $store.state.pps_ps.dhol }}
                    </p>

                @endif



            </div>
        </div>

        <div class="new-page"></div>

        <h3>Modalités d'accueil du personnel sur le chantier</h3>
        <div class="h-780 border-solid ">
            <div class="w-100  box-size-bor p-1 bg-gray float-left h-780">
                <p>
                    Le personnel de l'entreprise, y compris les salariés intérimaires, devront revecoir, le jour de leur
                    arrivée sur le chantier, une formation pratique appropriée en matière de sécurité.
                </p>
                <p>
                    Cette formation sera assurée par le responsable de chantier et les chefs d'équipe et devra porter
                    sur :
                </p>
                <ol>
                    <li>Des chemins d'accès au site et aux différents locaux </li>
                    <li>De la situation des différentes installations sanitaires communes du chantier (lavabos, WC…)
                    </li>
                    <li>Des règles de circulation et de stationnement internes à l'entreprise utilisatrice</li>
                    <li>La sécurité pendant l'exécution du travail</li>
                    <li>Les dispositions à prendre en cas d'incident, d'accident et d'incendie</li>
                    <li>La situation et le contenu de la boîte de premiers secours</li>
                    <li>De l'existence du plan général de coordination en matière de sécurité et de protection de la
                        santé</li>
                    <li>Des mesures inscrites au plan particulier de sécurité et de protection de la santé </li>
                    <li>Respecter les gestes barrière conformément aux recommandations du ministère du travail contre le
                        COVID-19</li>
                </ol>
                <hr>
                <p>
                    La liste des salariés employés sur le chantier sera complétée et actualisée par le responsable
                    de chantier. Chaque salarié émargera la liste à l'issue de la formation.
                </p>


                <table style="width:100%">
                    <tr>
                        <th>NOM</th>
                        <th>PRENOM</th>
                        <th>POSTE</th>
                        <th>SIGNATURE</th>
                    </tr>

                    @for ($i = 0; $i < 10; $i++)
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endfor
                </table>
            </div>
        </div>
        <div class="new-page"></div>

        <h3>Dispositions prises pour prévenir les risques liés à l'exécution des travaux</h3>
        <div class="h-850 border-solid ">
            <div class="w-100  box-size-bor p-1 bg-gray float-left h-850">
                <h4>
                    Mesures spécifiques de prévention des risques inhérents au chantier :
                </h4>

                <h4>
                    Equipements de protection individuelle (EPI)
                </h4>
                <div class="float-left">
                    <b class="float-left mr-3"> NON CARTE PRO BTP</b>
                    <div class="case-coche float-left mr-5px"></div>
                    <span class="float-left mr-1">Oui</span>
                    <div class="case-coche float-left mr-5px"></div>
                    <span class="float-left">Non</span>
                </div>
                <br>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <b><i>Pendant la durée des travaux : </i></b>
                </p>

                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    - le port du casque est obligatoire ;
                </p>

                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    - le port des chaussures de sécurité est obligatoire ;
                </p>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    - le port des protections auditives selon les travaux exécutés ;
                </p>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    - des lunettes sont remises au personnel pour toute tâche exposant à des éclats ou poussières ;
                </p>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    - des masques appropriés seront remis au personnel suivant les tâches à effectuer.
                </p>


                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <b><i>
                        L'entreprise fournit également aux salariés les équipements de protection individuelle suivants
                        :
                    </i></b></p>

                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    - Gants.
                </p>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    - Vêtements
                    de travail et de protection</p>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    - Harnais
                </p>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    - Gants adaptés</p>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    - Masque
                </p>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    - Lunette
                </p>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    - Oreillette
                </p>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    - Combinaison de travail</p>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



                <b><i>
                        Ces équipements sont révisés et renouvelés périodiquement.
                    </i></b></p>

                <h5>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Equipements divers :</h5>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;
                    Les véhicules sont équipés d'une trousse de premiers secours ainsi que le bureau de chantier.</p>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;
                    Chaque responsable de chantier est en possession d'un téléphone portable entreprise.</p>
                <h5>
            </div>
        </div>

        <div class="new-page"></div>


        <h2>3 - ORGANISATION DES SECOURS </h2>

        <h3>Secours</h3>
        <div class="text-center">
            <div>
                <img src="{{ asset('storage/images/numeros-durgence.jpg') }}" class="w-100" alt="">
            </div>
        </div>


        <h3>Identification des moyens de secours :</h3>


        <h3>Consignes de premiers secours :</h3>
        <div class="h-85 border-solid ">
            <div class="w-100  box-size-bor p-1 bg-gray float-left h-100">
                <p>
                    Document en annexe à afficher dans les vestiaires chantier.
                </p>
            </div>
        </div>

        <h3>
            Dispositions prises pour informer la direction de l'entreprise :
        </h3>

        <div class="h-85 border-solid mb-3">
            <div class="w-100  box-size-bor p-1 bg-gray float-left h-100">
                <p>
                    Document en annexe à afficher dans les vestiaires chantier.
                </p>
            </div>
        </div>

        @if (count($store.state.pps_ps.chantier_lot_array))
            @foreach ($store.state.pps_ps.chantier_lot_array as $chantier_lot_array)
                <div class="separator-3"></div>
                <img class="w-100 h-100" src="{{ asset($chantier_lot_array) }}" alt="">
            @endforeach
        @endif
    </div>

</body>

</html>
