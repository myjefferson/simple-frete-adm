new Vue({
    el: '#page-detalhes-veiculo',
    data: {
            loading: true,
            errored: false,
            contentType: {'Content-Type': 'multipart/form-data'},

            VeiculoID: "",

            inputFoto: '',
            inputMarca: '',
            inputModelo: '',
            inputCor: '',
            inputPlaca: '',
            inputLocalPlaca: '',
            inputChassi: '',
            inputRenavan: ''
    },
    methods: {
        deleteVeiculo: function (){

            let formData = new FormData();    
            formData.append('action', 'delete')

            axios({
                method: 'post',
                url: `/action/veiculo/excluir/${this.VeiculoID}`,
                data: formData,
                config: { headers: this.contentType }
            })
            .then(res => {
                console.log(res.data.status)
                window.location.href = "/dashboard/veiculo"
            })
            .catch(error => {
                this.errored = true
            })
            .finally(() => {
                this.loading = false
            })
        },

        updateVeiculo: function (){
            let formData = new FormData();    

            formData.append('action',       'update')   
            formData.append('veiculoid',    this.VeiculoID)   

            formData.append('foto',         this.inputFoto)
            formData.append('marca',        this.inputMarca)
            formData.append('modelo',       this.inputModelo)
            formData.append('cor',          this.inputCor)
            formData.append('placa',        this.inputPlaca)
            formData.append('localplaca',   this.inputLocalPlaca)
            formData.append('chassi',       this.inputChassi)
            formData.append('renavan',      this.inputRenavan)

            axios({
                method: 'post',
                url: `/action/veiculo/alterar/${ this.VeiculoID }`,
                data: formData,
                config: { headers: this.contentType }
            })
            .then(res => {
                console.log(res.data)
                window.location.href = "/dashboard/veiculo"
            })
            .catch(error => {
                this.errored = true
            })
            .finally(() => {
                this.loading = false
            })
        }

    },
    mounted() {
        this.VeiculoID = window.location.href.split("/").pop()

        axios({
            method: 'get',
            url: `/action/veiculo/detalhe-veiculo/${this.VeiculoID}`
        })
        .then(res => {
            
            this.inputFoto          = res.data[0].Foto
            this.inputMarca         = res.data[0].Marca
            this.inputModelo        = res.data[0].Modelo
            this.inputCor           = res.data[0].Cor
            this.inputPlaca         = res.data[0].Placa
            this.inputLocalPlaca    = res.data[0].localPlaca
            this.inputChassi        = res.data[0].Chassi
            this.inputRenavan       = res.data[0].Renavan
        
        })
        .catch(error => {
            this.errored = true
        })
        .finally(() => {
            this.loading = false
        })
    },
})