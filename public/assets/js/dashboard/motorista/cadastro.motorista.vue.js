new Vue({
    el: '#page-cadastro-motorista',
    data: {
        contentType: {'Content-Type': 'multipart/form-data'},

        viaCEP: 'https://viacep.com.br/ws/',

        inputFoto: '',
        inputNome: '',
        inputDataNascimento: '',
        inputCPF: '',
        inputCNHLocal: '',
        inputCNHCategoria: '',
        inputCNHRegistro: '',
        inputTelefone: '',
        inputCEP: '',
        inputEndereco: '',
        inputCidade: '',
        inputEstado: '',
        inputBairro: "",
        inputNumeroCasa: '',
        inputComplemento: '',
        inputEmail: '',
        inputSenha: ''
    },
    methods:{
        previewFoto(){
            const inputFile = document.getElementById("inputFoto");
            this.inputFoto = inputFile.files[0]
            const reader = new FileReader();
            reader.readAsDataURL(inputFile.files[0])
            reader.onload = function(){
                document.getElementById("img-preview").src = reader.result
            }
        },

        insertMotorista: function(){
            if(inputNome != ''){

                let formData = new FormData();
                
                formData.append('action',           'insert')
                formData.append('foto',             this.inputFoto)
                formData.append('nome',             this.inputNome)
                formData.append('datanascimento',   this.inputDataNascimento)
                formData.append('cpf',              this.inputCPF)
                formData.append('cnhlocal',         this.inputCNHLocal)
                formData.append('cnhregistro',      this.inputCNHRegistro)
                formData.append('cnhcategoria',     this.inputCNHCategoria)
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
                    url: '/action/motorista/cadastrar',
                    data: formData,
                    config: { headers: this.contentType }

                }).then(function(res){
                    alert("Motorista cadastrado com sucesso!");
                    window.location.href = "/dashboard/motorista"

                }).catch(function(res){
                    console.log("Opa! Não deu certo.")
                })
                
            }else{
                alert("Preencha todos os campos")
            }
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
})