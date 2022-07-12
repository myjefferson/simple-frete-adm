new Vue({
    el: '#vue-veiculos',
    data: {
            loading: true,
            errored: false,
            veiculos: []
    },
    mounted() {
        axios({
            method: 'get',
            url: '/action/veiculo/all-veiculos'
        })
        .then(res => {
            this.veiculos = res.data
        })
        .catch(error => {
            this.errored = true
        })
        .finally(() => {
            this.loading = false
        })
    },
})