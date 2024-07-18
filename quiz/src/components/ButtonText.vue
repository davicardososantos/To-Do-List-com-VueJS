<template>
  <div class="mt-6">
    <span class="block w-full rounded-md shadow-sm">
      <button
        @click="save"
        class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out"
      >
        Salvar
      </button>
    </span>
  </div>
</template>

<script>
export default {
  methods: {
    save() {
      this.$emit("save-registration");
    },
  },
};
</script>
