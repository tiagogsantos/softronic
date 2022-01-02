<div class="col-sm-2">
    @foreach($features as $feature)
    <div class="box-filter">
        <form action="" id="search-filter">
            <input type="hidden" name="search_string" value="{{request('search_string')}}">
            <input type="hidden" name="feature_array">
        </form>
        <hr>

        <div class="row">
            <div class="col">
                <h3>{{$feature->name}}</h3>
                <button type="button" class="btn-control-filter filter-open"></button>
            </div>
        </div>
        <div class="row">

            <div class="col">
                <ul>
                    @foreach($feature->features()->get() as $subfeature)


                    <li>
                        <div class="pretty p-default feature">
                            <input type="checkbox" name="feature[]" data-features="{{request('feature_array')}}" class="featureInput" value="{{$subfeature->id}}" />
                            <div class="state">
                                <label>{{$subfeature->name}}</label>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    @endforeach
</div>