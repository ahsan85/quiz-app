<template>
<div >

    <div class=" border-indigo-600 dark:bg-gray-800 bg-opacity-95 border-opacity-60 | p-4 border-solid rounded-3xl border-2 | flex justify-around cursor-pointer | hover:bg-indigo-50 dark:hover:bg-indigo-600 hover:border-transparent | transition-colors duration-500">
        <img class="w-16 h-16 object-cover" src="https://milenyo.net/wp-content/uploads/2020/05/netflix-n-logo-png.png" alt="" />
        <div class="flex flex-col justify-center">
            <p class="text-gray-900 dark:text-gray-300 font-semibold">{{subject.name}}</p>
            <p class="text-black dark:text-gray-100 text-justify font-semibold">$15 000,00</p>
            <div class="flex item-center justify-center"  >

                <div class="w-4 mr-2  hover:text-purple-500 hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                    </svg>
                </div>
                <div class="w-4 mr-2  hover:text-red-500 hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

</div>
</template>

<script>
export default {
    props: ['subject'],
}
</script>

<style scoped>

</style>
