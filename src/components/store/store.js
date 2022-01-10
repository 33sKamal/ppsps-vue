

import Vuex from 'vuex'
export default new Vuex.Store({

    namespaced: true,

    state: {

        pps_ps: {
            soutraits: [],

            first_name: '',
            last_name: '',
            email: '',
            phone: '',
            chantier_name: '',
            chantier_phone: '',
            logo_path: '',
            address: '',
            address_two: '',
            city: '',
            chantier_id: '',

            chantier_lot: [
            ],
            chantier_description: '',

            responsable_name: '',
            responsable_phone: '',
            responsable_visa: '',
            responsable_indice_ppsps: '',

            entreprise_name: '',
            entreprise_address_one: '',
            entreprise_address_two: '',
            entreprise_phone: '',
            entreprise_fax: '',
            entreprise_qualifications: '',
            entreprise_ste_responsable_name: '',
            entreprise_chantier_responsable_name: '',

            works_type: '',
            works_is_cordination: '',

            works_delay: '',
            works_start_date: '',
            works_ends_date: '',

            works_effectif_min: '',
            works_effectif_max: '',

            works_secouristes_number: '',


            works_approvisionnement: '',
            works_daily_morning_hour: '08',
            works_daily_morning_minutes: '00',
            works_daily_evning_hour: '17',
            works_daily_evning_minutes: '00',
            works_friday_morning_hour: '08',
            works_friday_morning_minutes: '00',
            works_friday_evning_hour: '17',
            works_friday_evning_minutes: '00',

            maitre_ouvrage_name: '',
            maitre_ouvrage_address: '',
            maitre_ouvrage_address_two: '',
            maitre_ouvrage_phone: '',
            maitre_ouvrage_fax: '',

            maitrise_ouvrage_name: '',
            maitrise_ouvrage_address: '',
            maitrise_ouvrage_address_two: '',
            maitrise_ouvrage_phone: '',
            maitrise_ouvrage_fax: '',

            coordinateur_sps_name: '',
            coordinateur_sps_address: '',
            coordinateur_sps_address_two: '',
            coordinateur_sps_phone: '',
            coordinateur_sps_fax: '',

            oppbtp: '',
            inspection_du_travail: '',
            cram: '',
            médecine_du_travail: '',


            chantier_emplacement: '',
            chantier_installations: [],
            dhol: "",
            chantier_parking: false,
            chantier_plan_circulation: false,
            chantier_organisation_livraison: '',
            chantier_livraison_morning: '8H00 à 12H00',
            chantier_livraison_evening: '8H00 à 12H00',

            // feilds added for the compoenents ointeraction
            has_soutrait: true,
            soutraits_number: 0,
            payment_method: 'card-payment',


        },

        errors: [],

        form: {
            actvie_step: 1,
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
        }


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




            // state.form.steps.push({id:4,title : 'CHANTIER (Partie II)'})










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


    },


})
