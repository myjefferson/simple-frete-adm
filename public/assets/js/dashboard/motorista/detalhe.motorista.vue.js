new Vue({
    el: '#page-motorista',
    data: {
            loading: true,
            errored: false,
            contentType: {'Content-Type': 'multipart/form-data'},
            
            viaCEP: 'https://viacep.com.br/ws/',

            MotoristaID: "",

            loadFoto: "",
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
            inputBairro: "",
            inputNumeroCasa: "",
            inputComplemento: "",
            inputEmail: "",
            inputSenha: ""
    },
    methods: {
        previewFoto(){
            const inputFile = document.getElementById("inputFoto");
            this.inputFoto = inputFile.files[0]
            const reader = new FileReader();
            reader.readAsDataURL(inputFile.files[0])
            reader.onload = function(){
                document.getElementById("img-preview").src = reader.result
            }
        },

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
            formData.append('bairro',           this.inputBairro)
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
                window.location.href = "/dashboard/motorista"
            })
            .catch(error => {
                this.errored = true
            })
            .finally(() => {
                this.loading = false
            })
        },

        buscarCEP: function(){
            //Nova variável "cep" somente com dígitos.
           var cep = this.inputCEP.replace(/\D/g, '');

           //Verifica se campo cep possui valor informado.
           if (cep != "") {

               //Expressão regular para validar o CEP.
               var validacep = /^[0-9]{8}$/;

               //Valida o formato do CEP.
               if(validacep.test(cep)) {
                   //enquanto consulta preenche com "..."
                   this.inputEndereco = '...'
                   this.inputCidade = '...'
                   this.inputEstado = '...'
                   this.inputBairro = '...'

                   //Sincroniza com o callback.
                   const url = `${this.viaCEP}${cep}/json/`
                   axios({
                       method: 'GET',
                       url: url
                   }).then(res => {
                       this.inputEndereco = res.data.logradouro
                       this.inputCidade = res.data.localidade
                       this.inputEstado = res.data.uf
                       this.inputBairro = res.data.bairro
                   }).catch(function(res){
                       this.limparCEP()
                   })
               } else {
                   //cep é inválido.
                   this.limparCEP()
                   alert("Formato de CEP inválido.");
               }
           } else {
               //cep sem valor, limpa formulário.
               this.limparCEP()
           }
       },

       limparCEP: function(){
           this.inputEndereco = ''
           this.inputCidade = ''
           this.inputEstado = ''
           this.inputBairro = ''
       },
    },
    mounted() {
        this.MotoristaID = window.location.href.split("/").pop()

        axios({
            method: 'get',
            url: `/action/motorista/detalhe-motorista/${this.MotoristaID}`
        })
        .then(res => {
            this.loadFoto               = res.data.Foto    
            if(this.loadFoto.length != 0){
                document.getElementById("img-preview").src = '../../../upload/' + this.loadFoto
            }      
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
            this.inputBairro            = res.data.Bairro
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