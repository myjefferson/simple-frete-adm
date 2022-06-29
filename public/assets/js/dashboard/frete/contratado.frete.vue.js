new Vue({
    el: '#page-contratado',
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
            url: '/action/frete/all-fretes?situacaoFreteID=3'
        })
        .then(res => {
            this.fretes = res.data
        })
        .catch(error => {
            this.errored = true
        })
        .finally(() => {
            this.loading = false
        })
    },
})