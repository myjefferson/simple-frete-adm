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
                url: `/action/veiculos/excluir/${this.VeiculoID}`,
                data: formData,
                config: { headers: this.contentType }
            })
            .then(res => {
                console.log(res.data.status)
                //console.log(this.veiculos);
                window.location.href = "/dashboard/veiculos"
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

            formData.append('action',           'update')   
            formData.append('motoristaid',      this.MotoristaID)   

            formData.append('foto',             this.inputFoto)
            formData.append('nome',             this.inputNome)
            formData.append('datanascimento',   this.inputDataNascimento)
            formData.append('cpf',              this.inputCPF)
            formData.append('cnhcategoria',     this.inputCNHCategoria)
            formData.append('cnhlocal',         this.inputCNHLocal)
            formData.append('cnhregistro',      this.inputCNHCategoria)
            formData.append('telefone',         this.inputTelefone)
            formData.append('cep',              this.inputCEP)
            formData.append('endereco',         this.inputEndereco)
            formData.append('cidade',           this.inputCidade)
            formData.append('estado',           this.inputEstado)
            formData.append('numerocasa',       this.inputNumeroCasa)
            formData.append('complemento',      this.inputComplemento)
            formData.append('email',            this.inputEmail)
            formData.append('senha',            this.inputSenha)

            axios({
                method: 'post',
                url: `/action/motoristas/alterar/${ this.MotoristaID }`,
                data: formData,
                config: { headers: this.contentType }
            })
            .then(res => {
                console.log(res.data.status)
                //console.log(this.motoristas);
                //window.location.href = "/dashboard/motoristas"
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
            url: `/action/veiculos/detalhes-veiculo/${this.VeiculoID}`
        })
        .then(res => {

            this.inputFoto              = res.data.status[0].Foto
            this.inputMarca    = res.data.status[0].Marca
            this.inputModelo             = res.data.status[0].Modelo
            this.inputCor          = res.data.status[0].Cor
            this.inputPlaca     = res.data.status[0].Placa
            this.inputLocalPlaca       = res.data.status[0].localPlaca
            this.inputChassi         = res.data.status[0].Chassi
            this.inputRenavan               = res.data.status[0].Renavan
        
        })
        .catch(error => {
            this.errored = true
        })
        .finally(() => {
            this.loading = false
        })
    },
})