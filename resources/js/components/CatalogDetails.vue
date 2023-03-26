<script setup>
import { reactive, ref, computed, watch } from "vue";
import { keyBy } from "@utils/array";

const props = defineProps({
    product: {
        type: Object,
    },
});
let selectedVariation = ref(props.product.variations[0]);


const selectedAttributeOptions = computed(() => {
    let options = {};
    for (let option of selectedVariation.value.attribute_options) {
        options[option.product_attribute_id] = option;
    }
    return options;
});

const selectedVariationImage = computed(() => {
    return selectedVariation.value?.images[0].public_path ?? props.product.variations[0]?.images[0].public_path ?? null
});

const selectedVariationSku = computed(() => {
    return selectedVariation.value?.sku ?? props.product.variations[0]?.sku ?? null
});

const selectVariation = (option) => {
    const selectedOptions = Object.assign({}, selectedAttributeOptions.value);
    selectedOptions[option.product_attribute_id] = reactive(option)
    selectedVariation.value = props.product.variations.find(
        (variation) => variation.attribute_options.every(
            (option) => selectedOptions[option.product_attribute_id].id === option.id
        )
    );

}


</script>

<template>
    <div class="mt-20 px-20 flex flex-row flex-wrap justify-center">
        <div class="w-56">
            <img :src="selectedVariationImage" />
        </div>
        <div class="w-max ml-20">
            <div>
                <h1>{{ props.product.name }}</h1>
                <h2>{{ selectedVariationSku }}</h2>
            </div>
            <div class="mt-20">
                <template v-for="attribute in product.attributes">
                    <div class="mb-4">
                        <div class="mb-2">{{ attribute.name }}</div>
                        <div class="flex flex-row flex-wrap">
                            <template v-for="option in attribute.options">
                                <div class="border border-2 border-orange-300 bg-orange-100 rounded-md w-fit p-2 cursor-pointer mr-3 hover:bg-orange-300 hover:color-white"
                                    :class="{
                                        'bg-orange-300': selectedAttributeOptions[option.product_attribute_id].id === option.id
                                    }" @click="selectVariation(option)">
                                    {{
                                        option.name
                                    }}
                                </div>
                            </template>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>
</template>
