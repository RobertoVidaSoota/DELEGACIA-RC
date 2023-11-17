<template>
    <table>
        <thead>
            <tr>
                <th v-for="th in tableHead" :key="th">
                    {{ th }}
                </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="dt in dataTable" :key="dt.id">
                <td v-for="td in tableHead" :key="td">
                    {{ dt[td] }}
                </td>
            </tr>
        </tbody>
    </table>
</template>



<script setup>


defineProps({
    tableHead: Array,
    dataTable: Object
})
</script>

<style>

</style>