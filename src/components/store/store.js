

import Vuex from 'vuex'
export default new Vuex.Store({

    namespaced: true,

    state: {

        pps_ps: {
            soutraits: [],

            first_name: 'test test test test',
            last_name: 'test test test test',
            email: 'test test test test',
            phone: 'test test test test',
            chantier_name: 'test test test test',
            chantier_phone: 'test test test test',
            logo_path: null,
            address: 'test test test test',
            address_two: 'test test test test',
            city: 'test test test test',
            chantier_id: 'test test test test',

            chantier_lot: [
                'Terrassement / VRD',
                'Démolition',
                'Gros œuvre',
                'Couverture / étanchéité',
                'Charpente',
                'Revêtement façade / Bardage',
            ],
            chantier_description: 'test test test test',

            responsable_name: 'test test test test',
            responsable_phone: 'test test test test',
            responsable_visa: 'test test test test',
            responsable_indice_ppsps: 'test test test test',

            entreprise_name: 'test test test test',
            entreprise_address_one: 'test test test test',
            entreprise_address_two: 'test test test test',
            entreprise_phone: 'test test test test',
            entreprise_fax: 'test test test test',
            entreprise_qualifications: 'test test test test',
            entreprise_ste_responsable_name: 'test test test test',
            entreprise_chantier_responsable_name: 'test test test test',

            works_type: 'test test test test',
            works_is_cordination: 'test test test test',

            works_delay: 'test test test test',
            works_start_date: 'test test test test',
            works_ends_date: 'test test test test',

            works_effectif_min: 'test test test test',
            works_effectif_max: 'test test test test',

            works_secouristes_number: 'test test test test',


            works_approvisionnement: 'test test test test',
            works_daily_morning_hour: '08',
            works_daily_morning_minutes: '00',
            works_daily_evning_hour: '17',
            works_daily_evning_minutes: '00',
            works_friday_morning_hour: '08',
            works_friday_morning_minutes: '00',
            works_friday_evning_hour: '17',
            works_friday_evning_minutes: '00',

            maitre_ouvrage_name: 'test test test test',
            maitre_ouvrage_address: 'test test test test',
            maitre_ouvrage_address_two: 'test test test test',
            maitre_ouvrage_phone: 'test test test test',
            maitre_ouvrage_fax: 'test test test test',

            maitrise_ouvrage_name: 'test test test test',
            maitrise_ouvrage_address: 'test test test test',
            maitrise_ouvrage_address_two: 'test test test test',
            maitrise_ouvrage_phone: 'test test test test',
            maitrise_ouvrage_fax: 'test test test test',

            coordinateur_sps_name: 'test test test test',
            coordinateur_sps_address: 'test test test test',
            coordinateur_sps_address_two: 'test test test test',
            coordinateur_sps_phone: 'test test test test',
            coordinateur_sps_fax: 'test test test test',

            oppbtp: 'test test test test',
            inspection_du_travail: 'test test test test',
            cram: 'test test test test',
            médecine_du_travail: 'test test test test',


            chantier_emplacement: 'test test test test',
            chantier_installations: [],
            dhol: "",
            chantier_parking: false,
            chantier_plan_circulation: false,
            chantier_organisation_livraison: 'test test test test',
            chantier_livraison_morning: '8H00 à 12H00',
            chantier_livraison_evening: '8H00 à 12H00',

            // feilds added for the compoenents ointeraction
            has_soutrait: true,
            soutraits_number: 0,
            payment_method: 'card-payment',


        },

        errors: [],

        form: {
            actvie_step: 0,
            steps_title: [
                { id: 1, title: 'CHANTIER (Partie I)' },
                { id: 2, title: 'DESCRIPTION DES TRAVAUX' },
                { id: 3, title: "RESPONSABLE DE L'OPÉRATION" },
                { id: 4, title: "IDENTIFICATION DE L'ENTREPRISE" },
                { id: 5, title: "TRAVAUX (Partie I)" },
                { id: 6, title: "TRAVAUX (Partie II)" },
                { id: 7, title: "TRAVAUX SOUS-TRAITÉS (Partie I)" },
                { id: 8, title: "TRAVAUX SOUS-TRAITÉS (Partie II)" },
                { id: 9, title: "DÉSIGNATION DES PARTICIPANTS" },
                { id: 10, title: "ORGANISMES DE PRÉVENTION" },
                { id: 11, title: "ORGANISATION PROPRE AU CHANTIER" },
                { id: 12, title: "PAIEMENT" },
                { id: 1, title: 'CHANTIER (Partie I)' },
                { id: 2, title: 'DESCRIPTION DES TRAVAUX' },
                { id: 3, title: "RESPONSABLE DE L'OPÉRATION" },
                { id: 4, title: "IDENTIFICATION DE L'ENTREPRISE" },
                { id: 5, title: "TRAVAUX (Partie I)" },
                { id: 6, title: "TRAVAUX (Partie II)" },
                { id: 7, title: "TRAVAUX SOUS-TRAITÉS (Partie I)" },
                { id: 8, title: "TRAVAUX SOUS-TRAITÉS (Partie II)" },
                { id: 9, title: "DÉSIGNATION DES PARTICIPANTS" },
                { id: 10, title: "ORGANISMES DE PRÉVENTION" },
                { id: 11, title: "ORGANISATION PROPRE AU CHANTIER" },
                { id: 12, title: "PAIEMENT" }
            ]
        },


        lots: [

            'Terrassement / VRD',
            'Démolition',
            'Gros œuvre',
            'Couverture / étanchéité',
            'Charpente',
            'Revêtement façade / Bardage',
            'Menuiserie Extérieures',
            'Menuiseries Intérieures',
            'Plâtrerie / Isolation / Faux plafonds',
            'Revêtement Sol',
            'Electricité',
            'Chauffage / Ventilation / Climatisation',
            'Plomberie',
            'Nettoyage de chantier / Finitions',

        ],

        lots_documents: [

            {
                title: "Couverture / étanchéité",
                files: [
                    require('../../../src/assets/lots/couverture-étanchéité/couverture-étanchéité-1.jpg'),
                    require('../../../src/assets/lots/couverture-étanchéité/couverture-étanchéité-2.jpg'),
                ]
            },
            {
                title: "Démolition",
                files: [
                    require('../../../src/assets/lots/démolition/démolition.jpg'),
                ]
            },

            {
                title: "Electricité",
                files: [

                    require('../../../src/assets/lots/electricité/electricité-1.jpg'),
                    require('../../../src/assets/lots/electricité/electricité-2.jpg'),
                ]
            },

            {
                title: "Plomberie",
                files: [
                    require('../../../src/assets/lots/plomberie/plomberie-1.jpg'),
                    require('../../../src/assets/lots/plomberie/plomberie-2.jpg'),
                ]
            },

            {
                title: "Plâtrerie / Isolation / Faux plafonds",
                files: [
                    require('../../../src/assets/lots/plâtrerie-isolation-faux-plafonds/plâtrerie-isolation-faux-plafonds-1.jpg'),
                    require('../../../src/assets/lots/plâtrerie-isolation-faux-plafonds/plâtrerie-isolation-faux-plafonds-2.jpg'),
                ]
            },
            {
                title: "Revêtement Sol",
                files: [
                    require('../../../src/assets/lots/revêtement-sol/revêtement-sol-1.jpg'),
                    require('../../../src/assets/lots/revêtement-sol/revêtement-sol-2.jpg'),
                ]
            },

            {
                title: "Terrassement / VRD",
                files: [
                    require('../../../src/assets/lots/terrassement-vrd/terrassement-vrd-1.jpg')
                ]
            },

            {
                title: "Charpente",
                files: [
                    require('../../../src/assets/lots/fiche-charpente/fiche-charpente-1.jpg'),
                    require('../../../src/assets/lots/fiche-charpente/fiche-charpente-2.jpg')

                ]
            },

            {
                title: "Gros œuvre",
                files: [
                    require('../../../src/assets/lots/fiche-gros-oeuvre-page/fiche-gros-oeuvre-page-1.jpg'),
                    require('../../../src/assets/lots/fiche-gros-oeuvre-page/fiche-gros-oeuvre-page-2.jpg')
                ]
            },
            {
                title: "Menuiserie Extérieures",
                files: [
                    require('../../../src/assets/lots/fiche-menuiseries-exterieures/fiche-menuiseries-exterieures-1.jpg'),
                    require('../../../src/assets/lots/fiche-menuiseries-exterieures/fiche-menuiseries-exterieures-2.jpg')

                ]
            },
            {
                title: "Menuiseries Intérieures",
                files: [
                    require('../../../src/assets/lots/fiche-menuiseries-interieures/fiche-menuiseries-interieures-1.jpg'),
                    require('../../../src/assets/lots/fiche-menuiseries-interieures/fiche-menuiseries-interieures-2.jpg')

                ]
            },
        ],

    },

    mutations: {

        GO_TO: (state, page) => {
            state.form.actvie_step = page
            state.form.step_title = state.form.steps.find(({ id }) => id == state.form.actvie_step).title

        },

        NEXT_SPTEP: (state) => {
            state.form.actvie_step++
            // state.form.actvie_step  = 13

            state.form.step_title = state.form.steps.find(({ id }) => id == state.form.actvie_step).title
        },

        PREVIOUS_SPTEP: (state) => {
            state.form.actvie_step--
            state.form.step_title = state.form.steps.find(({ id }) => id == state.form.actvie_step).title

        },

        GO_TO_STEP: (state, payload) => state.form.actvie_step = payload,
        //  initalize the steep
        INIT_STEP: (state) => {

            // state.form.steps.push({id:1000,title : "PAIEMENT (Par carte)"})
            state.form.actvie_step = state.form.steps[0].id
            state.form.step_title = state.form.steps[0].title

            // default soutr
            if (state.pps_ps.soutraits_number > 0) {
                for (let i = 1; i <= state.pps_ps.soutraits_number; i++) {
                    state.pps_ps.soutraits.push({
                        id: i,
                        name: 'name ' + i,
                        address: 'address ' + i,
                        nature: 'nature ' + i,
                        diff_ppsps: true,
                    })
                }
            }


        },



        // Load the ppsps data if the user wanna update his own ppsps data
        LOAD_PPSPS: (state, payload) => state.pps_ps = payload,


        GENERATE_SOUTRAITS: (state) => {
            state.pps_ps.soutraits = []
            for (let i = 1; i <= state.pps_ps.soutraits_number; i++) {
                state.pps_ps.soutraits.push({
                    id: i,
                    name: ':',
                    address: ':',
                    nature: ':',
                    diff_ppsps: true,
                })
            }

        }


    },

    actions: {

        // paginate to teh next step by incrimenting  the active step number
        goNextStep: ({ commit, state }) => {

            // check if we are in the payment
            if (state.form.actvie_step == 7 && !state.pps_ps.soutraits_number) {
                commit('GO_TO', 9)
            } else {
                commit('NEXT_SPTEP')
            }

        },

        // paginate to teh previous step by decrimenting  the active step number
        goPreviousStep: ({ commit, state }) => {

            if (state.form.actvie_step == 9 && !state.pps_ps.soutraits_number) {
                commit('GO_TO', 7)
            } else {
                commit('PREVIOUS_SPTEP')
            }

        },

        goToStep: ({ commit }, payload) => commit('GO_TO_STEP', payload),

        initStep: ({ commit }) => commit('INIT_STEP'),


        generateSoutraits: ({ commit }, soutris_new_number) => {
            commit('GENERATE_SOUTRAITS', soutris_new_number)
        },


        //  validate a form
        clearError: ({ state }, key) => {
            state.form.errors = state.form.errors.filter(k => k != key)
        },

        // Check the state of navigate btn
        navigateBtnStates: ({ state }) => {
            // active/disactivate the previous btn
            document.querySelector('.previous-btn').disabled = state.form.actvie_step == 1

            // active/disactivate the next btn
            if (state.form.actvie_step < 12) {
                document.querySelector('.next-btn').disabled = state.form.actvie_step == state.form.steps.length
            }

        },


        // load the ppsps data if the user wanna update his pspsp
        loadPpsps: ({ commit }, payload) => {
            commit('LOAD_PPSPS', payload)
        }

    },


    getters: {
        pps_ps: (state) => state.pps_ps,
        form: (state) => state.form,
        errors: (state) => state.errors,
        actvie_title: (state) => state.form.steps_title.find(({ id }) => id == state.form.actvie_step)?.title,
        actvie_step: (state) => state.form.actvie_step,

        selected_lots_documents : (state) => {

            let arrays =  state.lots_documents.filter(l => state.lots.includes(l.title))
            .map(el=>{
                return el.files
            })
            return  arrays.flat(1);
            // lots_documents.map(lot_doc => {

            // })
            // lots_documents

        }



    },


})
