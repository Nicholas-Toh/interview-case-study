<script setup>
import { ref, onMounted, computed } from "vue";
import { keyBy } from "@utils/array";

const props = defineProps({
    product: {
        type: Object,
    },
});

let selectedVariation = ref(null);
let variationMap = ref({});

onMounted(() => {
    selectedVariation.value = props.product.variations[0].id;
    variationMap = props.product.unique_attribute_values;
});

const intializeVariationMap = (product) => {};

const variation = computed(() => {
    return props.product.variations.find(
        (variation) => variation.id == selectedVariation.value
    );
});
</script>

<template>
    <div class="mt-20 px-20 flex flex-row flex-wrap justify-center">
        <template v-if="variation">
            <div class="w-56">
                <img :src="variation.images[0].public_path" />
            </div>
            <div class="w-56">
                <div>
                    <h1>{{ props.product.name }}</h1>
                    <h2>{{ variation.sku }}</h2>
                </div>
            </div>
            <template v-for=""
        </template>
    </div>
</template>
