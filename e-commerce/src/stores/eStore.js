import bigpic1 from '../assets/Cms-04 1.png'
import bigpic2 from '../assets/Cat-01 1.png'
import bigpic3 from '../assets/Cms-03 1.png'
  

import { defineStore  } from 'pinia'

export const useEStore = defineStore('todoList', {
    state: () => ({
      prom: [
        {
          name: "1",
          image: '../assets/Cms-04 1.png',
          description: "Everyday Fresh & Clean with our Product",
          bg: "bg-green-300",
          color:"bg-[#F0E8D5]",
    
        },
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
      ]
     
    }),
})