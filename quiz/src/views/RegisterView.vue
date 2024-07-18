<template>
  <div
    class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8"
  >
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
      <img
        class="mx-auto h-10 w-auto"
        src="https://www.svgrepo.com/show/301692/login.svg"
        alt="Workflow"
      />
      <h1
        class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900"
      >
        Cadastrar
      </h1>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
      <!-- Alert Error -->
      <div
        class="bg-red-200 px-6 py-4 mx-2 my-4 rounded-md text-lg flex items-center mx-auto max-w-lg"
      >
        <svg
          viewBox="0 0 24 24"
          class="text-red-600 w-5 h-5 sm:w-5 sm:h-5 mr-3"
        >
          <path
            fill="currentColor"
            d="M11.983,0a12.206,12.206,0,0,0-8.51,3.653A11.8,11.8,0,0,0,0,12.207,11.779,11.779,0,0,0,11.8,24h.214A12.111,12.111,0,0,0,24,11.791h0A11.766,11.766,0,0,0,11.983,0ZM10.5,16.542a1.476,1.476,0,0,1,1.449-1.53h.027a1.527,1.527,0,0,1,1.523,1.47,1.475,1.475,0,0,1-1.449,1.53h-.027A1.529,1.529,0,0,1,10.5,16.542ZM11,12.5v-6a1,1,0,0,1,2,0v6a1,1,0,1,1-2,0Z"
          ></path>
        </svg>
        <span class="text-red-800"> Mensagem </span>
      </div>
      <!-- End Alert Error -->

      <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
        <InputText
          label="Nome"
          id="name"
          name="name"
          placeholder="Seu nome"
          v-model="nameText"
        />
        <InputText
          label="Instagram"
          id="instagram"
          name="instagram"
          placeholder="Seu ID"
          :isSpan="true"
          labelInput="instagram.com/"
          v-model="instagramText"
        />
        <InputText
          label="E-mail"
          id="email"
          name="email"
          placeholder="user@example.com"
          v-model="emailText"
        />
        <InputText
          label="Telefone"
          id="tel"
          tel="name"
          maxlength="25"
          placeholder="Seu nome"
          type="tel"
          v-model="telText"
        />
        <ButtonText @save-registration="save" />
      </div>
    </div>
  </div>
</template>

<script>
import InputText from "@/components/InputText.vue";
import ButtonText from "@/components/ButtonText.vue";

export default {
  data() {
    return {
      nameText: "",
      instagramText: "",
      emailText: "",
      telText: "",
    };
  },
  methods: {
    save() {
      console.time("Operação Inicial");
      const newUser = {
        name: this.nameText,
        instagram: this.instagramText,
        email: this.emailText,
        tel: this.telText,
      };
      this.$store.dispatch("storeUser", newUser).then(() => {
        console.log("Salvo com sucesso!");
        console.timeEnd("Operação Inicial");
      });
    },
  },
  components: {
    InputText,
    ButtonText,
  },
};
</script>
