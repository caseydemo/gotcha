<template>
<div class="container">
  <table class="table">
  <thead>
    <tr>
      <th>Date</th>
      <th>City</th>
      <th>Location</th>
      <th>Event</th>
      <th>Website</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Jan ?</td>
      <td>Lexington, KY</td>
      <td>Manchester Music Hall</td>
      <td>Opening for Saving Able</td>
      <td>#</td>
    </tr>
    <tr>
      <td>Jan ?</td>
      <td>Lexington, KY</td>
      <td>Manchester Music Hall</td>
      <td>Opening for Saving Able</td>
      <td>#</td>
    </tr>
    <tr>
      <td>Jan ?</td>
      <td>Lexington, KY</td>
      <td>Manchester Music Hall</td>
      <td>Opening for Saving Able</td>
      <td>#</td>
    </tr>
  </tbody>
</table>
</div>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    },

methods: {

    modalCall: function(thing){
      console.log(thing);
        this.modal_img = thing;
    }
},    
data () {
    return {

        modal_img: '',
        modal_title: '',
    }
  }
}
</script>
<style scoped>
.col{
  margin:auto;
  text-align: center;
}
.modal-img{
  width: 100%;
  margin:auto;
}
.modal-title{
  width: 100%;
  text-align: center;
  font-size: 30px;
  font-weight: bold;
}
.toggle-button{
  font-size: 30px;
  font-weight: bolder;
  font-family: 'Metal Mania', cursive;
  border-style: solid white;
  /*background: url(/public/dark-brushed-bg.jpg);*/
}
.toggle-button:hover{
  color:white;
  background: gray;
}
</style>