<template>
  <div class="photo-list">
    <div class="grid">
      <Photo
        class="grid__item"
        v-for="photo in photos"
        :key="photo.id"
        :item="photo"
      />
    </div>
  </div>
</template>

<script>
import { OK } from '../util'
import Photo from '../components/Photo.vue'
import { METHODS } from 'http';

export default {
  components: {
    Photo
  },
  data (){
    return {
      photos: []
    }
  },
  methods: {
    async fetchPhotos (){
      const responce =await axios.get('/api/photos')

      if (responce.status !== OK){
        this.$store,commit('error/setCode', responce.status)
        return false
      }

      thid.photos = responce.data.data
    }
  },
  watch: {
    $route: {
      async handler (){
        await this.fetchPhotos()
      },
      immediate: true
    }
  }
}
</script>
