new Vue({
    el: '#page-detalhe-motorista',
    data: {
            loading: true,
            errored: false,
            contentType: {'Content-Type': 'multipart/form-data'},

            MotoristaID: "",

            inputFoto: "",
            inputNome: "",
            inputDataNascimento: "",
            inputCPF: "",
            inputCNHLocal: "",
            inputCNHCategoria: "",
            inputCNHRegistro: "",
            inputTelefone: "",
            inputCEP: "",
            inputEndereco: "",
            inputCidade: "",
            inputEstado: "",
            inputNumeroCasa: "",
            inputComplemento: "",
            inputEmail: "",
            inputSenha: ""
    },
    methods: {
        deleteMotorista: function (){

            let formData = new FormData();    
            formData.append('action', 'delete')

            axios({
                method: 'post',
                url: `/action/motorista/excluir/${this.MotoristaID}`,
                data: formData,
                config: { headers: this.contentType }
            })
            .then(res => {
                console.log(res.data.status)
                //console.log(this.motoristas);
                window.location.href = "/dashboard/motorista"
            })
            .catch(error => {
                this.errored = true
            })
            .finally(() => {
                this.loading = false
            })
        },

        updateMotorista: function (){

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
                url: `/action/motorista/alterar/${ this.MotoristaID }`,
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
        this.MotoristaID = window.location.href.split("/").pop()

        axios({
            method: 'get',
            url: `/action/motorista/detalhe-motorista/${this.MotoristaID}`
        })
        .then(res => {

            this.inputNome              = res.data.Nome
            this.inputDataNascimento    = res.data.dataNascimento
            this.inputCPF               = res.data.CPF
            this.inputCNHLocal          = res.data.CNHLocal
            this.inputCNHCategoria      = res.data.CNHCategoria
            this.inputCNHRegistro       = res.data.CNHRegistro
            this.inputTelefone          = res.data.Telefone
            this.inputCEP               = res.data.CEP
            this.inputEndereco          = res.data.Endereco
            this.inputCidade            = res.data.Cidade
            this.inputEstado            = res.data.Estado
            this.inputNumeroCasa        = res.data.NumeroCasa
            this.inputComplemento       = res.data.Complemento
            this.inputEmail             = res.data.Email
            this.inputSenha             = res.data.Senha
            
        })
        .catch(error => {
            this.errored = true
        })
        .finally(() => {
            this.loading = false
        })
    },
})