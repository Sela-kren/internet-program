<template>
  <div class=" flex flex-col gap-4 m-auto">
    <Menu title="Fearture Category"></Menu>
    <div className="flex gap-[23px]">
      <!-- <Category :class="fruit.bg" v-for="(fruit, index) in fruits" :key="index" :image="fruit.imageUrl" :name="fruit.name" :description="fruit.description" /> -->
    </div>
    <div class="flex gap-4">
      <Promotion :class="promotion.color" v-for="promotion in prom" :image="promotion.image" :description="promotion.description" ></Promotion>
    </div>
  </div>
</template>







<script>

  // import {defineComponent} from 'vue'
  // import {storeToRefs} from 'pinia'
  import {useEStore} from './stores/eStore'
  import {mapState} from 'pinia'

  // const store = useEStore;
  // const data = storeToRefs(store);
  // console.log(store);


  import Category from './components/Category.vue'
  import Promotion from './components/Promotion.vue'
  import Menu from './components/menu.vue'
  // import Mybutton from './components/button.vue'
  // import img1 from './assets/cat-13 1.png'
  // import img2 from './assets/cat-11 1.png'
  // import img3 from './assets/cat-12 1.png'
  // import img4 from './assets/cat-9 1.png'
  // import img5 from './assets/cat-3 1.png'
  // import img6 from './assets/cat-4 1.png'
  // import img7 from './assets/cat-1 4.png'
  // import img8 from './assets/cat-15 1.png'
  // import img9 from './assets/cat-14 1.png'
  // import img10 from './assets/cat-7 1.png'
  

  export default {
    name: "app",
    components: {
      Promotion,
      Menu,
      Category,
    },
    computed: {
      ...mapState(useEStore,['prom']),
    },

  }

  // const prom=[
  //   {
  //     name: "1",
  //     image: bigpic1,
  //     description: "Everyday Fresh & Clean with our Product",
  //     bg: "bg-green-300",
  //     color:"bg-[#F0E8D5]",

  //   },
  //   {
  //     name: "2",
  //     image: bigpic2,
  //     description: "Make your Brackfast Easy and Healthy",
  //     bg: "bg-green-300",
  //     color: "bg-[#F3E8E8]",

  //   },
  //   {
  //     name: "3",
  //     image: bigpic3,
  //     description: "The best Organic Product Online",
  //     bg: "bg-yellow-300",
  //     color: "bg-[#E7EAF3]",

  //   },
  // ]

//   const fruits = [
//     {
//       name: 'Cake & Milk',
//       imageUrl: img1,
//       description: '14 items',
//       bg: "bg-[#F2FCE4] border-2 hover:border-[#81B13D]",
//     },
//     {
//       name: 'Peach',
//       imageUrl: img2,
//       description: '17 items',
//       bg: "bg-[#FFFCEB]",
//     },
//     {
//       name: 'Oganic Kiwi',
//       imageUrl: img3,
//       description: '21 items',
//       bg: "bg-[#ECFFEC]",
//     },
//     {
//       name: 'Red apples',
//       imageUrl: img4,
//       description: '68 items',
//       bg: "bg-[#FEEFEA]",
//     },
//     {
//       name: 'Snack',
//       imageUrl: img5,
//       description: '34 items',
//       bg: "bg-[#FFF3EB]",
//     },
//     {
//       name: 'Black plum',
//       imageUrl: img6,
//       description: '25 items',
//       bg: "bg-[#FFF3FF]",
//     },
//     {
//       name: 'Vegetable',
//       imageUrl: img7,
//       description: '65 items',
//       bg: "bg-[#F2FCE4]",
//     }, 
//     {
//       name: 'Headphone',
//       imageUrl: img8,
//       description: '33 items',
//       bg: "bg-[#FFFCEB]",
//     },
//     {
//       name: 'Cake & Milk',
//       imageUrl: img9,
//       description: '54 items',
//       bg: "bg-[#F2FCE4]"
//     },
//     {
//       name: 'Orange',
//       imageUrl: img10,
//       description: '10 items',
//       bg: "bg-[#FFF3FF]"
//     },
    
// ];

    
</script>


