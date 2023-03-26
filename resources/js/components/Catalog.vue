<script setup>
import { ref, onMounted } from "vue";
import { getData } from "@utils/api.js";
import { ksort } from "@utils/array.js";

const catalog = ref([]);

onMounted(async () => {
    const response = await getData(route("api.catalog"));
    catalog.value = response.data;
});
</script>

<template>
    <div class="mt-20 px-20 flex flex-row flex-wrap justify-center">
        <template v-for="product in catalog">
            <div
                class="max-w-sm rounded overflow-hidden shadow-lg mx-4 my-8 transition hover:-translate-y-2 delay-50 duration-200">
                <a :href="route('catalog.details', { product: product.sku })">
                    <div class="px-6 py-4">
                        <div class="flex justify-center mb-10">
                            <img class="w-48" :src="
                                product.images[0].public_path
                            " :alt="product.name" />
                        </div>
                        <div class="font-bold text-xl mb-2">
                            {{ product.name }}
                        </div>
                        <p class="text-gray-700 text-base">
                            {{ product.description }}
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <template v-for="option in product.attribute_options">
                            <span @click=""
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                                {{ option.name }}</span>
                        </template>
                    </div>
                </a>
            </div>
        </template>
    </div>
</template>
