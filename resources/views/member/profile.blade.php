<x-app-layout>
    <div class="col-12" style="height: calc(100vh - 56px);">
        <div class="col-6 offset-3 p-5">
            <div class="card" style="width: 100%;">
                <div class="card-header fw-bold">
                    PERSONAL INFORMATION
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="d-flex">
                            <div class="col-6 d-flex">
                                <div class="col-6"><span class="fw-bold">Name:</span></div>
                                <div class="col-6">{{ Auth::user()->name }}</div>
                            </div>
                            <div class="col-6 d-flex">
                                <div class="col-6"><span class="fw-bold">Gender:</span></div>
                                <div class="col-6">{{ Auth::user()->gender }}</div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex">
                            <div class="col-3"><span class="fw-bold">Address:</span></div>
                            <div class="col-9">{{ Auth::user()->address }}</div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex">
                            <div class="col-6 d-flex">
                                <div class="col-6"><span class="fw-bold">Birthdate:</span></div>
                                <div class="col-6">{{ Auth::user()->birthdate }}</div>
                            </div>
                            <div class="col-6 d-flex">
                                <div class="col-6"><span class="fw-bold">Age:</span></div>
                                <div class="col-6">{{ Auth::user()->age }}</div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex">
                            <div class="col-3"><span class="fw-bold">Email address:</span></div>
                            <div class="col-9">{{ Auth::user()->email }}</div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex">
                            <div class="col-3"><span class="fw-bold">Contact no.:</span></div>
                            <div class="col-9">{{ Auth::user()->contact }}</div>
                        </div>
                    </li>
                </ul>
            </div>

            <br />
            <div class="card" style="width: 100%;">
                <div class="card-header fw-bold">
                    MEDICAL INFORMATION
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="d-flex">
                            <div class="col-3"><span class="fw-bold">Conditions:</span></div>
                            <div class="col-9">{{ Auth::user()->medical_condition }}</div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex">
                            <div class="col-3"><span class="fw-bold">Allergies:</span></div>
                            <div class="col-9">{{ Auth::user()->allergy }}</div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex">
                            <div class="col-3"><span class="fw-bold">Current medication:</span></div>
                            <div class="col-9">{{ Auth::user()->current_medication }}</div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex">
                            <div class="col-6 d-flex">
                                <div class="col-6"><span class="fw-bold">Family Doctor:</span></div>
                                <div class="col-6">{{ Auth::user()->family_doctor }}</div>
                            </div>
                            <div class="col-6 d-flex">
                                <div class="col-6"><span class="fw-bold">Contact no.:</span></div>
                                <div class="col-6">{{ Auth::user()->doctors_phone }}</div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <br />
            <div class="card" style="width: 100%;">
                <div class="card-header fw-bold">
                    IN CASE OF EMERGENCY
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="d-flex">
                            <div class="col-6 d-flex">
                                <div class="col-6"><span class="fw-bold">Guardian's name:</span></div>
                                <div class="col-6">{{ Auth::user()->guardian_name }}</div>
                            </div>
                            <div class="col-6 d-flex">
                                <div class="col-6"><span class="fw-bold">Contact no:</span></div>
                                <div class="col-6">{{ Auth::user()->guardian_contact }}</div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex">
                            <div class="col-3"><span class="fw-bold">Address:</span></div>
                            <div class="col-9">{{ Auth::user()->guardian_address }}</div>
                        </div>
                    </li>
                </ul>
            </div>

            <br />
            <div class="card" style="width: 100%;">
                <div class="card-header fw-bold">
                    MEMBERSHIP
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="d-flex">
                            <div class="col-4 d-flex">
                                <div class="col-7"><span class="fw-bold">Membership type:</span></div>
                                <div class="col-">{{ Auth::user()->membership_type }}</div>
                            </div>
                            <div class="col-4 d-flex">
                                <div class="col-6"><span class="fw-bold">Starting date:</span></div>
                                <div class="col-6">{{ Auth::user()->membership_start }}</div>
                            </div>
                            <div class="col-4 d-flex">
                                <div class="col-6"><span class="fw-bold">Ending date:</span></div>
                                <div class="col-6">{{ Auth::user()->membership_end }}</div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
