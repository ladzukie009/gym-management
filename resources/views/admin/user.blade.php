<x-admin-layout>

    <div class="row m-5">
        <div class="col-12">
            <div class="col-12 d-flex flex-row-reverse">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Add new customer
            </div>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New Customer</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <form method="POST" action="{{ route('admin.store') }}">
                                @csrf
                                <h4>Personal</h4>
                                <div class="col-12 mb-3 d-flex">
                                    <div class="col-8 pe-2">
                                        <label for="name" class="form-label">Name</label>
                                        <input id="name" class="form-control" type="text" name="name"
                                            :value="old('name')" required autofocus />
                                    </div>
                                    <div class="col-4">
                                        <label for="gender" class="form-label">Gender</label>
                                        <input id="gender" class="form-control" type="text" name="gender"
                                            :value="old('gender')" required autofocus />
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <textarea class="form-control" id="address" name="address" required autofocus>{{ old('address') }}</textarea>
                                </div>
                                <div class="mb-3 d-flex">
                                    <div class="col-4 pe-2">
                                        <label for="birthdate" class="form-label">Birthdate</label>
                                        <input id="birthdate" class="form-control" type="date" name="birthdate"
                                            :value="old('birthdate')" required autofocus />
                                    </div>
                                    <div class="col-3 pe-2">
                                        <label for="age" class="form-label">Age</label>
                                        <input id="age" class="form-control" type="number" name="age"
                                            :value="old('age')" required autofocus />
                                    </div>
                                    <div class="col-5">
                                        <label for="contact" class="form-label">Contact #</label>
                                        <input id="contact" class="form-control" type="text" name="contact"
                                            :value="old('contact')" required autofocus />
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        :value="old('email')" aria-describedby="emailHelp" required>
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                    </div>
                                </div>
                                <hr>
                                <h4>Medical</h4>
                                <div class="mb-3">
                                    <label for="medical_condition" class="form-label">Medical condition</label>
                                    <textarea class="form-control" id="medical_condition" name="medical_condition" rows="3" required autofocus>{{ old('medical_condition') }}</textarea>
                                </div>
                                <div class="col-12 mb-3 d-flex">
                                    <div class="col-6 pe-2">
                                        <label for="current_medication" class="form-label">Current medication</label>
                                        <textarea class="form-control" id="current_medication" name="current_medication" required autofocus>{{ old('current_medication') }}</textarea>
                                    </div>
                                    <div class="col-6">
                                        <label for="allergy" class="form-label">Allergies</label>
                                        <textarea class="form-control" id="allergy" name="allergy" required autofocus>{{ old('allergy') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-12 mb-3 d-flex">
                                    <div class="col-7 pe-2">
                                        <label for="family_doctor" class="form-label">Doctor's name</label>
                                        <input id="family_doctor" class="form-control" type="text"
                                            name="family_doctor" :value="old('family_doctor')" required autofocus />
                                    </div>
                                    <div class="col-5">
                                        <label for="doctors_phone" class="form-label">Contact #</label>
                                        <input id="doctors_phone" class="form-control" type="text"
                                            name="doctors_phone" :value="old('doctors_phone')" required autofocus />
                                    </div>
                                </div>
                                <hr>
                                <h4>In case of emergency</h4>
                                <div class="col-12 mb-3 d-flex">
                                    <div class="col-7 pe-2">
                                        <label for="guardian_name" class="form-label">Guardian's name</label>
                                        <input id="guardian_name" class="form-control" type="text"
                                            name="guardian_name" :value="old('guardian_name')" required autofocus />
                                    </div>
                                    <div class="col-5">
                                        <label for="guardian_contact" class="form-label">Contact #</label>
                                        <input id="guardian_contact" class="form-control" type="text"
                                            name="guardian_contact" :value="old('guardian_contact')" required
                                            autofocus />
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="guardian_address" class="form-label">Address</label>
                                    <textarea class="form-control" id="guardian_address" name="guardian_address" required autofocus>{{ old('guardian_address') }}</textarea>
                                </div>
                                <hr>
                                <h4>Membership</h4>
                                <div class="mb-3 d-flex">
                                    <div class="col-4 pe-2">
                                        <label for="membership_type" class="form-label">Membership type</label>
                                        <input id="membership_type" class="form-control" type="text"
                                            name="membership_type" :value="old('membership_type')" required
                                            autofocus />
                                    </div>
                                    <div class="col-4 pe-2">
                                        <label for="membership_start" class="form-label">Start date</label>
                                        <input id="membership_start" class="form-control" type="date"
                                            name="membership_start" :value="old('membership_start')" required
                                            autofocus />
                                    </div>
                                    <div class="col-4">
                                        <label for="membership_end" class="form-label">End date</label>
                                        <input id="membership_end" class="form-control" type="date"
                                            name="membership_end" :value="old('membership_end')" required autofocus />
                                    </div>
                                </div>
                                <div class="d-none">
                                    <input id="password" type="password" name="password" value="password" />
                                    <input id="password_confirmation" type="password" name="password_confirmation"
                                        value="password" />
                                </div>




                                {{--
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div> --}}
                                <button type="submit" class="btn btn-primary">Submit</button>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Contact #</th>
                        <th scope="col">Birthdate</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->gender }}</td>
                            <td>{{ $user->contact }}</td>
                            <td>{{ $user->birthdate }}</td>
                            <td>
                                <a class="btn btn-success" role="button" aria-disabled="true"
                                    href="/admin/user/{{ $user->id }}">Meal planning</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('admin.store') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-label for="name" :value="__('Name')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name')" required autofocus />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-label for="password" :value="__('Password')" />

                            <x-input id="password" class="block mt-1 w-full" type="password" name="password"
                                required autocomplete="new-password" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                name="password_confirmation" required />
                        </div>

                        <div class="mt-4">
                            <label for="birthdate">Birthdate:</label>
                            <x-input class="block mt-1 w-full" type="date" id="birthdate" name="birthdate"
                                :value="old('birthdate')" required autofocus />
                        </div>

                        <div class="mt-4">
                            <label for="age">Age:</label>
                            <x-input class="block mt-1 w-full" type="number" id="age" name="age"
                                :value="old('age')" required autofocus />
                        </div>

                        <div class="mt-4">
                            <label for="gender">Gender:</label>
                            <x-input class="block mt-1 w-full" type="text" id="gender" name="gender"
                                :value="old('gender')" required autofocus />
                        </div>

                        <div class="mt-4">
                            <label for="contact">Contact:</label>
                            <x-input class="block mt-1 w-full" type="text" id="contact" name="contact"
                                :value="old('contact')" required autofocus />
                        </div>

                        <div class="mt-4">
                            <label for="address">Address:</label>
                            <textarea class="block mt-1 w-full" id="address" name="address" required autofocus>{{ old('address') }}</textarea>
                        </div>

                        <div class="mt-4">
                            <label for="medical_condition">Medical condition:</label>
                            <textarea class="block mt-1 w-full" id="medical_condition" name="medical_condition" required autofocus>{{ old('medical_condition') }}</textarea>
                        </div>

                        <div class="mt-4">
                            <label for="allergy">Allergy:</label>
                            <textarea class="block mt-1 w-full" id="allergy" name="allergy" required autofocus>{{ old('allergy') }}</textarea>
                        </div>

                        <div class="mt-4">
                            <label for="current_medication">Current medication:</label>
                            <textarea class="block mt-1 w-full" id="current_medication" name="current_medication" required autofocus>{{ old('current_medication') }}</textarea>
                        </div>

                        <div class="mt-4">
                            <label for="family_doctor">Family Doctor:</label>
                            <x-input class="block mt-1 w-full" type="text" id="family_doctor"
                                name="family_doctor" :value="old('family_doctor')" required autofocus />
                        </div>

                        <div class="mt-4">
                            <label for="doctors_phone">Doctor's contact #:</label>
                            <x-input class="block mt-1 w-full" type="text" id="doctors_phone"
                                name="doctors_phone" :value="old('doctors_phone')" required autofocus />
                        </div>

                        <div class="mt-4">
                            <label for="guardian_name">Guardian's name:</label>
                            <x-input class="block mt-1 w-full" type="text" id="guardian_name"
                                name="guardian_name" :value="old('guardian_name')" required autofocus />
                        </div>

                        <div class="mt-4">
                            <label for="guardian_contact">Guardian's contact #:</label>
                            <x-input class="block mt-1 w-full" type="text" id="guardian_contact"
                                :value="old('guardian_contact')" name="guardian_contact" required autofocus />
                        </div>

                        <div class="mt-4">
                            <label for="guardian_address">Guardian's address:</label>
                            <textarea class="block mt-1 w-full" id="guardian_address" name="guardian_address" required autofocus>{{ old('guardian_address') }}</textarea>
                        </div>

                        <div class="mt-4">
                            <label for="membership_type">Membership type:</label>
                            <x-input class="block mt-1 w-full" type="text" id="membership_type" :value="old('membership_type')"
                                name="membership_type" required autofocus />
                        </div>

                        <div class="mt-4">
                            <label for="membership_start">Membership start:</label>
                            <x-input class="block mt-1 w-full" type="date" id="membership_start"
                                :value="old('membership_start')" name="membership_start" required autofocus />
                        </div>

                        <div class="mt-4">
                            <label for="membership_end">Membership end:</label>
                            <x-input class="block mt-1 w-full" type="date" id="membership_end" :value="old('membership_end')"
                                name="membership_end" required autofocus />
                        </div>

                        <div class="flex items-center mt-4">
                            <x-button>
                                {{ __('Add User') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
</x-admin-layout>
