<script setup>
import { ref, onMounted } from "vue";
import { getData } from "@utils/api.js";

const catalog = ref([]);

onMounted(async () => {
    catalog.value = await getData(route("api.catalog"));
});
</script>

<template>
    <div class="mt-20 px-20 flex flex-row flex-wrap justify-center">
        <template v-for="product in catalog">
            <div class="max-w-sm rounded overflow-hidden shadow-lg mx-4 my-8">
                <div class="px-6 py-4">
                    <div class="flex justify-center mb-10">
                        <img
                            class="w-48"
                            :src="product.variations[0].images[0].public_path"
                            :alt="product.name"
                        />
                    </div>
                    <div class="font-bold text-xl mb-2">{{ product.name }}</div>
                    <p class="text-gray-700 text-base">
                        {{ product.description }}
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <template
                        v-for="attribute in product.unique_attribute_values"
                    >
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"
                            >{{ attribute.value_label }}</span
                        >
                    </template>
                </div>
            </div>
        </template>
    </div>
</template>
