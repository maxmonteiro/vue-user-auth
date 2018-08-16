<template>
  <div>
    <button class="btn btn-primary" @click="getUser">Usuários</button>
    <hr>
    <app-user ></app-user>
  </div>
</template>

<script>
import User from './user';

export default {
  data() {
    return {
      users: []
    }
  },
  components: {
    'app-user': User
  }
}
</script>
