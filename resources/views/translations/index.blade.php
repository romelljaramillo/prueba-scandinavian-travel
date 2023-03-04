<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    @vite(['resources/css/app.scss', 'resources/css/app.css','resources/js/app.js'])

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/datatables.mark.js/2.0.0/datatables.mark.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/plug-ins/1.10.13/features/mark.js/datatables.mark.min.css">
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-5">
                <div class="input-group form-outline mb-1 datatable-search">
                    <span class="input-group-text" id="basic-addon1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                          </svg>
                      </span>
                    <input type="search" class="form-control" id="datatable-search-input">
                </div>
            </div>
            <div class="col-md-2">
                <select class="form-select" aria-label="select group">
                    <option value=''>GROUP</option>
                    @foreach ($groups as $key => $group)
                        <option value="{{$key}}">{{$group}}</option>
                    @endforeach 
                </select>
            </div>
        </div>

        <table id="table-translations" class="table table-striped" >
            <thead >
              <tr class="table-secondary">
                <th scope="col">Name</th>
                @foreach ($langs as $lang)
                    <th scope="col">{{$lang }}</th>
                @endforeach 
              </tr>
            </thead>
            <tbody>
                @foreach ($translations as $translation)
                    <tr>
                        <td scope="row">{{ $translation->full_key }}</td>
                        @foreach ($langs as $iso => $lang)
                            @if (isset( $translation->text->$iso ))
                                <td>{{ $translation->text->$iso }}</td>
                            @else
                                <td>{{ $translation->text->en }}</td>
                            @endif
                        @endforeach 
                    </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
</body>
</html>