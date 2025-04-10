<x-default-layout title="Student" section_title="Edit student data">
    @if (session('success'))
        <div class="p-4 mb-4 text-green-700 bg-green-100 border border-green-300">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-3">
        <form action="{{ route('students.update', $student->id) }}" method="POST"
            class="flex flex-col gap-4 px-6 py-4 bg-white border border-zinc-300 shadow col-span-3 md:col-span-2">
            @csrf
            @method("PUT")

            <div class="grid sm:grid-cols-2 gap-4">
                <div class="flex flex-col gap-2">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name"
                        value="{{ old('name', $student->name) }}"
                        class="px-3 py-2 border border-zinc-300 bg-slate-50"
                        placeholder="Student Name">
                </div>
                <div class="flex flex-col gap-2">
                    <label for="student_id_number">Student ID Number</label>
                    <input type="text" id="student_id_number" name="student_id_number"
                        value="{{ old('student_id_number', $student->student_id_number) }}"
                        class="px-3 py-2 border border-zinc-300 bg-slate-50"
                        placeholder="student ID (e.g., F55122001)">
                </div>
            </div>

            <div class="grid sm:grid-cols-2 gap-4">
                <div class="flex flex-col gap-2">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email"
                        value="{{ old('email', $student->email) }}"
                        class="px-3 py-2 border border-zinc-300 bg-slate-50"
                        placeholder="student@example.com">
                </div>
                <div class="flex flex-col gap-2">
                    <label for="phone_number">Phone Number</label>
                    <input type="text" id="phone_number" name="phone_number"
                        value="{{ old('phone_number', $student->phone_number) }}"
                        class="px-3 py-2 border border-zinc-300 bg-slate-50"
                        placeholder="Phone number (e.g., 081234567891)">
                </div>
            </div>

            <div class="flex flex-col gap-2">
                <label for="birth_date">Birth date</label>
                <input type="date" id="birth_date" name="birth_date"
                    value="{{ old('birth_date', $student->birth_date) }}"
                    class="px-3 py-2 border border-zinc-300 bg-slate-50">
            </div>

            <div class="flex flex-col gap-2">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="px-3 py-2 border border-zinc-300 appearance-none bg-slate-50">
                    <option value="" disabled>Select Gender</option>
                    <option value="male" @selected(old('gender', $student->gender) == 'male')>Male</option>
                    <option value="female" @selected(old('gender', $student->gender) == 'female')>Female</option>
                </select>
            </div>

            <div class="flex flex-col gap-2">
                <label for="major">Majors</label>
                <select name="major" id="major" class="px-3 py-2 border border-zinc-300 appearance-none bg-slate-50">
                    <option value="" disabled>Select Majors</option>
                    <option value="1" @selected(old('major', $student->major) == '1')>S1 Teknik Informatika</option>
                    <option value="2" @selected(old('major', $student->major) == '2')>S1 Sistem Informasi</option>
                </select>
            </div>

            <div class="flex flex-col gap-2">
                <label for="status">Status</label>
                <select name="status" id="status" class="px-3 py-2 border border-zinc-300 appearance-none bg-slate-50">
                    <option value="" disabled>Select Student Status</option>
                    <option value="active" @selected(old('status', $student->status) == 'active')>Active</option>
                    <option value="on leave" @selected(old('status', $student->status) == 'on leave')>On Leave</option>
                    <option value="graduated" @selected(old('status', $student->status) == 'graduated')>Graduated</option>
                    <option value="dropped out" @selected(old('status', $student->status) == 'dropped out')>Dropped Out</option>
                </select>
            </div>

            <div class="self-end flex gap-2">
                <a href="{{ route("students.index") }}"
                    class="bg-slate-50 border border-slate-500 text-slate-500 px-3 py-2 cursor-pointer">
                    <span>Cancel</span>
                </a>
                <button type="submit"
                    class="bg-blue-50 border border-blue-500 text-blue-500 px-3 py-2 flex items-center gap-2 cursor-pointer">
                    <i class="ph ph-floppy-disk block text-blue-500"></i>
                    <span>Update</span>
                </button>
            </div>
        </form>
    </div>
</x-default-layout>
