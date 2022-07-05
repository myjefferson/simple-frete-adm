new Vue({
    el: '#page-pagamento',
    data: {
        contentType: {'Content-Type': 'multipart/form-data'},
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
    methods: {
        confirmarPagamento(freteID){
            
            if(freteID != "" && freteID != undefined){
                let formData = new FormData();    
                formData.append('action',           'confirmFrete')   
                formData.append('situacaoFreteID',  3)   
                formData.append('freteID',          freteID)   
    
                axios({
                    method: 'post',
                    url: `/action/frete/confirmFrete`,
                    data: formData,
                    config: { headers: this.contentType }
                })
                .then(res => {
                    this.fretes.splice(this.fretes.indexOf(freteID), 1)
                })
                .catch(error => {
                    console.log("Erro na requisição")
                })
            }else{
                alert("Selecione um pagamento");
            }
        }
    },
    mounted() {
        axios({
            method: 'get',
            url: '/action/frete/all-fretes?situacaoFreteID=2',
            config: 'stream'
        })
        .then(res => {
            //console.log(this.fretes);
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