<template>
<div class="container">
  <div class="p-5"></div>
  <table class="table mt-5">
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
      <td>Jan 17, 2018</td>
      <td>Lexington, KY</td>
      <td>Manchester Music Hall</td>
      <td>Opening for Saving Abel</td>
      <td><a href="http://detroit.carpediem.cd/events/3819634-dirkschneider-at-the-token-lounge/" >website</a></td>
    </tr>
    <tr>
      <td>March 6, 2018</td>
      <td>Detroit, MI</td>
      <td>The Token Lounge</td>
      <td>Opening for Udo Dirkschneider</td>
      <td><a href="https://www.ticketfly.com/event/1602236-saving-abel-lexington/" >website</a></td>
    </tr>
    <tr>
      <td>April 3, 2018</td>
      <td>Louisville, KY</td>
      <td>Trixies Entertainment Complex</td>
      <td>Opening for Udo Dirkschneider</td>
      <td><a href="http://louisville.carpediem.cd/events/4000865-udo-dirkschneider-elm-street-at-trixies-entertainment-complex/">website</a></td>
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