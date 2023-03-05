<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="search">
                    <i class="bi bi-search"></i>
                    <input type="text" id="datatable-search-input" class="form-control" placeholder="search">
                </div>
            </div>
            <div class="col-md-2">
                <select id="select-group" class="form-select" aria-label="select group">
                    <option value=''>GROUP</option>
                    @foreach ($groups as $key => $group)
                        <option value="{{ $key }}">{{ $group }}</option>
                    @endforeach
                </select>
            </div>
            <div id="buttons-container" class="col-md-6"></div>
        </div>

        <table id="table-translations" class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">NAME</th>
                    @foreach ($langs as $lang)
                        <th scope="col">{{  strtoupper($lang) }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($translations as $translation)
                    <tr>
                        <td scope="row"><a href="#" class="key-group">{{ $translation->full_key }}</a></td>
                        @foreach ($langs as $iso => $lang)
                            <td>{{ $translation->text->$iso }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @include('show')
</body>

</html>
