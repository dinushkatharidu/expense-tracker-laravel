<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Tracker | All Expenses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="text-primary">💰 My Expense Tracker</h2>
            <a href="/expenses/create" class="btn btn-success">+ Add New Expense</a>
        </div>

        <div class="card shadow">
            <div class="card-body">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Amount (LKR)</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allExpenses as $expense)
                            <tr>
                                <td>{{ $expense->title }}</td>
                                <td><span class="badge bg-info text-dark">{{ $expense->category }}</span></td>
                                <td class="fw-bold text-danger">{{ number_format($expense->amount, 2) }}</td>
                                <td>{{ $expense->date }}</td>
                                <td>
                                    <a href="/expenses/{{ $expense->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                                    {{-- <button class="btn btn-sm btn-danger">Delete</button> --}}
                                    <form action="/expenses/{{ $expense->id }}/delete" method="POST"
                                        style="display:inline;"
                                        onsubmit="return confirm('Are you sure you want to delete this?')">
                                        @csrf
                                        @method('DELETE') <button type="submit"
                                            class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                @if ($allExpenses->isEmpty())
                    <p class="text-center text-muted">No expenses recorded yet.</p>
                @endif
            </div>
        </div>
    </div>

</body>

</html>
