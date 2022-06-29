new Vue({
    el: '#page-motoristas',
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
            //console.log(this.motoristas);
            this.motoristas = res.data
        })
        .catch(error => {
            this.errored = true
        })
        .finally(() => {
            this.loading = false
        })
    },
})