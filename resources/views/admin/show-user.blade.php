<x-admin-layout>
    <div class="row m-5">
        <div class="col-12">
            <h1>{{ $user->name }}</h1>
            <h1>{{ $user->id }}</h1>
        </div>
        <hr>
        <div class="col-12">
            <h2>Meal Planning</h2>
            <div>
                <form action="/admin/meal-planning" method="post">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <div class="d-md-flex">
                        <div class="col-md-6 col-12">
                            <h5>Meal #1</h5>
                            <div class="col p-2">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">
                                        <lord-icon src="https://cdn.lordicon.com/mcvowftv.json" trigger="loop"
                                            duration="1500" stroke="10" style="width:25px;height:25px">
                                        </lord-icon>
                                    </span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default" name="meal_1" id="meal_1"
                                        :value="old('meal_1')" required autofocus>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">
                                        <lord-icon src="https://cdn.lordicon.com/mcvowftv.json" trigger="loop"
                                            duration="1500" stroke="10" style="width:25px;height:25px">
                                        </lord-icon>
                                    </span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default" name="meal_2" id="meal_2"
                                        :value="old('meal_2')" required autofocus>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">
                                        <lord-icon src="https://cdn.lordicon.com/mcvowftv.json" trigger="loop"
                                            duration="1500" stroke="10" style="width:25px;height:25px">
                                        </lord-icon>
                                    </span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default" name="meal_3" id="meal_3"
                                        :value="old('meal_3')" required autofocus>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">
                                        <lord-icon src="https://cdn.lordicon.com/mcvowftv.json" trigger="loop"
                                            duration="1500" stroke="10" style="width:25px;height:25px">
                                        </lord-icon>
                                    </span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default" name="meal_4" id="meal_4"
                                        :value="old('meal_4')" required autofocus>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">
                                        <lord-icon src="https://cdn.lordicon.com/mcvowftv.json" trigger="loop"
                                            duration="1500" stroke="10" style="width:25px;height:25px">
                                        </lord-icon>
                                    </span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default" name="meal_5" id="meal_5"
                                        :value="old('meal_5')" required autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <h5>Meal #2</h5>
                            <div class="col p-2">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">
                                        <lord-icon src="https://cdn.lordicon.com/mcvowftv.json" trigger="loop"
                                            duration="1500" stroke="10" style="width:25px;height:25px">
                                        </lord-icon>
                                    </span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default" name="meal_6" id="meal_6"
                                        :value="old('meal_6')" required autofocus>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">
                                        <lord-icon src="https://cdn.lordicon.com/mcvowftv.json" trigger="loop"
                                            duration="1500" stroke="10" style="width:25px;height:25px">
                                        </lord-icon>
                                    </span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default" name="meal_7" id="meal_7"
                                        :value="old('meal_7')" required autofocus>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">
                                        <lord-icon src="https://cdn.lordicon.com/mcvowftv.json" trigger="loop"
                                            duration="1500" stroke="10" style="width:25px;height:25px">
                                        </lord-icon>
                                    </span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default" name="meal_8" id="meal_8"
                                        :value="old('meal_8')" required autofocus>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">
                                        <lord-icon src="https://cdn.lordicon.com/mcvowftv.json" trigger="loop"
                                            duration="1500" stroke="10" style="width:25px;height:25px">
                                        </lord-icon>
                                    </span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default" name="meal_9" id="meal_9"
                                        :value="old('meal_9')" required autofocus>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">
                                        <lord-icon src="https://cdn.lordicon.com/mcvowftv.json" trigger="loop"
                                            duration="1500" stroke="10" style="width:25px;height:25px">
                                        </lord-icon>
                                    </span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default" name="meal_10" id="meal_10"
                                        :value="old('meal_10')" required autofocus>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="col-md-6 col-12">
                            <h5>Meal #3</h5>
                            <div class="col p-2">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">
                                        <lord-icon src="https://cdn.lordicon.com/mcvowftv.json" trigger="loop"
                                            duration="1500" stroke="10" style="width:25px;height:25px">
                                        </lord-icon>
                                    </span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default" name="meal_11" id="meal_11"
                                        :value="old('meal_11')" required autofocus>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">
                                        <lord-icon src="https://cdn.lordicon.com/mcvowftv.json" trigger="loop"
                                            duration="1500" stroke="10" style="width:25px;height:25px">
                                        </lord-icon>
                                    </span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default" name="meal_12" id="meal_12"
                                        :value="old('meal_12')" required autofocus>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">
                                        <lord-icon src="https://cdn.lordicon.com/mcvowftv.json" trigger="loop"
                                            duration="1500" stroke="10" style="width:25px;height:25px">
                                        </lord-icon>
                                    </span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default" name="meal_13" id="meal_13"
                                        :value="old('meal_13')" required autofocus>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">
                                        <lord-icon src="https://cdn.lordicon.com/mcvowftv.json" trigger="loop"
                                            duration="1500" stroke="10" style="width:25px;height:25px">
                                        </lord-icon>
                                    </span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default" name="meal_14" id="meal_14"
                                        :value="old('meal_14')" required autofocus>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">
                                        <lord-icon src="https://cdn.lordicon.com/mcvowftv.json" trigger="loop"
                                            duration="1500" stroke="10" style="width:25px;height:25px">
                                        </lord-icon>
                                    </span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default" name="meal_15" id="meal_15"
                                        :value="old('meal_15')" required autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <h5>Meal #4</h5>
                            <div class="col p-2">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">
                                        <lord-icon src="https://cdn.lordicon.com/mcvowftv.json" trigger="loop"
                                            duration="1500" stroke="10" style="width:25px;height:25px">
                                        </lord-icon>
                                    </span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default" name="meal_16" id="meal_16"
                                        :value="old('meal_16')" required autofocus>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">
                                        <lord-icon src="https://cdn.lordicon.com/mcvowftv.json" trigger="loop"
                                            duration="1500" stroke="10" style="width:25px;height:25px">
                                        </lord-icon>
                                    </span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default" name="meal_17" id="meal_17"
                                        :value="old('meal_17')" required autofocus>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">
                                        <lord-icon src="https://cdn.lordicon.com/mcvowftv.json" trigger="loop"
                                            duration="1500" stroke="10" style="width:25px;height:25px">
                                        </lord-icon>
                                    </span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default" name="meal_18" id="meal_18"
                                        :value="old('meal_18')" required autofocus>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">
                                        <lord-icon src="https://cdn.lordicon.com/mcvowftv.json" trigger="loop"
                                            duration="1500" stroke="10" style="width:25px;height:25px">
                                        </lord-icon>
                                    </span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default" name="meal_19" id="meal_19"
                                        :value="old('meal_19')" required autofocus>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">
                                        <lord-icon src="https://cdn.lordicon.com/mcvowftv.json" trigger="loop"
                                            duration="1500" stroke="10" style="width:25px;height:25px">
                                        </lord-icon>
                                    </span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default" name="meal_20" id="meal_20"
                                        :value="old('meal_20')" required autofocus>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="col-md-6 col-12">
                            <h5>Meal #5</h5>
                            <div class="col p-2">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">
                                        <lord-icon src="https://cdn.lordicon.com/mcvowftv.json" trigger="loop"
                                            duration="1500" stroke="10" style="width:25px;height:25px">
                                        </lord-icon>
                                    </span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default" name="meal_21" id="meal_21"
                                        :value="old('meal_21')" required autofocus>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">
                                        <lord-icon src="https://cdn.lordicon.com/mcvowftv.json" trigger="loop"
                                            duration="1500" stroke="10" style="width:25px;height:25px">
                                        </lord-icon>
                                    </span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default" name="meal_22" id="meal_22"
                                        :value="old('meal_22')" required autofocus>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">
                                        <lord-icon src="https://cdn.lordicon.com/mcvowftv.json" trigger="loop"
                                            duration="1500" stroke="10" style="width:25px;height:25px">
                                        </lord-icon>
                                    </span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default" name="meal_23" id="meal_23"
                                        :value="old('meal_23')" required autofocus>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">
                                        <lord-icon src="https://cdn.lordicon.com/mcvowftv.json" trigger="loop"
                                            duration="1500" stroke="10" style="width:25px;height:25px">
                                        </lord-icon>
                                    </span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default" name="meal_24" id="meal_24"
                                        :value="old('meal_24')" required autofocus>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">
                                        <lord-icon src="https://cdn.lordicon.com/mcvowftv.json" trigger="loop"
                                            duration="1500" stroke="10" style="width:25px;height:25px">
                                        </lord-icon>
                                    </span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default" name="meal_25" id="meal_25"
                                        :value="old('meal_25')" required autofocus>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit">CREATE PLAN</button>

                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
