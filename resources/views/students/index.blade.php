<x-default-layout title="Student" section_title="Students">
    <div class="flex">
        <a href="{{ route('students.create') }}"
            class="bg-green-50 text-green-500 border border-green-500 px-3 py-2 flex items-center gap-2">
            <i class="ph ph-plus block text-green-500"></i>
            <div>Add Student</div>
        </a>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow">
            <thead>
                <tr class="border-b border-zinc-200 text-sm leading-normal">
                    <th class="py-3 px-6 text-left">#</th>
                    <th class="py-3 px-6 text-left">Name</th>
                    <th class="py-3 px-6 text-center">Student ID Numbers</th>
                    <th class="py-3 px-6 text-center">Gender</th>
                    <th class="py-3 px-6 text-center">Majors</th>
                    <th class="py-3 px-6 text-center">status</th>
                    <th class="py-3 px-6 text-center">Action</th>
                </tr>
            </thead>
            <tbody class="text-zinc-700 text-sm font-light">
                {{-- render data here --}}
                <tr class="border-b border-zinc-200 hover:bg-zinc-100">
                    <td class="py-3 px-6 text-left">1</td>
                    <td class="py-3 px-6 text-left">Farhan</td>
                    <td class="py-3 px-6 text-center">F55122071</td>
                    <td class="py-3 px-6 text-center">Male</td>
                    <td class="py-3 px-6 text-center">S1 Teknik Informatika</td>
                    <td class="py-3 px-6 text-center">Active</td>
                    <td class="py-3 px-6 flex justify-center gap-1">
                        <a href="{{ route("students.show", 1) }}"
                            class="bg-blue-50 border border-blue-500 p-2 inline-block">
                            <i class="ph ph-eye block text-blue-500"></i>
                        </a>
                        <a href="{{ route("students.edit", 1) }}"
                            class="bg-yellow-50 border border-yellow-500 p-2 inline-block">
                            <i class="ph ph-note-pencil block text-yellow-500"></i>
                        </a>
                        <button class="bg-red-50 border border-red-500 p-2">
                            <i class="ph ph-trash-simple block text-red-500"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</x-default-layout>