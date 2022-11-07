<template>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul>
          {{ usersList }}

        </ul>
        <router-view/>
        <hr>
      </div>
    </div>
  </div>

</template>

<style>

</style>
<script>

import {mapActions, mapGetters} from "vuex";

export default {
  name: 'App',

  computed: {
    ...mapGetters(['usersList'])
  },
  methods: {
    ...mapActions(['fetchUsers'])
  },
  created() {
    this.fetchUsers();
  }
}
</script>
