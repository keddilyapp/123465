<template>
  <!-- Widget -->
  <div class="widget widget-style-1 price_widget">
    <h5>
      <span>{{ $t("Price") }}</span>
      <span
        @click="showPriceWidget = !showPriceWidget"
        class="widget-collapse-toggle"
        ><span class="material-icons"> expand_more </span></span
      >
    </h5>
    <ul class="list-unstyled mb-0">
      <li v-for="(item, index) in price_options" :key="index">
        <input
          type="radio"
          name="price_group"
          :id="index"
          :checked="item == selectedOption"
          @change="filter(item)"
        />
        <label :for="index">
          <the-currency :amount="item.min"></the-currency> -
          <the-currency :amount="item.max"></the-currency
        ></label>
      </li>
      <li for="p6">
        <input
          type="radio"
          class="d-none"
          name="price_group"
          id="p6"
          v-model="price_range"
        />
        <label for="p6" class="d-block"
          ><RangeSlider
            :min="0"
            :max="500000"
            :minValue="0"
            :maxValue="300000"
            @changePriceRange="changePriceRange"
        /></label>
      </li>
    </ul>
  </div>
  <!-- Widget -->
</template>

<script>
import RangeSlider from "@/components/ui/RangeSlider.vue";
export default {
  emits: ["filter"],
  components: {
    RangeSlider,
  },
  props: {
    selectedOption: {
      type: Object,
      required: false,
    },
    selectedRange: {
      type: String,
      required: false,
      default: null,
    },
  },
  data() {
    return {
      showPriceWidget: true,
      price_range: "",
      min_range_value: 0,
      max_range_value: 20000,
      price_options: [
        {
          min: 0,
          max: 500,
          value: "0-500",
        },
        {
          min: 500,
          max: 1000,
          value: "500-1000",
        },
        {
          min: 1000,
          max: 2000,
          value: "1000-2000",
        },
        {
          min: 2000,
          max: 5000,
          value: "2000-5000",
        },
        {
          min: 5000,
          max: 10000,
          value: "5000-10000",
        },
      ],
    };
  },
  mounted() {
    this.getSelectedOptions();
  },
  methods: {
    getSelectedOptions() {
      let selected_item = this.price_options.find(
        (item) => item.value == this.selectedRange
      );
      if (selected_item) {
        this.filter(selected_item);
      }
      if (!selected_item && this.selectedRange != null) {
        const numbers = this.selectedRange.split("-");
        const startNumber = parseInt(numbers[0]);
        const endNumber = parseInt(numbers[1]);
        this.min_range_value = startNumber;
        this.max_range_value = endNumber;
        let item = {
          min: startNumber,
          max: endNumber,
          value: this.selectedRange,
        };
        this.filter(item);
      }
    },

    filter(item) {
      this.$emit("filter", item);
    },
    changePriceRange(e) {
      this.filter(e);
    },
  },
};
</script>
