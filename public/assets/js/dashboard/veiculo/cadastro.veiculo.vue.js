new Vue({
    el: '#page-cadastro-veiculo',
    data: {
        inputFoto: '',
        inputMarca: '',
        inputModelo: '',
        inputCor: '',
        inputPlaca: '',
        inputLocalPlaca: '',
        inputChassi: '',
        inputRenavan: ''
    },
    methods:{
        insertVeiculo: function(){
            if(inputMarca != '' && inputModelo != ''){

                let formData = new FormData();
                
                formData.append('action',       'insert')
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
                    url: '/action/veiculos/cadastrar',
                    data: formData,
                    config: { headers: {'Content-Type': 'multipart/form-data'} }

                }).then(function(res){
                    alert(res.data.status);
                    setTimeout(window.location.href = "/dashboard/veiculos", 0)

                }).catch(function(res){
                    console.log("Opa! Não deu certo.")
                })
                
            }else{
                alert("Preencha todos os campos")
            }
        }
    },
})

