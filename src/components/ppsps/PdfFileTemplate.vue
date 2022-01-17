<template>
  <div class="container" id="testHtml">
    <div class="header-box mb-5">
      <div class="text-center">
        <h6 class="m-0">PLAN PARTICULIER DE SÉCURITÉ</h6>
        <h6 class="m-0">ET DE PROTECTION DE LA SANTÉ</h6>
      </div>
    </div>

    <h5>1 - RENSEIGNEMENTS ADMINISTRATIFS</h5>

    <h6>Chantier</h6>

    <div class="h-180 border-solid">
      <div v-if="$store.state.pps_ps.logo_path" class="h-180 border-solid">
        <div class="w-80 box-size-bor p-4 bg-gray float-left h-100">
          <p class="">
            Nom du chantier :
            <strong> {{ $store.state.pps_ps.chantier_name }} </strong>
          </p>
          <p class="mb-0">
            Adresse : <strong> {{ $store.state.pps_ps.address }} </strong>
          </p>
          <p class="mb-0">
            Ville : <strong> {{ $store.state.pps_ps.city }} </strong>
          </p>
        </div>
        <div class="w-20 box-size-bor float-right border-dashed h-100">
          <img :src="$store.state.pps_ps.logo_path" class="w-90 displayed" />
        </div>
      </div>

      <div class="w-100 box-size-bor p-4 bg-gray float-left h-100" v-else>
        <p class="">
          Nom du chantier :
          <strong> {{ $store.state.pps_ps.chantier_name }} </strong>
        </p>
        <p class="mb-0">
          Adresse : <strong> {{ $store.state.pps_ps.address }} </strong>
        </p>
        <p class="">
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>
            {{ $store.state.pps_ps.address_two }}
          </strong>
        </p>
      </div>
    </div>
    <h6>Description des travaux</h6>

    <div
      v-if="$store.state.pps_ps.chantier_lot"
      class="border-solid"
      :class="$store.state.pps_ps.chantier_lot.length > 3 ? 'h-260' : 'h-180'"
    >
      <div class="w-100 box-size-bor p-4 bg-gray float-left h-100">
        <p class="mb-0">
          <strong>
            {{ $store.state.pps_ps.chantier_description }}
          </strong>
        </p>

        <p class="mb-0">
          <strong>
            {{
              $store.state.pps_ps.chantier_lot.length > 1
                ? "Lots retenus"
                : "Lot retenus"
            }}
          </strong>
        </p>

        <ul>
          <li
            v-for="chantier_lot in $store.state.pps_ps.chantier_lot"
            :key="chantier_lot"
          >
            <p class="mb-0">
              <strong>{{ chantier_lot }}</strong>
            </p>
          </li>
        </ul>
      </div>
    </div>

    <h6>Responsable de l'opération</h6>

    <div class="h-200 border-solid">
      <div class="w-100 box-size-bor p-4 bg-gray float-left h-100">
        <p class="mb-0">
          date du PPSPS modifié : :
          <strong>{{ now }}</strong>
        </p>
        <p class="mb-0">
          Nom : <strong> {{ $store.state.pps_ps.responsable_name }} </strong>
        </p>
        <p class="mb-0">
          Tél : <strong> {{ $store.state.pps_ps.responsable_phone }} </strong>
        </p>
      </div>
    </div>

    <div class="html2pdf__page-break"></div>

    <h6>Identification de l'entreprise :</h6>
    <div class="w-100 border-solid box-size-bor p-4 mb-3 bg-gray float-left">
      <p class="mb-0">
        Nom : <strong> {{ $store.state.pps_ps.entreprise_name }} </strong>&nbsp;
        &nbsp; &nbsp; &nbsp; Tél :
        <strong> {{ $store.state.pps_ps.entreprise_phone }} </strong> &nbsp;
        &nbsp; &nbsp; &nbsp;
      </p>
      <p class="mb-0">
        Adresse :
        <strong> {{ $store.state.pps_ps.entreprise_address_one }} </strong>
      </p>
      <p class="">
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>
          {{ $store.state.pps_ps.entreprise_address_two }}
        </strong>
      </p>
      <p class="mb-0">
        Qualifications :
        <strong> {{ $store.state.pps_ps.entreprise_qualifications }} </strong>
      </p>
      <p class="mb-0">
        Responsable de la société :
        <strong>
          {{ $store.state.pps_ps.entreprise_ste_responsable_name }}
        </strong>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Responsable de
        chantier :<strong>
          {{ $store.state.pps_ps.entreprise_chantier_responsable_name }}
        </strong>
      </p>
    </div>

    <h6>Travaux :</h6>

    <div
      class="h-350 border-solid w-100 box-size-bor p-4 mb-3 bg-gray float-left"
    >
      <p class="mb-0">
        Nature des travaux :
        <strong> {{ $store.state.pps_ps.works_type }} </strong>&nbsp; &nbsp;
        &nbsp; &nbsp;
      </p>
      <p class="mb-0">
        Existence du plan général de coordination :
        <strong>
          {{ $store.state.pps_ps.works_is_cordination ? "Oui" : "Non" }}
        </strong>
      </p>
      <p>
        Démarrage des travaux :<strong>{{
          $store.state.pps_ps.works_start_date
        }}</strong>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fin des travaux :<strong>{{
          $store.state.pps_ps.works_ends_date
        }}</strong>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Avec un délais de :
        <strong>{{ $store.state.pps_ps.works_delay }}</strong>
      </p>

      <p>
        Effectif prévisionnel : min de
        {{ $store.state.pps_ps.works_effectif_min }} et un max de
        {{ $store.state.pps_ps.works_effectif_max }}.
      </p>

      <p>
        Nombre de travailleurs secouristes sur chantier :<strong>{{
          $store.state.pps_ps.works_secouristes_number
        }}</strong>
      </p>
      <hr />
      <p>
        Du lundi au jeudi :
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        de <strong>{{ $store.state.pps_ps.works_daily_morning_hour }}</strong> :
        <strong>{{ $store.state.pps_ps.works_daily_morning_minutes }}</strong> :
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; au
        <strong>{{ $store.state.pps_ps.works_daily_evning_hour }}</strong> :
        <strong>{{ $store.state.pps_ps.works_daily_evning_minutes }}</strong> :
      </p>

      <p>
        Le vendredi :
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        de
        <strong>{{ $store.state.pps_ps.works_friday_morning_hour }}</strong> :
        <strong>{{ $store.state.pps_ps.works_friday_morning_minutes }}</strong>
        : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; au
        <strong>{{ $store.state.pps_ps.works_friday_evning_hour }}</strong> :
        <strong>{{ $store.state.pps_ps.works_friday_evning_minutes }}</strong> :
      </p>
      <p>
        Approvisionnement : {{ $store.state.pps_ps.works_approvisionnement }}
      </p>
    </div>

    <h6>Travaux sous-traités :</h6>

    <div
      class="border-solid w-100 box-size-bor p-4 mb-3 bg-gray float-left"
      :style="
        $store.state.pps_ps.soutraits_number != 0
          ? 'height:' + $store.state.pps_ps.soutraits_number * 145 + 'px'
          : ''
      "
    >
      <h6 v-if="$store.state.pps_ps.soutraits_number == 0">Non</h6>
      <ul v-else>
        <!-- <hr /> -->

        <li
          v-for="(soutrait, index) in $store.state.pps_ps.soutraits"
          :key="index"
        >
          Entreprise N : <b>{{ index + 1 }}</b>
          <p class="mb-0">
            Entreprise : <strong>{{ soutrait.name }}</strong>
          </p>
          <p class="mb-0">
            Adresse : <strong>{{ soutrait.address }}</strong>
          </p>
          <p class="mb-0">
            Nature des travaux sous-traités :
            <strong>{{ soutrait.nature }}</strong>
          </p>
          <p>
            Diffusion du PPSPS
            <strong>{{ soutrait.diff_ppsps ? "Oui" : "Non" }}</strong>
          </p>
        </li>
      </ul>
    </div>

    <div class="html2pdf__page-break"></div>

    <h6>Désignation des participant :</h6>
    <div
      class="border-solid w-100 box-size-bor p-4 mb-3 bg-gray float-left h-850"
    >
      <h6>MAITRE D'OUVRAGE :</h6>

      <p>Nom :</p>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <b>
        {{ $store.state.pps_ps.maitre_ouvrage_name }}
      </b>
      <p>Adresse :</p>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <b>
        {{ $store.state.pps_ps.maitre_ouvrage_address }}
      </b>
      <p></p>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <b>
        {{ $store.state.pps_ps.maitre_ouvrage_address_two }}
      </b>
      <p>Téléphone :</p>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <b>
        {{ $store.state.pps_ps.maitre_ouvrage_phone }}
      </b>

      <h5>MAITRISE D'ŒUVRE :</h5>

      <p>Nom :</p>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <b>
        {{ $store.state.pps_ps.maitrise_ouvrage_name }}
      </b>
      <p>Adresse :</p>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <b>
        {{ $store.state.pps_ps.maitrise_ouvrage_address }}
      </b>
      <p></p>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <b>
        {{ $store.state.pps_ps.maitrise_ouvrage_address_two }}
      </b>
      <p>Téléphone :</p>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <b>
        {{ $store.state.pps_ps.maitrise_ouvrage_phone }}
      </b>

      <h5>COORDINATEUR SPS :</h5>

      <p>Nom :</p>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <b>
        {{ $store.state.pps_ps.coordinateur_sps_name }}
      </b>
      <p>Adresse :</p>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <b>
        {{ $store.state.pps_ps.coordinateur_sps_address }}
      </b>
      <p></p>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <b>
        {{ $store.state.pps_ps.coordinateur_sps_address_two }}
      </b>
      <p>Téléphone :</p>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <b>
        {{ $store.state.pps_ps.coordinateur_sps_phone }}
      </b>

      <p class="mb-0">
        Existe-t-il un plan général de coordination :
        <strong>
          {{ $store.state.pps_ps.works_is_cordination ? "Oui" : "Non" }}
        </strong>
      </p>
    </div>
    <div class="html2pdf__page-break"></div>

    <h6>Organismes de prévention :</h6>

    <div class="h-260 border-solid">
      <div class="w-100 box-size-bor p-4 bg-gray float-left h-260">
        <p class="">
          OPPBTP : <strong> {{ $store.state.pps_ps.oppbtp }} </strong>
        </p>
        <p class="">
          INSPECTION DU TRAVAIL :
          <strong> {{ $store.state.pps_ps.inspection_du_travail }} </strong>
        </p>
        <p class="">
          CRAM : <strong> {{ $store.state.pps_ps.cram }} </strong>
        </p>
        <p class="">
          MÉDECINE DU TRAVAIL :
          <strong> {{ $store.state.pps_ps.médecine_du_travail }} </strong>
        </p>
      </div>
    </div>

    <h5>2 - ORGANISATION PROPRE AU CHANTIER</h5>

    <h6>
      Emplacement des installations de chantier :
      {{ $store.state.pps_ps.chantier_emplacement }}
    </h6>
    <div class="h-180 border-solid">
      <div class="w-100 box-size-bor p-4 bg-gray float-left h-100">
        <p class="">
          Le client ou l'entreprise générale met à disposition les installations
          de chantier :
          <strong>VOIR PGC</strong>
        </p>
        <ul>
          <li
            v-for="item in $store.state.pps_ps.chantier_installations.length"
            :key="item"
          >
            <strong>{{ item }}</strong>
          </li>
        </ul>

        <p class="">
          <strong>
            {{ $store.state.pps_ps.chantier_description }}
          </strong>
        </p>
      </div>
    </div>

    <h6>Conditions de circulation et de stationnement sur le chantier</h6>
    <div class="h-360 border-solid">
      <div class="w-100 box-size-bor p-4 bg-gray float-left h-360">
        <p class="">
          Parking &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <strong>
            {{ $store.state.pps_ps.chantier_parking ? "Oui" : "Non" }}
          </strong>
        </p>
        <p class="">
          Plan de circulation : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <strong>
            {{ $store.state.pps_ps.chantier_plan_circulation ? "Oui" : "Non" }}
          </strong>
        </p>
        <h6>Organisation des livraisons :</h6>
        <p class="">
          horaires de livraison :
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <strong>{{ $store.state.pps_ps.chantier_livraison_morning }}</strong>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <strong>{{ $store.state.pps_ps.chantier_livraison_evening }}</strong>
        </p>
        <p>
          Le chef de chantier sera informé des dates et horaires de livraison.
        </p>
        <p>
          Lors de la réception des livraisons, un salarié guidera le chauffeur :
          livraison au pied du bâtiment accés sous-sol
        </p>

        <div v-if="$store.state.pps_ps.dhol">
          <h6>DHOL :</h6>
          <p>
            {{ $store.state.pps_ps.dhol }}
          </p>
        </div>
      </div>
    </div>

    <div class="html2pdf__page-break"></div>

    <h6>Modalités d'accueil du personnel sur le chantier</h6>
    <div class="h-900 border-solid">
      <div class="w-100 box-size-bor p-4 bg-gray float-left h-900">
        <p>
          Le personnel de l'entreprise, y compris les salariés intérimaires,
          devront revecoir, le jour de leur arrivée sur le chantier, une
          formation pratique appropriée en matière de sécurité.
        </p>
        <p>
          Cette formation sera assurée par le responsable de chantier et les
          chefs d'équipe et devra porter sur :
        </p>
        <ol>
          <li>Des chemins d'accès au site et aux différents locaux</li>
          <li>
            De la situation des différentes installations sanitaires communes du
            chantier (lavabos, WC…)
          </li>
          <li>
            Des règles de circulation et de stationnement internes à
            l'entreprise utilisatrice
          </li>
          <li>La sécurité pendant l'exécution du travail</li>
          <li>
            Les dispositions à prendre en cas d'incident, d'accident et
            d'incendie
          </li>
          <li>La situation et le contenu de la boîte de premiers secours</li>
          <li>
            De l'existence du plan général de coordination en matière de
            sécurité et de protection de la santé
          </li>
          <li>
            Des mesures inscrites au plan particulier de sécurité et de
            protection de la santé
          </li>
          <li>
            Respecter les gestes barrière conformément aux recommandations du
            ministère du travail contre le COVID-19
          </li>
        </ol>
        <hr />
        <p>
          La liste des salariés employés sur le chantier sera complétée et
          actualisée par le responsable de chantier. Chaque salarié émargera la
          liste à l'issue de la formation.
        </p>

        <table style="width: 100%" class="table table-success table-striped">
          <tr>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>POSTE</th>
            <th>SIGNATURE</th>
          </tr>

          <tr v-for="i in 10" :key="i">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </table>
      </div>
    </div>
    <div class="html2pdf__page-break"></div>

    <h6>
      Dispositions prises pour prévenir les risques liés à l'exécution des
      travaux
    </h6>
    <div class="h-900 border-solid">
      <div class="w-100 box-size-bor p-4 bg-gray float-left h-900">
        <h6>
          Mesures spécifiques de prévention des risques inhérents au chantier :
        </h6>

        <h6>Equipements de protection individuelle (EPI)</h6>
        <div class="float-left">
          <b class="float-left mr-3">NON CARTE PRO BTP</b>
          <div class="case-coche float-left mr-5px"></div>
          <span class="float-left mr-1">Oui</span>
          <div class="case-coche float-left mr-5px"></div>
          <span class="float-left">Non</span>
        </div>
        <br />
        <p>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <b><i>Pendant la durée des travaux : </i></b>
        </p>

        <p>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - le port
          du casque est obligatoire ;
        </p>

        <p>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - le port
          des chaussures de sécurité est obligatoire ;
        </p>
        <p>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - le port
          des protections auditives selon les travaux exécutés ;
        </p>
        <p>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - des
          lunettes sont remises au personnel pour toute tâche exposant à des
          éclats ou poussières ;
        </p>
        <p>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - des
          masques appropriés seront remis au personnel suivant les tâches à
          effectuer.
        </p>
        <p>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <b
            ><i>
              L'entreprise fournit également aux salariés les équipements de
              protection individuelle suivants :
            </i></b
          >
        </p>

        <p>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Gants.
        </p>
        <p>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -
          Vêtements de travail et de protection
        </p>
        <p>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Harnais
        </p>
        <p>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Gants
          adaptés
        </p>
        <p>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Masque
        </p>
        <p>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Lunette
        </p>
        <p>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -
          Oreillette
        </p>
        <p>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -
          Combinaison de travail
        </p>

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <p>
          <b
            ><i>
              Ces équipements sont révisés et renouvelés périodiquement.
            </i></b
          >
        </p>

        <h5>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          Equipements divers :
        </h5>
        <p>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
          Les véhicules sont équipés d'une trousse de premiers secours ainsi que
          le bureau de chantier.
        </p>
        <p>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
          Chaque responsable de chantier est en possession d'un téléphone
          portable entreprise.
        </p>
      </div>
    </div>

    <div class="html2pdf__page-break"></div>

    <div style="height: 1150px">
      <h5>3 - ORGANISATION DES SECOURS</h5>

      <h5>Secours</h5>
      <div class="text-center">
        <div>
          <img
            :src="require('../../../src/assets/numeros-durgence.jpg')"
            class="w-100"
            alt=""
          />
        </div>
      </div>

      <h5>Identification des moyens de secours :</h5>

      <h5>Consignes de premiers secours :</h5>
      <div class="h-85 border-solid">
        <div class="w-100 box-size-bor p-4 bg-gray float-left">
          <p>Document en annexe à afficher dans les vestiaires chantier.</p>
        </div>
      </div>

      <h5>Dispositions prises pour informer la direction de l'entreprise :</h5>

      <div class="h-85 border-solid mb-3">
        <div class="w-100 box-size-bor p-4 bg-gray float-left">
          <p>Document en annexe à afficher dans les vestiaires chantier.</p>
        </div>
      </div>
    </div>

    <div
      v-for="selected_lots_document in $store.getters.selected_lots_documents"
      :key="selected_lots_document"
      class="m-0 p-0 html2pdf__page-break"
      style="height: 1080px; position: relative"
    >
      <img
        style="position:absolute:top0;left:0;"
        class="w-100 h-100"
        :src="selected_lots_document"
      />
    </div>
  </div>
