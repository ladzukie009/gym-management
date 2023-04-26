<x-app-layout>
    <div class="col-12" style="height: calc(100vh - 56px);">
        <div class="row p-5">
            <h2>Meal planning:</h2>
            <div class="col-4">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-meal1-list" data-bs-toggle="list"
                        href="#list-meal1" role="tab" aria-controls="list-meal1">Meal #1</a>

                    <a class="list-group-item list-group-item-action" id="list-meal2-list" data-bs-toggle="list"
                        href="#list-meal2" role="tab" aria-controls="list-meal2">Meal #2</a>

                    <a class="list-group-item list-group-item-action" id="list-meal3-list" data-bs-toggle="list"
                        href="#list-meal3" role="tab" aria-controls="list-meal3">Meal #3</a>

                    <a class="list-group-item list-group-item-action" id="list-meal4-list" data-bs-toggle="list"
                        href="#list-meal4" role="tab" aria-controls="list-meal4">Meal #4</a>

                    <a class="list-group-item list-group-item-action" id="list-meal5-list" data-bs-toggle="list"
                        href="#list-meal5" role="tab" aria-controls="list-meal5">Meal #5</a>
                </div>
            </div>
            <div class="col-8">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-meal1" role="tabpanel"
                        aria-labelledby="list-meal1-list">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="meal_1">
                                <label class="form-check-label stretched-link"
                                    for="meal_1">{{ $meal->meal_1 }}</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="meal_2">
                                <label class="form-check-label stretched-link"
                                    for="meal_2">{{ $meal->meal_2 }}</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="meal_3">
                                <label class="form-check-label stretched-link"
                                    for="meal_3">{{ $meal->meal_3 }}</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="meal_4">
                                <label class="form-check-label stretched-link"
                                    for="meal_4">{{ $meal->meal_4 }}</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="meal_5">
                                <label class="form-check-label stretched-link"
                                    for="meal_5">{{ $meal->meal_5 }}</label>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-pane fade show" id="list-meal2" role="tabpanel" aria-labelledby="list-meal2-list">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="meal_6">
                                <label class="form-check-label stretched-link"
                                    for="meal_6">{{ $meal->meal_6 }}</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="meal_7">
                                <label class="form-check-label stretched-link"
                                    for="meal_7">{{ $meal->meal_7 }}</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="meal_8">
                                <label class="form-check-label stretched-link"
                                    for="meal_8">{{ $meal->meal_8 }}</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="meal_9">
                                <label class="form-check-label stretched-link"
                                    for="meal_9">{{ $meal->meal_9 }}</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="meal_10">
                                <label class="form-check-label stretched-link"
                                    for="meal_10">{{ $meal->meal_10 }}</label>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-pane fade show " id="list-meal3" role="tabpanel"
                        aria-labelledby="list-meal3-list">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="meal_11">
                                <label class="form-check-label stretched-link"
                                    for="meal_11">{{ $meal->meal_11 }}</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="meal_12">
                                <label class="form-check-label stretched-link"
                                    for="meal_12">{{ $meal->meal_12 }}</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="meal_13">
                                <label class="form-check-label stretched-link"
                                    for="meal_13">{{ $meal->meal_13 }}</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="meal_14">
                                <label class="form-check-label stretched-link"
                                    for="meal_14">{{ $meal->meal_14 }}</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="meal_15">
                                <label class="form-check-label stretched-link"
                                    for="meal_15">{{ $meal->meal_15 }}</label>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-pane fade show" id="list-meal4" role="tabpanel"
                        aria-labelledby="list-meal4-list">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="meal_16">
                                <label class="form-check-label stretched-link"
                                    for="meal_16">{{ $meal->meal_16 }}</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="meal_17">
                                <label class="form-check-label stretched-link"
                                    for="meal_17">{{ $meal->meal_17 }}</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="meal_18">
                                <label class="form-check-label stretched-link"
                                    for="meal_18">{{ $meal->meal_18 }}</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="meal_19">
                                <label class="form-check-label stretched-link"
                                    for="meal_19">{{ $meal->meal_19 }}</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="meal_20">
                                <label class="form-check-label stretched-link"
                                    for="meal_20">{{ $meal->meal_20 }}</label>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-pane fade show" id="list-meal5" role="tabpanel"
                        aria-labelledby="list-meal5-list">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="meal_21">
                                <label class="form-check-label stretched-link"
                                    for="meal_21">{{ $meal->meal_21 }}</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="meal_22">
                                <label class="form-check-label stretched-link"
                                    for="meal_22">{{ $meal->meal_22 }}</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="meal_23">
                                <label class="form-check-label stretched-link"
                                    for="meal_23">{{ $meal->meal_23 }}</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="meal_24">
                                <label class="form-check-label stretched-link"
                                    for="meal_24">{{ $meal->meal_24 }}</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="meal_25">
                                <label class="form-check-label stretched-link"
                                    for="meal_25">{{ $meal->meal_25 }}</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
