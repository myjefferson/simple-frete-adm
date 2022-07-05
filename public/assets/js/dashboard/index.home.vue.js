new Vue({
    el: '#page-home',
    data: {
            loading: true,
            errored: false,
            solicitaFretes: [],
            concluirFretes: []
    },
    mounted() {

        axios({
            method: 'get',
            url: '/action/frete/all-fretes?situacaoFreteID=1'
        })
        .then(res => {
            this.solicitaFretes = res.data
            console.log(this.fretes);
        })
        .catch(error => {
            this.errored = true
        })
        .finally(() => {
            this.loading = false
        })

        axios({
            method: 'get',
            url: '/action/frete/all-fretes?situacaoFreteID=4'
        })
        .then(res => {
            this.concluirFretes = res.data
            console.log(this.fretes);
        })
        .catch(error => {
            this.errored = true
        })
        .finally(() => {
            this.loading = false
        })
    },
})