</template>



<script>
export default {
  computed: {
    now() {
      return window.moment().format("YYYY MM DD");
    },
  },
};
</script>



<style lang="scss">
$rems: 0 1 2 3 4 5;

$sizes: (
  10: 10%,
  20: 20%,
  30: 30%,
  40: 40%,
  50: 50%,
  60: 60%,
  70: 70%,
  80: 80%,
  90: 90%,
  95: 95%,
  100: 100%,
  auto: auto,
);

.text-center {
  text-align: center;
}

.separator-3 {
  margin-top: 3rem;
  margin-bottom: 3rem;
}

// Paddings
@each $r in $rems {
  .pt-#{$r} {
    padding-top: #{$r}rem;
  }
  .pb-#{$r} {
    padding-bottom: #{$r}rem;
  }
  .pl-#{$r} {
    padding-left: #{$r}rem;
  }
  .pr-#{$r} {
    padding-right: #{$r}rem;
  }
  .p-#{$r} {
    padding: #{$r}rem;
  }
}
.p-auto {
  padding: auto;
}

// Margins
@each $r in $rems {
  .mt-#{$r} {
    margin-top: #{$r}rem;
  }
  .mb-#{$r} {
    margin-bottom: #{$r}rem;
  }
  .ml-#{$r} {
    margin-left: #{$r}rem;
  }
  .mr-#{$r} {
    margin-right: #{$r}rem;
  }
  .m-#{$r} {
    margin: #{$r}rem;
  }
}
.m-auto {
  margin: auto;
}

