<html>
   <head>
      <title>VueJs Instance</title>
      <script type = "text/javascript" src = "js/vue.js"></script>
   </head>
   <body>
   <input id="message" v-model="message" placeholder="edit me">
   <p>Message is: {{ message }}</p>
      <script type = "text/javascript">
var vm = new Vue({
  el: '#message',
  data: {
    firstName: 'Foo',
    lastName: 'Bar',
    fullName: 'Foo Bar'
  },
  watch: {
    firstName: function (val) {
      this.fullName = val + ' ' + this.lastName
    },
    lastName: function (val) {
      this.fullName = this.firstName + ' ' + val
    }
  }
})
      </script>
   </body>
</html>