new Vue({
    el: '#page-solicitacao',
    data: {
            contentType: {'Content-Type': 'multipart/form-data'},
            loading: true,
            errored: false,
            fretes: [],
            selected: [],

            FreteID: "",
            dataCriacao: "",
            enderecoOrigem: "",
            enderecoDestino: "",
            tempoEntrega: "",
            valorTotal: ""
    },
    methods:{
        selectFrete(freteid){
            const findSelected = this.fretes.find(id => (id.FreteID === freteid)) 
            this.selected = findSelected

            onChangeHandler(this.selected.enderecoOrigem, this.selected.enderecoDestino)
        },

        confirmarSolicitacao(freteID){
            
            if(freteID != "" && freteID != undefined){
                let formData = new FormData();    
                formData.append('action',           'confirmSolicitacao')   
                formData.append('situacaoFreteID',  2)   
                formData.append('freteID',          freteID)   
                //formData.append('clienteid',    clienteid)
                // formData.append('motoristaid',    clienteid)
                // formData.append('caminhaoid',    this.selected.caminhaoid)
    
                axios({
                    method: 'post',
                    url: `/action/frete/confirmSolicitacao`,
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
            url: '/action/frete/all-fretes?situacaoFreteID=1'
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