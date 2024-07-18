<template>
  <div class="mt-6">
    <label
      :for="name"
      class="block text-sm font-medium leading-5 text-gray-700"
    >
      {{ label }}
    </label>
    <div class="mt-1 relative rounded-md shadow-sm">
      <div v-if="isSpan" class="mt-1 flex rounded-md shadow-sm">
        <span
          class="inline-flex h-10 items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm"
        >
          {{ labelInput }}
        </span>
        <input
          :id="id"
          :name="name"
          :maxlength="maxlength"
          :placeholder="placeholder"
          :type="type"
          :required="required"
          :value="modelValue"
          @input="$emit('update:modelValue', $event.target.value)"
          class="flex-1 border border-gray-300 form-input pl-3 block w-full rounded-none rounded-r-md transition duration-150 ease-in-out sm:text-sm sm:leading-5"
        />
      </div>

      <input
        v-else
        :id="id"
        :name="name"
        :maxlength="maxlength"
        :placeholder="placeholder"
        :type="type"
        :required="required"
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
      />
      <div
        class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none"
      >
        <svg
          class="h-5 w-5 text-red-500"
          fill="currentColor"
          viewBox="0 0 20 20"
        >
          <path
            fill-rule="evenodd"
            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
            clip-rule="evenodd"
          ></path>
        </svg>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props: {
    label: {
      type: String,
      required: true,
    },
    id: {
      type: String,
      required: true,
    },
    name: {
      type: String,
      required: true,
    },
    maxlength: {
      type: Number,
      default: 80,
    },
    placeholder: {
      type: String,
      default: "",
    },
    labelInput: {
      type: String,
      default: "",
    },
    type: {
      type: String,
      default: "text",
    },
    required: {
      type: String,
      default: "",
    },
    isSpan: {
      type: Boolean,
      default: false,
    },
    modelValue: {},
  },
};
</script>
