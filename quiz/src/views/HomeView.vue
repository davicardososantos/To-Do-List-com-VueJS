<template>
  <div class="max-w-7xl mx-auto relative">
    <div class="relative py-16 flex justify-center px-4 sm:px-0">
      <div class="max-w-3xl text-center">
        <div class="pb-4">
          <span
            class="inline-flex items-center rounded-2xl bg-lime-100 px-4 py-1.5 text-xs sm:text-sm font-serif font-medium text-lime-700"
            >VueJS + Tailwind CSS</span
          >
        </div>
        <h1
          class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900"
        >
          CRUD com VueJS, Laravel e MySql
        </h1>
        <p
          class="mt-4 text-lg sm:text-xl leading-8 text-gray-800 sm:px-16"
          style="white-space: pre-line"
        >
          Aplicação desenvolvida para aprendizado de outros programadores de uma
          forma bem simles, para ser bem compreendida, foi utilizado VueJS,
          Laravel e o MySql
        </p>
        <div class="mt-8 flex w-full space-x-8 justify-center">
          <router-link
            class="inline-flex items-center justify-center px-4 py-2.5 border border-transparent text-sm font-medium rounded-md shadow-sm focus:outline-none ring-2 ring-offset-2 ring-transparent ring-offset-transparent disabled:bg-gray-400 appearance-none text-white bg-lime-600 hover:bg-lime-700 focus:ring-lime-500 focus:ring-offset-white !px-12 !shadow-lg !rounded-full !text-base"
            to="/register"
          >
            <p>Iniciar</p>
          </router-link>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  components: {},
  created() {
    // const newUser = {
    //   name: "André",
    //   email: "andre@glide.com.br"
    // }
    // // console.log(this.$store.state.user.name)
    // this.$store.commit('storeUser',newUser)
    // this.$store.commit('queryUsers')
  },
};
</script>
