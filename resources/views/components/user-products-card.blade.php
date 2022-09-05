@props(['product'])

<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
        {{$product->name}}
    </th>
    <td class="py-4 px-6">
        {{$product->count}}
    </td>
    <td class="py-4 px-6">
        {{$product->price}} $
    </td>
</tr>
