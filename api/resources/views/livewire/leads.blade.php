<div>

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Phone
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($leads as $item)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item->name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $item->email }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->phone }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex">
                                <a href="">
                                    @include('components.icons.eye')
                                </a>
                                <a href="{{ route('lead.edit', $item->id) }}">
                                    @include('components.icons.edit')
                                </a>
                                <form onsubmit="return confirm('are you sure delete?')"
                                    wire:submit.prevent='leadDelete({{ $item->id }})'>
                                    <button type="submit">@include('components.icons.trash')</button>
                                </form>
                            </div>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="px-4 py-5">
            {{ $leads->links() }}
        </div>
    </div>

</div>