// Widths+heights
@each $number, $size in $sizes {
  .w-#{$number} {
    width: $size;
  }
  .h-#{$number} {
    height: $size;
  }
}

// Fonts
@each $r in $rems {
  .f-#{$r} {
    font-size: #{$r}rem;
  }
}

.f-1-5 {
  font-size: 1.5rem;
}

.float-right {
  float: right;
}

.float-left {
  float: left;
}

.bg-gray {
  background: rgba(128, 128, 128, 0.308);
}

.bg-gray-light {
  background: rgba(128, 128, 128, 0.15);
}

.bg-red {
  background: red;
}
.box-size-bor {
  box-sizing: border-box;
}

.w-800 {
  width: 900px !important;
}

.border-dashed {
  border: 1px dashed gray;
}

.border-solid {
  border: 1px solid black;
}

@for $i from 1 through 100 {
  $value: $i * 10;
  .h-#{$value} {
    height: #{$value}px;
  }
}

.displayed {
  display: block;
  margin: auto;
  margin-top: 25%;
}

.mr-5px {
  margin-right: 5px;
}

.case-coche {
  width: 1rem;
  height: 1rem;
  background: #e68d8d;
  border: 1px solid black;
}

table,
th,
td {
  border: 1px solid black;
  text-align: center;
}

th,
td {
  height: 30px;
}
</style>