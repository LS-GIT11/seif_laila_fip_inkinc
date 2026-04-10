// #menu make it toggle when click on it
const menu = document.querySelector("#menu");
const nav = document.querySelector("nav");

menu.addEventListener("click", () => {
    nav.classList.toggle("active");
})  



const app = Vue.createApp({
    data() {
        return {
            artistData: [],
            error: null,
            selectedArtist: null,
            loadingArtists: true,
            loadingArtist: false,
        }
    },

    created() {
        this.fetchArtists();
    },

    methods: {
        fetchArtists() {
            fetch('http://127.0.0.1:8000/api/artists')
                .then(res => {
                    if (!res.ok) {
                        throw new Error('Failed to fetch artists');
                    }
                    return res.json();
                })
                .then(artists => {
                    this.artistData = artists;
                })
                .catch(err => {
                    this.error = err.message;
                })
                .finally(() => {
                    this.loadingArtists = false;
                });
        },

        fetchArtistDetails(id) {
            this.loadingArtist = true;
            fetch(`http://127.0.0.1:8000/api/artists/${id}`)
                .then(res => {
                    if (!res.ok) {
                        throw new Error('Failed to fetch artist details');
                    }
                    return res.json();
                })
                .then(artist => {
                    this.selectedArtist = artist;
                })
                .catch(err => {
                    this.error = err.message;
                })
                .finally(() => {
                    this.loadingArtist = false;
                });
        }
    }
});

app.mount('#app');