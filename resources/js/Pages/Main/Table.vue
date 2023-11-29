<template>
    <div class="table-scroll">
        <table>
            <thead>
                <tr>
                    <th v-for="tableHead in tableHeads" :key="tableHead">
                        {{ tableHead }}
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="dataTable in dataTables" :key="dataTable.id">
                    <td v-for="tableHead2 in tableHeads" :key="tableHead2">
                        {{ dataTable[tableHead2] }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>



<script setup>


defineProps({
    tableHeads: Array,
    dataTables: Object
})
</script>



<style>
table
{
    width: 100%;
    border-collapse: collapse;
}
tbody, td, th, thead, tr{
    border-width: 0;
    border-color: inherit;
    border-style: solid;
}
thead tr th
{
    border-bottom: 2px solid #fff;
}
td{text-align: center;}
th, td
{
    padding: 10px;
}
tr{
    cursor: pointer;
}
tr:hover
{
    background: #003142;
}
hr{
    width: 100%;
}
.table-scroll
{
    height: fit-content;
    /* overflow-x: scroll; */
}
</style>