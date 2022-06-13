new Vue({
    el: '#page-index-fretes',
    data: {
            loading: true,
            errored: false,
            fretes: [],

            FreteID: "",
            dataCriacao: "",
            enderecoOrigem: "",
            enderecoDestino: "",
            tempoEntrega: "",
            valorTotal: ""
    },
    mounted() {
        axios({
            method: 'get',
            url: '/action/frete/all-fretes'
        })
        .then(res => {
            //console.log(this.fretes);
            this.fretes = res.data.status
        })
        .catch(error => {
            this.errored = true
        })
        .finally(() => {
            this.loading = false
        })
    },
})