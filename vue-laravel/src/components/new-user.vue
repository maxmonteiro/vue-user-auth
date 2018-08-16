<template>
  <form @submit.prevent="addUser()">
    <div class="form-group">
      <label for="name">Nome</label>
      <input type="text" id="name" class="form-control" required
      v-model="user.name">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" id="email" class="form-control" required
      v-model="user.email">
    </div>
    <div class="form-group">
      <label for="password">Senha</label>
      <input type="text" id="password" class="form-control" required
      v-model="user.password">
    </div>
    <button class="btn btn-primary" type="submit">Salvar</button>
  </form>
</template>

<script>
import axios from 'axios'

export default {
  data() {
    return {
      user: {
        name: '',
        email: '',
        password: ''
      }
    }
  },
  methods: {
    addUser() {
      let newUser = this.user;
      axios.post('http://localhost:8000/api/user', newUser)
      .then((res) => {
        console.log(res);
      }).catch((err) => {
        console.log(err);
      });
    }
  }
}
</script>
