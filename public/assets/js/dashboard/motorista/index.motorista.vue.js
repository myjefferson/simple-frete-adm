new Vue({
    el: '#page-motorista',
    data: {
            loading: true,
            errored: false,
            motoristas: []
    },
    mounted() {
        axios({
            method: 'get',
            url: '/action/motorista/all-motoristas'
        })
        .then(res => {
            this.motoristas = res.data
            console.log(this.motoristas)
        })
        .catch(error => {
            this.errored = true
        })
        .finally(() => {
            this.loading = false
        })
    },
})