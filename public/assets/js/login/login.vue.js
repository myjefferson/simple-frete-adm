new Vue({
    el: '#page-login',
    data: {
        inputEmail: '',
        inputSenha: ''
    },
    methods:{
        clickLogin: function(){
            if(inputEmail !== '' && inputSenha !== ''){

                let formData = new FormData();
                
                formData.append('action',   'login')
                formData.append('email',    this.inputEmail)
                formData.append('senha',    this.inputSenha)

                axios({
                    method: 'post',
                    url: '/action/login',
                    data: formData,
                    config: { headers: {'Content-Type': 'multipart/form-data'} }

                }).then(function(res){
                    if(res.data.status === 1){
                        window.location.href = res.data.redirect;
                    }else{
                        alert(res.data.message);
                    }

                }).catch(function(res){
                    console.log("Opa! Não deu certo.")
                })
                
            }else{
                alert("Preencha todos os campos")
            }
        }
    },
})

