<div class="col-span-12 mt-6">
    <div class="intro-y block sm:flex items-center h-10">
        <h2 class="text-lg font-medium truncate mr-5">
            Dokter
        </h2>

    </div>
    <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
        <table class="table table-report sm:mt-2">
            <thead>
                <tr>
                    <th class="whitespace-nowrap">IMAGES</th>
                    <th class="whitespace-nowrap">NAME</th>
                    <th class="text-center whitespace-nowrap">STOCK</th>
                    <th class="text-center whitespace-nowrap">STATUS</th>
                    <th class="text-center whitespace-nowrap">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr class="intro-x">
                    <td class="w-20">
                        <div class="flex">
                            <div class="w-10 h-10 image-fit zoom-in">
                                <img alt="Tinker Tailwind HTML Admin Template" class="tooltip rounded-full"
                                    src="https://ui-avatars.com/api/?name={{ $item->name }}"
                                    title="Uploaded at 14 September 2020">
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="{{ route('user.doctor.show', ['id' => $item->id]) }}"
                            class="font-medium whitespace-nowrap">{{ $item->name }}</a>
                        <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">PC &amp; Laptop</div>
                    </td>
                    <td class="text-center">50</td>
                    <td class="w-40">
                        <div class="flex items-center justify-center text-theme-20"> <i data-feather="check-square"
                                class="w-4 h-4 mr-2"></i> Active </div>
                    </td>
                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center mr-3" href=""> <i data-feather="check-square"
                                    class="w-4 h-4 mr-1"></i> Edit </a>
                            <a class="flex items-center text-theme-21" href=""> <i data-feather="trash-2"
                                    class="w-4 h-4 mr-1"></i> Delete </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-3">
        <ul class="pagination">
            <li>
                <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-left"></i> </a>
            </li>
            <li>
                <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-left"></i> </a>
            </li>
            <li> <a class="pagination__link" href="">...</a> </li>
            <li> <a class="pagination__link" href="">1</a> </li>
            <li> <a class="pagination__link pagination__link--active" href="">2</a> </li>
            <li> <a class="pagination__link" href="">3</a> </li>
            <li> <a class="pagination__link" href="">...</a> </li>
            <li>
                <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-right"></i> </a>
            </li>
            <li>
                <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-right"></i> </a>
            </li>
        </ul>
        <select class="w-20 form-select box mt-3 sm:mt-0">
            <option>10</option>
            <option>25</option>
            <option>35</option>
            <option>50</option>
        </select>
    </div>
</div>
