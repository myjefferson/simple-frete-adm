new Vue({
    el: '#page-motoristas',
    data: {
            loading: true,
            errored: false,
            motoristas: []
    },
    mounted() {

        axios({
            method: 'get',
            url: '/dashboard/motoristas/selectAllMotoristas'
        })
        .then(res => {
            //console.log(this.motoristas);
            this.motoristas = res.data.status
        })
        .catch(error => {
            //console.log("Opa! Não deu certo." + error)
            this.errored = true
        })
        .finally(() => {
            this.loading = false
        })

        

    }    
})



