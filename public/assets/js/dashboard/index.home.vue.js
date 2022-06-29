new Vue({
    el: '#page-home',
    data: {
            loading: true,
            errored: false,
            fretes: []
    },
    mounted() {
        axios({
            method: 'get',
            url: '/action/frete/all-fretes'
        })
        .then(res => {
            this.fretes = res.data
            console.log(this.fretes);
        })
        .catch(error => {
            this.errored = true
        })
        .finally(() => {
            this.loading = false
        })
    },
})