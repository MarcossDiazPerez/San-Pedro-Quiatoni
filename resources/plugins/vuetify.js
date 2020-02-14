// You still need to register Vuetify itself
// src/plugins/vuetify.js

import Vue from 'vue'
import Vuetify from 'vuetify/lib'
//import 'vuetify/dist/vuetify.min.css'
//import colors from 'vuetify/lib/util/colors'

Vue.use(Vuetify, {
    theme: {
        primary: '#9575CD',
        secondary:'#424242',
        otro:'#4CAF50',
        warning: '#F44336'
    },
    customProperties: true,
    iconfont: 'md',
})

const opts = {}

//export default new Vuetify(opts)
export default new Vuetify(opts)