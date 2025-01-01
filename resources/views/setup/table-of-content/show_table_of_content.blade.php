@extends('layouts.master')

@section('title')
@lang('translation.Tabs_&_Accordions')
@endsection

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="card__search__box">
                    <div class="row">
                        <form action="{{ route('pre-admission-income-search.search') }}" method="POST">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="search_id" placeholder="Search by ID (000001)" required>
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card__data__box">
                    <div class="field__data mt-2">
                        <table id="dataTable" class="table table-hover" style="border: 1px solid #dee2e6;">
                            <thead>
                                <tr class="table-primary">
                                    <th class="text-center">Serial</th>
                                    <th class="text-start">Title</th>
                                    <th class="text-start">Link Code</th>
                                    <th class="text-start">Action</th>
                                </tr>
                            </thead>
                            <tbody id="tableBody">
                            @php
    $serial = 1;

    if (!function_exists('renderTree')) {
        function renderTree($items, &$serial, $padding = 0) {
            foreach ($items as $item) {
                echo '<tr style="border: 1px solid #dee2e6;">';
                echo '<td class="text-center serial-number">' . $serial++ . '</td>';
                echo '<td class="text-start" style="padding-left: ' . $padding . 'px; font-weight: ' . ($padding > 0 ? 'normal' : 'bold') . ';">' . $item->title . '</td>';
                echo '<td class="text-start" style="font-weight: bold;">' . $item->link_code . '</td>';
                echo '<td class="text-center">';
                echo '<a href="' . route('edit-item-setup-table-of-content', $item->id) . '" class="btn btn-warning btn-sm">Edit</a> ';
                echo '<form action="' . route('disable-item-in-table-of-content', $item->id) . '" method="POST" style="display:inline;">';
                echo csrf_field();
                echo '<button type="submit" class="btn btn-sm ' . ($item->status ? 'btn-success' : 'btn-danger') . '" onclick="return confirm(\'Are you sure you want to ' . ($item->status ? 'disable' : 'enable') . ' this item?\')">';
                echo $item->status ? 'Disable' : 'Enable';
                echo '</button>';
                echo '</form>';
                echo '</td>';
                echo '</tr>';

                if (!empty($item->children)) {
                    renderTree($item->children, $serial, $padding + 20);
                }
            }
        }
    }
@endphp

                                @foreach ($tableContents as $section)
                                    @php renderTree([$section], $serial) @endphp
                                @endforeach
                            </tbody>
                        </table>
                        <div>
                            <nav aria-label="Page navigation example">
                                <ul id="pagination" class="pagination justify-content-end">
                                    <!-- Pagination items will be inserted here by JavaScript -->
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const rowsPerPage = 5;  // Set items per page to 5
    const tableBody = document.getElementById('tableBody');
    const rows = Array.from(tableBody.querySelectorAll('tr'));
    const pagination = document.getElementById('pagination');

    function displayPage(page) {
        const startIndex = (page - 1) * rowsPerPage;
        const endIndex = startIndex + rowsPerPage;

        rows.forEach((row, index) => {
            row.style.display = index >= startIndex && index < endIndex ? '' : 'none';
        });

        Array.from(pagination.children).forEach((item, index) => {
            item.classList.toggle('active', index + 1 === page);
        });
    }

    function setupPagination() {
        const pageCount = Math.ceil(rows.length / rowsPerPage);

        for (let i = 1; i <= pageCount; i++) {
            const li = document.createElement('li');
            li.classList.add('page-item');

            const a = document.createElement('a');
            a.classList.add('page-link');
            a.href = '#';
            a.textContent = i;
            a.addEventListener('click', (e) => {
                e.preventDefault();
                displayPage(i);
            });

            li.appendChild(a);
            pagination.appendChild(li);
        }

        displayPage(1);  // Show the first page by default
    }

    setupPagination();
});
</script>
@endsection
