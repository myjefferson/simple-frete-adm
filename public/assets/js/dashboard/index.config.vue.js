new Vue({
    el: "#page-config",
    data:{
        picked: true,
    },
    methods: {
        updateAparencia: function(lightMode){
            const main = document.getElementById("main")
            main.className = ''
            main.classList.add(`${lightMode}`)

            const brand = document.getElementById("brand")
            brand.src = `../../assets/images/brand-${lightMode}.svg`

            const formData = new FormData();
            formData.append('action', 'updateLightMode');
            formData.append('lightMode', lightMode);

            axios({
                method: 'POST',
                url: `/action/config/update`,
                data: formData
            })
            .then(res => {
                console.log(res.data)
                //console.log(this.motoristas);
                //window.location.href = "/dashboard/motorista"
            })
            .catch(error => {
                alert("Mudanças não realizadas. Por favor, tente novamente.");
            })
            // .finally(() => {
            //     this.loading = false
            // })
        }
    },
})