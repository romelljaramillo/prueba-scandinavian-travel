<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/datatables.mark.js/2.0.0/datatables.mark.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/plug-ins/1.10.13/features/mark.js/datatables.mark.min.css">
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-5">
                <div class="search">
                    <i class="bi bi-search"></i>
                    <input type="text" id="datatable-search-input" class="form-control" placeholder="search">
                </div>
            </div>
            <div class="col-md-2">
                <select id="select-group" class="form-select" aria-label="select group">
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
                        <td scope="row"><a href="#" class="key-group">{{ $translation->full_key }}</a></td>
                        @foreach ($langs as $iso => $lang)
                            <td>{{ $translation->text->$iso }}</td>
                        @endforeach 
                    </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
    <div class="modal fade show" id="modal-group" tabindex="-1" aria-labelledby="modal-group-Label" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modal-group-Label"></h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerca"></button>
            </div>
            <div class="modal-body">
                <table id="table-content-modal-group" class="table table-striped">
                </table>
            </div>
          </div>
        </div>
      </div>
</body>
</html>