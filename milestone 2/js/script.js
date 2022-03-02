console.log('Vue ok', Vue);

Vue.config.devtools = true;

const app = new Vue({
    el: '#app',
    data: {
        songs: [],
    },
    mounted() {
        axios.get('http://localhost/php-ajax-dischi/api/songs.php').then(res => {
            console.log(res.data);
            this.songs = res.data;
            console.log(this.songs);
        }).catch(err => { console.error(err) })
    }
})