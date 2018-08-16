<template>
  <div id="app">
    <div class="container">
      <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
          <app-new-user></app-new-user>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import NewUser from './components/new-user.vue'

export default {
  data () {
    return {

    }
  },
  components: {
    'app-new-user': NewUser
  }
}
</script>

<style>

</style>
