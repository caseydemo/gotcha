<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                   
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <button type="button" v-on:click="toggleDates()" class="btn btn-secondary">Upcoming Dates</button>
                      <button type="button" v-on:click="togglePictures()" class="btn btn-secondary">Show Pictures</button>
                      <button type="button" v-on:click="toggleMerch()" class="btn btn-secondary">Merch</button>
                    </div>

                    <div class="panel-body">
                        <ul v-show="showDates" class="list-group">
                          <li class="list-group-item">Upcoming Dates</li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Morbi leo risus</li>
                          <li class="list-group-item">Porta ac consectetur ac</li>
                          <li class="list-group-item">Vestibulum at eros</li>
                        </ul>

                        <ul v-show="showPictures" class="list-group">
                          <li class="list-group-item">Pictures</li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Morbi leo risus</li>
                          <li class="list-group-item">Porta ac consectetur ac</li>
                          <li class="list-group-item">Vestibulum at eros</li>
                        </ul>

                        <ul v-show="showMerch" class="list-group">
                          <li class="list-group-item">Merch</li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Morbi leo risus</li>
                          <li class="list-group-item">Porta ac consectetur ac</li>
                          <li class="list-group-item">Vestibulum at eros</li>
                        </ul>

                      </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    },

methods: {


    toggleDates: function(){
        this.showDates = true;
        this.showMerch = false;
        this.showPictures = false;
    },
    togglePictures: function(){
        this.showPictures = true;
        this.showDates = false;
        this.showMerch = false;    
    },
    toggleMerch: function(){
        this.showMerch = true;
        this.showDates = false;
        this.showPictures = false;    
    }
},    
data () {
    return {
        showDates: false,
        showPictures: false,
        showMerch: false
    }
    }
}
</script>
