new Vue({
    el: '#page-finalizado',
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
    method: {
        confirmarPagamento(freteID){
            
            if(freteID != "" && freteID != undefined){
                let formData = new FormData();    
                formData.append('action',           'confirmPagamento')   
                formData.append('situacaoFreteID',  3)   
                formData.append('freteID',          freteID)   
                //formData.append('clienteid',    clienteid)
                // formData.append('motoristaid',    clienteid)
                // formData.append('caminhaoid',    this.selected.caminhaoid)
    
                axios({
                    method: 'post',
                    url: `/action/frete/confirmPagamento`,
                    data: formData,
                    config: { headers: this.contentType }
                })
                .then(res => {
                    console.log("rodando")
                })
                .catch(error => {
                    console.log("Erro na requisição")
                })
                .finally(() => {
                    //this.loading = false
                })
            }else{
                alert("Selecione uma solicitação");
            }
        }
    },
    mounted() {
        axios({
            method: 'get',
            url: '/action/frete/all-fretes?situacaoFreteID=5',
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