<img class="wowicon wowicon-race" src="{{ url('icons/races/' . strtolower(str_replace(' ', '', $race)) . '-' . ($gender ? strtolower($gender) : 'male') . '.png') }}" title="{{ $race . ' ' . ($gender ? $gender : '') }}">