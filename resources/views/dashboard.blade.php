<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="col-12" style="height: calc(100vh - 56px);">
        <?php
        $role = 'user';
        ?>
        @role('admin')
            @php
                $role = 'admin';
            @endphp
        @endrole
        @if ($role != 'user')
        @else
            <div class="col-8 offset-2 pt-3">
                <h2>Welcome, {{ Auth::user()->name }}</h2>
                <div class="col-12 d-flex">
                    <div class="col-3 d-flex justify-content-center align-items-center">
                        <a href="/profile" class="text-decoration-none text-reset fw-bold">
                            <lord-icon src="https://cdn.lordicon.com/qfnzeizw.json" trigger="hover"
                                style="width:200px;height:200px">
                            </lord-icon>
                            <span class="d-block text-center">MY PROFILE</span>
                        </a>
                    </div>
                    <div class="col-3 d-flex justify-content-center align-items-center">
                        <a href="/meal-planning" class="text-decoration-none text-reset fw-bold">
                            <lord-icon src="https://cdn.lordicon.com/xplwhusq.json" trigger="hover"
                                style="width:200px;height:200px">
                            </lord-icon>
                            <span class="d-block text-center">MEAL PLANNING</span>
                        </a>
                    </div>
                    <div class="col-3 d-flex justify-content-center align-items-center">
                        <a href="#" class="text-decoration-none text-reset fw-bold">
                            <lord-icon src="https://cdn.lordicon.com/rmzhcgbh.json" trigger="hover"
                                style="width:200px;height:200px;opacity: 0.4">
                            </lord-icon>
                            <span class="d-block text-center" style="opacity: 0.4">ORDERS (not available
                                yet...)</span>
                        </a>
                    </div>
                    <div class="col-3 d-flex justify-content-center align-items-center">
                        <a href="#" class="text-decoration-none text-reset fw-bold">
                            <lord-icon src="https://cdn.lordicon.com/mgmiqlge.json" trigger="hover"
                                style="width:200px;height:200px;opacity: 0.4">
                            </lord-icon>
                            <span class="d-block text-center" style="opacity: 0.4">SCHEDULE (not available
                                yet...)</span>
                        </a>
                    </div>

                </div>
            </div>
        @endif
    </div>
</x-app-layout>
