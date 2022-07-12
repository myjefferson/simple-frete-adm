new Vue({
    el: '#page-andamento',
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
            document.getElementById("more-details").style.width = "25%"
            document.getElementById("list-fretes").style.width = "25%"
            
            var element = document.querySelectorAll(".list-fretes")
            element.forEach(h => h.classList.remove("col-sm-6"))
        },

        finalizarFrete(freteID){
            
            if(freteID != "" && freteID != undefined){
                let formData = new FormData();    
                formData.append('action',           'confirmFrete')   
                formData.append('situacaoFreteID',  5)   
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
                alert("Selecione uma solicitação");
            }
        }
    },
    mounted() {
        axios({
            method: 'get',
            url: '/action/frete/all-fretes?situacaoFreteID=4'
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