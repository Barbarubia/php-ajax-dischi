const app = new Vue({
    el: '#root',
    data: {
        // array dei dischi, inizialmente vuoto
        dischi: []
    },
    created() {
        // chiamata axios al file php convertito in formato json contenente l'array dei dischi
        axios.get('http://localhost/php-ajax-dischi/data_dischi_json.php')
        .then((risposta) => {
            // riempio l'array "locale" creato in vue.js con i dati presi dalla chiamata axios
            this.dischi = risposta.data
        //   console.log(this.dischi)
        })
    }
})