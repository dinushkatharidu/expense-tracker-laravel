<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Expense</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow border-0">
                    <div class="card-header bg-warning text-dark text-center">
                        <h4>Edit Expense Details</h4>
                    </div>
                    <div class="card-body p-4">
                        <form action="/expenses/{{ $expense->id }}" method="POST">
                            @csrf
                            @method('PUT') <div class="mb-3">
                                <label class="form-label">Expense Title</label>
                                <input type="text" name="title" class="form-control" value="{{ $expense->title }}" required>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Amount</label>
                                    <input type="number" name="amount" class="form-control" value="{{ $expense->amount }}" step="0.01" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Date</label>
                                    <input type="date" name="date" class="form-control" value="{{ $expense->date }}" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Category</label>
                                <select name="category" class="form-select" required>
                                    <option value="Food" {{ $expense->category == 'Food' ? 'selected' : '' }}>Food</option>
                                    <option value="Transport" {{ $expense->category == 'Transport' ? 'selected' : '' }}>Transport</option>
                                    <option value="Health" {{ $expense->category == 'Health' ? 'selected' : '' }}>Health</option>
                                    <option value="Bills" {{ $expense->category == 'Bills' ? 'selected' : '' }}>Bills</option>
                                    <option value="Other" {{ $expense->category == 'Other' ? 'selected' : '' }}>Other</option>
                                </select>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-warning fw-bold">Update Expense</button>
                                <a href="/expenses" class="btn btn-outline-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
