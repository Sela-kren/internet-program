<template>
   <div class="flex flex-col">
        <div class=" flex h-[97px] pb-[17px] w-full items-center justify-between">
            <div class="w-fit h-fit flex gap-4 items-center">
                <img src="../assets/MeloneLogo.png" class="w-[215px] h-[66px]" >
                <Searchbar class=" translate-y-[4px]"></Searchbar>
            </div>
    
        </div>
        <div class="flex flex-row  items-center justify-between mb-1">
            <h1 class="text-3xl font-semibold">{{title}}</h1>
            <div class="flex flex-row gap-5" >
                <h1 class="font-bold">All</h1>
                <h1 v-for="group in groups">{{ group }}</h1>
            </div>
        
        </div>
   </div>

</template>

<script>

    import Searchbar from './Searchbar.vue'
    export default{
        name: "Topbar",
        components: {
            Searchbar,
        },

    }

</script>