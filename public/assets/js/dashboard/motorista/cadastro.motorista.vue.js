new Vue({
    el: '#page-cadastro-motorista',
    data: {
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
        inputNumeroCasa: '',
        inputComplemento: '',
        inputEmail: '',
        inputSenha: ''
    },
    methods:{
        insertMotorista: function(){
            if(inputNome != ''){

                let formData = new FormData();
                
                formData.append('action',           'insert')
                formData.append('foto',             this.inputFoto)
                formData.append('nome',             this.inputNome)
                formData.append('datanascimento',   this.inputDataNascimento)
                formData.append('cpf',              this.inputCPF)
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
                    url: '/action/motoristas/cadastrar',
                    data: formData,
                    config: { headers: {'Content-Type': 'multipart/form-data'} }

                }).then(function(res){
                    alert(res.data.status);
                    setTimeout(window.location.href = "/dashboard/motoristas", 0)

                }).catch(function(res){
                    console.log("Opa! Não deu certo.")
                })
                
            }else{
                alert("Preencha todos os campos")
            }
        }
    },
})

