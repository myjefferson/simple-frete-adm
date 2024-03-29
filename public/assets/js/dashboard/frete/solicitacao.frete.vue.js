new Vue({
    el: '#page-solicitacao',
    data: {
            contentType: {'Content-Type': 'multipart/form-data'},
            loading: true,
            errored: false,
            options: {
                'titleCriar': 'Crar solicitação',
                'linkCriar': 'link/criar'
            },

            fretes: [],
            motoristas: [],
            cargas: [],
            veiculos: [],

            selected: [],

            VeiculoID: "",
            FreteID: "",
            dataCriacao: "",
            enderecoOrigem: "",
            enderecoDestino: "",
            selectedCarga: "",
            selectedVeiculo: "",
            selectedMotorista: "",
            tempoEntrega: "",
            valorTotal: ""
    },
    methods:{
        selectFrete(freteid){
            const findSelected = this.fretes.find(id => (id.FreteID === freteid)) 
            this.selected = findSelected

            console.log(this.selected)

            onChangeHandler(this.selected.enderecoOrigem, this.selected.enderecoDestino)
            document.getElementById("more-details").style.width = "25%"
            document.getElementById("list-fretes").style.width = "25%"
            
            var element = document.querySelectorAll(".list-fretes")
            element.forEach(h => h.classList.remove("col-sm-6"))
        },

        confirmarSolicitacao(freteID){
            
            if(freteID != "" && freteID != undefined){
                let formData = new FormData();    
                formData.append('action',           'confirmSolicitacao')   
                formData.append('situacaoFreteID',  2)
                formData.append('tipoCargaID',      this.selectedCarga)
                formData.append('veiculoID',        this.selectedVeiculo)
                formData.append('motoristaID',      this.selectedMotorista)
                formData.append('freteID',          freteID)

                console.log(this.selectedCarga,this.selectedVeiculo,this.selectedMotorista)

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
        //Fretes
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

        //Motoristas Disponíveis
        axios({
            method: 'get',
            url: '/action/motorista/all-motoristas'
        })
        .then(res => {
            this.motoristas = res.data
            console.log(res.data[0].SituacaoFreteID)
        })
        .catch(error => {
            this.errored = true
        })
        .finally(() => {
            this.loading = false
        })

        //Tipo cargas
        axios({
            method: 'get',
            url: '/action/frete/tipo-cargas'
        })
        .then(res => {
            this.cargas = res.data
            // console.log(res.data)
        })
        .catch(error => {
            this.errored = true
        })
        .finally(() => {
            this.loading = false
        })

        //Veiculos
        axios({
            method: 'get',
            url: '/action/veiculo/all-veiculos'
        })
        .then(res => {
            this.veiculos = res.data
            console.log(res.data)
        })
        .catch(error => {
            this.errored = true
        })
        .finally(() => {
            this.loading = false
        })
    },
})